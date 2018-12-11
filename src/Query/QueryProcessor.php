<?php

namespace Apc\RetsRabbit\Core\Query;


class QueryProcessor
{
    /**
     * Store the final query params in this array.
     *
     * @var array
     */
    private $query = [
        '$filter' => "",
        '$select' => "",
        '$orderby' => "",
        '$top' => "",
        '$skip' => "",
    ];

    /**
     * The available string functions the caller can use.
     *
     * @var array
     */
    private $stringFuncs = [
        'contains', 'endswith', 'startswith'
    ];

    /**
     * The available string modifiers the caller has available to them.\
     *
     * @var array
     */
    private $stringMods = [
        'tolower', 'toupper'
    ];

    /**
     * The available date modifiers the caller has available to them.
     *
     * @var array
     */
    private $dateMods = [
        'year', 'month', 'day', 'hour', 'minute', 'second', 'date', 'time', 'now'
    ];

    /**
     * The builder representing the abstract query tree.
     *
     * @var QueryBuilder
     */
    private $builder;

    /**
     * Current index of the binding array. Some of the where clauses expand more
     * than one position in the binding array.
     *
     * @var integer
     */
    private $bindingIndex = 0;

    /**
     * Constructor
     *
     * @param QueryBuilder $builder
     */
    public function __construct(QueryBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Main function where handles constructing the ODATA query string.
     *
     * @return array
     */
    public function build()
    {
        $this->buildOrderby();
        $this->buildWheres();
        $this->buildSelect();
        $this->buildTop();
        $this->buildSkip();

        return $this->query;
    }

    /**
     * This method handles building the various where clauses.
     */
    public function buildWheres()
    {
        foreach ($this->builder->wheres as $index => $where) {
            switch ($where['type']) {
                case 'Nested':
                    $this->nested($index);
                    break;

                case 'Between':
                    $this->between($index);
                    break;

                case 'Basic':
                    $this->basic($index);
                    break;

                default:
                    break;
            }
        }
    }

    /**
     * This method handles building the select clause.
     */
    public function buildSelect()
    {
        if (count($this->builder->selects)) {
            $this->query['$select'] = implode(', ', $this->builder->selects);
        }
    }

    /**
     * This method handles building the order by clause.
     */
    public function buildOrderby()
    {
        $q      = '';
        $orders = $this->builder->orders;

        foreach ($orders as $order) {
            $q .= "{$order['field']} {$order['direction']}";
        }

        $this->query['$orderby'] = $q;
    }

    /**
     * This method handles building the $top clause
     */
    public function buildTop()
    {
        if ($this->builder->limit !== null) {
            $this->query['$top'] = $this->builder->limit;
        }
    }

    /**
     * This method handles building the $skip clause
     */
    public function buildSkip()
    {
        if ($this->builder->offset !== null) {
            $this->query['$skip'] = $this->builder->offset;
        }
    }

    /**
     * Build the between clause.
     *
     * @param  int $index
     */
    protected function between($index)
    {
        $q       = '';
        $clause  = $this->builder->wheres[$index];
        $binding = $this->builder->getBindings()['where'][$this->bindingIndex];

        if ($index > 0) {
            if ($this->isAnd($clause['boolean'])) {
                $q .= ' and ';
            } else {
                $q .= ' or ';
            }
        }

        $binding = $this->prepareBinding($binding);

        if (is_string($binding) && $binding === '') {
            $this->bindingIndex++;
            return;
        }

        $q .= "{$clause['field']} ge $binding and ";

        //Next value is at the next array position
        $this->bindingIndex++;

        $binding = $this->builder->getBindings()['where'][$this->bindingIndex];
        $binding = $this->prepareBinding($binding);

        $q .= "{$clause['field']} le $binding";

        $this->query['$filter'] .= $q;

        $this->bindingIndex++;
    }

    /**
     * Handle a nested where clause.
     *
     * @param  int $index
     */
    protected function nested($index)
    {
        $clause   = $this->builder->wheres[$index];
        $bindings = $this->builder->getBindings()['where'][$this->bindingIndex];
        $builder  = new self($clause['query']);

        if ($index > 0) {
            if ($this->isAnd($clause['boolean'])) {
                $q = ' and (';
            } else {
                $q = ' or (';
            }
        } else {
            $q = '(';
        }

        $q .= $builder->build()['$filter'];
        $q .= ')';

        $this->query['$filter'] .= $q;

        $this->bindingIndex++;
    }

    /**
     * Handle a basic where clause.
     *
     * @param  int $index
     */
    protected function basic($index)
    {
        $q        = '';
        $clause   = $this->builder->wheres[$index];
        $binding  = $this->builder->getBindings()['where'][$this->bindingIndex];
        $operator = $clause['operator'];
        $modifier = $clause['modifier'];

        if ($index > 0) {
            if ($this->isAnd($clause['boolean'])) {
                $q .= ' and ';
            } else {
                $q .= ' or ';
            }
        }

        //$binding = $this->prepareBinding($binding);
        $quoteBinding = $this->prepareBinding($binding);

        if (in_array($operator, $this->stringFuncs)) {
            if (in_array($modifier, $this->stringMods)) {
                $q .= "$operator($modifier({$clause['field']}), $quoteBinding)";
            } else {
                $q .= "$operator({$clause['field']}, $quoteBinding)";
            }
        } elseif (in_array($modifier, $this->stringMods)) {
            $q .= "$modifier({$clause['field']}) $operator $quoteBinding";
        } else {
            $binding = $this->specialPrepareBinding($binding, $clause['field'], $operator);
            $q       .= "{$clause['field']} $operator $binding";
        }

        $this->query['$filter'] .= $q;

        $this->bindingIndex++;
    }

    /**
     * Check if the boolean is an 'and'.
     *
     * @param  string $boolean
     * @return boolean
     */
    private function isAnd($boolean)
    {
        return $boolean == 'and';
    }

    /**
     * If the binding is a string, surround with single quotes.
     *
     * @param  string $binding
     * @return int|string
     */
    private function prepareBinding($binding)
    {
        if (is_string($binding) && $binding === '') {
            return $binding;
        }

        return "'$binding'";
    }

    /**
     * @param $binding
     * @param $field
     * @param $op
     * @return string
     */
    private function specialPrepareBinding($binding, $field, $op)
    {
        if (is_string($binding) && $binding === '') {
            return $binding;
        }

        if (is_numeric($binding) && $field != 'ListingId' && ($op != 'eq' && $op != 'ne')) {
            return $binding;
        }

        return "'$binding'";
    }
}
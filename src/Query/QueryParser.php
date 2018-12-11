<?php

namespace Apc\RetsRabbit\Core\Query;


use Apc\RetsRabbit\Core\Exceptions\QueryException;

class QueryParser
{
	/**
	 * @var QueryBuilder
	 */
	private $builder;

	/**
	 * For EE CMS's we have to define a special set of "safe" keys
	 * 
	 * @var boolean
	 */
	private $alternateSyntax;

	/**
	 * Possible structure syntax keys
	 * 
	 * @var array
	 */
	private $syntaxes = array(
		'operatorHousing' => array(
			'standard' => array('\(', '\)'),
			'alternate' => '-'
		),
		'separator' => array(
			'standard' => '|',
			'alternate' => '/'
		)
	);

    /**
     * Constructor
     *
     * @param bool $standardSyntax
     */
	public function __construct($standardSyntax = true)
	{
		$this->builder = new QueryBuilder();
		$this->alternateSyntax = !$standardSyntax;
	}

	/**
	 * Set alternate syntax to true.
	 * 
	 * @return $this
	 */
	public function useAlternateSyntax()
	{
		$this->alternateSyntax = true;

		return $this;
	}

    /**
     * Format the form params as a RESO query
     *
     * @param array|null $params
     * @return array
     * @throws QueryException
     */
	public function format(array $params = []): array
	{
		//Grab only {rr:field_name} fields
		$params = $this->filterRetsRabbitFields($params);
		//Remove the {rr} prefix from all fields
		$params = $this->formatRetsRabbitFields($params);

		//build for $filter
		$this->_buildFilters($params);

		//parse for $select
		if(isset($params['select'])) {
			$select = $this->formatSelect($params);

			if($select !== null) {
				$this->builder->select($select);
			}
		}

		//parse for $orderby
		if(isset($params['orderby'])) {
			$this->buildOrderBy($params);
		}

		//parse for $skip
		if(isset($params['skip'])) {
			$skip = $this->formatSkip($params);

			if($skip !== null) {
				$this->builder->skip($skip);
			}
		}

		//parse for $top
		if(isset($params['top'])) {
			$top = $this->formatTop($params);

			if($top !== null) {
				$this->builder->limit($top);
			}
		}

		return $this->builder->get();
	}

	/* 
	 | -------------------------------------------
	 |			Private Helper Methods
	 | -------------------------------------------
	 */

    /**
     * Possible field query examples:
     *
     * 1. Multiple Fields && Single Value (or)
     * <input name="rr:StateOrProvince|PostalCode|City(eq)" value="columbus">
     *
     * 2. Single Field && Single Value (and)
     * <input name="rr:StateOrProvince" value="columbus">
     *
     * 3. Single Field && Multiple Values (or|between)
     * <input name="rr:PostalCode(ge)[]" value="">
     * <input name="rr:ListPrice(between)" value="35000|45000">
     *
     * @param  $params array
     * @throws QueryException
     */
	private function _buildFilters($params = [])
	{
		$filters = $this->_getFilterParams($params);

		if(count($filters)) {
			foreach($filters as $f => $value) {
				$stmt = explode($this->_getSeparatorKey(), $f);

				if(count($stmt) > 1) {
					//Multiple fields means this is an OR statement
					$this->_buildMultiFieldFilter($stmt, $value);
				} elseif (count($stmt) == 1) {
					//Single field
					$this->_buildSingleFieldFilter($stmt[0], $value);
				}
			}
		}
	}

    /**
     * Build a single field statement according to the following cases:
     *
     * 1. Single Field & Single Value (string)
     * 2. Single Field & Multiple Values (array)
     *
     * @param string $fieldData
     * @param mixed $value
     * @throws QueryException
     */
	private function _buildSingleFieldFilter($fieldData, $value)
	{
		$pos = strpos($fieldData, $this->_getOpeningOperatorHousingKey(true));

		if($pos === FALSE) {
			throw new QueryException("Malformed field name query for: $fieldData");
		}
		
		$field = substr($fieldData, 0, $pos);
		preg_match_all($this->operatorCaptureRegex(), $fieldData, $matches);

		//Check that we found a valid field name
		if(count($matches) < 2 || count($matches[1]) < 1) {
			throw new QueryException("Malformed field name query for: $field");
		}
	
		//Get first capturing group match
		$operator = $matches[1][0];

		//Check for valid operators
		if(!in_array($operator, $this->builder->operators)) {
			throw new QueryException("Invalid operator: $operator");
		}

		if($operator == 'between') {
			$value = explode($this->_getSeparatorKey(), $value);

			if(count($value) != 2) {
				throw new QueryException('The between operator requires two values separated by a pipe or forward slash: v1|v2 or v1/v2');
			}

			$this->builder->whereBetween($field, [$value[0], $value[1]]);
		} else {
			if(is_array($value)) {
				//Single field multiple {or} values
				if(count($value) == 1) {
					$this->builder->where($field, $operator, $value[0]);
				} else {
					$this->builder->where(function (QueryBuilder $q) use($value, $field, $operator) {
						foreach($value as $v) {
							$q->orWhere($field, $operator, $v);
						}
					});
				}
			} else {
				//standard single field and value
				$this->builder->where($field, $operator, $value);
			}
		}
	}

    /**
     * Build a multi {or} field query
     *
     * @param  array $fields
     * @param  string $value
     * @throws QueryException
     */
	private function _buildMultiFieldFilter($fields, $value)
	{
		$value = explode($this->_getSeparatorKey(), $value);
		$lastField = $fields[count($fields) - 1];
		$pos = strpos($lastField, $this->_getOpeningOperatorHousingKey(true));
		$formattedFields = [];

		if($pos === FALSE) {
			throw new QueryException("Malformed field name query for: $lastField");
		}

		preg_match_all($this->operatorCaptureRegex(), $lastField, $matches);

		//Get first capturing group match
		$operator = $matches[1][0];

		//Check for valid operators
		if(!in_array($operator, $this->builder->operators)) {
			throw new QueryException("Invalid operator: $operator");
		}

		//Normalize all the fields
		foreach($fields as $f) {
			$p = strpos($f, $this->_getOpeningOperatorHousingKey(true));

			if($p !== FALSE) {
				$f = substr($f, 0, $p);
			}

			$formattedFields[] = $f;
		}

		//build the query
		if($operator == 'between') {
			if(count($value) != 2) {
				throw new QueryException('The between operator requires two values separated by a pipe or forward slash: v1|v2 or v1/v2');
			}

			$this->builder->where(function (QueryBuilder $q) use($formattedFields, $value) {
				foreach($formattedFields as $f) {
					$q->whereBetween($f, [$value[0], $value[1]], 'or');
				}
			});
		} else {
			if(count($value) > 1) {
				throw new QueryException('Multiple values for a multi field search are not supported.');
			}

			$value = $value[0];

			//standard single field and value
			$this->builder->where(function (QueryBuilder $q) use($formattedFields, $operator, $value) {
				foreach($formattedFields as $f) {
					$q->orWhere($f, $operator, $value);
				}
			});
		}
	}

	/**
	 * Format the orderby if it exists
	 *
	 * @param  $params array
	 */
	private function buildOrderBy($params = [])
	{
		if(isset($params['orderby'])) {
			$data = $params['orderby'];
			$orders = explode($this->_getSeparatorKey(), $data);

			foreach($orders as $order) {
				$parts = explode(':', $order);
				$dir = 'asc';
				$field = $parts[0];

				if(count($parts) == 2) {
					$dir = $parts[1];
				}

				$this->builder->orderBy($field, $dir);
			}

		}
	}

	/**
	 * @param  $params array
	 * @return mixed
	 */
	private function formatSelect($params = [])
	{
		$select = null;

		if(isset($params['select'])) {
			$select = explode($this->_getSeparatorKey(), $params['select']);
		}

		return $select;
	}

	/**
	 * @param  $params array
	 * @return mixed
	 */
	private function formatSkip($params = [])
	{
		return $params['skip'] ?? null;
	}

	/**
	 * @param  $params array
	 * @return mixed
	 */
	private function formatTop($params = [])
	{
		return $params['top'] ?? null;
	}

	/**
	 * Find all fields prefixed with {rr:}
	 * 
	 * @param  array $params
	 * @return array
	 */
	private function filterRetsRabbitFields($params = []): array
	{
		$rrFields = array_filter($params, function ($key) {
			return strpos($key, 'rr') === 0;
		}, ARRAY_FILTER_USE_KEY);

		return $rrFields;
	}

	/**
	 * create a new param array which has that {rr:} removed
	 * 
	 * @param  array $params
	 * @return array
	 */
	private function formatRetsRabbitFields($params = []): array
	{
		$newParams = [];

		foreach($params as $key => $values) {
			if($values == '') {
				continue;
			}

			$newKey = substr($key, 3);
			$newParams[$newKey] = $values;
		}

		return $newParams;
	}

	/**
	 * Fetch only params which fall under the $filter param
	 * 
	 * @param  array $params
	 * @return array
	 */
	private function _getFilterParams($params = []): array
	{
		$filters = [];
		$passThrough = array('orderby', 'select', 'top', 'skip');

		foreach($params as $key => $values) {
			if(!in_array($key, $passThrough)) {
				$filters[$key] = $values;
			}
		}

		return $filters;
	}

	/**
	 * @return string
	 */
	private function operatorCaptureRegex(): string
	{
		$opening = $this->_getOpeningOperatorHousingKey();
		$closing = $this->_getClosingOperatorHousingKey();

		return "/$opening([^\)]*)$closing/";
	}

    /**
     * @param bool $unescape
     * @return string
     */
	private function _getOpeningOperatorHousingKey($unescape = false): string
	{
		if($this->alternateSyntax) {
			$key = $this->syntaxes['operatorHousing']['alternate'];

			if(is_array($key)) {
				$key = $key[0];
			}
		} else {
			$key = $this->syntaxes['operatorHousing']['standard'];

			if(is_array($key)) {
				$key = $key[0];
			}
		}

		if($unescape) {
            $key = stripcslashes($key);
        }

		return $key;
	}

    /**
     * @param bool $unescape
     * @return string
     */
	private function _getClosingOperatorHousingKey($unescape = false): string
	{
		if($this->alternateSyntax) {
			$key = $this->syntaxes['operatorHousing']['alternate'];

			if(is_array($key)) {
				$key = $key[0];

				if(count($key) > 1) {
					$key = $key[1];
				}
			}
		} else {
			$key = $this->syntaxes['operatorHousing']['standard'];

			if(is_array($key)) {
				if(count($key) > 1) {
					$key = $key[1];
				} else {
					$key = $ke[0];
				}
			}
		}

		if($unescape) {
            $key = stripcslashes($key);
        }

		return $key;
	}

	/**
	 * @return string
	 */
	private function _getSeparatorKey(): string
	{
		if($this->alternateSyntax) {
			$key = $this->syntaxes['separator']['alternate'];

			if(is_array($key)) {
				$key = $key[0];
			}
		} else {
			$key = $this->syntaxes['separator']['standard'];

			if(is_array($key)) {
				$key = $key[0];
			}
		}

		return $key;
	}
}
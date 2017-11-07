<?php

namespace RetsRabbit;

class QueryBuilder
{
	/**
	 * Format the form params as a RESO query
	 * 
	 * @return array
	 */
	public function format($params)
	{
		$data = array();
		//Grab only {rr:field_name} fields
		$params = $this->filterRetsRabbitFields($params);
		//Remove the {rr} prefix from all fields
		$params = $this->formatRetsRabbitFields($params);

		//parse for $filter
		if(isset($params['filter'])) {
			$filter = $this->formatFilter($params);

			if(!is_null($filter)) {
				$data['$filter'] = $filter;
			}
		}

		//parse for $select
		if(isset($params['select'])) {
			$select = $this->formatSelect($params);

			if(!is_null($select)) {
				$data['$select'] = $select;
			}
		}

		//parse for $orderby
		if(isset($params['orderby'])) {
			$orderby = $this->formatOrderBy($params);

			if(!is_null($orderby)) {
				$data['$orderby'] = $orderby;
			}
		}

		//parse for $skip
		if(isset($params['skip'])) {
			$skip = $this->formatSkip($params);

			if(!is_null($skip)) {
				$data['$skip'] = $skip;
			}
		}

		//parse for $top
		if(isset($params['top'])) {
			$top = $this->formatTop($params);

			if(!is_null($top)) {
				$data['$top'] = $top;
			}
		}

		return $data;
	}

	/**
	 * @param  $params array
	 * @return mixed
	 */
	private function formatFilter($params = array())
	{
		$filter = null;

		return $filter;
	}

	/**
	 * Format the orderby if it exists
	 *
	 * @param  $params array
	 * @return mixed
	 */
	private function formatOrderBy($params = array())
	{
		$orderby = null;

		if(isset($params['orderby'])) {
			$data = $params['orderby'];
			$orderby = array();
			$orders = explode('|', $data);

			foreach($orders as $order) {
				$parts = explode(':', $order);
				$dir = 'asc';
				$field = $parts[0];

				if(sizeof($parts) == 2) {
					$dir = $parts[1];
				}

				$orderby[] = "$field $dir";
			}

			$orderby = implode(', ', $orderby);
		}

		return $orderby;
	}

	/**
	 * @param  $params array
	 * @return mixed
	 */
	private function formatSelect($params = array())
	{
		$select = null;

		if(isset($params['select'])) {
			$select = explode('|', $params['select']);
		}

		return $select;
	}

	/**
	 * @param  $params array
	 * @return mixed
	 */
	private function formatSkip($params = array())
	{
		$skip = null;

		if(isset($params['skip'])) {
			$skip = $params['skip'];
		}

		return $skip;
	}

	/**
	 * @param  $params array
	 * @return mixed
	 */
	private function formatTop($params = array())
	{
		$top = null;

		if(isset($params['top'])) {
			$top = $params['top'];
		}

		return $top;
	}

	/**
	 * Find all fields prefixed with {rr:}
	 * 
	 * @param  array $params
	 * @return array
	 */
	private function filterRetsRabbitFields($params = array())
	{
		$rrFields = array_filter($params, function ($key) {
			return substr($key, 0, 2) == 'rr';
		}, ARRAY_FILTER_USE_KEY);

		return $rrFields;
	}

	/**
	 * create a new param array which has that {rr:} removed
	 * 
	 * @param  array $params
	 * @return array
	 */
	private function formatRetsRabbitFields($params = array())
	{
		$newParams = array();

		foreach($params as $key => $values) {
			$newKey = substr($key, 3);

			$newParams[$newKey] = $values;
		}

		return $newParams;
	}
}
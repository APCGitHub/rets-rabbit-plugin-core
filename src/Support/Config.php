<?php

namespace Anecka\RetsRabbit\Core\Support;

class Config
{
	/**
	 * Config instance
	 * 
	 * @var null
	 */
	protected static $instance = null;

	/**
	 * Cache of config datas
	 * 
	 * @var array
	 */
	private $configFiles = array();

	/**
	 * Hide the constructor from public access
	 */
	protected function __construct()
	{}

	/**
	 * Get the Config instance
	 * 
	 * @return Config
	 */
	public static function getInstance()
	{
		if(is_null(self::$instance)) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Get a config value
	 * 
	 * @param  string $key
	 * @return mixed
	 */
	public function get($key = '')
	{
		$parts = explode('.', $key);
		$base = $parts[0];
		$dataArray = null;

		if(!in_array($base, array_keys($this->configFiles))) {
			if(file_exists("src/config/$base.php")) {
				$this->configFiles[$base] = include "src/config/$base.php";

				$dataArray = $this->configFiles[$base];
			} else {
				return $dataArray;
			}
		} else {
			$dataArray = $this->configFiles[$base];
		}

		array_shift($parts);

		foreach($parts as $segment) {
			if(in_array($segment, array_keys($dataArray))) {
				$dataArray = $dataArray[$segment];
			}
		}

		return $dataArray;
	}
}
<?php

namespace Anecka\RetsRabbit\Core\Support;

class Config
{
	protected static $instance = null;
	private $configFiles = array();

	protected function __construct()
	{}

	public static function getInstance()
	{
		if(is_null(self::$instance)) {
			self::$instance = new self;
		}

		return self::$instance;
	}

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
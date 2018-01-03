<?php

namespace Tests\Unit;

use Anecka\RetsRabbit\Core\Support\Config;
use Tests\TestCase;

class ConfigTest extends TestCase
{
	/**
	 * @test
	 */
	public function testSimpleGetFileSuccess()
	{
		$data = Config::getInstance()->get('providers');

		$this->assertNotNull($data);
	}

	public function testSingleNestedFileAccess()
	{
		$config = Config::getInstance();
		$data = $config->get('providers.rets_rabbit');

		$this->assertNotNull($data);
	}
}
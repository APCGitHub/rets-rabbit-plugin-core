<?php


namespace Apc\RetsRabbit\Core;


use Apc\RetsRabbit\Core\Clients\RetsRabbitClient;
use Apc\RetsRabbit\Core\Traits\AccessTokenResourceTrait;
use Apc\RetsRabbit\Core\Traits\OpenHouseResourceTrait;
use Apc\RetsRabbit\Core\Traits\PropertyResourceTrait;

class RetsRabbitApi
{
    use PropertyResourceTrait,
        AccessTokenResourceTrait,
        OpenHouseResourceTrait;

    /**
     * @var RetsRabbitClient
     */
    protected $client;

    /**
     * RetsRabbitApi constructor.
     *
     * @param ApiConfig $config
     */
    public function __construct(ApiConfig $config)
    {
        $this->client = new RetsRabbitClient($config);
    }
}
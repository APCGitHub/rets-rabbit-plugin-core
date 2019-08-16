<?php

namespace Apc\RetsRabbit\Core\Requests;

use Apc\RetsRabbit\Core\Clients\RetsRabbitClient;

abstract class aResource implements iResource
{
    /**
     * ApiService handle
     *
     * @var RetsRabbitClient
     */
    protected $api = null;

    /**
     * Constructor for MediaResource
     *
     * @param RetsRabbitClient $api
     */
    public function __construct(RetsRabbitClient $api)
    {
        $this->api = $api;
    }
}

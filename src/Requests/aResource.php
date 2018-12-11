<?php

namespace Apc\RetsRabbit\Core\Requests;

use Apc\RetsRabbit\Core\Clients\OldRetsRabbitClient;

abstract class aResource implements iResource
{
    /**
     * ApiService handle
     *
     * @var OldRetsRabbitClient
     */
    protected $api = null;

    /**
     * Constructor for MediaResource
     *
     * @param OldRetsRabbitClient $api
     */
    public function __construct(OldRetsRabbitClient $api)
    {
        $this->api = $api;
    }
}

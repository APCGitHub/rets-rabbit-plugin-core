<?php


namespace Apc\RetsRabbit\Core\Requests;


use Apc\RetsRabbit\Core\Contracts\ClientInterface;

abstract class RetsRabbitRequest
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * RetsRabbitRequest constructor.
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }
}
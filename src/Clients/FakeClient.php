<?php


namespace Apc\RetsRabbit\Core\Clients;


use Apc\RetsRabbit\Core\ApiConfig;
use Apc\RetsRabbit\Core\Contracts\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class FakeClient implements ClientInterface
{
    protected $client;

    public function __construct(ApiConfig $config)
    {
        $this->client = new FakeResponseFactory();
    }

    /**
     * Get
     *
     * @param string $uri
     * @param array $query_params
     * @param array $headers
     * @return ResponseInterface
     */
    public function get(string $uri, array $query_params = [], array $headers = []): ResponseInterface
    {
        return $this->client->createResponse();
    }

    /**
     * Post
     *
     * @param string $uri
     * @param array $params
     * @param array $headers
     * @return ResponseInterface
     */
    public function post(string $uri, array $params = [], array $headers = []): ResponseInterface
    {
        return $this->client->createResponse(
            200,
            'Success',
            [],
            $params
        );
    }
}
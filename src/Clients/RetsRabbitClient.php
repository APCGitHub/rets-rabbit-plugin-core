<?php


namespace Apc\RetsRabbit\Core\Clients;


use Apc\RetsRabbit\Core\ApiConfig;
use Apc\RetsRabbit\Core\Contracts\ClientInterface;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class RetsRabbitClient implements ClientInterface
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * RRClient constructor.
     *
     * @param ApiConfig $config
     */
    public function __construct(ApiConfig $config)
    {
        $this->client = new Client([
            'base_uri'   => $config->domain(),
            'exceptions' => false
        ]);
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
        $config = [];

        if(count($query_params)) {
            $config['query'] = $query_params;
        }

        if(count($headers)) {
            $config['headers'] = $headers;
        }

        $config['headers']['Accept'] = 'application/json';

        return $this->client->get($uri, $config);
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
        $config = [];

        if(count($params)) {
            $config['form_params'] = $params;
        }

        if(count($headers)) {
            $config['headers'] = $headers;
        }

        $config['headers']['Accept'] = 'application/json';

        return $this->client->post($uri, $config);
    }
}
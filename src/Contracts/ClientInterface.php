<?php


namespace Apc\RetsRabbit\Core\Contracts;


use Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * Get
     *
     * @param string $uri
     * @param array $query_params
     * @param array $headers
     * @return ResponseInterface
     */
    public function get(string $uri, array $query_params = [], array $headers = []): ResponseInterface;

    /**
     * Post
     *
     * @param string $uri
     * @param array $params
     * @param array $headers
     * @return ResponseInterface
     */
    public function post(string $uri, array $params = [], array $headers = []): ResponseInterface;
}
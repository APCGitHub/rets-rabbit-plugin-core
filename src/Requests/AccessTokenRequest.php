<?php


namespace Apc\RetsRabbit\Core\Requests;


use Apc\RetsRabbit\Core\Responses\SingleAccessTokenResourceResponse;

class AccessTokenRequest extends RetsRabbitRequest
{
    /**
     * @param array $fields
     * @return SingleAccessTokenResourceResponse
     */
    public function create(array $fields = []): SingleAccessTokenResourceResponse
    {
        return new SingleAccessTokenResourceResponse(
            $this->client->post('api/oauth/access_token', $fields)
        );
    }
}
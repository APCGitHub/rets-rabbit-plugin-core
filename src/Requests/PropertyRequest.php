<?php


namespace Apc\RetsRabbit\Core\Requests;


use Apc\RetsRabbit\Core\Responses\MultipleListingResponse;
use Apc\RetsRabbit\Core\Responses\SingleListingResponse;

class PropertyRequest extends RetsRabbitRequest
{
    /**
     * @param $listing_id
     * @param array $params
     * @param array $headers
     * @return SingleListingResponse
     */
    public function single($listing_id, array $params = [], array $headers = []): SingleListingResponse
    {
        return new SingleListingResponse(
            $this->client->get("api/v2/property('$listing_id')", $params, $headers)
        );
    }

    /**
     * @param array $params
     * @param array $headers
     * @return MultipleListingResponse
     */
    public function search(array $params = [], array $headers = []): MultipleListingResponse
    {
        return new MultipleListingResponse(
            $this->client->get('api/v2/property', $params, $headers)
        );
    }
}
<?php


namespace Apc\RetsRabbit\Core\Requests;


use Apc\RetsRabbit\Core\Responses\MultipleOpenHouseResponse;
use Apc\RetsRabbit\Core\Responses\SingleOpenHouseResponse;

class OpenHouseRequest extends RetsRabbitRequest
{
    /**
     * @param $open_house_id
     * @param array $params
     * @param array $headers
     * @return SingleOpenHouseResponse
     */
    public function single($open_house_id, array $params = [], array $headers = [])
    {
        return new SingleOpenHouseResponse(
            $this->client->get("api/v2/open-house('$open_house_id')", $params, $headers)
        );
    }

    /**
     * @param array $params
     * @param array $headers
     * @return MultipleOpenHouseResponse
     */
    public function search(array $params = [], array $headers = [])
    {
        return new MultipleOpenHouseResponse(
            $this->client->get('api/v2/open-house', $params, $headers)
        );
    }
}
<?php


namespace Apc\RetsRabbit\Core\Traits;


use Apc\RetsRabbit\Core\Requests\OpenHouseRequest;

trait OpenHouseResourceTrait
{
    /**
     * @return \Apc\RetsRabbit\Core\Requests\OpenHouseRequest
     */
    public function openHouse(): OpenHouseRequest
    {
        return new OpenHouseRequest($this->client);
    }
}
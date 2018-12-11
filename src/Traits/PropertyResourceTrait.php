<?php


namespace Apc\RetsRabbit\Core\Traits;


use Apc\RetsRabbit\Core\Requests\PropertyRequest;

trait PropertyResourceTrait
{
    /**
     * @return PropertyRequest
     */
    public function property(): PropertyRequest
    {
        return new PropertyRequest($this->client);
    }
}
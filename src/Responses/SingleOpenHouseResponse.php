<?php


namespace Apc\RetsRabbit\Core\Responses;


use Apc\RetsRabbit\Core\Converters\Response\OpenHouseResponseConverter;
use Apc\RetsRabbit\Core\Converters\Response\ResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\OpenHouse;
use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;

class SingleOpenHouseResponse extends SingleResourceResponse
{
    /**
     * @return RetsRabbitTransferObject|OpenHouse
     */
    public function openHouse(): RetsRabbitTransferObject
    {
        return $this->data;
    }

    /**
     * Response Data Parser
     *
     * @return ResponseConverter
     */
    protected function _getConverter(): ResponseConverter
    {
        return new OpenHouseResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->arrayBody() ?? [];
    }
}
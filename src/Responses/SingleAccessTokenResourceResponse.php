<?php


namespace Apc\RetsRabbit\Core\Responses;


use Apc\RetsRabbit\Core\Converters\Response\AccessTokenResponseConverter;
use Apc\RetsRabbit\Core\Converters\Response\ResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\AccessToken;
use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;

class SingleAccessTokenResourceResponse extends SingleResourceResponse
{
    /**
     * @return \Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject|AccessToken
     */
    public function token(): RetsRabbitTransferObject
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
        return new AccessTokenResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->arrayBody();
    }
}
<?php


namespace Apc\RetsRabbit\Core\Responses;


use Apc\RetsRabbit\Core\Converters\Response\ListingResponseConverter;
use Apc\RetsRabbit\Core\Converters\Response\ResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\Listing;

class MultipleListingResponse extends MultipleResourceResponse
{
    /**
     * @return \Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject[]|Listing[]
     */
    public function listings(): array
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
        return new ListingResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->arrayBody()['value'] ?? [];
    }
}
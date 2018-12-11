<?php


namespace Apc\RetsRabbit\Core\Converters\Response;


use Apc\RetsRabbit\Core\TransferObjects\InnerListing;
use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;

class InnerListingResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to RetsRabbitTransferObject
     *
     * @param array $data
     * @return RetsRabbitTransferObject
     */
    protected function process(array $data): RetsRabbitTransferObject
    {
        $listing                   = new InnerListing();
        $listing->active           = $data['active'] ?? null;
        $listing->geo_partial      = $data['geo_partial'] ?? null;
        $listing->lat              = $data['lat'] ?? null;
        $listing->localized_fields = $data['localized_fields'] ?? [];
        $listing->long             = $data['long'] ?? null;
        $listing->mls_id           = $data['mls_id'] ?? null;
        $listing->rets_class       = $data['rets_class'] ?? null;
        $listing->server_hash      = $data['server_hash'] ?? null;
        $listing->server_id        = $data['server_id'] ?? null;
        $listing->photos           = $data['photos'] ?? [];

        return $listing;
    }
}
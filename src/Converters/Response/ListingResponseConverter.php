<?php


namespace Apc\RetsRabbit\Core\Converters\Response;


use Apc\RetsRabbit\Core\TransferObjects\Listing;
use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;

class ListingResponseConverter extends ResponseConverter
{
    /**
     * @var InnerListingResponseConverter
     */
    private $inner_listing_converter;

    /**
     * ListingResponseConverter constructor.
     */
    public function __construct()
    {
        $this->inner_listing_converter = new InnerListingResponseConverter();
    }

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
        $context  = $data['@odata.context'] ?? null;
        $count    = $data['@odata.count'] ?? null;
        $rr_count = $data['@retsrabbit.total_results'] ?? null;

        if (isset($data['value'])) {
            $data = $data['value'];
        }

        $_listing                           = $data['listing'] ?? [];
        $listing                            = new Listing($data);
        $listing->odata_context             = $context;
        $listing->odata_count               = $count;
        $listing->rets_rabbit_total_results = $rr_count;
        $listing->listing                   = $this->inner_listing_converter->getResponseResource($_listing);

        return $listing;
    }
}
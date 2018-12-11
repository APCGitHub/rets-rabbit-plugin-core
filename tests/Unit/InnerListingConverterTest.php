<?php


namespace Tests\Unit;


use Apc\RetsRabbit\Core\Converters\Response\ListingResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\Listing;
use Tests\TestCase;

class InnerListingConverterTest extends TestCase
{
    public function test_does_set_nested_fields()
    {
        $response = [
            '@odata.context'      => 'api/v2/$metadata#property/$entity',
            'id'                  => 2067,
            'ListingKey'          => '200',
            'ListingId'           => '74958',
            'StandardStatus'      => 'Active',
            'MlsStatus'           => null,
            'ApprovalStatus'      => null,
            'ListingContractDate' => '2016-04-12',
            'listing'             =>
                [
                    'server_hash' => '86f93cfc06ceb49d6c837916857cef7d',
                    'mls_id'      => '74958',
                    'rets_class'  => 'Listing',
                    'active'      => true,
                    'lat'         => null,
                    'long'        => null,
                    'geo_partial' => false,
                    'photos'      => [
                    ]
                ]
        ];

        /** @var Listing $listing */
        $listing = (new ListingResponseConverter())->getResponseResource($response);
        $this->assertNotNull($listing->listing);
        $this->assertNotNull($listing->listing->photos);
    }
}
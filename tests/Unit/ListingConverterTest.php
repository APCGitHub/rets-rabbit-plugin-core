<?php


namespace Tests\Unit;


use Apc\RetsRabbit\Core\Converters\Response\ListingResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\Listing;
use Tests\TestCase;

class ListingConverterTest extends TestCase
{
    public function test_does_return_listing_class()
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
        ];

        $listing = (new ListingResponseConverter())->getResponseResource($response);

        $this->assertInstanceOf(Listing::class, $listing);
    }

    public function test_does_set_top_level_fields()
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
        ];

        /** @var Listing $listing */
        $listing = (new ListingResponseConverter())->getResponseResource($response);

        $this->assertNotNull($listing->id);
        $this->assertNotNull($listing->ListingKey);
        $this->assertNotNull($listing->ListingId);
        $this->assertNotNull($listing->StandardStatus);
        $this->assertNotNull($listing->odata_context);
    }

    public function test_sets_special_at_fields()
    {
        $response = [
            '@odata.context'            => 'api/v2/$metadata#property/$entity',
            '@odata.count'              => 23,
            '@retsrabbit.total_results' => 24
        ];

        /** @var Listing $listing */
        $listing = (new ListingResponseConverter())->getResponseResource($response);

        $this->assertNotNull($listing->odata_count);
        $this->assertNotNull($listing->odata_context);
        $this->assertNotNull($listing->rets_rabbit_total_results);
    }
}
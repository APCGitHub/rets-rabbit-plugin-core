<?php


namespace Tests\Unit;


use Apc\RetsRabbit\Core\Converters\Response\OpenHouseResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\OpenHouse;
use Tests\TestCase;

class OpenHouseConverterTest extends TestCase
{
    /** @test */
    public function can_return_correct_type()
    {
        $response   = [
            "@odata.context"         => 'https://werx.retsrabbit.com/api/v2/$metadata#open-house',
            "id"                     => 14139227,
            "OpenHouseKey"           => "6952681",
            "OpenHouseId"            => "6952681",
            "OriginatingSystemKey"   => null,
            "OriginatingSystemName"  => null,
            "ListingKey"             => "8538898",
            "ListingId"              => null,
            "ModificationTimestamp"  => "2019-03-11 21:04:32",
            "OriginalEntryTimestamp" => null,
            "OpenHouseDate"          => "2019-03-17",
            "OpenHouseStartTime"     => "14:00:00",
            "OpenHouseEndTime"       => "17:00:00",
            "ShowingAgentMlsID"      => null,
            "ShowingAgentKey"        => null,
            "ShowingAgentFirstName"  => null,
            "ShowingAgentLastName"   => null,
            "OpenHouseType"          => null,
            "AppointmentRequiredYN"  => null,
            "Refreshments"           => null,
            "Attended"               => null,
            "OpenHouseRemarks"       => null,
            "Status"                 => null,
            "open_house_id"          => 15231419,
            "created_at"             => "2019-03-12 01:55:22",
            "updated_at"             => "2019-03-12 01:55:22"
        ];
        $open_house = (new OpenHouseResponseConverter())->getResponseResource($response);

        $this->assertInstanceOf(OpenHouse::class, $open_house);
    }

    /** @test */
    public function can_set_special_fields()
    {
        $response   = [
            '@odata.context'            => 'api/v2/$metadata#property/$entity',
            '@odata.count'              => 23,
            '@retsrabbit.total_results' => 24
        ];

        /** @var OpenHouse $open_house */
        $open_house = (new OpenHouseResponseConverter())->getResponseResource($response);
        $this->assertNotNull($open_house->odata_count);
        $this->assertNotNull($open_house->odata_context);
        $this->assertNotNull($open_house->rets_rabbit_total_results);
    }
}
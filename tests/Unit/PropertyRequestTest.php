<?php


namespace Tests\Unit;


use Apc\RetsRabbit\Core\ApiConfig;
use Apc\RetsRabbit\Core\Clients\FakeClient;
use Apc\RetsRabbit\Core\Requests\PropertyRequest;
use Apc\RetsRabbit\Core\TransferObjects\Listing;
use Tests\TestCase;

class PropertyRequestTest extends TestCase
{
    /** @test */
    public function can_make_single_request()
    {
        $client  = new FakeClient(new ApiConfig());
        $request = new PropertyRequest($client);

        $response = $request->single(4);

        $this->assertEquals(200, $response->statusCode());
        $this->assertInstanceOf(Listing::class, $response->listing());
    }

    public function can_make_search_request()
    {
        $client  = new FakeClient(new ApiConfig());
        $request = new PropertyRequest($client);

        $response = $request->search();
        $this->assertEquals(200, $response->statusCode());
        $this->assertEmpty($response->listings());
    }
}
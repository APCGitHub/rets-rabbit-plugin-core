<?php


namespace Tests\Unit;


use Apc\RetsRabbit\Core\Converters\Response\AccessTokenResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\AccessToken;
use Tests\TestCase;

class AccessTokenConverterTest extends TestCase
{
    public function test_does_return_proper_type()
    {
        $response = [
            'access_token' => '61uG7DgIWnlx2FhGtK3FSLjYuIv9nj03x3nRC1kh',
            'token_type'   => 'Bearer',
            'expires_in'   => 604800
        ];

        $token = (new AccessTokenResponseConverter())->getResponseResource($response);

        $this->assertInstanceOf(AccessToken::class, $token);
    }

    public function test_does_set_properties()
    {
        $response = [
            'access_token' => '61uG7DgIWnlx2FhGtK3FSLjYuIv9nj03x3nRC1kh',
            'token_type'   => 'Bearer',
            'expires_in'   => 604800
        ];

        /** @var AccessToken $token */
        $token = (new AccessTokenResponseConverter())->getResponseResource($response);

        $this->assertNotNull($token->access_token);
        $this->assertNotNull($token->token_type);
        $this->assertNotNull($token->expires_in);
    }
}
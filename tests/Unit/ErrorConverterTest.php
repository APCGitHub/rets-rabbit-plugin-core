<?php


namespace Tests\Unit;


use Apc\RetsRabbit\Core\Converters\Response\ErrorResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\Error;
use Tests\TestCase;

class ErrorConverterTest extends TestCase
{
    public function test_does_return_correct_class()
    {
        $response = [
            'code' => 'permission',
            'message' => 'oops'
        ];

        $error = (new ErrorResponseConverter())->getResponseResource($response);

        $this->assertInstanceOf(Error::class, $error);
    }

    public function test_does_set_properties()
    {
        $response = [
            'code' => 'permission',
            'message' => 'oops'
        ];

        /** @var Error $error */
        $error = (new ErrorResponseConverter())->getResponseResource($response);

        $this->assertNotNull($error->code);
        $this->assertNotNull($error->message);
    }
}
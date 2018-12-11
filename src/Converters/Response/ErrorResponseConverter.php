<?php


namespace Apc\RetsRabbit\Core\Converters\Response;


use Apc\RetsRabbit\Core\TransferObjects\Error;
use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;

class ErrorResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to RetsRabbitTransferObject
     *
     * @param array $data
     * @return RetsRabbitTransferObject|Error
     */
    protected function process(array $data): RetsRabbitTransferObject
    {
        $error              = new Error();
        $error->status_code = $data['status_code'] ?? null;
        $error->message     = $data['message'] ?? null;
        $error->code        = $data['code'] ?? null;

        return $error;
    }
}
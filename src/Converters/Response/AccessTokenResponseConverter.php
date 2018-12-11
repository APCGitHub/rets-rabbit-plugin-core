<?php


namespace Apc\RetsRabbit\Core\Converters\Response;


use Apc\RetsRabbit\Core\TransferObjects\AccessToken;
use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;

class AccessTokenResponseConverter extends ResponseConverter
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
        $token               = new AccessToken();
        $token->access_token = $data['access_token'] ?? null;
        $token->expires      = $data['expires'] ?? null;
        $token->expires_in   = $data['expires_in'] ?? null;
        $token->token_type   = $data['token_type'] ?? null;

        return $token;
    }
}
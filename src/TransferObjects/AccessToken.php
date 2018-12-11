<?php


namespace Apc\RetsRabbit\Core\TransferObjects;


/**
 * Class AccessToken
 *
 * @package Apc\RetsRabbit\Core\TransferObjects
 * @property string $access_token
 * @property string $token_type
 * @property string $expires
 * @property int $expires_in
 */
class AccessToken extends RetsRabbitTransferObject
{
    /**
     * Strings
     * @var
     */
    protected $access_token, $token_type, $expires;

    /**
     * Integers
     * @var
     */
    protected $expires_in;
}
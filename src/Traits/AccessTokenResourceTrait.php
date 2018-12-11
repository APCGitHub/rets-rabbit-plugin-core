<?php


namespace Apc\RetsRabbit\Core\Traits;


use Apc\RetsRabbit\Core\Contracts\ClientInterface;
use Apc\RetsRabbit\Core\Requests\AccessTokenRequest;

/**
 * Trait AccessTokenResourceTrait
 *
 * @package Apc\RetsRabbit\Core\Traits
 * @mixin ClientInterface
 */
trait AccessTokenResourceTrait
{
    /**
     * @return \Apc\RetsRabbit\Core\Requests\AccessTokenRequest
     */
    public function accessToken(): AccessTokenRequest
    {
        return new AccessTokenRequest($this->client);
    }
}
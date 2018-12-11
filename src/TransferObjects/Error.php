<?php


namespace Apc\RetsRabbit\Core\TransferObjects;


/**
 * Class Error
 *
 * @package Apc\RetsRabbit\Core\TransferObjects
 * @property string $code
 * @property string $message
 * @property int $status_code
 */
class Error extends RetsRabbitTransferObject
{
    /**
     * Strings
     * @var
     */
    protected $code, $message;

    /**
     * Integers
     * @var
     */
    protected $status_code;

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return in_array($name, ['code', 'message', 'status_code']);
    }
}
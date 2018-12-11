<?php


namespace Apc\RetsRabbit\Core\TransferObjects;

/**
 * Class InnerListing
 *
 * @package Apc\RetsRabbit\Core\TransferObjects
 * @property string $server_hash
 * @property string $mls_id
 * @property string $rets_class
 * @property bool $active
 * @property string $lat
 * @property string $long
 * @property int $server_id
 * @property bool $geo_partial
 * @property array $localized_fields
 * @property array $photos
 */
class InnerListing extends RetsRabbitTransferObject
{
    /**
     * Strings
     *
     * @var
     */
    protected $server_hash, $mls_id, $rets_class, $lat, $long;

    /**
     * Integers
     *
     * @var
     */
    protected $server_id;

    /**
     * Booleans
     *
     * @var
     */
    protected $geo_partial, $active;

    /**
     * Arrays
     *
     * @var
     */
    protected $localized_fields, $photos;

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return in_array($name, [
            'server_hash',
            'mls_id',
            'rets_class',
            'active',
            'lat',
            'long',
            'server_id',
            'geo_partial',
            'localized_fields',
            'photos',
        ]);
    }
}
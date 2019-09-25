<?php


namespace Apc\RetsRabbit\Core\TransferObjects;


/**
 * Class OpenHouse
 * @package Apc\RetsRabbit\Core\TransferObjects
 * @property integer $odata_count
 * @property integer $id
 * @property integer $rets_rabbit_total_results
 * @property integer $server_id
 * @property integer $open_house_id
 * @property string $odata_context
 * @property string $OpenHouseKey
 * @property string $OpenHouseId
 * @property string $OriginatingSystemKey
 * @property string $OriginatingSystemName
 * @property string $ListingKey
 * @property string $ListingId
 * @property string $ModificationTimestamp
 * @property string $OriginalEntryTimestamp
 * @property string $OpenHouseDate
 * @property string $OpenHouseStartTime
 * @property string $OpenHouseEndTime
 * @property string $ShowingAgentMlsID
 * @property string $ShowingAgentKey
 * @property string $ShowingAgentFirstName
 * @property string $ShowingAgentLastName
 * @property string $OpenHouseType
 * @property string $AppointmentRequiredYN
 * @property string $Refreshments
 * @property string $Attended
 * @property string $OpenHouseRemarks
 * @property string $Status
 */
class OpenHouse extends RetsRabbitTransferObject
{
    /**
     * @var array
     */
    protected $ignore_fields = ['@odata.context', '@odata.count', '@retsrabbit.total_results', 'created_at', 'updated_at'];

    /**
     * Strings
     *
     * @var
     */
    protected $odata_context;

    /**
     * Integers
     *
     * @var
     */
    protected $id, $odata_count, $rets_rabbit_total_results, $server_id, $open_house_id;

    /**
     * RESO fields
     *
     * @var
     */
    protected $OpenHouseKey, $OpenHouseId, $OriginatingSystemKey, $OriginatingSystemName, $ListingKey,
        $ListingId, $ModificationTimestamp, $OriginalEntryTimestamp, $OpenHouseDate, $OpenHouseStartTime, $OpenHouseEndTime,
        $ShowingAgentMlsID, $ShowingAgentKey, $ShowingAgentFirstName, $ShowingAgentLastName, $OpenHouseType, $AppointmentRequiredYN,
        $Refreshments, $Attended, $OpenHouseRemarks, $Status;
}
<?php


namespace Apc\RetsRabbit\Core\Converters\Response;


use Apc\RetsRabbit\Core\TransferObjects\OpenHouse;
use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;

class OpenHouseResponseConverter extends ResponseConverter
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
        $context  = $data['@odata.context'] ?? null;
        $count    = $data['@odata.count'] ?? null;
        $rr_count = $data['@retsrabbit.total_results'] ?? null;

        if (isset($data['value'])) {
            $data = $data['value'];
        }

        $open_house                            = new OpenHouse($data);
        $open_house->odata_count               = $count;
        $open_house->odata_context             = $context;
        $open_house->rets_rabbit_total_results = $rr_count;

        return $open_house;
    }
}
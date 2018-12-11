<?php


namespace Apc\RetsRabbit\Core\Converters\Response;


use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;

abstract class ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to RetsRabbitTransferObject
     *
     * @param array $data
     * @return RetsRabbitTransferObject
     */
    abstract protected function process(array $data): RetsRabbitTransferObject;

    /**
     * Parse Child Collection (Helper Method)
     *
     * Parse any child collections to RetsRabbitTransferObjects
     *
     * @param ResponseConverter $parser
     * @param                   $collection
     * @return array
     */
    protected function parseChildCollection(ResponseConverter $parser, $collection): array
    {
        foreach ($collection as $item_data) {
            $items[] = $parser->process($item_data);
        }

        return $items ?? [];
    }

    /**
     * @param $data
     * @return RetsRabbitTransferObject
     */
    public function getResponseResource($data): RetsRabbitTransferObject
    {
        return $this->process($data);
    }
}
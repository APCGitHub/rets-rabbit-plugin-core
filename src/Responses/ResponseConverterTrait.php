<?php


namespace Apc\RetsRabbit\Core\Responses;


use Apc\RetsRabbit\Core\Converters\Response\ResponseConverter;

trait ResponseConverterTrait
{
    /**
     * @var ResponseConverter
     */
    protected $converter;

    /**
     * Response Data Parser
     *
     * @return ResponseConverter
     */
    abstract protected function _getConverter(): ResponseConverter;

    /**
     * Get Parsable
     *
     * @return mixed
     */
    abstract protected function _getConvertible();

    /**
     * @return mixed
     */
    abstract protected function _prepareRetsRabbitResource();

    /**
     *
     */
    public function setUpResponseConverter()
    {
        $this->converter = $this->_getConverter();
        $this->_prepareRetsRabbitResource();
    }
}
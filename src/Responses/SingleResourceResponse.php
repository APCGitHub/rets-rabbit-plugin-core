<?php


namespace Apc\RetsRabbit\Core\Responses;


use Apc\RetsRabbit\Core\Converters\Response\ErrorResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;
use Psr\Http\Message\ResponseInterface;

abstract class SingleResourceResponse
{
    use ResponseDataTrait, ResponseConverterTrait;

    /**
     * @var RetsRabbitTransferObject
     */
    protected $data = null;

    /**
     * SingleResourceResponse constructor.
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->setUp($response);
    }

    /**
     * @param ResponseInterface $response
     */
    protected function setUp(ResponseInterface $response)
    {
        $this->setUpData($response);

        if($this->body()->error ?? false) {
            $this->error = (new ErrorResponseConverter())
                ->getResponseResource($this->arrayBody()['error']);

            return;
        }

        $this->setUpResponseConverter();
    }

    /**
     *
     */
    protected function _prepareRetsRabbitResource()
    {
        $this->data = $this->converter->getResponseResource($this->_getConvertible());
    }
}
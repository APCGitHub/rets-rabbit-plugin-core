<?php


namespace Apc\RetsRabbit\Core\Responses;


use Apc\RetsRabbit\Core\Converters\Response\ErrorResponseConverter;
use Apc\RetsRabbit\Core\TransferObjects\RetsRabbitTransferObject;
use Psr\Http\Message\ResponseInterface;

abstract class MultipleResourceResponse
{
    use ResponseDataTrait, ResponseConverterTrait;

    /**
     * @var RetsRabbitTransferObject[]
     */
    protected $data = [];

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
        }

        $this->setUpResponseConverter();
    }

    /**
     *
     */
    protected function _prepareRetsRabbitResource()
    {
        foreach($this->_getConvertible() as $convertible) {
            $this->data[] = $this->converter->getResponseResource($convertible);
        }
    }
}
<?php


namespace Apc\RetsRabbit\Core\Responses;


use Apc\RetsRabbit\Core\TransferObjects\Error;
use Psr\Http\Message\ResponseInterface;

trait ResponseDataTrait
{
    /**
     * @var int
     */
    protected $status_code;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var \stdClass
     */
    protected $body;

    /**
     * @var Error
     */
    protected $error;

    /**
     * @param ResponseInterface $response
     */
    public function setUpData(ResponseInterface $response)
    {
        $this->status_code = $response->getStatusCode();
        $this->message     = $response->getReasonPhrase();
        $this->body        = $response->getBody()->getContents();
        $this->error       = new Error();
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function statusCode(): int
    {
        return $this->status_code;
    }

    /**
     * Was Successful
     *
     * @return bool
     */
    public function wasSuccessful(): bool
    {
        return $this->status_code >= 200 and $this->status_code <= 299;
    }

    /**
     * Body
     *
     * @param bool $encoded
     * @return \stdClass|string
     */
    protected function body($encoded = true)
    {
        return $encoded ? json_decode($this->body) : $this->body;
    }

    /**
     * @return array|null
     */
    public function arrayBody()
    {
        return json_decode($this->body, true);
    }

    /**
     * Encoded Body
     *
     * @return \stdClass
     */
    public function decodeBody(): \stdClass
    {
        return $this->body(true);
    }

    /**
     * @return Error
     */
    public function error(): Error
    {
        return $this->error;
    }

    /**
     * Raw Body
     *
     * @return string
     */
    public function rawBody(): string
    {
        return $this->body(false);
    }
}
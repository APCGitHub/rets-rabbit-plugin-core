<?php


namespace Apc\RetsRabbit\Core;


class ApiConfig
{
    /**
     * @var string
     */
    private $domain = 'https://werx.retsrabbit.com/';

    /**
     * ApiConfig constructor.
     *
     * @param string $domain
     */
    public function __construct(string $domain = null)
    {
        if (!empty($domain)) {
            if (substr($domain, -1) !== '/') {
                $domain .= '/';
            }

            $this->domain = $domain;
        }
    }

    /**
     * @return string
     */
    public function domain(): string
    {
        return $this->domain;
    }
}
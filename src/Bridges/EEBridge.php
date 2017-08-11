<?php

namespace RetsRabbit\Bridges;

class EEBridge implements iCmsBridge
{
    /**
     * Instance of the ee global object.
     *
     * @var mixed
     */
    private $app = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        if(function_exists('ee')) {
            $this->app = ee();
        }
    }

    /**
     * Get a handle to the plugin's parent CMS.
     *
     * @return mixed
     */
    public function getCms()
    {
        return $this->app;
    }

    /**
     * Save an access token from the RR api.
     *
     * @param  string $token
     * @return bool
     */
    public function saveAccessToken($token, $ttl = 3600)
    {
        $token = $this->app('Encrypt')->encrypt($token);

        return $this->app->cache->save('/rets-rabbit/access_token', $token, $ttl);
    }

    /**
     * Fetch a saved RR token from the CMS
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        $token = $this->app->cache->get('/rets-rabbit/access_token');

        if($token) {
            $token = $this->app('Encrypt')->decrypt($token);
        }

        return $token;
    }
}

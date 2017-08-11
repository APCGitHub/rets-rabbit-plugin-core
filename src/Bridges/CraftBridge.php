<?php

namespace RetsRabbit\Bridges;

use Craft\Craft;

class CraftBridge implements iCmsBridge
{
    /**
     * Instance of the Craft app global object.
     *
     * @var Craft
     */
    private $app = null;

    /**
     * Rets Rabbit settings in Craft
     * @var array
     */
    private $settings;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->app = Craft::app();
        $this->settings = $this->app->plugins->getPlugin('retsRabbit')->getSettings();
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
    public function saveAccessToken($token)
    {
        $token = $this->app->securityService->encrypt($token);

        return $this->app->cache->add('/rets-rabbit/access_token', $token);
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
            $token = $this->app->securityService->decrypt($token);
        }

        return $token;
    }
}

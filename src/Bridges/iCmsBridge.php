<?php

namespace RetsRabbit\Bridges;

interface iCmsBridge
{
    /**
     * Get a handle to the plugin's parent CMS.
     *
     * @return mixed
     */
    public function getCms();

    /**
     * Save an access token from the RR API;
     *
     * @param $token string
     * @return bool
     */
    public function saveAccessToken($token);

    /**
     * Fetch a saved RR token from the CMS
     *
     * @return string|null
     */
    public function getAccessToken();
}

<?php
/**
 * Created by PhpStorm.
 * User: herbie
 * Date: 2017/2/17
 * Time: 上午11:19
 */

use HerbieZ\WebWeChat\Collections\Contact;
use HerbieZ\WebWeChat\Core\Server;
use HerbieZ\WebWeChat\Core\Http;
use HerbieZ\WebWeChat\Core\Myself;


if (!function_exists('server')) {
    function server($config = [])
    {
        return Server::getInstance($config);
    }
}

if (!function_exists('http')) {
    /**
     * Get the available container instance.
     *
     * @return Http
     */
    function http()
    {
        return Http::getInstance();
    }
}

if (!function_exists('contact')) {
    /**
     * Get the available container instance.
     *
     * @return Contact
     */
    function contact()
    {
        return Contact::getInstance();
    }
}

if (! function_exists('myself')) {
    /**
     * Get the available container instance.
     *
     * @return Myself
     */
    function myself()
    {
        return Myself::getInstance();
    }
}
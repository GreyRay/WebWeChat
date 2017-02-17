<?php
/**
 * Created by PhpStorm.
 * User: herbie
 * Date: 2017/2/17
 * Time: 下午2:17
 */
namespace HerbieZ\WebWeChat\Foundation\ServiceProviders;

use HerbieZ\WebWeChat\Core\Server;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServerServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['server'] = function ($pimple) {
            return server($pimple['config']);
        };
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: herbie
 * Date: 2017/2/17
 * Time: 上午10:52
 */
namespace HerbieZ\WebWeChat\Foundation;

use HerbieZ\WebWeChat\Core\Server;
use Pimple\Container;
use Illuminate\Support\Collection;

/**
 * Class Robot
 * @package HerbieZ\WebWeChat\Core\Server
 * @property Server $server
 */
class Application extends Container
{
    protected $providers = [
        ServiceProviders\ServerServiceProvider::class,
    ];

    public function __construct($config)
    {
        parent::__construct();

        $this['config'] = function () use ($config) {
            return new Collection($config);
        };

        $this->registerProviders();
    }

    protected function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    public function __get($id)
    {
        return $this->offsetGet($id);
    }

    public function __set($id, $value)
    {
        $this->offsetSet($id, $value);
    }
}
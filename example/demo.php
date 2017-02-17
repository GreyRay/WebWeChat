<?php
/**
 * Created by PhpStorm.
 * User: herbie
 * Date: 2017/2/17
 * Time: 上午10:56
 */
require_once __DIR__ . './../vendor/autoload.php';

use HerbieZ\WebWeChat\Foundation\Application;
use HerbieZ\WebWeChat\Support\Console;

$path = __DIR__ . '/./../tmp/';
$app = new Application([
    'tmp' => $path,
    'debug' => true
]);

$app->server->setMessageHandler(function ($message) use ($path) {

});


$app->server->setSyncHandler(function () use ($app) {
    Console::log(json_encode($app->server->baseRequest, true));
    Console::log(server()->passTicket);
    Console::log(json_encode(http()->getClient()->getConfig('cookies')->toArray(), true));
    Console::log(' 同步处理');
});

$app->server->setExitHandler(function () {
    Console::log('herbie其他设备登录');
});

$app->server->setExceptionHandler(function () {
    Console::log('herbie异常退出');
});

$app->server->run();
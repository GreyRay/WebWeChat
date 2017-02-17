<?php
/**
 * Created by PhpStorm.
 * User: herbie
 * Date: 2017/2/17
 * Time: 上午11:16
 */
namespace HerbieZ\WebWeChat\Support;

class System
{
    /**
     * 判断运行服务器是否windows
     *
     * @return bool
     */
    public static function isWin()
    {
        return strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
    }

    public static function getPath()
    {
        $path = server()->config['tmp'] . '/' . myself()->alias . '/';

        if (!is_dir(realpath($path))) {
            mkdir($path, 0700, true);
        }

        return $path;
    }
}
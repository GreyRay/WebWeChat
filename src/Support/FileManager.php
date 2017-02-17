<?php
/**
 * Created by PhpStorm.
 * User: herbie
 * Date: 2017/2/17
 * Time: 上午11:28
 */
namespace HerbieZ\WebWeChat\Support;

class FileManager
{
    public static function download($name, $data, $path = '')
    {
        $path = System::getPath() . $path;
        if(!is_dir(realpath($path))){
            mkdir($path, 0700, true);
        }
        file_put_contents("$path/$name", $data);
    }
}
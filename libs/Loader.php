<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/15
 * Time: 12:03
 */
require_once 'config.php';
require_once 'compile.php';
require_once Controller_PATH.'/_release/release.php';
class Loader
{
    public static $path;
    public  static function baseLoad($path)
    {
        require_once("Controller.php"); //加载控制器类
        require_once("Model.php");      //加载模型类
        require_once("Response.php");   //加载响应类
        require_once("Request.php");    //加载请求类
        require_once("error.php");    //加载错误处理类
        self::$path = $path;
    }
    public static function autoload($className)
    {
        $path = self::$path;
        if(isset($path[$className])){
            require_once($path[$className]);
        }else{
            frameError::classNotFound($className);
        }
    }
}
Loader::baseLoad($path);
spl_autoload_register(array('Loader', 'autoload'));


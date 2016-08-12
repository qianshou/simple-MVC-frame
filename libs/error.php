<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/6/6
 * Time: 18:13
 */
class FrameError
{
    static function create($e=null){
        $e = is_null($e)? error_get_last():$e;
        if(is_null($e))exit;    //正常结束
        TextLoger::errorLog($e);
        if(ENVIRONMENT == "production"){
            self::InteranlError();
        }
    }
    static function InteranlError(){
        echo "<h1>500 InteranlError </h1>";
        exit;
    }
    static function NotFound(){
        echo "<h1>404 NOT FOUND :< </h1>";
        exit;
    }
    static function classNotFound($class){
        echo "<h1>".$class." not found.</h1>";
        exit;
    }
}
register_shutdown_function("FrameError::create");
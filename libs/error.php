<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/6/6
 * Time: 18:13
 */
class frameError
{
    static function create(){
        $e = error_get_last();
        $error_content = '['.date("Y-m-d h:i:s",time());
        switch($e['type']){
            case 1:$error_content .= " | Error ]";
                    break;
            case 2:$error_content .= " | Warning ]";
                    break;
            default:$error_content .= " | Notice ]";
        }
        $error_content .= $e['message']." # In ".$e['file']."(Line ".$e['line'].")\n";
        file_put_contents(Lib_PATH."/log/error.log",$error_content,FILE_APPEND);
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
register_shutdown_function("frameError::create");
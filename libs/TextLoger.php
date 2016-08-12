<?php

/**
 * Created by PhpStorm.
 * User: zhezhao
 * Date: 2016/8/11
 * Time: 16:55
 */
class TextLoger
{
    public static function create($text){
        $text_content = '['.date("Y-m-d h:i:s",time())."|".$text."]";
        file_put_contents(Lib_PATH."/log/msg.log",$text_content,FILE_APPEND);
    }
    public static function errorLog($e){
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
}
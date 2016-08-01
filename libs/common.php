<?php
/**
 * Created by PhpStorm.
 * User: zhezhao
 * Date: 2016/8/1
 * Time: 17:20
 */
function log_message($msg){
    $path = Lib_PATH."/log/msg.log";
    $msg = $msg."\n";
    file_put_contents($path,$msg,FILE_APPEND);
}
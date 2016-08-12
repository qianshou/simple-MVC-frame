<?php
/**
 * Created by PhpStorm.
 * User: zhezhao
 * Date: 2016/8/1
 * Time: 17:20
 */
/**
 * @param $msg
 * 兼容CI框架的记录日志功能
 */
function log_message($msg){
    $path = Log_PATH."msg.log";
    $msg = $msg."\n";
    file_put_contents($path,$msg,FILE_APPEND);
}

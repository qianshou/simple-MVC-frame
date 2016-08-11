<?php
/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/15
 * Time: 10:48
 */
/**
 * $_SERVER['SERVER_ADDR'] 通过ip判断
 * $_SERVER["SERVER_NAME"] 通过域名判断
 */
if($_SERVER['SERVER_ADDR'] == "127.0.0.1"){
    define('ENVIRONMENT','development'); //测试环境
}else{
    define('ENVIRONMENT','production'); //生成环境
}
/**
 * 根据环境定义错误级别
 */
if(ENVIRONMENT == "development"){
    error_reporting(E_ALL ^ E_NOTICE);
}
if(ENVIRONMENT == "production"){
    error_reporting(0);
}
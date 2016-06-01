<?php
/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/15
 * Time: 10:48
 */
define("APP_PATH",substr(__DIR__,0,strlen(__DIR__)-5));
define("Controller_PATH",APP_PATH.DIRECTORY_SEPARATOR."controller");
define("Model_PATH",APP_PATH.DIRECTORY_SEPARATOR."model");
define("View_PATH",APP_PATH.DIRECTORY_SEPARATOR."view");
define("Lib_PATH",APP_PATH.DIRECTORY_SEPARATOR."libs");
define("WebApp_PATH",APP_PATH.DIRECTORY_SEPARATOR."webapp");
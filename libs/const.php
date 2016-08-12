<?php
/**
 * Created by PhpStorm.
 * User: zhezhao
 * Date: 2016/8/11
 * Time: 16:17
 */
define("APP_PATH",dirname(__DIR__));
define("Application",APP_PATH.DIRECTORY_SEPARATOR."application");
define("Controller_PATH",Application.DIRECTORY_SEPARATOR."controller".DIRECTORY_SEPARATOR);
define("Model_PATH",Application.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR);
define("View_PATH",Application.DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR);
define("Lib_PATH",APP_PATH.DIRECTORY_SEPARATOR."libs".DIRECTORY_SEPARATOR);
define("WebApp_PATH",APP_PATH.DIRECTORY_SEPARATOR."webapp".DIRECTORY_SEPARATOR);
//兼容CI框架
define("BASEPATH",Lib_PATH);
<?php
session_start();
require_once(__DIR__."/../libs/config.php");
define("APPPATH",Lib_PATH."/");
define("BASEPATH",APPPATH."/");
define('ENVIRONMENT','production');
require_once(Lib_PATH."/common.php");
require_once(__DIR__."/../libs/Loader.php");
require_once(__DIR__."/../libs/router.php");


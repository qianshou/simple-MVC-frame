<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/6/1
 * Time: 16:38
 */
require_once Lib_PATH."/ext/medoo.php";
class myMedoo
{
    public $db;
    private $default_db = array(
        // 必须配置项
        'database_type' => 'mysql',
        'database_name' => 'test',
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    );
    public function __construct()
    {
        $this->db = new medoo($this->default_db);
    }

    public function dataBase($dbname){
        include_once "databaseConfig.php";
        if(isset($database[$dbname])){
            return new medoo($database[$dbname]);
        }else{
            return false;
        }
    }
}
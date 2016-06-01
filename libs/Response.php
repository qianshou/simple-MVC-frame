<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/6/1
 * Time: 13:41
 */
require_once "mySmarty.php";
class Response
{
    static public $smarty;
    static public function create(){
        self::$smarty = new mySmarty();
    }
    static public function assign($name,$value){
        self::$smarty->assign($name,$value);
    }
    static public  function display($tpl){
        self::$smarty->display($tpl);
    }
    static public function redirect($url){
        header("Location:".$url);
    }
}
Response::create();
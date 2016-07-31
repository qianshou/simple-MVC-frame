<?php
/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/6/1
 * Time: 15:53
 */
require_once "Security.php";
class Request{
    static public $post;
    static public $get;
    static public function create(){
        $security = new CI_Security();
        foreach($_POST as $k => $v){
            self::$post[$k] = $security->xss_clean($v);
        }
        foreach($_GET as $k => $v){
            self::$get[$k] = $security->xss_clean($v);
        }
    }
}
Request::create();
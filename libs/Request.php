<?php
/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/6/1
 * Time: 15:53
 */
class Request{
    static public $post;
    static public $get;
    static public function create(){
        foreach($_POST as $k => $v){
            self::$post[$k] = $v;
        }
        foreach($_GET as $k => $v){
            self::$get[$k] = $v;
        }
    }
}
Request::create();
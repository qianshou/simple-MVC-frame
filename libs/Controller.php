<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/15
 * Time: 10:55
 */
class Controller
{
    public $url;
    public $urlSelf;
    public $urlParent;
    function __construct()
    {
        $this->url = "http://".$_SERVER['HTTP_HOST'];
        Response::assign("url",$this->url);
        $this->urlSelf = $this->url.$_SERVER['PHP_SELF'];
        Response::assign("urlSelf",$this->urlSelf);
        $arr = explode("/",$this->urlSelf);
        unset($arr[(count($arr)-1)]);
        $this->urlParent = implode("/",$arr);
        Response::assign("urlParent",$this->urlParent);
    }

    function __call($name, $arguments)
    {
        exit("function ".$name." doesn't exist.");
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/15
 * Time: 10:55
 */
class Controller
{
    function __construct()
    {
        $url = "http://".$_SERVER['HTTP_HOST'];
        Response::assign("url",$url);
    }

    function __call($name, $arguments)
    {
        exit("function ".$name." doesn't exist.");
    }
}
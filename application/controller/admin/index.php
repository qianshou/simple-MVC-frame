<?php

/**
 * Created by PhpStorm.
 * User: zhezhao
 * Date: 2016/8/12
 * Time: 9:15
 */
class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        echo __CLASS__.":".__FUNCTION__;
    }
    function test(){
        echo "this is a test";
    }

}
<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/28
 * Time: 20:37
 */
class indexController extends Controller
{
    private $loginModel;
    public function __construct()
    {
        parent::__construct();
        $this->loginModel = new loginModel();
    }
    public function index(){
       Response::display("index.html");
    }
    /**
     * 显示登录表单
     */
    function form(){
        Response::assign("callback",Request::$get['callback']);
        Response::display("login.html");
    }

    /**
     * 执行登录操作
     */
    function login(){
        $callback = $_POST['callback'];
        $name = $_POST['name'];
        $password = md5($_POST['password']);
        $res = $this->loginModel->loginCheck($name,$password);
        if($res){
            $token = $res;
            Response::assign("token",$token);
            Response::assign("loginList",$this->loginList);
            Response::assign("callback",$callback);
            Response::display("callback.html");
        }else{
            echo "login error.";exit;
        }
    }
}
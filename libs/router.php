<?php
/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/15
 * Time: 15:09
 */
require_once("config.php");
require_once("Loader.php");
$path = isset($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO']:null;
$path = str_replace("index.php/",'',$path);
$path_array = explode("/",$path);
array_shift($path_array);   //得到完整参数
if(count($path_array)<3){
    switch(count($path_array)){
        case 2:
            $controller = $path_array[0];
            $function = $path_array[1];
            break;
        case 1:
            $controller = $path_array[0];
            $function = "index";
            break;
        case 0:
            $controller = "index";
            $function = "index";
            break;
    }
}else{
    $param = array();   //参数
    foreach($path_array as $num=>$name){
        $temp_dir = Controller_PATH."/".$name;
        if(is_dir($temp_dir)){
            array_shift($path_array);
            continue;
        }else{      //控制器
            $controller = isset($path_array[0])? $path_array[0]:'index';
            $function = isset($path_array[1])? $path_array[1]:'index';
            array_shift($path_array);array_shift($path_array);
            $param = $path_array;
            break;
        }
    }
    if(!empty($param)){ //处理参数
        for($i=0;$i<count($param);$i=$i+2){
            $key = $param[$i];
            $value = isset($param[($i+1)])? $param[($i+1)]:null;
            $_GET[$key] = $value;
        }
    }
}
//echo $controller.":".$function."<hr/>";
$controller .= "Controller";
$controller_obj = new $controller;
$controller_obj->$function();
?>
<?php
/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/15
 * Time: 15:09
 */
require_once(Lib_PATH."config.php");
require_once(Lib_PATH."Loader.php");
class Router
{
    public static function init($class_path)
    {
        $path = isset($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO']:null;
        $path = str_replace("index.php/",'',$path);
        $path = rtrim($path,"/");
        $path_array = explode("/",$path);
        array_shift($path_array);   //得到完整参数
        $class_array = self::splitFoler($path_array);
        $className = $class_array['class'];
        $actionName = $class_array['action'];
        $filePath = $class_array['path'].".php";
        if(!file_exists($filePath)){
            FrameError::NotFound();  //请求类不存在
        }
        require_once $filePath;
        if(!method_exists($className,$actionName)){
            FrameError::NotFound(); //请求方法不存在
        }
        self::exec($className,$actionName);
    }
    public static function exec($className,$action){
        $reflectionMethod = new ReflectionMethod($className,$action);
        $parammeters = $reflectionMethod->getParameters();
        $params = array();
        foreach ($parammeters as $item) {
            preg_match('/> ([^ ]*)/',$item,$arr);
            $class = trim($arr[1]);
            $params[] = new $class();
        }
        session_start();
        $instance = new $className();
        call_user_func_array([$instance,$action],$params);
    }
    public static function splitFoler(&$path_array){
        //去掉路径参数中的文件夹
        $dir_path = Controller_PATH.current($path_array);
        while(is_dir($dir_path)){
            array_shift($path_array);
            $dir_path .= DIRECTORY_SEPARATOR.current($path_array);
        }
        $res['path'] = $dir_path;
        $res['class'] = (current($path_array)===false)?"index":current($path_array);
        $res['action'] = (next($path_array)===false)?"index":current($path_array);
        return $res;
    }
}
Router::init($path);
?>
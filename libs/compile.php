<?php
/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/6/1
 * Time: 13:49
 */
require_once("config.php");
class compile
{
    static public function getPath($path,$resFile){
        $list = scandir($path);
        foreach($list as $file){
            $res = stripos($file,"_");
            if($file!='.'&&$file!='..'&& !($res===0) && $file!='ext'){
                $realPath = $path.DIRECTORY_SEPARATOR.$file;
                if(is_dir($realPath)){
                    self::getPath($realPath,$resFile);
                }else{
                    //获得文件名
                    $index = stripos($file,".");
                    $name = ucfirst(substr($file,0,$index));
                    $tmp = '$path[\''.$name.'\']=\''.$realPath.'\';';
                    file_put_contents($resFile,$tmp,FILE_APPEND);
                }
            }
        }
    }
    static public function create(){
        $releasePath = Controller_PATH."/_release";
        if(!file_exists($releasePath)){
            mkdir($releasePath);
        }
        $releaseFile = $releasePath."/release.php";
        $content = '<?php global $path;$path=array();';
        file_put_contents($releaseFile,$content);
        self::getPath(Controller_PATH,$releaseFile);
        self::getPath(Model_PATH,$releaseFile);
        self::getPath(Lib_PATH,$releaseFile);
        include_once($releaseFile);
    }
}
compile::create();
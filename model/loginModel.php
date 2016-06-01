<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/28
 * Time: 19:56
 */
class loginModel extends Model
{
    /**
     * @param $name
     * @param $password
     * @param $session_id
     * @return array/bool
     */
    function loginCheck($name,$password){
        $sparam = array('id','name','password');
        $wparam = array("name[=]"=>$name);
        $data = $this->db->select("admin",$sparam,$wparam);
        if(empty($data)){
            return false;
        }else{
            $info = $data[0];
            if($info['password']!=$password){
                //验证失败
                return false;
            }else{
                //验证成功，更新token
                $token = substr(md5(time().$info['password']),0,15);
                $newdata = ["token"=>$token];
                $wparam = ["id[=]"=>$info['id']];
                $this->db->update("admin",$newdata,$wparam);
            }
        }
    }
}
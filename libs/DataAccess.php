<?php

/**
 * Created by PhpStorm.
 * User: zhezhao
 * Date: 2016/8/1
 * Time: 16:57
 */
require_once Lib_PATH.'/database/DB.php';
class DataAccess
{
    /**
     * 默认表名
     */
    protected static $table_name = '';

    /**
     * 默认的数据库操作类
     */
    protected $db;


    public function __construct($params = '', $active_record_override = NULL)
    {
        $this -> db = DB($params, $active_record_override);
    }

    /**
     * 创建一个数据库连接
     * @param string $params 数据库连接配置参数信息
     */
    public function database($params = '', $active_record_override = NULL)
    {
        return DB($params, $active_record_override);
    }

}
?>

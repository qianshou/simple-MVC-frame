<?php

/**
 * Created by PhpStorm.
 * User: koastal
 * Date: 2016/5/18
 * Time: 11:18
 */
require_once __DIR__.'/ext/smarty/Smarty.class.php';
class mySmarty extends Smarty
{
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->left_delimiter = "<{";
        $this->right_delimiter = "}>";
        $this ->setTemplateDir(View_PATH);
        $this->setCacheDir( Lib_PATH."/ext/cache/");
        $this->setCompileDir( Lib_PATH."/ext/compile/");
        $this->setConfigDir( Lib_PATH."/ext/config/");
    }
}

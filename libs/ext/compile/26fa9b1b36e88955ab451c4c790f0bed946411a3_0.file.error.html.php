<?php
/* Smarty version 3.1.28, created on 2016-06-12 14:28:23
  from "D:\workspace\sso\auth\view\error.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575d55674808a1_42322436',
  'file_dependency' => 
  array (
    '26fa9b1b36e88955ab451c4c790f0bed946411a3' => 
    array (
      0 => 'D:\\workspace\\sso\\auth\\view\\error.html',
      1 => 1465734496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575d55674808a1_42322436 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>欢迎登陆</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/i/favicon.png">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/assets/css/amazeui.min.css"/>
    <style>
        .header {
            text-align: center;
        }
        .header h1 {
            font-size: 150%;
            color: #333;
            margin-top: 10px;
        }
        .header p {
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="am-g">
        <h1>错误提示</h1>
    </div>
    <hr />
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <p>错误描述：</p>
        <hr>
        <p><?php echo $_smarty_tpl->tpl_vars['errmsg']->value;?>
</p>
    </div>
</div>
<div class="am-g" style="margin-top:200px;">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <p>© koastal 2016</p>
    </div>
</div>

</body>
</html>
<?php }
}

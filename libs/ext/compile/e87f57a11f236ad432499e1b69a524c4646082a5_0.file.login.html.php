<?php
/* Smarty version 3.1.28, created on 2016-05-29 10:07:32
  from "D:\sso\auth\view\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574aa344936291_31017836',
  'file_dependency' => 
  array (
    'e87f57a11f236ad432499e1b69a524c4646082a5' => 
    array (
      0 => 'D:\\sso\\auth\\view\\login.html',
      1 => 1464508430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574aa344936291_31017836 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎登陆</title>
</head>
<body>
<div>
    <form action="http://auth.com/index.php/index/login" method="post">
        <p>用户名:<input type="text" name="name"></p>
        <p>密码:<input type="password" name="password"></p>
        <p><input type="hidden" name="callback" value="<?php echo $_smarty_tpl->tpl_vars['callback']->value;?>
"></p>
        <p><input type="submit" value="登陆"></p>
    </form>
</div>
</body>
</html><?php }
}

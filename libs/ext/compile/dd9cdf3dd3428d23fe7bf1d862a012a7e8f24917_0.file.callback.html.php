<?php
/* Smarty version 3.1.28, created on 2016-05-29 10:45:48
  from "D:\sso\auth\view\callback.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574aac3ceb52c6_82664079',
  'file_dependency' => 
  array (
    'dd9cdf3dd3428d23fe7bf1d862a012a7e8f24917' => 
    array (
      0 => 'D:\\sso\\auth\\view\\callback.html',
      1 => 1464511543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574aac3ceb52c6_82664079 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
$_from = $_smarty_tpl->tpl_vars['loginList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_site_0_saved_item = isset($_smarty_tpl->tpl_vars['site']) ? $_smarty_tpl->tpl_vars['site'] : false;
$_smarty_tpl->tpl_vars['site'] = new Smarty_Variable();
$__foreach_site_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_site_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['site']->value) {
$__foreach_site_0_saved_local_item = $_smarty_tpl->tpl_vars['site'];
?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><?php echo '</script'; ?>
>
    <?php
$_smarty_tpl->tpl_vars['site'] = $__foreach_site_0_saved_local_item;
}
}
if ($__foreach_site_0_saved_item) {
$_smarty_tpl->tpl_vars['site'] = $__foreach_site_0_saved_item;
}
?>
    <?php echo '<script'; ?>
 type="text/javascript">
         window.location.href="<?php echo $_smarty_tpl->tpl_vars['callback']->value;?>
";
    <?php echo '</script'; ?>
>
</head>
<body>
</body>
</html><?php }
}

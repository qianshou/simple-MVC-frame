<?php
/* Smarty version 3.1.28, created on 2016-06-02 06:53:26
  from "D:\sso\auth\view\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574fbbc6e89354_32920327',
  'file_dependency' => 
  array (
    'c429240c8917c0b70d8ff9da30eac8651f6135c3' => 
    array (
      0 => 'D:\\sso\\auth\\view\\list.html',
      1 => 1464843203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fbbc6e89354_32920327 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>添加文章</title>
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
        .header h1 {
            text-align: center;
            color: #333;
            margin-top: 15px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="am-g">
        <h1>添加文章</h1>
    </div>
    <hr />
</div>
<div class="am-g am-g-fixed">
    <div class="am-u-lg-11 am-u-md-11 am-u-sm-centered">
        <table class="am-table" style="font-size: medium">
            <thead>
            <tr>
                <th>标题</th>
                <th>分类</th>
                <th>作者</th>
                <th>创建时间</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['List']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <tr>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index.php/contents/read/getContent/id/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
            </tbody>
        </table>
        <hr>
        <p>© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
    </div>
</div>
</body>
</html>
<?php }
}

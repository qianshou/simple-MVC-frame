<?php
/* Smarty version 3.1.28, created on 2016-06-02 11:43:41
  from "D:\sso\auth\view\write.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_574fffcd8e0d39_91633370',
  'file_dependency' => 
  array (
    '3567b5bb552865cf4b0f8ef63060f6167749f48c' => 
    array (
      0 => 'D:\\sso\\auth\\view\\write.html',
      1 => 1464860618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574fffcd8e0d39_91633370 ($_smarty_tpl) {
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
    <!--引入wangEditor.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/dist/css/wangEditor.min.css">
    <style>
        .header {
            text-align: center;
        }
        .header h1 {
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
<div class="am-g">
    <div class="am-u-lg-11 am-u-md-11 am-u-sm-centered">
        <div class="am-container">
        <form method="post" action="action" class="am-form">
            <div class="am-u-sm-10" style="margin-bottom: 20px">
                <div class="am-u-sm-2 am-text-right">
                        <strong>标题</strong>
                </div>
                <div class="am-u-sm-10">
                    <input type="text" name="title" id="title" placeholder="文章标题">
                </div>
            </div>
            <div class="am-u-sm-10" style="margin-bottom: 20px">
                <div class="am-u-sm-2 am-text-right"><strong>作者</strong></div>
                <div class="am-u-sm-4">
                    <input type="text" name="author">
                </div>
                <div class="am-u-sm-2 am-text-right"><strong>栏目</strong></div>
                <div class="am-u-sm-4">
                    <select name="category" id="category">
                        <?php
$_from = $_smarty_tpl->tpl_vars['cateList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cate_0_saved_item = isset($_smarty_tpl->tpl_vars['cate']) ? $_smarty_tpl->tpl_vars['cate'] : false;
$_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable();
$__foreach_cate_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_cate_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
$__foreach_cate_0_saved_local_item = $_smarty_tpl->tpl_vars['cate'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['cate'] = $__foreach_cate_0_saved_local_item;
}
}
if ($__foreach_cate_0_saved_item) {
$_smarty_tpl->tpl_vars['cate'] = $__foreach_cate_0_saved_item;
}
?>
                    </select>
                </div>
            </div>
            <div class="am-u-sm-10" style="margin-bottom: 20px">
                <div class="am-u-sm-2 am-text-right"><strong>内容</strong></div>
                <div class="am-u-sm-10">
                    <textarea rows="20" cols="50" name="content" id="content" style="text-align: left"></textarea>
                </div>
            </div>
            <div class="">
                <div class="am-u-sm-10 am-u-sm-offset-2">
                    <button type="submit" class="am-btn am-btn-default">提  交</button>
                </div>
            </div>
        </form>
        </div>
        <hr>
        <p>© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
    </div>
</div>
</body>
<!--引入jquery和wangEditor.js-->
<!--注意：javascript必须放在body最后，否则可能会出现问题-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/dist/js/lib/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/dist/js/wangEditor.min.js"><?php echo '</script'; ?>
>
<!--这里引用jquery和wangEditor.js-->
<?php echo '<script'; ?>
 type="text/javascript">
    var editor = new wangEditor('content');
    editor.create();
<?php echo '</script'; ?>
>
</html>
<?php }
}

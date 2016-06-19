<?php
/* Smarty version 3.1.28, created on 2016-06-12 14:51:32
  from "D:\workspace\sso\auth\view\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_575d5ad47d6004_96696515',
  'file_dependency' => 
  array (
    '8cb275996780260f9406be1a3360329f5d906735' => 
    array (
      0 => 'D:\\workspace\\sso\\auth\\view\\login.html',
      1 => 1465735885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575d5ad47d6004_96696515 ($_smarty_tpl) {
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
    <h1>欢迎登陆博客系统</h1>
    <p>学如逆水行舟，不进则退</p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>登录</h3>
    <hr>
    <div class="am-btn-group">
      <a href="#" class="am-btn am-btn-secondary am-btn-sm"><i class="am-icon-qq am-icon-sm"></i> QQ</a>
      <a href="#" class="am-btn am-btn-success am-btn-sm"><i class="am-icon-weibo am-icon-sm"></i> 微博</a>
      <a href="#" class="am-btn am-btn-primary am-btn-sm"><i class="am-icon-weixin am-icon-sm"></i> 微信</a>
    </div>
    <br>
    <br>

    <form method="post" class="am-form" action="<?php echo $_smarty_tpl->tpl_vars['urlParent']->value;?>
/loginJudge">
      <label for="email">邮箱:</label>
      <input type="email" name="email" id="email" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
      <br>
      <label for="remember-me">
        <input id="remember-me" name="remember" type="checkbox" value="1">
        记住密码
      </label>
      <br /><br/>
      <div class="am-cf">
        <input type="submit" name="" value="登　录" class="am-btn am-btn-primary am-btn-sm am-fl">
        <a class="am-btn am-btn-link">忘记密码</a>
        <button class="am-btn am-btn-success am-btn-sm am-fr">注　册</button>
      </div>
    </form>
    <hr>
    <p>© koastal 2016</p>
  </div>
</div>
</body>
</html>
<?php }
}

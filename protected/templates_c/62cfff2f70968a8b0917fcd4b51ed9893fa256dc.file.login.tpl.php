<?php /* Smarty version Smarty-3.1.11, created on 2012-12-15 23:40:39
         compiled from "/var/www/zblog/protected/modules/user/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40697439850cc99f77e7691-46899503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62cfff2f70968a8b0917fcd4b51ed9893fa256dc' => 
    array (
      0 => '/var/www/zblog/protected/modules/user/templates/login.tpl',
      1 => 1355583717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40697439850cc99f77e7691-46899503',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cc99f7910f78_45379486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cc99f7910f78_45379486')) {function content_50cc99f7910f78_45379486($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for')) include '/var/www/zblog/protected/lib/Smarty/plugins/function.url_for.php';
if (!is_callable('smarty_function_root_url')) include '/var/www/zblog/protected/lib/Smarty/plugins/function.root_url.php';
?><form action="" method="post">
    <input type="text" name="username" placeholder="Username or Email" required="">
    <br>
    <input type="password" name="password" placeholder="Password" required="">
    <br>
    <input type="submit" value="Login">
</form>
<hr>
<a href="<?php echo smarty_function_url_for(array('m'=>'user','c'=>'auth','a'=>'register'),$_smarty_tpl);?>
">Register</a>
<br>
<a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
">回到首页</a><?php }} ?>
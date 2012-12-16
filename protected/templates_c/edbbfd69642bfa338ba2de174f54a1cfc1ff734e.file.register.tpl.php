<?php /* Smarty version Smarty-3.1.11, created on 2012-12-16 12:16:04
         compiled from "D:\xampp\htdocs\zblog\protected\modules\user\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2713550c861b3a821e1-90632787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edbbfd69642bfa338ba2de174f54a1cfc1ff734e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\modules\\user\\templates\\register.tpl',
      1 => 1355646142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2713550c861b3a821e1-90632787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c861b3b0da89_11339420',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c861b3b0da89_11339420')) {function content_50c861b3b0da89_11339420($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.url_for.php';
if (!is_callable('smarty_function_root_url')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.root_url.php';
?><h4><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4>
<form action="" method="post">
    <input type="text" name="username" placeholder="Username" required="">
    <br>
    <input type="email" name="email" placeholder="Email optional">
    <br>
    <input type="password" name="password" placeholder="Password" required="">
    <br>
    <input type="submit" value="Register">
</form>
<a href="<?php echo smarty_function_url_for(array('m'=>'user','c'=>'auth','a'=>'login'),$_smarty_tpl);?>
">Already have an account?</a>
<br>
<a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
">回到首页</a><?php }} ?>
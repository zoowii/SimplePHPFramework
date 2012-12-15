<?php /* Smarty version Smarty-3.1.11, created on 2012-12-15 23:41:56
         compiled from "/var/www/zblog/protected/modules/user/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92267949750cc9a447835c6-94106402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5964c7ab98899bb941ceeddd511d51200194877f' => 
    array (
      0 => '/var/www/zblog/protected/modules/user/templates/register.tpl',
      1 => 1355583717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92267949750cc9a447835c6-94106402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cc9a4480f280_71186425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cc9a4480f280_71186425')) {function content_50cc9a4480f280_71186425($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for')) include '/var/www/zblog/protected/lib/Smarty/plugins/function.url_for.php';
if (!is_callable('smarty_function_root_url')) include '/var/www/zblog/protected/lib/Smarty/plugins/function.root_url.php';
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
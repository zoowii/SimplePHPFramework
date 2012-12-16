<?php /* Smarty version Smarty-3.1.11, created on 2012-12-16 12:27:11
         compiled from "D:\xampp\htdocs\zblog\protected\modules\user\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144550cb5bb0e35308-94061385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84e32d844531ce6f360d26feeb75d4f93b5ac3f3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\modules\\user\\templates\\login.tpl',
      1 => 1355646142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144550cb5bb0e35308-94061385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cb5bb0e775c1_31268752',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cb5bb0e775c1_31268752')) {function content_50cb5bb0e775c1_31268752($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.url_for.php';
if (!is_callable('smarty_function_root_url')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.root_url.php';
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
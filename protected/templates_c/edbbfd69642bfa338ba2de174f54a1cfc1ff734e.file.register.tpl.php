<?php /* Smarty version Smarty-3.1.11, created on 2012-12-12 11:51:31
         compiled from "D:\xampp\htdocs\zblog\protected\modules\user\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2713550c861b3a821e1-90632787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edbbfd69642bfa338ba2de174f54a1cfc1ff734e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\modules\\user\\templates\\register.tpl',
      1 => 1355309242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2713550c861b3a821e1-90632787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c861b3b0da89_11339420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c861b3b0da89_11339420')) {function content_50c861b3b0da89_11339420($_smarty_tpl) {?><h4><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4>
<form action="" method="post">
    <input placeholder="Email">
    <br>
    <input placeholder="Password">
    <br>
    <input type="submit">
</form><?php }} ?>
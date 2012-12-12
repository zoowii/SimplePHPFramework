<?php /* Smarty version Smarty-3.1.11, created on 2012-12-12 12:08:24
         compiled from "D:\xampp\htdocs\zblog\protected\templates\tmpl1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169950c8605e9fbf75-47910444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b0bacae143fac3c2aa7056e24ae6e74c9ec9326' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\templates\\tmpl1.tpl',
      1 => 1355310502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169950c8605e9fbf75-47910444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c8605ead7aa5_35852384',
  'variables' => 
  array (
    'message' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c8605ead7aa5_35852384')) {function content_50c8605ead7aa5_35852384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url_for')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.url_for.php';
?><h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</h1>

<hr>
<a href="<?php echo smarty_function_url_for(array('c'=>'auth','a'=>'register','m'=>'user'),$_smarty_tpl);?>
">Register</a><?php }} ?>
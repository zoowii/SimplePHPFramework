<?php /* Smarty version Smarty-3.1.11, created on 2012-12-14 08:11:25
         compiled from "E:\xampp\htdocs\zblog\protected\templates\tmpl1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2770750cacf534175d0-46200496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52580b7b21afd46f8e50b3f7eb74f4183e677c43' => 
    array (
      0 => 'E:\\xampp\\htdocs\\zblog\\protected\\templates\\tmpl1.tpl',
      1 => 1355469074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2770750cacf534175d0-46200496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cacf53472199_54897501',
  'variables' => 
  array (
    'message' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cacf53472199_54897501')) {function content_50cacf53472199_54897501($_smarty_tpl) {?><?php if (!is_callable('smarty_function_root_url')) include 'E:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.root_url.php';
if (!is_callable('smarty_function_url_for')) include 'E:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.url_for.php';
?><h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</h1>
<hr>
ROOT URL is : <?php echo smarty_function_root_url(array(),$_smarty_tpl);?>

<hr>
<a href="<?php echo smarty_function_url_for(array('c'=>'auth','a'=>'register','m'=>'user'),$_smarty_tpl);?>
">Register</a><?php }} ?>
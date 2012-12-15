<?php /* Smarty version Smarty-3.1.11, created on 2012-12-14 08:07:40
         compiled from "E:\xampp\htdocs\zblog\protected\modules\user\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40650cad03ca2a2f4-31310287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7672d7eedd34706b16022b07eac9eae58fb530cd' => 
    array (
      0 => 'E:\\xampp\\htdocs\\zblog\\protected\\modules\\user\\templates\\register.tpl',
      1 => 1355468163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40650cad03ca2a2f4-31310287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cad03ca5a1a2_41531143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cad03ca5a1a2_41531143')) {function content_50cad03ca5a1a2_41531143($_smarty_tpl) {?><h4><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4>
<form action="" method="post">
    <input placeholder="Email">
    <br>
    <input placeholder="Password">
    <br>
    <input type="submit">
</form><?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2012-12-14 14:19:28
         compiled from "E:\xampp\htdocs\zblog\protected\layouts\website.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1621650cacf5348d071-97131580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f343301d657d6b9aca29c5fc2a2148d84b18026' => 
    array (
      0 => 'E:\\xampp\\htdocs\\zblog\\protected\\layouts\\website.tpl',
      1 => 1355491160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621650cacf5348d071-97131580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cacf53493cf3_64077662',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cacf53493cf3_64077662')) {function content_50cacf53493cf3_64077662($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include 'E:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.asset.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '首页' : $tmp);?>
</title>
    <?php echo smarty_function_asset(array('file'=>'jquery-1.8.3.min.js','type'=>'js'),$_smarty_tpl);?>
   <!-- type attribute is optional -->
    <?php echo smarty_function_asset(array('file'=>'underscore-min.js','type'=>'js'),$_smarty_tpl);?>

    <?php echo smarty_function_asset(array('file'=>'backbone-min.js','type'=>'js'),$_smarty_tpl);?>

    <?php echo smarty_function_asset(array('file'=>'bootstrap.min.css','type'=>'css'),$_smarty_tpl);?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo smarty_function_asset(array('file'=>'bootstrap-responsive.min.css','type'=>'css'),$_smarty_tpl);?>

    <?php echo smarty_function_asset(array('file'=>'bootstrap.min.js','type'=>'js'),$_smarty_tpl);?>

</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</body>
</html><?php }} ?>
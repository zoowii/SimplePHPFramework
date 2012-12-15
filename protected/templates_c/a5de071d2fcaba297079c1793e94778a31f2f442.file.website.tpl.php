<?php /* Smarty version Smarty-3.1.11, created on 2012-12-14 15:47:37
         compiled from "D:\xampp\htdocs\zblog\protected\layouts\website.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1168050c8605eb1ecd5-14371411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5de071d2fcaba297079c1793e94778a31f2f442' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\layouts\\website.tpl',
      1 => 1355493908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1168050c8605eb1ecd5-14371411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50c8605eb287f9_07172781',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c8605eb287f9_07172781')) {function content_50c8605eb287f9_07172781($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.asset.php';
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
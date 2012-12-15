<?php /* Smarty version Smarty-3.1.11, created on 2012-12-15 23:09:04
         compiled from "/var/www/zblog/protected/layouts/website.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42187775350cc9290d74484-33909820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5737848754a9e3e5f353247136d41b26c95c6b40' => 
    array (
      0 => '/var/www/zblog/protected/layouts/website.tpl',
      1 => 1355583717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42187775350cc9290d74484-33909820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cc9290d936a7_94513107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cc9290d936a7_94513107')) {function content_50cc9290d936a7_94513107($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include '/var/www/zblog/protected/lib/Smarty/plugins/function.asset.php';
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
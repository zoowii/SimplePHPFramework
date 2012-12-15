<?php /* Smarty version Smarty-3.1.11, created on 2012-12-16 00:40:05
         compiled from "/var/www/zblog/protected/modules/blog/templates/create_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103539836550cca7e5142272-12408164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b759b683ae64ef6ab72b179b6b4d847163bece5' => 
    array (
      0 => '/var/www/zblog/protected/modules/blog/templates/create_blog.tpl',
      1 => 1355588228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103539836550cca7e5142272-12408164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cca7e5170804_79624509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cca7e5170804_79624509')) {function content_50cca7e5170804_79624509($_smarty_tpl) {?><form action="" method="post">
    <input name="title" placeholder="Title"> <br>
    <input name="content" placeholder="Content"> <br>
    <input name="content_type" type="hidden">
    <input name="labels" placeholder="Labels"> <br>
    <input type="submit" value="Create">
</form><?php }} ?>
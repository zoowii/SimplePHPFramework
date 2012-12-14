<?php /* Smarty version Smarty-3.1.11, created on 2012-12-14 14:29:30
         compiled from "E:\xampp\htdocs\zblog\protected\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1829150cb20542cee78-40847072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3313aab103240d96641918d037e652c42332b50c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\zblog\\protected\\templates\\main.tpl',
      1 => 1355491765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1829150cb20542cee78-40847072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cb20542f5510_11223302',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cb20542f5510_11223302')) {function content_50cb20542f5510_11223302($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include 'E:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.asset.php';
?><?php echo smarty_function_asset(array('file'=>'site/config.js'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'site/main.js','type'=>'js'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'site/styles.css','type'=>'css'),$_smarty_tpl);?>

<div class='container'>
    <div class="navbar">
        <div class="navbar-inner">
            <a class="brand website-link" href="#">Title</a>
            <ul class='nav'>
                <li class='active'>
                    <a href='#'>Home</a>
                </li>
                <li><a href='#' class="blog-link">Blog</a></li>
                <li><a href='#' class="aboutme-link">About me</a></li>
            </ul>
            <form class="navbar-search pull-right">
                <input type="text" class="search-query" placeholder="Search">
            </form>
        </div>
    </div>
    <div class='content'>
        <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Library</a> <span class="divider">/</span></li>
            <li class="active">Data</li>
        </ul>
        <div class='tabbable tabs-right'>
            <ul class='nav nav-tabs'>
                <li class='active'>
                    <a data-toggle='tab' href='#rA'>Section 1</a>
                </li>
                <li>
                    <a data-toggle='tab' href='#rB'>Section 2</a>
                </li>
                <li>
                    <a data-toggle='tab' href='#rC'>Section 3</a>
                </li>
            </ul>
            <div class='tab-content'>
                <div id='rA' class='tab-pane active'>
                    <code>Section A</code>
                </div>
                <div id='rB' class='tab-pane'>
                    <code>Section B</code>
                </div>
                <div id='rC' class='tab-pane'>
                    <code>Section C</code>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2012-12-16 14:21:35
         compiled from "D:\xampp\htdocs\zblog\protected\modules\blog\templates\view_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2171550cdb2fb6da722-50686298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c8dac99a2e5109f9a68c9d5949dfce12f6406dc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\modules\\blog\\templates\\view_blog.tpl',
      1 => 1355664035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2171550cdb2fb6da722-50686298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cdb2fb7f12d9_72965634',
  'variables' => 
  array (
    'blog' => 0,
    'key' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cdb2fb7f12d9_72965634')) {function content_50cdb2fb7f12d9_72965634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.asset.php';
?><script type="text/javascript">
    var blog_id = <?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
;
    var blog_title = "<?php echo $_smarty_tpl->tpl_vars['blog']->value->title;?>
";
    var blog_author = "<?php echo $_smarty_tpl->tpl_vars['blog']->value->author->username;?>
";
    var blog_create_time = "<?php echo $_smarty_tpl->tpl_vars['blog']->value->create_time;?>
";
    var blog_labels = [
    <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blog']->value->getLabelNames(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value>0){?>
            ,
        <?php }?>
        "<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
"
    <?php } ?>
    ];
</script>

<?php echo smarty_function_asset(array('file'=>'view_blog.js','type'=>'js','m'=>'blog'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'view_blog.css','type'=>'css','m'=>'blog'),$_smarty_tpl);?>


<div id="blog-real-content">
<?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>
 
</div>

<pre>
    <div class="blog-preview-labels">

    </div>
    <div id="preview">
    </div>
</pre><?php }} ?>
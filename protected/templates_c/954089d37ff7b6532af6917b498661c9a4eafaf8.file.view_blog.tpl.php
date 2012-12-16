<?php /* Smarty version Smarty-3.1.11, created on 2012-12-16 14:10:29
         compiled from "/var/www/zblog/protected/modules/blog/templates/view_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48122163350cd5cf96d1796-57235170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '954089d37ff7b6532af6917b498661c9a4eafaf8' => 
    array (
      0 => '/var/www/zblog/protected/modules/blog/templates/view_blog.tpl',
      1 => 1355638227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48122163350cd5cf96d1796-57235170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cd5cf96d2251_35248541',
  'variables' => 
  array (
    'blog' => 0,
    'labels' => 0,
    'key' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cd5cf96d2251_35248541')) {function content_50cd5cf96d2251_35248541($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include '/var/www/zblog/protected/lib/Smarty/plugins/function.asset.php';
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
 $_from = $_smarty_tpl->tpl_vars['labels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value>0){?>
            ,
        <?php }?>
        "<?php echo $_smarty_tpl->tpl_vars['label']->value->name;?>
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
    <div id="preview">
    </div>
</pre><?php }} ?>
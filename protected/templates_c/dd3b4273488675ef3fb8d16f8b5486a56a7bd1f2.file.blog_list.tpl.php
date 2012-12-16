<?php /* Smarty version Smarty-3.1.11, created on 2012-12-16 13:57:57
         compiled from "D:\xampp\htdocs\zblog\protected\modules\blog\templates\blog_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1301250cdabe7732939-80922730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd3b4273488675ef3fb8d16f8b5486a56a7bd1f2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\modules\\blog\\templates\\blog_list.tpl',
      1 => 1355662596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1301250cdabe7732939-80922730',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cdabe77347d1_86820576',
  'variables' => 
  array (
    'blogs' => 0,
    'key' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cdabe77347d1_86820576')) {function content_50cdabe77347d1_86820576($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.asset.php';
if (!is_callable('smarty_function_url_for')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.url_for.php';
?><?php echo smarty_function_asset(array('file'=>'blog_list.css','m'=>'blog'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'blog_list.js','m'=>'blog'),$_smarty_tpl);?>

<script type="text/javascript">
    var blogs_size = <?php echo count($_smarty_tpl->tpl_vars['blogs']->value);?>
;
    var blogs = {
    <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['blog']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value>0){?>,<?php }?>
            "blog_<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
": <?php echo json_encode($_smarty_tpl->tpl_vars['blog']->value->toArray());?>

    <?php } ?>
    }
    ;
    var blogs_labels = {
    <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['blog']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value>0){?>,<?php }?>
            "blog_<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
": <?php echo json_encode($_smarty_tpl->tpl_vars['blog']->value->getLabelNames());?>

    <?php } ?>
    }
    ;
</script>
<div class="blog-list-area">
    <div class="well blog-list-left-area">
        <ul class="nav nav-list">
            <li class="nav-header">Blog List</li>
        <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['blog']->key;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['key']->value==0){?> class='active blog-list-item'<?php }else{ ?> class='blog-list-item'<?php }?>
                              blog_id='<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
' labels='<?php echo htmlspecialchars(join(' ',$_smarty_tpl->tpl_vars['blog']->value->getLabelNames()), ENT_QUOTES, 'UTF-8', true);?>
'
                              data-content='<?php echo htmlspecialchars(join(' ',$_smarty_tpl->tpl_vars['blog']->value->getLabelNames()), ENT_QUOTES, 'UTF-8', true);?>
'
                              data-original-title='<?php echo $_smarty_tpl->tpl_vars['blog']->value->title;?>
'
                              data-placement="right" rel="popover">
                <a href="<?php echo smarty_function_url_for(array('m'=>'blog','c'=>'blog','a'=>'view'),$_smarty_tpl);?>
&id=<?php echo $_smarty_tpl->tpl_vars['blog']->value->id;?>
">
                    <span class="blog-link-title"><?php echo $_smarty_tpl->tpl_vars['blog']->value->title;?>
</span>
                    <span class="blog-link-time"><?php echo Common::getIntervalTime(time()-time($_smarty_tpl->tpl_vars['blog']->value->create_time));?>
</span>
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>

    <div class="blog-list-right-area clearbox">
        <div class="blog-preview-header">
            <div class="blog-preview-title">

            </div>
            <div class="pull-right labels-preview"></div>
        </div>
        <pre id="preview">

        </pre>
    </div>
</div>
<?php }} ?>
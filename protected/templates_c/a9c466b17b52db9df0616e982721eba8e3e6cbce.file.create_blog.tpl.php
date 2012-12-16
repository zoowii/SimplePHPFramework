<?php /* Smarty version Smarty-3.1.11, created on 2012-12-16 12:39:19
         compiled from "D:\xampp\htdocs\zblog\protected\modules\blog\templates\create_blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1578750cdb2e7871a78-75781963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9c466b17b52db9df0616e982721eba8e3e6cbce' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\modules\\blog\\templates\\create_blog.tpl',
      1 => 1355646142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1578750cdb2e7871a78-75781963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cdb2e78d9200_27735388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cdb2e78d9200_27735388')) {function content_50cdb2e78d9200_27735388($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.asset.php';
if (!is_callable('smarty_function_url_for')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.url_for.php';
?><?php echo smarty_function_asset(array('file'=>'create_blog.css','m'=>'blog'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'create_blog.js','m'=>'blog'),$_smarty_tpl);?>

<script type="text/javascript">
    var create_blog_url = "<?php echo smarty_function_url_for(array('m'=>'blog','c'=>'blog','a'=>'create'),$_smarty_tpl);?>
";
    var make_url_of_blog = function(blog_id) {
        return "<?php echo smarty_function_url_for(array('m'=>'blog','c'=>'blog','a'=>'view'),$_smarty_tpl);?>
&id=" + blog_id;
    }
</script>
<div class="create-blog-area">
    <span>标题</span> <input id="blog-title-input" placeholder="Title"> <br>

    <div id="blog-content-area">
        <textarea id="blog-content-input"
                  rows='6' cols="60">
            Type markdown here
        </textarea>

        <div id="preview"></div>
    </div>
    <input id="blog-content-type-input" type="hidden" value="markdown">
    <input id="blog-labels-input" placeholder="标签，用空格隔开"> <br>
    <input id="submit-blog-btn" type="button" class="btn btn-danger" value="创建">
</div>
<?php }} ?>
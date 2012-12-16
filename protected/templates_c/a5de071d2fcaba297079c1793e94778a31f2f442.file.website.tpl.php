<?php /* Smarty version Smarty-3.1.11, created on 2012-12-16 12:34:29
         compiled from "D:\xampp\htdocs\zblog\protected\layouts\website.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1168050c8605eb1ecd5-14371411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5de071d2fcaba297079c1793e94778a31f2f442' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\layouts\\website.tpl',
      1 => 1355657665,
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
    'module' => 0,
    'content' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c8605eb287f9_07172781')) {function content_50c8605eb287f9_07172781($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.asset.php';
if (!is_callable('smarty_function_root_url')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.root_url.php';
if (!is_callable('smarty_function_url_for')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.url_for.php';
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

<?php echo smarty_function_asset(array('file'=>'markdown.js','type'=>'js'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'site/config.js'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'site/main.js','type'=>'js'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'site/styles.css','type'=>'css'),$_smarty_tpl);?>

</head>
<body>
<div class='container'>
    <div class="page-header">
        <a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/" class="header-link">
            <h1>我大逆不道
                <small>Site of Zoowii</small>
            </h1>
        </a>

        <div class="pull-left">
            <ul class="nav nav-pills">
                <li><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/">Home</a></li>
                <li><a href="<?php echo smarty_function_url_for(array('m'=>'blog'),$_smarty_tpl);?>
">Blog</a></li>
            </ul>
        </div>
        <div class="pull-right">
        <?php if (BP::user()->isGuest()){?>
            <a href="<?php echo smarty_function_url_for(array('m'=>'user','c'=>'auth','a'=>'login'),$_smarty_tpl);?>
">登陆</a>
            /
            <a href="<?php echo smarty_function_url_for(array('m'=>'user','c'=>'auth','a'=>'register'),$_smarty_tpl);?>
">注册</a>
            <?php }else{ ?>
            <span class="label label-info"><?php echo BP::user()->name;?>
</span>
        <?php }?>
        </div>
    </div>
    <div class='content'>
        <ul class="breadcrumb">

        <?php if (!isset($_smarty_tpl->tpl_vars['module']->value)){?>
            <li class="active">Home</li>
            <?php }else{ ?>
            <li><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
">Home</a> <span class="divider">/</span></li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['module']->value;?>
</li>
        <?php }?>
        </ul>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php if (isset($_smarty_tpl->tpl_vars['comments']->value)){?>
        <div class="comments">
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                var disqus_shortname = 'zoowii-nocoding'; // required: replace example with your forum shortname

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function () {
                    var dsq = document.createElement('script');
                    dsq.type = 'text/javascript';
                    dsq.async = true;
                    dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by
                Disqus.</a></noscript>
            <a href="http://disqus.com" class="dsq-brlink">comments powered by <span
                    class="logo-disqus">Disqus</span></a>

        </div>
    <?php }?>
    </div>
</div>
</body>
</html><?php }} ?>
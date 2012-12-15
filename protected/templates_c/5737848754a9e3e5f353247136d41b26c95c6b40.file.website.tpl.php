<?php /* Smarty version Smarty-3.1.11, created on 2012-12-16 00:45:54
         compiled from "/var/www/zblog/protected/layouts/website.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42187775350cc9290d74484-33909820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5737848754a9e3e5f353247136d41b26c95c6b40' => 
    array (
      0 => '/var/www/zblog/protected/layouts/website.tpl',
      1 => 1355589951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42187775350cc9290d74484-33909820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cc9290d936a7_94513107',
  'variables' => 
  array (
    'title' => 0,
    'isGuest' => 0,
    'username' => 0,
    'module' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cc9290d936a7_94513107')) {function content_50cc9290d936a7_94513107($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include '/var/www/zblog/protected/lib/Smarty/plugins/function.asset.php';
if (!is_callable('smarty_function_url_for')) include '/var/www/zblog/protected/lib/Smarty/plugins/function.url_for.php';
if (!is_callable('smarty_function_root_url')) include '/var/www/zblog/protected/lib/Smarty/plugins/function.root_url.php';
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
<?php echo smarty_function_asset(array('file'=>'site/config.js'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'site/main.js','type'=>'js'),$_smarty_tpl);?>

<?php echo smarty_function_asset(array('file'=>'site/styles.css','type'=>'css'),$_smarty_tpl);?>

<div class='container'>















    <div class="page-header">
        <h1>我大逆不道
            <small>Site of Zoowii</small>
        </h1>
        <div class="pull-right">
        <?php if ($_smarty_tpl->tpl_vars['isGuest']->value){?>
            <a href="<?php echo smarty_function_url_for(array('m'=>'user','c'=>'auth','a'=>'login'),$_smarty_tpl);?>
">登陆</a>
            /
            <a href="<?php echo smarty_function_url_for(array('m'=>'user','c'=>'auth','a'=>'register'),$_smarty_tpl);?>
">注册</a>
            <?php }else{ ?>
            <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
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
    </div>
</div>
</body>
</html><?php }} ?>
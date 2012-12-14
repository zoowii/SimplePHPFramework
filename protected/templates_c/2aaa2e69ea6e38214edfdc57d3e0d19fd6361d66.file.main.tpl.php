<?php /* Smarty version Smarty-3.1.11, created on 2012-12-14 18:26:17
         compiled from "D:\xampp\htdocs\zblog\protected\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2138650cb3c095e5416-01875515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aaa2e69ea6e38214edfdc57d3e0d19fd6361d66' => 
    array (
      0 => 'D:\\xampp\\htdocs\\zblog\\protected\\templates\\main.tpl',
      1 => 1355505971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2138650cb3c095e5416-01875515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50cb3c0975e952_52191275',
  'variables' => 
  array (
    'isGuest' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cb3c0975e952_52191275')) {function content_50cb3c0975e952_52191275($_smarty_tpl) {?><?php if (!is_callable('smarty_function_asset')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.asset.php';
if (!is_callable('smarty_function_url_for')) include 'D:\\xampp\\htdocs\\zblog\\protected\\lib\\Smarty\\plugins\\function.url_for.php';
?><?php echo smarty_function_asset(array('file'=>'site/config.js'),$_smarty_tpl);?>

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
            <li class="active">Home</li>
        
        
        </ul>
        <pre>
            Content
            <br>
            Here
        </pre>
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
</div><?php }} ?>
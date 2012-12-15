<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>{$title|default: '首页'}</title>
{asset file='jquery-1.8.3.min.js' type='js'}   <!-- type attribute is optional -->
{asset file='underscore-min.js' type='js'}
{asset file='backbone-min.js' type='js'}
{asset file='bootstrap.min.css' type='css'}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{asset file='bootstrap-responsive.min.css' type='css'}
{asset file='bootstrap.min.js' type='js'}
</head>
<body>
{asset file='site/config.js'}
{asset file='site/main.js' type='js'}
{asset file='site/styles.css' type='css'}
<div class='container'>
{*<div class="navbar">*}
{*<div class="navbar-inner">*}
{*<a class="brand website-link" href="#">Title</a>*}
{*<ul class='nav'>*}
{*<li class='active'>*}
{*<a href='#'>Home</a>*}
{*</li>*}
{*<li><a href='#' class="blog-link">Blog</a></li>*}
{*<li><a href='#' class="aboutme-link">About me</a></li>*}
{*</ul>*}
{*<form class="navbar-search pull-right">*}
{*<input type="text" class="search-query" placeholder="Search">*}
{*</form>*}
{*</div>*}
{*</div>*}
    <div class="page-header">
        <h1>我大逆不道
            <small>Site of Zoowii</small>
        </h1>
        <div class="pull-right">
        {if $isGuest}
            <a href="{url_for m='user' c='auth' a='login'}">登陆</a>
            /
            <a href="{url_for m='user' c='auth' a='register'}">注册</a>
            {else}
            <span class="label label-info">{$username}</span>
        {/if}
        </div>
    </div>
    <div class='content'>
        <ul class="breadcrumb">

        {if !isset($module)}
            <li class="active">Home</li>
            {else}
            <li><a href="{root_url}">Home</a> <span class="divider">/</span></li>
            <li class="active">{$module}</li>
        {/if}
        {*<li><a href="#">Library</a> <span class="divider">/</span></li>*}
        {*<li class="active">Data</li>*}
        </ul>
    {$content}
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
</html>
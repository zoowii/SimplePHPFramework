<script type="text/javascript">
    var blog_id = {$blog->id};
    var blog_title = "{$blog->title}";
    var blog_author = "{$blog->author->username}";
    var blog_create_time = "{$blog->create_time}";
    var blog_labels = [
    {foreach $blog->getLabelNames() as $key=>$label}
        {if $key > 0}
            ,
        {/if}
        "{$label}"
    {/foreach}
    ];
</script>

{asset file='view_blog.js' type='js' m='blog'}
{asset file='view_blog.css' type='css' m='blog'}

<div id="blog-real-content">
{$blog->content} {* ? escape:html *}
</div>

<pre>
    <div class="blog-preview-labels">

    </div>
    <div id="preview">
    </div>
</pre>
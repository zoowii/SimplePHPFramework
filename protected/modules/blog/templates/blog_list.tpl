{asset file='blog_list.css' m='blog'}
{asset file='blog_list.js' m='blog'}
<script type="text/javascript">
    var blogs_size = {count($blogs)};
    var blogs = {
    {foreach $blogs as $key=>$blog}
        {if $key > 0},{/if}
            "blog_{$blog->id}": {json_encode($blog->toArray())}
    {/foreach}
    }
    ;
    var blogs_labels = {
    {foreach $blogs as $key=>$blog}
        {if $key > 0},{/if}
            "blog_{$blog->id}": {json_encode($blog->getLabelNames())}
    {/foreach}
    }
    ;
</script>
<div class="blog-list-area">
    <div class="well blog-list-left-area">
        <ul class="nav nav-list">
            <li class="nav-header">Blog List</li>
        {foreach $blogs as $key => $blog}
            <li{if $key == 0} class='active blog-list-item'{else} class='blog-list-item'{/if}
                              blog_id='{$blog->id}' labels='{join(' ', $blog->getLabelNames())|escape:html}'
                              data-content='{join(' ', $blog->getLabelNames())|escape:html}'
                              data-original-title='{$blog->title}'
                              data-placement="right" rel="popover">
                <a href="{url_for m='blog' c='blog' a='view'}&id={$blog->id}">
                    <span class="blog-link-title">{$blog->title}</span>
                    <span class="blog-link-time">{Common::getIntervalTime(time() - time($blog->create_time))}</span>
                </a>
            </li>
        {/foreach}
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

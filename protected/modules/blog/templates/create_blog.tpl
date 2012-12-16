{asset file='create_blog.css' m='blog'}
{asset file='create_blog.js' m='blog'}
<script type="text/javascript">
    var create_blog_url = "{url_for m='blog' c='blog' a='create'}";
    var make_url_of_blog = function(blog_id) {
        return "{url_for m='blog' c='blog' a='view'}&id=" + blog_id;
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

$(function () {
    var $preview = $("#preview");
    var $labelsPreview = $(".labels-preview");
    var $blogListItems = $(".blog-list-item");
//    var lastToggleTime = new Date().getSeconds();
    $blogListItems.mouseover(_.debounce(function (e) {
        var blog_id = $(this).attr('blog_id');
        $blogListItems.removeClass('active');
        $(".blog-list-item[blog_id=" + blog_id + "]").addClass('active');
//        var now = (new Date()).getSeconds();
//        console.log(lastToggleTime);
//        console.log(now);
//        console.log(now - lastToggleTime);
//        if (now - lastToggleTime >= 2) {
        var blog = blogs['blog_' + blog_id];
//        $blogListItems.popover('hide');
//        $(this).popover('show');
        showBlog(blog);
//        lastToggleTime = now;
//        }
//        } else {
//            $blogListItems.popover('hide');
//        }
    }, 200));
    if (blogs_size > 0) {
        var blog_id = $(".blog-list-item:first").attr('blog_id');
        var blog = blogs['blog_' + blog_id];
        showBlog(blog);
    }

    function showLabels(labels) {
        var labelTypes = ['label-success', 'label-warning', '', 'label-important', 'label-info', 'label-inverse'];
        var html = '';
        for (var i = 0; i < labels.length; ++i) {
            if (i > 0) {
                html += '<span class="divider"> </span> ';
            }
            html += '<label class="blog-label label ' + labelTypes[i % labelTypes.length] + '">' + labels[i] + '</label>';
        }
        $labelsPreview.html(html);
    }

    function showBlog(blog) {
        $preview.html(markdown.toHTML(blog.content));
        showLabels(blogs_labels['blog_' + blog['id']]);
    }
});
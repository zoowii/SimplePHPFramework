$(function () {
    function Editor(input, preview) {
        this.update = function () {
            preview.innerHTML = markdown.toHTML(input.value);
        }
        input.editor = this;
        this.update();
    }

    var $blogContentInput = $("#blog-content-input");
    var $preview = $("#preview");
    var $submitBlogBtn = $("#submit-blog-btn");
    var $blogTitleInput = $("#blog-title-input");
    var $blogContentTypeInput = $("#blog-content-type-input");
    var $blogLabelsInput = $("#blog-labels-input");
    var editor = new Editor($blogContentInput[0], $preview[0]);
    $blogContentInput.keyup(_.debounce(editor.update, 100));
    $submitBlogBtn.click(function () {
        var blog_title = $blogTitleInput.val();
        var content_type = $blogContentTypeInput.val();
        var labels = _.uniq(_.filter($blogLabelsInput.val().split(' '), function (str) {
            return str.length > 0;
        }));
        var content = $blogContentInput.val();
        $.post(create_blog_url, {
            title:blog_title,
            content_type:content_type,
            labels:labels,
            content:content
        }, function (data) {
            if (data.success) {
                window.location.href = make_url_of_blog(data.data.id);
            } else {
                alert("创建博客失败！");
            }
        }, 'json');
    });
});
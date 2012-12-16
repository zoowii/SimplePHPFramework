$(function () {
    var preview = $("#preview");
    var blog_content = $("#blog-real-content").html();
    preview.html(markdown.toHTML(blog_content));
});
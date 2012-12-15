$(function () {
    var config = window.z.config;
    $('.website-link').html(config.app_name);
    $(".blog-link").attr('href', config.author_blog_url);
    $(".aboutme-link").attr('href', config.about_author_url);
});
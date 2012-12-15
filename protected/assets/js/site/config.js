(function (context) {
    var config = {
        app_name: 'ZBlog',
        app_show_name: 'Around的博客',
        author_name: 'zoowii',
        author_email: '1992zhouwei@gmail.com',
        author_blog_url: 'http://blog.nocoding.me',
        about_author_url: 'http://aboutzoowii.duapp.com'
    };
    if (context.z === undefined) {
        context.z = {};
    }
    context.z.config = config;
})(window);
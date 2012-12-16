$(function () {
    var $preview = $("#preview");
    var $labelsPreview = $(".blog-preview-labels");
    var blog_content = $("#blog-real-content").html();
    $preview.html(markdown.toHTML(blog_content));
    showLabels(blog_labels);
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
});
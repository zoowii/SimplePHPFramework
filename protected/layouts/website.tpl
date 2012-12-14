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
{$content}
</body>
</html>
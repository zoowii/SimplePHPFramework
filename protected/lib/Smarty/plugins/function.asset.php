<?php

function smarty_function_asset($params, $template)
{
    $file = $params['file'];
    $type = isset($params['type']) ? $params['type'] : false;
    $m = isset($params['m']) ? $params['m'] : false;
    $genHtml = isset($params['genHtml']) ? $params['genHtml'] : true;
    return Html::asset($file, $type, $m, $genHtml);
}
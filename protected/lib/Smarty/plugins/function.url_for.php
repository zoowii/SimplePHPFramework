<?php

function smarty_function_url_for($params, $template)
{
    $c = isset($params['c']) ? $params['c'] : 'site';
    $a = isset($params['a']) ? $params['a'] : 'index';
    $m = isset($params['m']) ? $params['m'] : false;
    return Html::url_for($c, $a, $m);
}
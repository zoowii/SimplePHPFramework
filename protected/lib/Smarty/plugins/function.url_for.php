<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-12
 * Time: 下午7:04
 * To change this template use File | Settings | File Templates.
 */
function smarty_function_url_for($params, $template)
{
    $c = isset($params['c']) ? $params['c'] : 'site';
    $a = isset($params['a']) ? $params['a'] : 'index';
    $m = isset($params['m']) ? $params['m'] : false;
    return Html::url_for($c, $a, $m);
}
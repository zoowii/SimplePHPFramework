<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-12
 * Time: 下午6:52
 * To change this template use File | Settings | File Templates.
 */
class Html
{
    public static function encode($obj)
    {
        return json_encode($obj); // TODO: encode obj to html escaped string
    }

    /**
     * generate url for controller/action/module request
     * @param $c
     * @param string $a
     * @param bool $m
     */
    public static function url_for($c, $a = 'index', $m = false)
    {
        return '/' . APPLICATION_NAME . "/?c=$c&a=$a" . ($m !== false ? "&m=$m" : '');
    }
}

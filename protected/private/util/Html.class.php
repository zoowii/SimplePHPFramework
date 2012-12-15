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
        return APPLICATION_NAME . "/?c=$c&a=$a" . ($m !== false ? "&m=$m" : '');
    }
	
	public static function root_url()
	{
		return APPLICATION_NAME;
	}

    public static function asset($filename, $type = false, $m = false, $genHtml = true)
    {
        if(!$type) {
            $dotPos = strrpos($filename, '.');
            $type = substr($filename, $dotPos + 1, strlen($filename) - $dotPos - 1);
        }
        if($m) {
            // is in module
            $filepath = Common::urlPath(APPLICATION_NAME, 'protected', 'modules', $m, 'assets', $type, $filename);
        } else {
            // is in global
            $filepath = Common::urlPath(APPLICATION_NAME, 'protected', 'assets', $type, $filename);
        }
        if($genHtml) {
            if($type === 'js') {
                return "<script type='text/javascript' src='$filepath'></script>";
            } else {
                return "<link type='text/$type' rel='stylesheet' href='$filepath'>";
            }
        } else {
            return $filepath;
        }
    }
	
}

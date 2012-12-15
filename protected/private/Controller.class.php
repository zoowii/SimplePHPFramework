<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-12
 * Time: 下午2:18
 * To change this template use File | Settings | File Templates.
 */
class Controller
{

    protected $module;
    protected $layout;

    public function  __construct($module = false)
    {
        $this->module = $module;
        if ($module !== false) {
            BP::tmpl()->addModule($module);
        }
    }

    protected function redirect($url)
    {
        Common::redirect($url);
    }

    protected function redirect2($c, $a, $m = false)
    {
        return Common::redirect2($c, $a, $m);
    }

    protected function setLayout($layout)
    {
        $this->layout = $layout;
    }

    protected function tpl_assign($name, $value)
    {
        BP::tmpl()->assign($name, $value);
    }

    protected function tpl_render($template)
    {
        BP::tmpl()->setLayout($this->layout);
        BP::tmpl()->render($template);
    }

    protected function tpl_fetch($template)
    {
        BP::tmpl()->setLayout($this->layout);
        return BP::tmpl()->fetch($template);
    }

}

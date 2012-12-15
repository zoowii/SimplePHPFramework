<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-12
 * Time: 下午5:05
 * To change this template use File | Settings | File Templates.
 */
class Template
{
    private $data = array();
    private $layout;
    private $smarty = null;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->debugging = DEBUG;
        $this->smarty->caching = !DEBUG;
        $this->smarty->cache_lifetime = TEMPLATE_CACHE_LIFETIME;
        $this->smarty->setCompileDir(TEMPLATE_COMPILE_DIR);
        $this->smarty->setCacheDir(TEMPLATE_CACHE_DIR);
        $this->smarty->setConfigDir(TEMPLATE_CONFIG_DIR);

        // add global template dir
        $tmpl_dir = Common::path(APPLICATION, TEMPLATE_DIR);
        $layout_dir = Common::path(APPLICATION, LAYOUT_DIR);
        if (is_dir($tmpl_dir)) {
            $this->smarty->addTemplateDir($tmpl_dir);
        }
        if (is_dir($layout_dir)) {
            $this->smarty->addTemplateDir($layout_dir);
        }
    }

    /**
     * add template dir in modules to smarty
     * @param string $module
     */
    public function addModule($module)
    {
        $tmpl_dir = Common::path(APPLICATION, 'modules', $module, TEMPLATE_DIR);
        $layout_dir = Common::path(APPLICATION, 'modules', $module, LAYOUT_DIR);
        if (is_dir($tmpl_dir)) {
            $this->smarty->addTemplateDir($tmpl_dir);
        }
        if (is_dir($layout_dir)) {
            $this->smarty->addTemplateDir($layout_dir);
        }
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($template, $fetch = false)
    {
        foreach ($this->data as $name => $value) {
            $this->smarty->assign($name, $value);
        }
        $output = $this->smarty->fetch($template);
        if ($fetch) {
            if (is_string($this->layout)) {
                $this->smarty->assign('content', $output);
                $output = $this->smarty->fetch($this->layout);
            }
        } else {
            if (is_string($this->layout)) {
                $this->smarty->assign('content', $output);
                $output = $this->smarty->display($this->layout);
            } else {
                $output = '';
            }
        }
        $this->smarty->clearAllAssign();
        return $output;
    }

    public function fetch($template)
    {
        return $this->render($template, true);
    }

}

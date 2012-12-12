<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-12
 * Time: 下午2:37
 * To change this template use File | Settings | File Templates.
 */
class SiteController extends Controller
{
    protected $layout = 'website.tpl';

    public function actionIndex()
    {
        $this->redirect2('site', 'tmpl1');
    }

    public function actionTmpl1()
    {
        $this->tpl_assign('message', 'Hello');
        $this->tpl_assign('name', 'Smarty');
        $this->tpl_render('tmpl1.tpl');
    }
}

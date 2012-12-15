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
        $this->redirect2('site', 'main');
    }

    public function actionMain()
    {
        $this->tpl_assign('isGuest', BP::user()->isGuest());
        $this->tpl_assign('username', BP::user()->name);
        $this->tpl_render('main.tpl');
    }
}

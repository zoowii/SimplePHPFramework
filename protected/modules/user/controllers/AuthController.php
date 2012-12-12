<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-12
 * Time: 下午2:51
 * To change this template use File | Settings | File Templates.
 */
class AuthController extends Controller
{
    public function actionRegister()
    {
        $this->layout = 'website.tpl';
        $this->tpl_assign('message', 'Welcome to ZBlog!');
        return $this->tpl_fetch('register.tpl');
    }
}

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
    protected $layout = 'website.tpl';

    public function actionRegister()
    {
        if (Common::requireRequests(array('username', 'password'), $_POST)) {
            $username = trim($_REQUEST['username']);
            $password = trim($_REQUEST['password']);
            $email = isset($_POST['email']) ? trim($_REQUEST['email']) : null;
            $user = new User();
            $user->username = $username;
            $user->email = $email;
            $user->salt = Common::generateRandomString();
            $user->password = Common::encrypt($username, $password, $user->salt);
            if ($user->save()) {
                $user->refresh();
                AjaxResponse::send(AjaxResponse::SUCCESS, $user->toArray());
            } else {
                AjaxResponse::send(AjaxResponse::DB_ERROR);
            }
        } else {
            $this->layout = 'website.tpl';
            $this->tpl_assign('message', 'Welcome to ZBlog!');
            return $this->tpl_fetch('register.tpl');
        }
    }

    public function actionLogin()
    {
        if (Common::requireRequests(array('username', 'password'), $_POST)) {
            $username = trim($_REQUEST['username']);
            $password = trim($_REQUEST['password']);
            if (BP::user()->auth($username, $password)) {
                AjaxResponse::send(AjaxResponse::SUCCESS, BP::user()->data);
            } else {
                AjaxResponse::send(AjaxResponse::AUTH_FAILED);
            }
        } else {
            $this->tpl_render('login.tpl');
        }
    }
}

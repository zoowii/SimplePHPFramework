<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-15
 * Time: 上午12:51
 * To change this template use File | Settings | File Templates.
 */
class CWebUser extends WebUser
{

    public function __construct()
    {
        if (isset($_SESSION['user_id'])) {
            $this->id = $_SESSION['user_id'];
            $user = User::findByPk($this->id);
            $this->name = $user->username;
            $this->data = Common::array_vars($user->toArray(), array('id', 'username', 'email', 'create_time', 'role'));
        }
    }

    /**
     * @param string $username username or password
     * @param string $password
     */
    public function auth($username, $password)
    {
        $user = User::findOne("username='$username' or email='$username'");
        if ($user != null) {
            if (Common::encrypt($user->username, $password, $user->salt) === $user->password) {
                // auth successfully
                $this->id = $user->id;
                $this->name = $user->username;
                $this->data = Common::array_vars($user->toArray(), array('id', 'username', 'email', 'create_time', 'role'));
                $_SESSION['user_id'] = $user->id;
                return true;
            }
        }
        return false;
    }

}

<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-14
 * Time: 下午11:47
 * To change this template use File | Settings | File Templates.
 */
abstract class WebUser
{
    public $id = 0;
    public $name;
    public $data;

    public function isGuest()
    {
        if ($this->id <= 0) {
            return true;
        } else {
            return false;
        }
    }

    public abstract function auth($username, $password);

    public function logout()
    {
        $this->id = 0;
        $this->name = null;
        $this->data = null;
    }

}

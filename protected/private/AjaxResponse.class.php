<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-11-27
 * Time: 上午10:26
 * To change this template use File | Settings | File Templates.
 */
class AjaxResponse
{

    const SUCCESS = '200';
    const DB_ERROR = '301';
    const ACCESS_DENIED = '302';
    const LOGIN_ACQUIRED = '303';
    const ILLEGAL_PARAMS = '400';
    const MISSING_PARAMS = '401';
    const AUTH_FAILED = '304';
    private static $CODE_MSG = array(
        self::SUCCESS => 'success',
        self::DB_ERROR => 'db error',
        self::ACCESS_DENIED => 'access denied',
        self::LOGIN_ACQUIRED => 'login acquired',
        self::ILLEGAL_PARAMS => 'illegal params',
        self::MISSING_PARAMS => 'missing params',
        self::AUTH_FAILED => 'auth failed'
    );

    public static function data($level, $data = null)
    {
        $ret = array();
        if ($level === self::SUCCESS) {
            $ret['success'] = true;
        } else {
            $ret['success'] = false;
        }
        $ret['code'] = $level;
        $ret['message'] = self::$CODE_MSG[$level];
        if (!is_null($data)) {
            $ret['data'] = json_encode($data);
        }
        return json_encode($ret);
    }

    public static function send($level, $data = null, $ended = true)
    {
        print self::data($level, $data);
        if ($ended) {
            exit;
        }
    }

}

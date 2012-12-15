<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-14
 * Time: 下午11:47
 * To change this template use File | Settings | File Templates.
 * @property int idt
 * @property string username
 * @property string email
 * @property string salt
 * @property string password
 * @property string create_time
 * @property string role
 */
class User extends Model
{
    protected static $tableName = 'user';
    protected static $pkColumn = 'id';
    protected static $columnTypes = array(
        'id' => 'int',
        'username' => 'string',
        'email' => 'string',
        'salt' => 'string',
        'password' => 'string',
        'create_time' => 'timestamp',
        'role' => 'enum'
    );
    protected static $readOnlyColumns = array(
        'id', 'create_time', 'role'
    );
}

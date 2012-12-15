<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhouwei
 * Date: 12-12-16
 * Time: 上午12:28
 * To change this template use File | Settings | File Templates.
 */
class Label extends Model
{
    protected static $tableName = 'label';
    protected static $pkColumn = 'id';
    protected static $columnTypes = array(
        'id' => 'int',
        'name' => 'string',
        'count' => 'int',
        'create_time' => 'timestamp'
    );
    protected static $readOnlyColumns = array(
        'id', 'create_time'
    );
}

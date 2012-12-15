<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhouwei
 * Date: 12-12-16
 * Time: 上午12:30
 * To change this template use File | Settings | File Templates.
 */
class BlogLabel extends Model
{
    protected static $tableName = 'blog_label';
    protected static $pkColumn = 'id';
    protected static $columnTypes = array(
        'id' => 'int',
        'blog_id' => 'int',
        'label_id' => 'int'
    );
    protected static $readOnlyColumns = array(
        'id'
    );
    protected static $relations = array(
        'blog' => array('blog_id', 'Blog', 'id'),
        'label' => array('label_id', 'Label', 'id')
    );
}

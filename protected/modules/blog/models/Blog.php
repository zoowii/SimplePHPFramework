<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhouwei
 * Date: 12-12-16
 * Time: 上午12:25
 * To change this template use File | Settings | File Templates.
 */
class Blog extends Model
{
    protected static $tableName = 'blog';
    protected static $pkColumn = 'id';
    protected static $content_type = 'markdown';
    protected static $columnTypes = array(
        'id' => 'int',
        'title' => 'title',
        'content' => 'content',
        'content_type' => 'enum',
        'create_time' => 'timestamp',
        'author_id' => 'int'
    );
    protected static $readOnlyColumns = array(
        'id', 'create_time'
    );
    protected static $relations = array(
        'author' => array('author_id', 'User', 'id')
    );

    public function getLabels()
    {
        $blog_labels = BlogLabel::findAllByAttributes(array('blog_id' => $this->id));
        $labels = array();
        foreach ($blog_labels as $blog_label) {
            $labels[] = Label::findByPk($blog_label->label_id);
        }
        return $labels;
    }

}

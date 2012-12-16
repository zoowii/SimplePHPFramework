<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhouwei
 * Date: 12-12-16
 * Time: 上午12:10
 * To change this template use File | Settings | File Templates.
 */
class BlogController extends Controller
{

    protected $layout = 'website.tpl';

    public function __construct($module)
    {
        parent::__construct($module);
        $this->tpl_assign('module', 'Blog');
    }

    public function actionView()
    {
        if (!Common::requireRequests(array('id'), $_GET)) {
            $blogs = Blog::findAll(''); // TODO: pagination, sort
            $this->tpl_assign('blogs', $blogs);
            $this->tpl_assign('title', 'Blog List');
            return $this->tpl_fetch('blog_list.tpl');
        }
        $blog = Blog::findByPk($_GET['id']);
        $this->tpl_assign('blog', $blog);
        $this->tpl_assign('title', 'Blog -- ' . $blog->title);
        $this->tpl_assign('comments', true);
        $this->tpl_render('view_blog.tpl');
    }

    public function actionCreate()
    {
        if (BP::user()->isGuest()) {
            AjaxResponse::send(AjaxResponse::LOGIN_ACQUIRED);
        }
        if (BP::user()->data['role'] !== 'owner') {
            // TODO: now only admin user can post articles
            AjaxResponse::send(AjaxResponse::ACCESS_DENIED);
        }
        if (!Common::requireRequests(array('title', 'content', 'content_type', 'labels'), $_POST)) {
            return $this->tpl_fetch('create_blog.tpl');
        }
        $title = $_POST['title'];
        $content_type = $_POST['content_type'];
        $labels = $_POST['labels'];
        $content = $_POST['content'];
        $blog = new Blog();
        $blog->title = $title;
        $blog->content_type = $content_type;
        $blog->content = $content;
        $blog->author_id = BP::user()->id;
        BP::db()->beginTransaction();
        try {
            $blog->save();
            foreach ($labels as $label) {
                $label_obj = Label::findOneByAttributes(array('name' => $label));
                if (is_null($label_obj)) {
                    $label_obj = new Label();
                    $label_obj->name = $label;
                    $label_obj->count = 1;
                    $label_obj->save();
                } else {
                    $label_obj->count += 1;
                    $label_obj->save();
                }
                $blog_label = new BlogLabel();
                $blog_label->blog_id = $blog->id;
                $blog_label->label_id = $label_obj->id;
                $blog_label->save();
            }
            BP::db()->commit();
            AjaxResponse::send(AjaxResponse::SUCCESS, array('id' => $blog->id));
        } catch (Exception $e) {
            BP::db()->rollBack();
            AjaxResponse::send(AjaxResponse::DB_ERROR, $e->getMessage());
        }
    }

}

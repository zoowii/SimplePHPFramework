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

    public function __construct($module) {
        parent::__construct($module);
        $this->tpl_assign('module', 'Blog');
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
            $this->tpl_render('create_blog.tpl');
        }
        // TODO: handler post request of create blog
        return 'todo: create blog';
    }

}

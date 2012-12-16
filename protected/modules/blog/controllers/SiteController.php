<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-16
 * Time: 下午7:08
 * To change this template use File | Settings | File Templates.
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->redirect(Html::url_for('blog', 'view', 'blog'));
    }
}

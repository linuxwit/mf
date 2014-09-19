<?php

/**
 * 网站首页
 */
class SiteController extends Controller {

    public $layout = '//layouts/home';

    public function actionIndex() {
        $this->render('index');
    }

}

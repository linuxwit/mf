<?php

/**
 * 网站首页
 */
class SiteController extends Controller {

    public $layout = '//layouts/home';

    public function actionIndex() {
        $this->render('index');
    }

    public function actionError(){
    	$this->layout = '//layouts/main';
    	$this->render('error');
    }
}

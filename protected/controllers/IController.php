<?php

/**
 * 个人中心
 */
class IController extends AuthController {

    public function actionIndex() {
        $this->render('index');
    }

}

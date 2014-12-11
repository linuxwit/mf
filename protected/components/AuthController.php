<?php

class AuthController extends Controller {

    public function init() {
        if (Yii::app()->user->isGuest) {
            $url = $this->createUrl('/passport/login') . '&callback=' . urlencode(Yii::app()->request->url);
            $this->redirect($url);
        }
        parent::init();
    }

}

<?php

/**
 * 物品信息
 */
class ItemController extends Controller {

    public $layout = '//layouts/home';

    /**
     * 物品信息展示
     */
    public function actionIndex($cat, $id) {

        $item = array(
            'id' => $id,
            'cat' => array('id' => $cat, 'title' => $cat == 1 ? '限量抢购' : '限时免费'),
            'price' => 198,
            'cover'=>  Yii::app()->baseUrl.'/upload/'.$id.'.jpg',
            'title' => 'LuckyBaby',
            'limit' => $cat == 1 ? '每天限量100个' : ''
        );
        $this->render('index', array('item' => $item));
    }

}

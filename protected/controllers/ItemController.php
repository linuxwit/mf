<?php

/**
 * 物品信息
 */
class ItemController extends Controller {

    /**
     * 物品信息展示
     */
    public function actionIndex($id) {
        $item = array();
        $this->render('index', array('item' => $item));
    }

}

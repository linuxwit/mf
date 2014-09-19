<?php

/**
 * 购物车
 */
class CartController extends Controller {

    /**
     * Step 1: 我的购物车
     */
    public function actionIndex() {
        $this->render('index');
    }
}

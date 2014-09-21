<?php

/**
 * 购物车
 */
class CartController extends Controller {

    public $layout = '//layouts/main';

    /**
     * Step 1: 我的购物车
     */
    public function actionIndex() {
        $this->render('index');
    }

    /**
     * 添加到购物车
     */
    public function actionAdd() {
        $this->render('add');
    }

    /**
     * 删除项
     */
    public function actionDelete() {
        
    }

    /**
     * 增加数量
     */
    public function actionPlus() {
        
    }

    /**
     * 减少数量
     */
    public function actionSub() {
        
    }

}

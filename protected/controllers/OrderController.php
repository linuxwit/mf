<?php

/**
 * 订单处理
 */
class OrderController extends Controller {

    /*
     * Step 2:填写提交订单信息（
     */
    public function actionIndex() {
        $this->render('index');
    }

    /**
     * Step 3: 确认提交订单信息
     */
    public function actionConfirm() {
        $this->render('confirm');
    }

}

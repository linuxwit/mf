<?php

/**
 * 订单处理
 */
class OrderController extends Controller {
    /*
     * Step 2:填写核对订单信息（
     */

    public function actionIndex() {
        $this->render('index');
    }

    /**
     * Step 3: 成功提交订单
     */
    public function actionConfirm() {
        $this->render('confirm');
    }

}

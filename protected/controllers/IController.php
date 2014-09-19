<?php

/**
 * 个人中心
 */
class IController extends AuthController {

    /**
     * 用戶的Dashbord
     */
    public function actionIndex() {
        $this->render('index');
    }

    /**
     * 我的訂單
     */
    public function actionMyorder() {
        $orderList = array();
        $this->render('myorder', array('orderList' => $orderList));
    }

    /**
     * 订单详情
     */
    public function actionOrder() {
        $order = array();
        $this->render('order', array('order' => $order));
    }

}

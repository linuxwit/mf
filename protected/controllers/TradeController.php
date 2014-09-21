<?php

/**
 * 交易处理
 */
class TradeController extends Controller {

    public $layout = '//layouts/main';

    /**
     * Step 3:订单提交成功（
     */
    public function actionIndex() {
        $this->render('index');
    }

}

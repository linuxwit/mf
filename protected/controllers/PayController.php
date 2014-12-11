<?php

/**
 * 支付处理
 */
class PayController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

	public function actionAlipay(){
	 
		die('hello');
		
	 	if (Yii::app()->request->isPostRequest){
 			$userEmail=Yii::app()->request->getParam('email');
 			$userName=Yii::app()->request->getParam('name');
 			$userAddress=Yii::app()->request->getParam('address');
 			$userPostCode=Yii::app()->request->getParam('postcode');
 			$userPhone=Yii::app()->request->getParam('phone');
			$userMobile=Yii::app()->request->getParam('mobile');
			$itemId=Yii::app()->request->getParam('item_id',1);
			$itemQty=Yii::app()->request->getParam('item_qty',1);

			$order_id=date('YmdHis').rand(1000,9999);
			$total=23;
			//TODO 保存订单到数据库中
        	$this->alipayRequest($total, $order_id, null);
	 	}
	 
    }
 
    public function alipayRequest($total,$order_id,$uid){
        $alipay = Yii::app()->alipay;
        $request=array();
        $request['out_trade_no'] = $order_id;
        $request['subject'] = "订单号：" . $order_id;
        $request['body'] = "订单金额" . $total . "元";
        $request['total_fee'] = $total;
        $request['show_url'] = "";
        $request['anti_phishing_key'] = "";
        $request['exter_invoke_ip'] = "";
        $form = $alipay->buildForm($request);
        echo $form;
        exit();
    }
 
    public function actionNotifyalipay(){
        $user_id = Yii::app()->user->id;
        $alipay = Yii::app()->alipay;
        $verify_result = $alipay->verifyNotify();
        if($verify_result) {
            $doc = new DOMDocument();
            $doc->loadXML($notify_data);
 
            if( ! empty($doc->getElementsByTagName( "notify" )->item(0)->nodeValue) ) {
                //商户订单号
                $out_trade_no = $doc->getElementsByTagName( "out_trade_no" )->item(0)->nodeValue;
                //支付宝交易号
                $trade_no = $doc->getElementsByTagName( "trade_no" )->item(0)->nodeValue;
                //交易状态
                $trade_status = $doc->getElementsByTagName( "trade_status" )->item(0)->nodeValue;
                //接口示例文件中，下面用的$_POST['trade_status']，但是我用POST获取不到值，直接用上面取出的$trade_status也可以。
                if($trade_status == 'TRADE_FINISHED' || $trade_status == 'TRADE_SUCCESS') { 
                    //判断该订单是否已处理
                    //处理业务逻辑
                    echo 'success';
                }
            }
        }else{
            echo 'fail';    
        }         
    }
 
    /**
     * 付款成功页
     * @return [type] [description]
     */
    public function actionBackalipay() {
        $user_id = Yii::app()->user->id;
        $alipay = Yii::app()->alipay;
        $verify_result = $alipay->verifyReturn();
        if($verify_result) {
            //商户订单号
            $out_trade_no = $_GET['out_trade_no'];
            //支付宝交易号
            $trade_no = $_GET['trade_no'];
            //交易状态
            $result = $_GET['result'];
            //判断该订单是否已处理
            //处理业务逻辑
        }else {
            $msg = '验证失败，稍后自动重试';
        }
        $this->render('backalipay',array(
            'msg'=>$msg,
            'order_id'=>$out_trade_no,
        ));
    }
}

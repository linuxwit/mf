<?php

return CMap::mergeArray(
                require(dirname(__FILE__) . '/main.php'), array(
            'name' => '免费商城',
            //'theme' => 'mall',
            'theme' => 'one',
            'defaultController' => 'site',
            'homeUrl' => array('site/index'),
            'components' => array(
               'urlManager' => array(
                   'urlFormat' => 'path',
                   'showScriptName' => false,
                   'rules' => array(
                       '<controller:\w+>/<id:\d+>' => '<controller>/view',
                       '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                       '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                   ),
               ),
            	'alipay'=>array(
					'class'=>'application.extensions.alipay.Alipay',
					'partner'=>'xxx', // your partner id
					'key'=>'xxx', // your key
					'seller_email'=>'xxx',// your email
					'call_back_url'=>'http://www.mf23.cn/pay/backalipay',//同步回调地址
					'notify_url'=>'http:///www.mf23.cn/pay/notifyalipay', //异步通知地址，注意设置权限为Alipay可返回数据
					'merchant_url'=>'http://www.mf23.cn/mf/pay/callback', //支付完后自动跳回商户地址
				),
            ),
         )
);
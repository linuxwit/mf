<div class="header-logo">
    <div class="container">
        <div class="row">
            <div class="pull-left logo">
                <a>
                    <h2>
                        <?php echo Yii::app()->name ?>
                    </h2>
                </a>
            </div>
            <div class="pull-right">
                <ul class="unstyled inline cart-progress cart-progress-3">
                    <li class="step-1">
                        1.我的购物车
                    </li>
                    <li class="step-2">
                        2.填写核对订单信息
                    </li>
                    <li class="step-3">
                        3.成功提交订单
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container order-success">
    <h4>成功提交订单</h4>
    <div class="success">
        <h3><i class="fa fa-check fa-3x green"></i>感谢您，订单提交成功</h3>
        <p>订单号为：<a href="<?php echo $this->createUrl('/i/order', array('id' => 101011)) ?>">101011</a> </p>
        <p>我们会尽快为您发货！</p>
    </div>
</div>
<div class="container order-success-operator">
    <div class="row">
        <div class="span12">
            <ul class="unstyled inline">
                <li> 您还可以点击：</li>
                <li>
                    <a href="<?php echo $this->createUrl('/') ?>"> 返回首页继续购物</a>
                </li>
                <li>
                    <a href="<?php echo $this->createUrl('/i/myorder') ?>">进入我的订单</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="span12">
            <h4>猜您喜欢</h4>
            <ul class="thumbnails">
                <li class="span2">
                    <a class="thumbnail" href="#">
                        <img alt="160x120"  style="width: 160px; height: 120px;" src="<?php echo Yii::app()->baseUrl ?>/upload/1.jpg">
                    </a>
                </li>
                <li class="span2">
                    <a class="thumbnail" href="#">
                        <img alt="160x120"  style="width: 160px; height: 120px;" src="<?php echo Yii::app()->baseUrl ?>/upload/2.jpg">
                    </a>
                </li>
                <li class="span2">
                    <a class="thumbnail" href="#">
                        <img alt="160x120"  style="width: 160px; height: 120px;" src="<?php echo Yii::app()->baseUrl ?>/upload/3.jpg">
                    </a>
                </li>
                <li class="span2">
                    <a class="thumbnail" href="#">
                        <img alt="160x120"  style="width: 160px; height: 120px;" src="<?php echo Yii::app()->baseUrl ?>/upload/4.jpg">
                    </a>
                </li>
                <li class="span2">
                    <a class="thumbnail" href="#">
                        <img alt="160x120"  style="width: 160px; height: 120px;" src="<?php echo Yii::app()->baseUrl ?>/upload/5.jpg">
                    </a>
                </li>
                <li class="span2">
                    <a class="thumbnail" href="#">
                        <img alt="160x120" data-src="holder.js/160x120" style="width: 160px; height: 120px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAB4CAYAAAB1ovlvAAABt0lEQVR4nO3WQa6CMABAQe9/lF6He3AF3RsRkP/zFGYxC2lMG/pSepvn+Q6VW70Ark2ApARISoCkBEhKgKQESEqApARISoCkBEhKgKQESEqApARISoCkBEhKgKQESEqApARISoCkBEhKgKQESEqApARISoCkBEhKgKQESEqApARISoCkBEhKgKQESEqApARISoCkBEhKgKQESEqApARISoCkBEhKgKQESEqApARISoCkBEhKgKQESOoyAY4x7mOMxeevxt+Nfdt8v+oSAa5t+Ktg1n4fnW/v/Gd1iQCXNvTdJh8NQoDbCHDhs7cllmmaNp92a+sR4Mn99Yn0HOCW+T5dy5kJ8MAncW9ke54L8GS+4QT8zzvnr7pEgEv3vE/H1u6Aa//bOl6/NwFyegIkJUBSAiQlQFICJCVAUgIkJUBSAiQlQFICJCVAUgIkJUBSAiQlQFICJCVAUgIkJUBSAiQlQFICJCVAUgIkJUBSAiQlQFICJCVAUgIkJUBSAiQlQFICJCVAUgIkJUBSAiQlQFICJCVAUgIkJUBSAiQlQFICJCVAUgIkJUBSAiQlQFICJCVAUgIk9QDiKWVGintSUQAAAABJRU5ErkJggg==">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



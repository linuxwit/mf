<?php $this->pageTitle = '购物新体验，完全无风险' ?>

<div class="row">
    <div class="span12">
        <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <div class="hero-unit">
                        <h1>免费商城</h1>
                        <p>购物新体验，完全无风险</p>
                        <p></p>
                    </div>
                </div>
            </div>

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="span12">
        <div  style="border-bottom: 2px solid #FFC40D;margin-bottom: 5px">
            <h5>
                1F:限时抢购
                <a  href="#" class="pull-right"></a>
            </h5>

        </div>
        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="span3">
                    <a class="thumbnail" href="<?php echo $this->createUrl('/item/index', array('cat' => 1, 'id' => 1)) ?>">
                        <img alt=""  style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/1.jpg">
                    </a>
                </li>
                <li class="span3">
                    <a class="thumbnail" href="<?php echo $this->createUrl('/item/index', array('cat' => 1, 'id' => 2)) ?>">
                        <img alt=""  style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/2.jpg">
                    </a>
                </li>
                <li class="span3">
                    <a class="thumbnail" href="<?php echo $this->createUrl('/item/index', array('cat' => 1, 'id' => 3)) ?>">
                        <img alt=""  style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/3.jpg">
                    </a>
                </li>
                <li class="span3">
                    <a class="thumbnail" href="<?php echo $this->createUrl('/item/index', array('cat' => 1, 'id' => 4)) ?>">
                        <img alt=""  style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/4.jpg">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="span12">
        <div  style="border-bottom: 2px solid #FFC40D;margin-bottom: 5px">
            <h5>
                2F:限量免费
                <a  href="#" class="pull-right"></a>
            </h5>

        </div>
        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="span3">
                    <a class="thumbnail" href="<?php echo $this->createUrl('/item/index', array('cat' => 2, 'id' => 1)) ?>">
                        <img alt=""  style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/1.jpg">
                    </a>
                </li>
                <li class="span3">
                    <a class="thumbnail" href="<?php echo $this->createUrl('/item/index', array('cat' => 2, 'id' => 2)) ?>">
                        <img alt=""  style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/2.jpg">
                    </a>
                </li>
                <li class="span3">
                    <a class="thumbnail" href="<?php echo $this->createUrl('/item/index', array('cat' => 2, 'id' => 3)) ?>">
                        <img alt=""  style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/3.jpg">
                    </a>
                </li>
                <li class="span3">
                    <a class="thumbnail" href="<?php echo $this->createUrl('/item/index', array('cat' => 2, 'id' => 4)) ?>">
                        <img alt=""  style="height: 300px;" src="<?php echo Yii::app()->baseUrl ?>/upload/4.jpg">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="span12">
        <div  style="border-bottom: 2px solid #2D89EF ;margin-bottom: 5px">
            <h5>购买流程</h5>
        </div>
        <div class="row-fluid">
            <ul class="thumbnails text-center">
                <li class="span3" style="height: 80px">
                    <a class="thumbnail" href="#" style="padding: 40px 0">
                        选购商品
                    </a>
                </li>
                <li class="span3">
                    <a class="thumbnail" href="#" style="padding: 40px 0">
                        填写订单信息
                    </a>
                </li>
                <li class="span3">
                    <a class="thumbnail" href="#" style="padding: 40px 0">
                        签收并付款
                    </a>
                </li>
                <li class="span3">
                    <a class="thumbnail" href="#" style="padding: 40px 0">
                        购买完成
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
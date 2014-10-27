<?php $this->beginContent('/layouts/main'); ?>
<div class="header-logo">
    <div class="container">
        <div class="row">
            <div class="pull-left logo">
                <a>
                    <h2>
                        <a href="<?php echo $this->createUrl('/')?>"><?php echo Yii::app()->name ?></a>
                    </h2>
                </a>
            </div>
            <div class="pull-right">
                <a href="<?php echo $this->createUrl('/i/cart')?>" class="pull-right btn-cart">我的购物车</a>
            </div>
        </div>
    </div>
</div>
<?php echo $content ?>
<?php $this->endContent(); ?>
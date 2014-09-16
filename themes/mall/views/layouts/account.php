<?php $this->beginContent('/layouts/main'); ?>
<div class="header-logo">
    <div class="container">
        <div class="row">
            <div class="pull-left logo">
                <a>
                    <h2>
                        <?php //echo Yii::app()->name ?>
                        WHB
                    </h2>
                </a>
            </div>
            <div class="pull-right">
                <a href="" class="pull-right btn-cart">我的购物车</a>
            </div>
        </div>
    </div>
</div>
<?php echo $content ?>
<?php $this->endContent(); ?>
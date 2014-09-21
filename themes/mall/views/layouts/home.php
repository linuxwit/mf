<?php $this->beginContent('/layouts/account'); ?>
<div class="navbar nav-pills" id="header-nav">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav">
                <li><a href="<?php echo $this->createUrl('/') ?>">首页</a></li>
                <li><a href="<?php echo $this->createUrl('/', array('cat' => 1)) ?>">限时抢购</a></li>
                <li><a href="<?php echo $this->createUrl('/', array('cat' => 2)) ?>">限量免费</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <?php echo $content ?>
</div>
<?php $this->endContent(); ?>
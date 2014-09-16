<?php
$this->pageTitle = Yii::app()->name . ' - 我们的团队';
?>
<div class="row">
    <div class="span2">
        <ul class="nav nav-tabs nav-stacked">
            <li <?php echo $_GET['view'] == 'about' ? 'class="active"' : '' ?>><a href="<?php echo $this->createUrl('/site/page', array('view' => 'about')) ?>">关于我们</a></li>
            <li <?php echo $_GET['view'] == 'up' ? 'class="active"' : '' ?>><a href="<?php echo $this->createUrl('/site/page', array('view' => 'up')) ?>">我们的成长</a></li>
            <li <?php echo $_GET['view'] == 'event' ? 'class="active"' : '' ?>><a href="<?php echo $this->createUrl('/site/page', array('view' => 'event')) ?>">我们的大事记</a></li>
            <li <?php echo $_GET['view'] == 'team' ? 'class="active"' : '' ?>><a href="<?php echo $this->createUrl('/site/page', array('view' => 'team')) ?>">我们的团队</a></li>
            <li <?php echo $_GET['view'] == 'contact' ? 'class="active"' : '' ?>><a href="<?php echo $this->createUrl('/site/page', array('view' => 'contact')) ?>">联系方式</a></li>
        </ul>
    </div>
    <div class="span10">
        <p class="lead">我们的团队</p>
        <p class="article"> 
        </p>
    </div>
</div>
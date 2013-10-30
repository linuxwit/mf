<!DOCTYPE html>
<html lang="zh_cn">
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->pageTitle ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="专业定制各类服装，会所，物业，保安，工作服，正式装，工装">
        <meta name="author" content="witwave">
        <!-- CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if lte IE 6]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/bootstrap-ie6.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/ie.css">
        <![endif]-->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/witleaf.css" rel="stylesheet">
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/icon/favicon.png">
        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-40449371-1']);
            _gaq.push(['_trackPageview']);
        </script>
    </head>
    <body>
        <div id="header">
            <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="span3">
                        <h3>小叶裁缝</h3>
                    </div>
                    <div class="span9">
                        <ul class="nav nav-pills pull-right">
                            <li>
                                <a href="#">小叶商城APP</a>
                            </li>
                            <li><a href="#">登录</a></li>
                            <li><a href="#">注册</a></li>
                            <li><a href="#">购物车0件</a></li>
                        </ul>
                    </div>

                    <div class="span12">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <ul class="nav">
                                    <li  <?php //echo $this->action->id == 'index' ? 'class="active"' : ''                                 ?>>
                                        <a  onclick="_gaq.push(['_trackEvent', '导航条', '首页', '首页']);" href="http://www.witleaf.com">首页</a></li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle"  onclick="_gaq.push(['_trackEvent', '导航条', '首页', '职业装']);"  href="#">职业装 <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a onclick="_gaq.push(['_trackEvent', '导航条', '首页', '职业装','会所']);"  href="<?php echo $this->createUrl('/site/product', array('cat' => '职业装', 'm' => '会所')) ?>">会所</a></li>
                                            <li><a onclick="_gaq.push(['_trackEvent', '导航条', '首页', '职业装','物业']);" href="<?php echo $this->createUrl('/site/product', array('cat' => '职业装', 'm' => '物业')) ?>">物业</a></li>
                                            <li><a onclick="_gaq.push(['_trackEvent', '导航条', '首页', '职业装','酒店']);" href="<?php echo $this->createUrl('/site/product', array('cat' => '职业装', 'm' => '酒店')) ?>">酒店</a></li>
                                            <li><a onclick="_gaq.push(['_trackEvent', '导航条', '首页', '职业装','银行']);" href="<?php echo $this->createUrl('/site/product', array('cat' => '职业装', 'm' => '银行')) ?>">银行</a></li>                                            
                                        </ul>
                                    </li>
                                    <li <?php echo $this->action->id == 'work' ? 'class="active"' : '' ?>><a  onclick="_gaq.push(['_trackEvent', '导航条', '首页', '工装']);" href="<?php echo $this->createUrl('/site/work') ?>">工装</a></li>
                                    <li <?php echo $this->action->id == 'case' ? 'class="active"' : '' ?>><a  onclick="_gaq.push(['_trackEvent', '导航条', '首页', '成功案例']);" href="<?php echo $this->createUrl('/site/case') ?>">成功案例</a></li>
                                    <li <?php echo $this->action->id == 'order' ? 'class="active"' : '' ?>><a onclick="_gaq.push(['_trackEvent', '导航条', '首页', '在线订单']);" href="<?php echo $this->createUrl('/site/order') ?>">在线订单</a></li>
                                    <li <?php echo $this->action->id == 'page' ? 'class="active"' : '' ?>><a onclick="_gaq.push(['_trackEvent', '导航条', '首页', '关于我们']);" href="<?php echo $this->createUrl('/site/page', array('view' => 'about')) ?>">关于我们</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <?php echo $content ?>
    </div>
    <div id="push"></div>
    <footer class="footer">
        <div class="container">
            <p class="muted credit">Copyright <a href="http://www.witleaf.com">小叶裁缝</a>.</p>
        </div>
    </footer>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.js"></script>
    <!--[if lte IE 6]>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/bootstrap-ie.js"></script>
    <!--[endif]-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 2000
            });
        });
        (function() {
            var ga = document.createElement('script');ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:'   == document.location.protocol ? 'https://ssl'   : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="zh_cn">
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->pageTitle ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
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
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/mf.css" rel="stylesheet">
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/icon/favicon.png">
        <script>

        </script>
    </head>
    <body>
   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
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
        $(document).ready(function() {
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

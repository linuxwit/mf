<?php $baseUrl=Yii::app()->theme->baseUrl?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Grayscale - Start Bootstrap Theme</title>
        <link href="<?php echo $baseUrl.'/assets/'?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $baseUrl.'/assets/'?>css/grayscale.css" rel="stylesheet">
        <link href="<?php echo $baseUrl.'/assets/'?>font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <?php echo $content?>
        <!-- Footer -->
        <footer>
            <div class="container text-center">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </footer>
        <!-- jQuery -->
        <script src="<?php echo $baseUrl ?>/assets/js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $baseUrl ?>/assets/js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="<?php echo $baseUrl ?>/assets/js/jquery.easing.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo $baseUrl ?>/assets/js/grayscale.js"></script>
    </body>
</html>
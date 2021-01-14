<?php
	session_start();
	error_reporting(0);

	include "../conn/conn.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">

    <title>上传题目</title>

    <!-- normalize core CSS -->
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/carousel.css" rel="stylesheet">
    <link href="bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet">

    <!-- Load jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Menu shrinking -->
    <script type="text/javascript" src="js/menu.js"></script>

    <!-- Main styles of this template -->
    <link href="css/style.min.css?v=1.0.0" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>


    <!-- Navigation -->
    <?php
        include "php/navigation.php";
    ?>





    <!-- Features -->
    <section class="page-section padding-30">
        <div class="container feature">
            <div class="row text-center">
                <div class="centered">
                    <div class="col-md-3 col-sm-6">
                        <div>
                            <a href="upload-test-input.php"><i class="fa fa-pencil aaa"></i></a>
                            <h4>手动输入</h4>
                            <p>手动输入试题内容</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div>
                            <a href="upload-test-upload.php"><i class="fa fa-print aaa"></i></a>
                            <h4>上传文档</h4>
                            <p>上传对应课程的试题电子完整版</p>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </section>








    <!-- Scripts -->

    <!-- Loads Bootstrap Main JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>


    <!-- Initiate Google Maps - For more Infos look into the documentation -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map.js"></script>

    <!-- Initiate Portoflio Script -->
    <script src="extensions/portfolio/isotope.min.js"></script>
    <script src="extensions/portfolio/portfolio.js"></script>

    <!-- Initiate Fancybox/Lightbox Script -->
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="extensions/fancybox/jquery.fancybox.css" media="screen" />
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox-media.js"></script>

</body>

</html>
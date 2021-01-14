
<!DOCTYPE HTML>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>文章创作</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="utf8-jsp/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="utf8-jsp/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="utf8-jsp/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="utf8-jsp/umeditor.min.js"></script>
    <script type="text/javascript" src="utf8-jsp/lang/zh-cn/zh-cn.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">
 <!-- normalize core CSS -->
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/carousel.css" rel="stylesheet">
    <link href="bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet">

    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Fonts - Change if needed -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Menu shrinking -->
    <script type="text/javascript" src="js/menu.js"></script>

    <!-- Main styles of this template -->
    <link href="css/style.min.css?v=1.0.0" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/gzx.js"></script>
    <link href="css/ueditor.css" rel="stylesheet">
</head>
<body>
	<!-- Navigation -->
    <?php
        include "php/navigation.php";
    ?>

    <div style="height: 100px"></div>

    


	<!--style给定宽度可以影响编辑器的最终宽度-->
	<div class="centered">
		<script type="text/plain" id="myEditor" style="width:1000px;height:240px;"></script>
	</div>

	<div style="margin-left: 300px; margin-top: 30px">
	<input type="button" class="btn btn-primary" id="addtag"  value="+添加文章标签" />
	</div>

	<div class="centered" style="margin-top: 30px;">
		<input type="button" class="btn btn-primary" id="submit" value="确认提交" onclick="saveContent()"/>
	</div>
	<script src="js\jquery-1.11.2.min.js"></script>



<script type="text/javascript" src="js/umditor.js"></script>

</body>
</html>
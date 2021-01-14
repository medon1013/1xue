<?php
	session_start();
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elsa, a multipurpose Template from Andreas Lautenschlager">
    <meta name="author" content="Andreas Lautenschlager - www.lautenschlager.de">

    <title>1学网，您学习的终点</title>

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

    <style type="text/css">
    	.logdiv {
    		top:0;
    		left: 0;
   	 		width: 100%;
    		height: 100%;
    		min-width: 1000px;
    	}
    </style>
    

</head>

<body>


    <!-- Navigation -->
    <?php 
    	include "php/navigation.php";
    ?>
    
    <div class="logdiv">
    	<div class="logp">
    		<h1 style="color: #FFFFFF; font-size: 70px; font-weight: bold;">专为北邮人打造</h1>
    		<p style="color: #FF4500; font-size: 20px; padding-top: 15px;"></p>
    	</div>
    	<div class="loginin centered">
    		
    		<form id="info" action="php/login_deal.php" method="post">
    			<div style="margin-left: 150px; padding-top: 30px; margin-bottom: 30px;">
    				<p style="color: #000000; font-size: 30px; font-weight: lighter;">登录1xue网</p>
    			</div>	
    			<div class="logdiv1">
    				<p style="font-weight: bold; color: #000000; font-size: 17px;">帐号或学号</p>
    			</div>
    			<div class="logdiv2">
    				<i class="fa fa-user regi"></i>
    				<input class="loginput" type="text" name="user_id" id="user_id" />
    				<?php
    					if($_SESSION['checkLogin']==1) {
    						echo ("<p>该账号不存在！</p>");
    					}
    				?>
    			</div>

    			<div class="logdiv1">
    				<p style="font-weight: bold; color: #000000; font-size: 17px; display: inline-block;">密码</p>
    				<a class="loga" href="#">忘记密码？</a>
    			</div>
    			<div class="logdiv2">
    				<i class="fa fa-unlock-alt regi"></i>
    				<input class="loginput" type="password" name="password" id="password" />
    				<?php
    					if($_SESSION['checkLogin']==2) {
    						echo ("<p>密码错误！</p>");
    					}

    				?>
    			</div>
    			<input type="submit" value="登录" class="btn btn-primary logbtn"/>
    			<div class="logdiv1" style="margin-top: 40px;">
    				<p class="logp3">1xue网的新手?</p>
    				<a href="registered.php"class="loga" style="font-size: 17px; margin-left:0px;">创建一个账户</a>
    			</div>

    		</form>
    	</div>
    	<img src="img/background.jpg">
    </div>

    




    <!-- FOOTER 1 -->
    <?php
    	include "php/footer.php";
    ?>

    

    <!-- Scripts -->

    <!-- Loads Bootstrap Main JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/gVerify.js"></script>
<script type="text/javascript">


    
  
</script>
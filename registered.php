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

    

</head>

<body>


    <!-- Navigation -->
    <?php
        include "php/navigation.php";
    ?>
    
    <div class="centered" style="margin-top: 140px;">
    	<p>加入1学网</p>
    </div>
    <div class="centered">
    	<h1 style="color: #000000; font-size: 50px; font-weight: 110;">创建您的账户</h1>
    </div>

    <div class="centered" style="padding-top: 20px;">
        <form id="info" action="php/register_deal.php" method="post">
             <!-- 学号 -->
            <div class="regdiv1">
                <p class="regp1">学号:</p>
                <p class="regp2">*</p>    
            </div>
            <div class="regdiv2" id="user_iddiv">
                <i class="fa fa-user regi"></i>
                <input class="reginput" type="text" name="user_id" id="user_id" />
                <p id="user_id_text"></p>
                <?php
                    if($_SESSION['isexist']) {
                        echo ("<p>该学号已被注册</p>");
                    }
                ?>   
            </div>
            <!-- 邮箱 -->
            <div class="regdiv1">
                <p class="regp1">邮箱:</p>
                <p class="regp2">*</p>    
            </div>
            <div class="regdiv2" id="emaildiv">
                <i class="fa fa-envelope-o regi"></i>
                <input class="reginput" type="email" name="email" id="email" />
                <p id="email_text"></p>   
            </div>
            <!-- 密码 -->
            <div class="regdiv1">
                <p class="regp1">密码:</p>
                <p class="regp2">*</p>    
            </div>
            <div class="regdiv2" id="passwordiv">
                <i class="fa fa-unlock-alt regi"></i>
                <input class="reginput" type="password" name="password" id="password" /> 
                <p id="password_text"></p>  
            </div>
            <p></p>
            <!-- 确认密码 -->
            <div class="regdiv1">
                <p class="regp1">确认密码:</p>
                <p class="regp2">*</p>    
            </div>
            <div class="regdiv2" id="repassworddiv">
                <i class="fa fa-unlock-alt regi"></i>
                <input class="reginput" type="password" name="repassword" id="repassword" /> 
                <p id="repassword_text"></p>  
            </div>
            <!-- 昵称 -->
            <div class="regdiv1">
                <p class="regp1">昵称:</p>
                <p class="regp2">*</p>    
            </div>
            <div class="regdiv2" id="nicknamediv">
                <i class="fa fa-user regi" ></i>
                <input class="reginput" type="text" name="nickname" id="nickname" />   
            </div>
            <!-- 个人简介 -->
            <div class="regdiv1">
                <p class="regp1">个人简介:</p>    
            </div>
            <div class="regdiv2" id="nicknamediv">
                 <i class="fa fa-user-secret regi" ></i>
                <input class="reginput" type="text" name="info" id="info" />  
            </div>
            <!-- 图片验证码 -->
            <div class="regdiv1">
                <p class="regp1">图片验证码:</p>
                <p class="regp2">*</p>    
            </div>
            <div class="regdiv2" style="margin-bottom: 0px;" id="yzdiv">
                <i class="fa fa-user regi" ></i>
                <input class="reginput" type="text" name="yz" id="yz" />
                <p id="yz_text"></p>   
            </div>
			<div class="u-yz-img" id="u-yz-img" style="margin-top: 50px;"></div>

            <input id="register" type="button" value="注册" class="btn btn-primary logbtn" />
            
        </form>
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
 
var verifyCode = new GVerify("u-yz-img");

function checkuser_id() {
    var user_id = $("#user_id").val();
    if (user_id == "") {
        $("#user_id_text").html("学号不能为空！");
        return false;
    } else {
        $("#user_id_text").html("");
        return true;
    }
}

function checkEmail() {
    var email = $("#email").val();
    if (email != "") {
        if (!(/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/.test(email))) {
            $("#email_text").html("邮箱格式不正确！");
            return false;
        } else {
            $("#email_text").html("");
            return true;
        }
    } else {
        $("#email_text").html("邮箱不能为空！");
        return false;
    }
}

function checkPassword() {
    var password = $("#password").val();
    if (password == "") {
        $("#password_text").html("密码不能为空！");
        return false;
    } 
    else {
        $("#password_text").html("");
        return true;
    }
}

function checkrePassword() {
    var repassword = $("#repassword").val();
    var password = $("#password").val();
    if (repassword == "") {
        $("#repassword_text").html("请再次输入密码！");
        return false;
    }
    else if (repassword != password) {
    	$("#repassword_text").html("两次输入密码不一致！");
    	return false;
    } 
    else {
        $(".password_text").html("");
        return true;
    }
}

function checkVerifyCode() {    
    var res = verifyCode.validate(document.getElementById("yz").value);    
    if(res){
       $("#yz_text").html("");
        return true;
    }
    else{
        $("#yz_text").html("验证码错误！");    
        return false;
    } 
}

$(document).ready(function () {
    $("#register").click(function () {
        if (checkEmail()  && checkuser_id() && checkPassword() && checkrePassword() && checkVerifyCode()) {
            $("#info").submit();
        } else {
            checkEmail();
            checkuser_id();
            checkPassword();
            checkrePassword();
            checkVerifyCode();
        }
    });
    $(document).keyup(function (event) {
        if (event.keyCode == 13) {
            if (checkEmail()  && checkuser_id() && checkPassword() && checkrePassword() && checkVerifyCode()) {
                $("#info").submit();
            } else {
                checkEmail();
            	checkuser_id();
            	checkPassword();
            	checkrePassword();
                checkVerifyCode();
            }
        }
    });
})


    
  
</script>
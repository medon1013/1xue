document.write("<script src = 'gVerify.js'></script>");
document.write("<script src = 'jquery-1.11.3.min.js'></script>");

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
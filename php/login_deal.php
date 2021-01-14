<?php
session_start();
include "../conn/conn.php";

$id=$_POST['user_id'];
$password=$_POST['password'];
$sql=mysqli_query($link, "select * from user where user_id='$id' or stu_id='$id'");
$result = mysqli_fetch_array($sql);

if($result == ""){
	/* checkLogin = 1 代表该用户不存在 */
	$_SESSION['checkLogin'] = 1;
	exit();
}
else{
	if($password==$result["user_password"]){

		$_SESSION['user_id']=$id;
		echo ("<script>window.location.href='../index.php';</script>");
	
	}
	else{
		/* checkLogin = 2 代表密码错误 */
		$_SESSION['checkLogin'] = 2;
		exit();
	}
}

?>
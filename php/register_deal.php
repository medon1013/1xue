<?php
	session_start();
	error_reporting(0);
	include "../conn/conn.php";
	
	$user_stu_id=$_POST['user_id'];
	$sql = mysqli_query($link,"select * from user where stu_id = '$user_stu_id'");
	$result = mysqli_fetch_array($sql);


	if($result != false){
		$_SESSION['isexist'] = true;
		exit();
	}
	$find_id = mysqli_query($link, "select Max(user_id) from user");
	$row=mysqli_fetch_array($find_id);
	$user_id= $row["Max(user_id)"]+1;
	$_SESSION['user_id'] = $user_id;
	$user_stu_id=$_POST['user_id'];
	$user_email=$_POST['email'];
	$user_password=$_POST['password'];
	$user_nickname=$_POST['nickname'];
	$user_info=$_POST['info'];

	$INS=mysqli_query($link,"Insert Into user (user_id, stu_id, user_email, user_password, user_nickname, user_intro) values('$user_id', '$user_stu_id', '$user_email', '$user_password', '$user_nickname', '$user_info')");

	echo ("<script>window.location.href='../login.php';</script>");

	?>
<?php
	session_start();

	include ('dbconn.php');

	$username = $_POST['usernameinput'];
	$password = $_POST['passwordinput'];

	$result = mysqli_query($conn,"select user_name, password from users where user_name = '".$username."' and password = '".$password."'");

	if(mysqli_num_rows($result)!=0){
		$_SESSION['user_name'] = $username;
		header("Location:".$_SERVER['HTTP_REFERER']);
	}else{
		header("Location:".$_SERVER['HTTP_REFERER']."?status=login_fail");
	}
?>
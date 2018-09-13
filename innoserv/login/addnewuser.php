<?php
	include ('dbconn.php');

	$newuser = $_POST['usernameinput'];
	$newpasswd = $_POST['passwordinput'];

	$insert = mysqli_query($conn,"insert into users (`user_name`,`password`) values ('".$newuser."','".$newpasswd."');");

	if($insert){
		header("Location: /Forum/index.php?status=reg_success");
	}
?>
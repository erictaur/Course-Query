<?php
	include ("layout_manager.php");
?>

<!DOCTYPE html>
<html>

<head>
<title>Course Login</title>
<base target="_top">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="stylesheets/main.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../stylesheets/html_body.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/head.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/login.css">
</head> 

<body>
	
<header>
	<p id="welcome">
		Welcome to the Course Database!
	</p>
	<p id="login">
		<a href="../entry/Entry.php">Home</a>
	</p>
</header>

<div id="midtop">
	<p id ="midtop_title">
	<br>Login<br>
	</p>
	<br>

<?php
	session_start();
		if (isset($_SESSION['user_name'])) {
			logout(); 
			}
		else
		{
			$alert="";
			if(isset($_GET['status']))
			{
				if($_GET['status'] == 'reg_success')
				{
					$alert = "<p style='color:green; font-weight:bold; text-align:center;'>New user registered successfully!</p>";
				}
				else if($_GET['status'] == 'login_fail')
				{
					$alert = "<p style='color:red; font-weight:bold; text-align:center;'>Invalid username and/or password!</p>";
				}
			}
			loginform();
			echo "<br>".$alert;
		}
?>
	<br><br><br>

</div>



</body>
</html>
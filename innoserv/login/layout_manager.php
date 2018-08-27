<link href="../stylesheets/main.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../stylesheets/login.css">

<?php
	function loginform(){
		echo "
		<table id='login_table'>
		<form action='validatelogin.php' method='POST'>
			<tr>
				<td>Username:</td>
				<td>
				<input style='font-size: 25px; border:thin solid #444444' type='text' id='usernameinput' name='usernameinput'/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td>
				<input type='password' style='font-size: 25px; border:thin solid #444444' id='passwordinput' name='passwordinput'/>
				</td>
			</tr>
			<tr>
				<td>
				<input class='press' id='press_input' type='submit' value='Login'>
				</td>
				<td>
				<button class='press' id='button_input' type='button' onclick='location.href=\"register.html\";'>Register</button>
				</td>
			</tr>
		</form>
		</table>";
	}




	function logout(){
		echo "
		<div>
			<p style='text-align:center; font-size:35px'>Login Successful!</p><br>
			<p style='text-align:center; font-size:25px'>Welcome ".$_SESSION['user_name']."!<br>Looking good today!</p>
		</div>
		<br><br><br>
		<div>
			<form action='logout.php' method='POST'>
				<input class='press' id='logout_input' type='submit' value='logout'>
			</form>
		</div>";
	}	
?>
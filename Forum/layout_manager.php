<?php
	function loginform(){
		echo "<form action='/Forum/validatelogin.php' method='POST'>
				  <p>Username :</p>
				  <input type='text' id='usernameinput' name='usernameinput'/>
			      <p>Password : </p>
				  <input type='password' id='passwordinput' name='passwordinput'/>
			      <input type='submit' value='Login'>
				  <button type='button' onclick='location.href=\"/Forum/register.html\";'>Register</button>
			  </form>";
	}
	function logout(){
		echo "<p>Welcome".$_SESSION['user_name']."!\nLooking good today!</p>
					<form action='/Forum/logout.php' method='POST'>
						<input type='submit' value='logout'>
					</form>";
	}	
?>
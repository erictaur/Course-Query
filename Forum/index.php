<?php
	include ("layout_manager.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Timlo PHP Forum Tutorial</title>
	<link href="/Forum/styles/main.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="pane">
		<div class="header"><h1><a href="/Forum">PHP and MySQL Forum Tutorial</a></h1></div>
		<div class="loginpane">
			<?php
				session_start();
				if (isset($_SESSION['user_name'])) {
					logout();
					
					// logout function
					

				}else{
					if(isset($_GET['status'])){
						if($_GET['status'] == 'reg_success'){
							echo "<h1 style='color:green;'>new user registered successfully!</h1>";

						}else if($_GET['status'] == 'login_fail'){
							echo "<h1 style='color:red;'>invalid username and/or password!</h1>";
						}
					}
					loginform();
				}
			?>
		</div>
		<div class="forumdesc">
			<p>Welcome to the world's coolest forum made with PHP and MySQL.. Shut the fuck up</p>
		</div>
		<div class="content">
			
		</div>
	</div>

</body>
</html>
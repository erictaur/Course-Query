<?php
	session_start();
	session_destroy();
	header("Location: /innoserv/login/login.php");
?>
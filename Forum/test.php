<?php
	include ('dbconn.php');
	$select = mysqli_query($conn,"select * from categories"); # $conn是來自dbconn.php
	while ($row = mysqli_fetch_assoc($select)) {
		# code...
		echo "<h1>".$row['cat_title'],"</h1>";
	}
?>
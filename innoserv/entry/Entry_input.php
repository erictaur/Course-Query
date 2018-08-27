<!DOCTYPE html>
<html>
<head>
<title>Course Query</title>
<base target="_self">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="entryjs.js"></script>
<link rel="stylesheet" type="text/css" href="../stylesheets/html_body.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/Entry_iframe.css">
</head>

<body>

	<p class="midtop_title">
		<br>
		<a href = "Entry_selection.php">Selection</a> / 
		<a href = "Entry_input.php">Input</a>
		<br><br>
		Find Courses By Input:
	</p>

<?php
	echo "
	<form action='query.php' method='POST'>
	<table class='search_table'>
		<tr><!-- First Row -->
			<td>
				By Year and Semester
			</td>
			<td>
				<select name = 'year' id = 'year'>
					<option value='0'>Select Year</option>
					<option value='107'>107</option>
    				<option value='106'>106</option>
    				<option value='105'>105</option>
    				<option value='104'>104</option>
				</select>
			</td>
			<td>
				<select name = 'semester' id = 'semester'>
					<option value='0'>Select Semester</option>
					<option value='Spring'>Spring</option>
    				<option value='Fall'>Fall</option>
				</select>
			</td>
		</tr>
	</table>	
	<p><br><br></p>

	<table class='search_table'>
		<tr><!-- First Row -->
			<td>
				By Course Code
			</td>
			<td>
				<input name = 'coursecode' type='text' id='coursecode'/>
			</td>
		</tr>
		<tr><!-- Second Row -->
			<td>
				By Instructor
			</td>
			<td>
				<input name = 'instructor' type='text' id='instructor'/>
			</td>
		</tr>
		<tr><!-- Third Row -->
   			<td>
   				By Course Name
   			</td>
   			<td>
				<input name = 'coursename' type='text' id='coursename'/>
    		</td> 
  		</tr>
	</table>
	<br><br><br><br><br>
	<input type='submit' align = 'middle'/>
	</form>";
	?>





</body>
</html>
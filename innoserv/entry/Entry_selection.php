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
		Find Courses By Selection:
	</p>

<form>
	<table class="search_table">
		<tr><!-- First Row -->
			<th>
				By Year and Semester
			</th>
			<td>
				<select name="year" form="top_search" id="year">
					<option value="0">Select Year</option>
					<option value="107">107</option>
    				<option value="106">106</option>
    				<option value="105">105</option>
    				<option value="104">104</option>
				</select>
			</td>
			<td>
				<select name="semester" form="top_search" id="semester">
					<option value="0">Select Semester</option>
					<option value="1">Spring</option>
    				<option value="2">Fall</option>
				</select>
			</td>
		</tr>
	</table>

	<p><br><br></p>

	<table class="search_table">
		<tr><!-- First Row -->
			<th>
				By College
			</th>
			<td>
				<select  onchange = "collegechange(this)" name = "college" form = "top_search" id = "college">
					<option value="0">Select College</option>
					<option value="1">Management</option>
    				<option value="2">Engineering</option>
    				<option value="3">Language Center</option>
    				<option value="4">General</option>
				</select>
			</td>
		</tr>
		<tr><!-- Second Row -->
			<th>
				By Department/Institute
			</th>
			<td>
				<select  name = "department" form = "top_search" id = "department">
				</select>
			</td>
		</tr>
		<tr><!-- Third Row -->
			<th>
				By Genre
			</th>
			<td>
				<select  name = "genre" form = "top_search" id = "genre">
					<option value="compulsory">Compulsory</option>
    				<option value="elective">Elective</option>
				</select>   
			</td>
		</tr>
		<tr><!-- Fourth Row -->
			<th>
				By Grade
			</th>
			<td>
				<select  name = "grade" form = "top_search" id = "grade">
					<option value="1">1</option>
    				<option value="2">2</option>
    				<option value="3">3</option>
    				<option value="4">4</option>
				</select>   
			</td>
		</tr>
	</table>
</form>

	<br><br><br><br><br>
	<input type="submit" align = "middle" form="top_search" />




</body>
</html>
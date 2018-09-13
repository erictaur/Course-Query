<?php include('top.php');

include ('../dbconn.php');

$query = "SELECT * FROM course WHERE crs_id='IM1013-A'"; 
$results = mysqli_query($conn, $query);
?>
<link rel='stylesheet' type='text/css' href='../../stylesheets/query_result.css'>
<table id='output_table'>
<?php include('../insert_function.php'); ?>
<?php
	if($results->num_rows> 0){
		while($row = mysqli_fetch_row($results)){ ?>

		<tr class='output_row'>
   			<td id='c1'><?php echo "$row[0] ";?></td>
    		<td id='c2'><?php echo "$row[1] ";?></td>
    		<td><?php echo "$row[2]  ";?></td>
    		<td><?php echo "$row[3]  ";?></td>
    		<td><?php echo "$row[4]  ";?></td>
    		<td id='c6'><?php echo "$row[5]  ";?></td>
    		<td><?php echo "$row[6]  ";?></td>
    		<td><?php echo "$row[7]  ";?></td>
    		<td><?php echo "$row[8]  ";?></td>
    		<td><?php echo "$row[9]  ";?></td>
    		<td><?php echo "$row[10]  ";?></td>
    	</tr>
    <?php
		}
	}
	?>
	<tr class='output_row'>
		<td colspan='12'><a href='../Entry.php'><input type='button' id='course_file_back' value='Back'></td>
	</tr>
</table>

	<form action='insert.php' method='post'>
	<input type='hidden' name='f_name' id='f_name' value='107_Fall_IM1013-A'/><br/>
    <input type='submit' name='send' id='send' value='Comment'/><br/>
	</form>
<div>
<p style="font-family:courier; font-size:160%; text-align:center; margin-top:150; width:100%">

Ahh...Nailed it<br/>
Ahh...Nailed it<br/>
I just wanna troll LOL<br/>
I would recommend this course for those who are willing to spend 10 hours per week studying this very course.<br/>
I would recommend this course for those who are willing to spend 10 hours per week studying this very course.<br/>
Homework a tad hard. Not suitable for those who wanted to enroll ez courses<br/>
nah...this course is boring<br/>
hello<br/>
<br/>

</p>
</div>
<?php
$user_input = $_POST['input_text'];

insert_content('107_Fall_IM1013-A.php', $user_input);
?>

<?php
include('bottom.php'); 
?>
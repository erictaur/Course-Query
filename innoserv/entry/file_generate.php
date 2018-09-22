<?php 
/*
This is the template engine that automatically 
creates individual php files for every single entry listed on the table 
*/
?>

<?php

include ('dbconn.php');

$query = "SELECT * FROM course"; 
$results = mysqli_query($conn, $query); // Catch all rows of the table.
error_reporting(0);
	//Iterating through all results
	if($results->num_rows > 0){
		while($row = mysqli_fetch_row($results)){

			$complete_name = $row[10]."_".$row[9]."_".$row[0];
			$query_segment = $row[0]; //This variable is used as part of the query string, as it is the primary key of each row.
            $postinfo = '/'.$row[10]."_".$row[9]."_".$row[0]; //Path of each file

            file_gen($postinfo, $query_segment, $complete_name);
            /* obsolete method
            if(file_exists('C:/xampp/htdocs/innoserv/entry/course_files'.$postinfo.'.php')==0){
            }*/
        }
    }
header("Location: /innoserv/entry/Entry.php");

//Declaration of the file generation function
function file_gen($fname, $q_segment, $full_name){

	$filename_prefix = $fname;
	$filename = $filename_prefix.'.'.'php'; //appending the string '.php' to the argument passed in earlier.

	//These 18 variables are temporary placeholders that would be written to each file
	/*
	The reason to do this is because the original variables cannot be printed out directly
	probably because php would try to extract the value of the variable 
	instead of printing it out as pure string format.
	*/
	$str1 = '$query';	
	$str2 = '$results';
	$str3 = '$row';
	$str4 = '$conn';
	$str5 = '$user_input';
	$str6 = '$_POST[\'input_text\']';
	$str7 = '$_POST';
	$str8 = '<?php echo $_SERVER[\'HTTP_REFERER\']; ?>';
	$str9 = '$_POST[\'q_year\']';
	$str10 = '$year';
	$str11 = '$_POST[\'q_semester\']';
	$str12 = '$semester';
	$str13 = '$_POST[\'q_coursecode\']';
	$str14 = '$coursecode';
	$str15 = '$_POST[\'q_instructor\']';
	$str16 = '$instructor';
	$str17 = '$_POST[\'q_coursename\']';
	$str18 = '$coursename';

	$save_text = 
	'if(!empty($_POST[\'q_year\']))
		{
		$year=$_POST[\'q_year\'];
		}
	if(!empty($_POST[\'q_semester\']))
		{
		$semester=$_POST[\'q_semester\'];
		}
	if(!empty($_POST[\'q_coursecode\']))
		{
		$coursecode=$_POST[\'q_coursecode\'];
		}
	if(!empty($_POST[\'q_instructor\']))
		{
		$instructor=$_POST[\'q_instructor\'];
		}
	if(!empty($_POST[\'q_coursename\']))
		{
		$coursename=$_POST[\'q_coursename\'];
		}';

	//Creation of the file
	/*
	Class 'output_table' displays essential information that of the individual php file

	Form '$str8' catches query parameters from query.php, allowing to return to previous page
	if and only if the 'back' button is pressed.

	Individual php files would pass the arguments received from query.php to query.php once the back button is pressed.
	*/
	$handle = fopen('C:/xampp/htdocs/innoserv/entry/course_files'.$filename, 'w') or die('Cannot open file:  '.$filename);
	echo fwrite($handle,"<?php include('top.php');

include ('../dbconn.php');

$str1 = \"SELECT * FROM course WHERE crs_id='".$q_segment."'\"; 
$str2 = mysqli_query($str4, $str1);
error_reporting(0);
?>
<link rel='stylesheet' type='text/css' href='../../stylesheets/query_result.css'>
<table id='output_table'>
		<tr class='output_row'>
			<th>Coursecode</th>
			<th>Coursename</th>
			<th>Credits</th>
			<th>Elective/<br/>Compulsory</th>
			<th>Course Duration</th>
			<th>Class Location/<br/>Time</th>
			<th>Quota</th>
			<th>Passcode Avail.</th>
			<th>Instructor</th>
			<th>Semester</th>
			<th>Year</th>
		</tr>
<?php include('../insert_function.php'); ?>
<?php
	if(".$str2."->num_rows"."> 0){
		while($str3 = mysqli_fetch_row($str2)){ ?>
<?php ".$save_text."; ?>
		<tr class='output_row'>
   			<td id='c1'><?php echo \"".$str3."[0] \";?></td>
    		<td id='c2'><?php echo \"".$str3."[1] \";?></td>
    		<td><?php echo \"".$str3."[2]  \";?></td>
    		<td><?php echo \"".$str3."[3]  \";?></td>
    		<td><?php echo \"".$str3."[4]  \";?></td>
    		<td id='c6'><?php echo \"".$str3."[5]  \";?></td>
    		<td><?php echo \"".$str3."[6]  \";?></td>
    		<td><?php echo \"".$str3."[7]  \";?></td>
    		<td id='c8'><?php echo \"".$str3."[8]  \";?></td>
    		<td><?php echo \"".$str3."[9]  \";?></td>
    		<td><?php echo \"".$str3."[10]  \";?></td>
    	</tr>
    <?php
		}
	}
	?>
	<tr class='output_row'>
		<td colspan='12'>
		<form action='".$str8."' method='post'>
           <?php
           if(!empty(".$str9."))
       		{echo \"<input type='hidden' name='year' id='year' value='"."\"."."$str10".".\""."'/>\";}
       		
       		if(!empty(".$str11."))
            {echo \"<input type='hidden' name='semester' id='semester' value='"."\"."."$str12".".\""."'/>\";}
        	
            if(!empty(".$str13."))
            {echo \"<input type='hidden' name='coursecode' id='coursecode' value='"."\"."."$str14".".\""."'/>\";}
                
            if(!empty(".$str15."))
            {echo \"<input type='hidden' name='instructor' id='instructor' value='"."\"."."$str16".".\""."'/>\";}

            if(!empty(".$str17."))
            {echo \"<input type='hidden' name='coursename' id='coursename' value='"."\"."."$str18".".\""."'/>\";}  
        	?>
        	<input type='submit' name='back' id='back' value='back'/><br/>
    	</form>
        </td>
	</tr>
	<tr class='output_row'>
		<td colspan='12'>
		<form id='comment_form' action='insert.php' method='post'>
			<input type='hidden' name='f_name' id='f_name' value='".$full_name."'/><br/>
    		<button type='submit' name='send' id='send' form='comment_form' value='Comment'>Comment</button><br/>
		</form>
		</td>
	</tr>
</table>

	
<div>
<p style=\""."font-family:courier; font-size:160%; text-align:center; margin-top:150; width:100%"."\">


</p>
</div>
<?php
$str5 = $str6;

if(!empty($str5)){
	insert_content('$full_name".".php'".", $str5);
}

?>

<?php
include('bottom.php'); 
?>");
	fclose($handle);

}

?>

<?php
/* obsolete method
if(array_key_exists($str5,$str7))
  	{
  	 insert_content('$full_name".".php'".", $str5);
  	}

<a href='../Entry.php'>
?>

<input type='button' id='course_file_back' value='Back' onclick='history.back(-1);'>


	$save_text2 =
	"	if(!empty({$_POST['q_year']}))
       	{echo \"<input type='hidden' name='year' id='year' value='\".$year.\"'/>\";}

        if(!empty({$_POST['q_semester']}))
        {echo \"<input type='hidden' name='semester' id='semester' value='\".$semester.\"'/>\";}
        
        if(!empty({$_POST['q_coursecode']}))
        {echo \"<input type='hidden' name='coursecode' id='coursecode' value='\".$coursecode.\"'/>\";}
                
        if(!empty({$_POST['q_instructor']}))
        {echo \"<input type='hidden' name='instructor' id='instructor' value='\".$instructor.\"'/>\";}

        if(!empty({$_POST['q_coursename']}))
        {echo \"<input type='hidden' name='coursename' id='coursename' value='\".$coursename.\"'/>\";}
		";

		<?php 
        	if(!empty({$_POST["\"".$str9."\"]}))
       		{echo \"<input type='hidden' name='year' id='year' value='\"".$str10."\"'/>\";}

            if(!empty({$_POST["\"".$str11."\"]}))
            {echo \"<input type='hidden' name='semester' id='semester' value='\"".$str12."\"'/>\";}
        	
            if(!empty({$_POST["\"".$str13."\"]}))
            {echo \"<input type='hidden' name='coursecode' id='coursecode' value='\"".$str14."\"'/>\";}
                
            if(!empty({$_POST["\"".$str15."\"]}))
            {echo \"<input type='hidden' name='instructor' id='instructor' value='\"".$str16."\"'/>\";}

            if(!empty({$_POST["\"".$str17."\"]}))
            {echo \"<input type='hidden' name='coursename' id='coursename' value='\"".$str18."\"'/>\";}  
        	?>
*/
?>



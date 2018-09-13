<?php

include ('dbconn.php');

$query = "SELECT * FROM course"; 
$results = mysqli_query($conn, $query);

	if($results->num_rows > 0){
		while($row = mysqli_fetch_row($results)){

			$complete_name = $row[10]."_".$row[9]."_".$row[0];
			$query_segment = $row[0];
            $postinfo = '/'.$row[10]."_".$row[9]."_".$row[0];

            file_gen($postinfo, $query_segment, $complete_name);
            //if(file_exists('C:/xampp/htdocs/innoserv/entry/course_files'.$postinfo.'.php')==0){
            
            //}
        }
    }
header("Location: /innoserv/entry/Entry.php");


function file_gen($fname, $q_segment, $full_name){

	$filename_prefix = $fname;
	$filename = $filename_prefix.'.'.'php';

	$str1 = '$query';	
	$str2 = '$results';
	$str3 = '$row';
	$str4 = '$conn';
	$str5 = '$user_input';
	$str6 = '$_POST[\'input_text\']';
	$str7 = '$_POST';

	$handle = fopen('C:/xampp/htdocs/innoserv/entry/course_files'.$filename, 'w') or die('Cannot open file:  '.$filename);
	echo fwrite($handle,"<?php include('top.php');

include ('../dbconn.php');

$str1 = \"SELECT * FROM course WHERE crs_id='".$q_segment."'\"; 
$str2 = mysqli_query($str4, $str1);
?>
<link rel='stylesheet' type='text/css' href='../../stylesheets/query_result.css'>
<table id='output_table'>
<?php include('../insert_function.php'); ?>
<?php
	if(".$str2."->num_rows"."> 0){
		while($str3 = mysqli_fetch_row($str2)){ ?>

		<tr class='output_row'>
   			<td id='c1'><?php echo \"".$str3."[0] \";?></td>
    		<td id='c2'><?php echo \"".$str3."[1] \";?></td>
    		<td><?php echo \"".$str3."[2]  \";?></td>
    		<td><?php echo \"".$str3."[3]  \";?></td>
    		<td><?php echo \"".$str3."[4]  \";?></td>
    		<td id='c6'><?php echo \"".$str3."[5]  \";?></td>
    		<td><?php echo \"".$str3."[6]  \";?></td>
    		<td><?php echo \"".$str3."[7]  \";?></td>
    		<td><?php echo \"".$str3."[8]  \";?></td>
    		<td><?php echo \"".$str3."[9]  \";?></td>
    		<td><?php echo \"".$str3."[10]  \";?></td>
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
	<input type='hidden' name='f_name' id='f_name' value='".$full_name."'/><br/>
    <input type='submit' name='send' id='send' value='Comment'/><br/>
	</form>
<div>
<p style=\""."font-family:courier; font-size:160%; text-align:center; margin-top:150; width:100%"."\">


</p>
</div>
<?php
$str5 = $str6;

insert_content('$full_name".".php'".", $str5);
?>

<?php
include('bottom.php'); 
?>");
	fclose($handle);

}

?>

<?php


/*
if(array_key_exists($str5,$str7))
  	{
  	 insert_content('$full_name".".php'".", $str5);
  	}
?>
*/

?>

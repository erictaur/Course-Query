<?php

include ('dbconn.php');

$query = "SELECT * FROM course"; 
$results = mysqli_query($conn, $query);

	if($results->num_rows > 0){
		while($row = mysqli_fetch_row($results)){

			$query_segment=$row[0];
            $postinfo='/'.$row[10]."_".$row[9]."_".$row[0];

            file_gen($postinfo, $query_segment);
            //if(file_exists('C:/xampp/htdocs/innoserv/entry/course_files'.$postinfo.'.php')==0){
            
            //}
        }
    }
header("Location: /innoserv/entry/Entry.php");


function file_gen($fname, $q_segment){

	$filename_prefix = $fname;
	$filename = $filename_prefix.'.'.'php';

	$str1 = '$query';	
	$str2 = '$results';
	$str3 = '$row';
	$str4 = '$conn';

	$handle = fopen('C:/xampp/htdocs/innoserv/entry/course_files'.$filename, 'w') or die('Cannot open file:  '.$filename);
	echo fwrite($handle,"<?php include('top.php');

include ('../dbconn.php');

$str1 = \"SELECT * FROM course WHERE crs_id='".$q_segment."'\"; 
$str2 = mysqli_query($str4, $str1);
?>
<link rel='stylesheet' type='text/css' href='../../stylesheets/query_result.css'>
<table id='output_table'>

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
	
</table>

<?php
include('bottom.php'); 
?>");
	fclose($handle);

}
?>

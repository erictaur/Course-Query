<?php include('top.php');

include ('../dbconn.php');

$query = "SELECT * FROM course WHERE crs_id='MA1001-B'"; 
$results = mysqli_query($conn, $query);
?>
<link rel='stylesheet' type='text/css' href='../../stylesheets/query_result.css'>
<table id='output_table'>

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
	
</table>

<?php
include('bottom.php'); 
?>
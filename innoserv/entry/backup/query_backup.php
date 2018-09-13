<link rel="stylesheet" type="text/css" href="../stylesheets/html_body.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/query_result.css">


<?php
	session_start();

	include ('dbconn.php');

	$q_year = $_POST['year'];
	$q_semester = $_POST['semester'];
	$q_coursecode = $_POST['coursecode'];
	$q_instructor = $_POST['instructor'];
	$q_coursename = $_POST['coursename'];

	

	$query = "SELECT * FROM course"; 

	$results = mysqli_query($conn, $query);
	
    $display_result="";
    ?>

    <table id="output_table">
    <?php
	if($results->num_rows > 0){
		while($row = mysqli_fetch_row($results)){?>
            <tr class='output_row'>

   			<td id='c1'><?php echo "$row[0]  " ?></td>
    		<td id='c2'><?php echo "$row[1]  " ?></td>
    		<td><?php echo "$row[2]  " ?></td>
    		<td><?php echo "$row[3]  " ?></td>
    		<td><?php echo "$row[4]  " ?></td>
    		<td id='c6'><?php echo "$row[5]  " ?></td>
    		<td><?php echo "$row[6]  " ?></td>
    		<td><?php echo "$row[7]  " ?></td>
    		<td><?php echo "$row[8]  " ?></td>
    		<td><?php echo "$row[9]  " ?></td>
    		<td><?php echo "$row[10]  " ?></td>

    		</tr>
            <tr>
                <th colspan="11"><br/><hr width="100%"></th>
            </tr>
    <?php            
		}
	}else{
		echo "No results were found.";
	}?>
  </table>


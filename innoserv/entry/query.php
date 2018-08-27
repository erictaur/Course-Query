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

	

	$query = "SELECT * FROM course
              WHERE (year = '$q_year'
              AND semester ='$q_semester')
              AND crs_id = '$q_coursecode'
              "; 

	$results = mysqli_query($conn, $query);
	
    ?>

    <table id="output_table">
    <?php

    //include ('file_generate.php');

	if($results->num_rows > 0){
		while($row = mysqli_fetch_row($results)){?>

            <?php
            $postinfo='/'.$row[10]."_".$row[9]."_".$row[0];
            ?>

            <tr class='output_row'>

   			<td id='c1'><?php echo "$row[0]  " ?></td>
    		<td id='c2'><?php echo "$row[1]  " ?></td>
    		<td><?php echo "$row[2]  "?></td>
    		<td><?php echo "$row[3]  "?></td>
    		<td><?php echo "$row[4]  "?></td>
    		<td id='c6'><?php echo "$row[5]  " ?></td>
    		<td><?php echo "$row[6]  "?></td>
    		<td><?php echo "$row[7]  "?></td>
    		<td><?php echo "$row[8]  "?></td>
    		<td><?php echo "$row[9]  "?></td>
    		<td><?php echo "$row[10]  "?></td>
            <td><a href="course_files<?php echo $postinfo ?>.php"><input type="button" value="click"></td>

    		</tr>
            <tr>
                <th colspan="12"><br/><hr width="100%"></th>
            </tr>
    <?php            
		}
	}else{
		echo "No results were found.";
	}?>
  </table>


link rel="stylesheet" type="text/css" href="../stylesheets/html_body.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/query_result.css">


<?php
	session_start();
    error_reporting(0);

	include ('dbconn.php');

	$q_year = $_POST['year'];
	$q_semester = $_POST['semester'];
	$q_coursecode = $_POST['coursecode'];
	$q_instructor = $_POST['instructor'];
	$q_coursename = $_POST['coursename'];


	$query = "SELECT * FROM course
              WHERE (year = '$q_year'
              AND semester ='$q_semester')
              OR crs_id = '$q_coursecode'
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
            <td>
            <form action='course_files<?php echo $postinfo ?>.php' method='post'>

                <?php 
                /*
                This Block decides which parameters to send to next page 
                so that we can go back to the query page without implementing AJAX
                */
                if(!empty($_POST['year']))
                {echo "<input type='hidden' name='q_year' id='q_year' value='".$q_year."'/>";}
       
                if(!empty($_POST['semester']))
                {echo "<input type='hidden' name='q_semester' id='q_semester' value='".$q_semester."'/>";}

                if(!empty($_POST['coursecode']))
                {echo "<input type='hidden' name='q_coursecode' id='q_coursecode' value='".$q_coursecode."'/>";}
                if(!empty($_POST['instructor']))
                {echo "<input type='hidden' name='q_instructor' id='q_instructor' value='".$q_instructor."'/>";}
                if(!empty($_POST['coursename']))
                {echo "<input type='hidden' name='q_coursename' id='q_coursename' value='".$q_coursename."'/>";}
                ?>
                <!-- This submit button sends the data implicitly-->
                <input type='submit' name='click' id='click' value='click'/><br/>
            </form>
            </td>

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

<?php    

function insert_content($fname, $input){


	$file_name = $fname;
	$file_path = $file_name; //Redundant, fname now includes '.php'

	$array_text = file($file_path, FILE_IGNORE_NEW_LINES);
	//Opens the file
	$start_at_line = 83;
	//This function would start writing at line 83
	//This has to be modified if we make changes to the template
	$write_at_line = $array_text[$start_at_line];

	$newline = $input."<br/>";
	//<br/> would be appended to every new line 
	//If new features are confirmed, we have to append something else 
	//For now This line of code simply forces the next comment to start at the next line

	array_splice($array_text, $start_at_line, 0, $newline);    
	// insert $newline at $start_at_line

	file_put_contents( $file_path , implode( "\n", $array_text ) );
}


?>

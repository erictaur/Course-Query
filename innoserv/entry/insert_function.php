<?php    

function insert_content($fname, $input){


	$file_name = $fname;
	$file_path = $file_name;

	$array_text = file($file_path, FILE_IGNORE_NEW_LINES);
	$start_at_line = 43;
	$write_at_line = $array_text[$start_at_line];

	$newline = $input."<br/>";

	array_splice($array_text, $start_at_line, 0, $newline);    // insert $newline at $start_at_line

	file_put_contents( $file_path , implode( "\n", $array_text ) );
}


?>
<?php

$file_name = $_POST['f_name'];

if(array_key_exists('send',$_POST)){
   insert_content($file_name);}

function insert_content($fname){


	$file_name = $fname;
	$file_path = $file_name.'php';
	$array_text = file($file_path, FILE_IGNORE_NEW_LINES);
	$start_at_line = 76;
	$write_at_line = $array_text[$start_at_line];

	$newline = 'echo "Testing...";';

	array_splice($array_text, $start_at_line, 0, $newline);    // insert $newline at $start_at_line

	file_put_contents( $file_path , implode( "\n", $array_text ) );
}


?>
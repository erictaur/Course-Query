<?php
function file_gen($fname){

	$filename_prefix = $fname;
	$filename = $filename_prefix.'.'.'php';

	$handle = fopen('C:/xampp/htdocs/innoserv/entry/course_files'.$filename, 'a+') or die('Cannot open file:  '.$filename);
	echo fwrite($handle,"Hello World!");
	fclose($handle);

}


//stackoverflow.com/questions/5293801/create-files-automatically-using-php-script

//https://stackoverflow.com/questions/13071784/html-templates-php
<?php
include('../insert_function.php');


$filename = $_POST['f_name'];

/*
if(isset($_POST['SubmitButton']))		//check if form was submitted
{ 		
  $input_text = $_POST['inputText']; 	//get input text
  
  	if(array_key_exists('send',$_POST))
  	{
  	 insert_content($filename, $input_text);
  	}

}
*/


?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<base target="_top">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="entryjs.js"></script>
<link rel="stylesheet" type="text/css" href="../../stylesheets/html_body.css">
<link rel="stylesheet" type="text/css" href="../../stylesheets/head.css">
<link rel="stylesheet" type="text/css" href="../../stylesheets/Entry_iframe.css">
<link rel="stylesheet" type="text/css" href="../../stylesheets/insert.css">
</head>

<body>

<?php $html_action = $filename.".php"; ?>
<form id="insert_form" action="<?php echo $html_action ; ?>" method="post">
<input type="text" id="input_text" name="input_text"/>
<input type="submit" id="SubmitButton" name="SubmitButton"/>
</form>


</body>
</html>





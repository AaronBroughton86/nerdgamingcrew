<?php
session_start();
$valid_extensions = array('jpeg', 'jpg'); // valid extensions
$path = 'emaillogo/'; // upload directory

if(isset($_FILES['image']))
{
	$img = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
		
	// get uploaded file's extension
	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
	
	// can upload same image using rand function
	//$final_image = rand(1000,1000000).$img;
	$final_image = "emaillogo.jpg";
	// check's valid format
	if(in_array($ext, $valid_extensions)) 
	{					
		$path = $path.strtolower($final_image);	
			
		if(!move_uploaded_file($tmp,$path)) 
		{
			echo $_GET["jsoncall"].'({"response":99})';
		}
		else
		{
			echo $_GET["jsoncall"].'({"response":2})';
		}
	} 
	else 
	{
			echo $_GET["jsoncall"].'({"response":8})';
	}
}


?>

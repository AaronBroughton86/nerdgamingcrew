<?php
session_start();
if(!isset($_POST["theprocess"]) || (isset($_POST["theprocess"]) && $_POST["theprocess"]!="updatechecks") ){
echo $_GET["jsoncall"].'({"response":99})';
exit();
}
if(!isset($_SESSION["loggedin"]) || (isset($_SESSION["loggedin"]) && ($_SESSION["loggedin"]!="active" ))) {
echo $_GET["jsoncall"].'({"response":99})';
exit();
}
include '../_private/dbconnect.php';

$thevalue=$_POST["thevalue"];
$thefield=$_POST["thefield"];

$strsql="UPDATE mobi_params SET mobi_params.param_value='".$thevalue."' WHERE(mobi_params.param_name='".$thefield."');";
	if(!mysqli_query($con,$strsql)) {
	echo $_GET["jsoncall"].'({"response":8})';
	}
	else
	{
	echo $_GET["jsoncall"].'({"response":2})';
	}
mysqli_close($con);
flush();			
?>

<?php
session_start();
if(!isset($_POST["process"]) || (isset($_POST["process"]) && $_POST["process"]!="update") ){
echo $_GET["jsoncall"].'({"response":99})';
exit();
}
if(!isset($_SESSION["loggedin"]) || (isset($_SESSION["loggedin"]) && ($_SESSION["loggedin"]!="active" ))) {
echo $_GET["jsoncall"].'({"response":99})';
exit();
}
include '../_private/dbconnect.php';

$theevalue=$_POST["theevalue"];
$theename=$_POST["theename"];

$strsql="UPDATE mobi_params SET mobi_params.param_value='".$theevalue."' WHERE(mobi_params.param_name='".$theename."');";
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

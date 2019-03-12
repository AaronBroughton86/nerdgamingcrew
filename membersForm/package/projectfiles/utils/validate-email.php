<?php
session_start();
if(!isset($_POST["process"]) || (isset($_POST["process"]) && $_POST["process"]!="verify")){
	echo $_GET["jsoncall"].'({"response":99})';
	exit();
}
include "../_private/dbconnect.php";
$vcode=$_POST["vcode"];
$email=$_POST["email"];
$strsql="SELECT mobi_members.* FROM mobi_members WHERE(mobi_members.sessionid='".$vcode."' AND mobi_members.email ='".$email."') LIMIT 1;";
$result=(mysqli_query($con,$strsql));
if (mysqli_num_rows($result)==0)  {
	echo $_GET["jsoncall"].'({"response":9})';
}
else
{
$strsql="UPDATE mobi_members SET mobi_members.status='A' WHERE(mobi_members.sessionid='".$vcode."' AND mobi_members.email ='".$email."');";
if(!mysqli_query($con,$strsql)){
	echo $_GET["jsoncall"].'({"response":99})';
}
else
{	
	echo $_GET["jsoncall"].'({"response":2})';
}
}
mysqli_close($con);
?>

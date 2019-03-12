<?php
session_start();
if(!isset($_REQUEST["checkid"]) || (isset($_REQUEST["checkid"]) && $_REQUEST["checkid"]!="checkid")){
	exit();
}
include "../_private/dbconnect.php";
$theid=$_REQUEST["theid"];
$strsql="SELECT mobi_members.userid FROM mobi_members WHERE(mobi_members.userid='".$theid."') LIMIT 1;";
$result=(mysqli_query($con,$strsql));
if (mysqli_num_rows($result)==0)  {
	echo $_GET["jsoncall"].'({"response":2})';
}
else
{
	echo $_GET["jsoncall"].'({"response":9})';
}
mysqli_close($con);
?>

<?php
session_start();
if(!isset($_POST["process"]) || (isset($_POST["process"]) && $_POST["process"]!="updatefield")){
	echo $_GET["jsoncall"].'({"response":9})';
	exit();
}
include "../_private/dbconnect.php";
$id=$_POST["id"];
$thevalue=$_POST["thevalue"];
    $thevalue = stripslashes($thevalue);
    $thevalue = str_replace("\\","",$thevalue);
    $thevalue = str_replace("\'","&#39;",$thevalue);
    $thevalue = str_replace("'","&#39;",$thevalue);
$thevalue=mysqli_real_escape_string($con,$thevalue);
$thename=$_POST["thename"];
    $thename = stripslashes($thename);
    $thename = str_replace("\\","",$thename);
    $thename = str_replace("\'","&#39;",$thename);
    $thename = str_replace("'","&#39;",$thename);
$thename=mysqli_real_escape_string($con,$thename);
if(!isset($_POST["thename"]) || !isset($_POST["thevalue"])){
	echo $_GET["jsoncall"].'({"response":9})';
	mysqli_close($con);
	exit();
}
	$strsql="UPDATE mobi_members SET mobi_members.".$thename." = '".$thevalue."' WHERE(mobi_members.ID='".$id."');";
	if(!mysqli_query($con,$strsql)){
			echo $_GET["jsoncall"].'({"response":8})';
			mysqli_close($con);
			exit();
	}
else
{
		echo $_GET["jsoncall"].'({"response":2})';
		mysqli_close($con);
}
?>
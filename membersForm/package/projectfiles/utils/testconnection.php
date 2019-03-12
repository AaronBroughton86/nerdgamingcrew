<?php
session_start();
if(!isset($_POST["process"]) || (isset($_POST["process"]) && $_POST["process"]!="testconnection")){
	echo $_GET["jsoncall"].'({"response":99,"reserr":"Token error."})';
	exit();
}	
$db = $_POST["dbname"];
$dblocation = $_POST["dblocation"];
$dbusername = $_POST["dbusername"];
$dbpassword = $_POST["dbpass"];
$con=@mysqli_connect($dblocation,$dbusername,$dbpassword,$db);
if (mysqli_connect_errno())
  {
	$errmsg = "Failed to connect to MySQL: " . mysqli_connect_error();
	echo $_GET["jsoncall"].'({"response":6,"reserr":"'.$errmsg.'"})';
  exit();
  }
   	$strsql="CREATE TABLE tbl_test (ID bigint(20) NOT NULL AUTO_INCREMENT,Field1 bigint(20) NOT NULL,PRIMARY KEY (ID)) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;";
	    if (!mysqli_query($con,$strsql)) {
	echo $_GET["jsoncall"].'({"response":7,"reserr":"'.$errmsg.'"})';
		}
		else
		{
	echo $_GET["jsoncall"].'({"response":2,"reserr":"No Errors."})';
		$strsql="DROP TABLE tbl_test;";		
	    mysqli_query($con,$strsql);
		}
	mysqli_close($con);
?>

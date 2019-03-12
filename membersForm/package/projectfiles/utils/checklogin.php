<?php
session_start();
if(!isset($_POST["process"]) || (isset($_POST["process"]) && $_POST["process"]!="login")){
	echo $_GET["jsoncall"].'({"response":9})';
	exit();
}
include "../_private/dbconnect.php";
$userid=$_POST["userid"];
$password=$_POST["password"];
    $userid = stripslashes($userid);
    $userid = str_replace("\\","",$userid);
    $userid = str_replace("\'","&#39;",$userid);
    $userid = str_replace("'","&#39;",$userid);
    $userid = mysqli_real_escape_string($con,$userid);
    $password = stripslashes($password);
    $password = str_replace("\\","",$password);
    $password = str_replace("\'","&#39;",$password);
    $password = str_replace("'","&#39;",$password);
    $password = $password;
if(!isset($_POST["userid"]) || !isset($_POST["password"])){
	echo $_GET["jsoncall"].'({"response":9})';
	mysqli_close($con);
	exit();
}
$strsql="SELECT mobi_members.* FROM mobi_members WHERE ((mobi_members.userid='".$userid."') AND (mobi_members.status='A')) LIMIT 1;";
		$result=mysqli_query($con,$strsql);
        if (mysqli_num_rows($result)==0)  {
			echo $_GET["jsoncall"].'({"response":8})';
			mysqli_close($con);
			exit();
		}
        else
        {
   		$row = mysqli_fetch_array($result);
    	$hash = hash('sha256', $row['salt'] . hash('sha256', $password) );
    	if($hash != $row['password']){
			$_SESSION["loggedin"]="";
			$_SESSION["userid"]="";
			$_SESSION["password"]="";
			$_SESSION["salt"]="";			
			$_SESSION["fname"]="";
			$_SESSION["useremail"]="";
			echo $_GET["jsoncall"].'({"response":8})';
			mysqli_close($con);
			exit();
		}
		else
		{
		$_SESSION["loggedin"]="active";
		$_SESSION["userid"]=$row["userid"];
		$_SESSION["password"]=$row["password"];
		$_SESSION["salt"]=$row["salt"];
		$names=explode(" ",$row["fname"]);
		$firstname=$names[0];		
		$_SESSION["fname"]=$firstname;
		$_SESSION["useremail"]=$row["email"];
		echo $_GET["jsoncall"].'({"response":2})';
		mysqli_close($con);
		}
}
?>
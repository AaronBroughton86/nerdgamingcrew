<?php
session_start();
if(!isset($_POST["process"]) || (isset($_POST["process"]) && $_POST["process"]!="changepass")){
	echo $_GET["jsoncall"].'({"response":9})';
	exit();
}
    function createSalt()
    {
    $text = md5(uniqid(rand(), true));
    return substr($text, 0, 3);
    }
include "../_private/dbconnect.php";
$userid=$_SESSION["userid"];
$password=$_POST["newpassword"];
    $password = stripslashes($password);
    $password = str_replace("\\","",$password);
    $password = str_replace("\'","&#39;",$password);
    $password = str_replace("'","&#39;",$password);
//$password=mysqli_real_escape_string($con,$password);
$oldpassword=$_POST["oldpassword"];
    $oldpassword = stripslashes($oldpassword);
    $oldpassword = str_replace("\\","",$oldpassword);
    $oldpassword = str_replace("\'","&#39;",$oldpassword);
    $oldpassword = str_replace("'","&#39;",$oldpassword);
//$oldpassword=mysqli_real_escape_string($con,$oldpassword);
if(!isset($_SESSION["userid"]) || !isset($_POST["newpassword"])){
	echo $_GET["jsoncall"].'({"response":9})';
	mysqli_close($con);
	exit();
}
$strsql="SELECT mobi_members.* FROM mobi_members WHERE (mobi_members.userid='".$userid."') LIMIT 1;";
		$result=mysqli_query($con,$strsql);
        if (mysqli_num_rows($result)==0)  {
			echo $_GET["jsoncall"].'({"response":8})';
			mysqli_close($con);
			exit();
		}
        else
        {
   		$row = mysqli_fetch_array($result);
    	$hash = hash('sha256', $row['salt'] . hash('sha256', $oldpassword) );
    	if($hash != $row['password']){
			echo $_GET["jsoncall"].'({"response":7})';
			mysqli_close($con);
			exit();
		}
		else
		{
	$hash = hash('sha256', $password);
    $salt = createSalt();
    $newpassword = hash('sha256', $salt . $hash);
	$strsql="UPDATE mobi_members SET mobi_members.password='".$newpassword."',mobi_members.salt='".$salt."' WHERE(mobi_members.userid='".$userid."');";
	if(!mysqli_query($con,$strsql)){
			echo $_GET["jsoncall"].'({"response":8})';
			mysqli_close($con);
			exit();
	}	
		$_SESSION["password"]=$newpassword;
		$_SESSION["salt"]=$salt;
		echo $_GET["jsoncall"].'({"response":2})';
		mysqli_close($con);
		}
}
?>
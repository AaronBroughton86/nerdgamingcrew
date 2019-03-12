<?php
session_start();
if(!isset($_POST["process"]) || (isset($_POST["process"]) && $_POST["process"]!="forgotpass")){
	echo $_GET["jsoncall"].'({"response":9})';
	exit();
}
    function createSalt()
    {
    $text = md5(uniqid(rand(), true));
    return substr($text, 0, 3);
    }
include "../_private/dbconnect.php";
if(!isset($_POST["userid"])){
	echo $_GET["jsoncall"].'({"response":9})';
	mysqli_close($con);
	exit();
}
$strsql="SELECT mobi_params.* FROM mobi_params WHERE(mobi_params.param_name='sendmailfrom') LIMIT 1;";
    $result=mysqli_query($con,$strsql);
    $row=mysqli_fetch_array($result);
    $sendmailfrom=$row["param_value"];
$userid=$_POST["userid"];
    $userid = stripslashes($userid);
    $userid = str_replace("\\","",$userid);
    $userid = str_replace("\'","&#39;",$userid);
    $userid = str_replace("'","&#39;",$userid);

$strsql="SELECT mobi_members.* FROM mobi_members WHERE (mobi_members.userid='".$userid."') LIMIT 1;";
		$result=mysqli_query($con,$strsql);
        if (mysqli_num_rows($result)==0)  {
			echo $_GET["jsoncall"].'({"response":7})';
			mysqli_close($con);
			exit();
		}
        else
        {
   		$row = mysqli_fetch_array($result);
		$email=$row["email"];
		$names=explode(" ",$row["fname"]);
		$firstname=$names[0];
		$userid=$row["userid"];
		$id=$row["ID"];
		$password1=rand(111111,999999);

		$hash = hash('sha256', $password1);
		$salt = createSalt();
		$newpassword = hash('sha256', $salt . $hash);
		$strsql="UPDATE mobi_members SET mobi_members.password='".$newpassword."',mobi_members.salt='".$salt."' WHERE(mobi_members.ID=".$id.");";
		if(!mysqli_query($con,$strsql)){
			echo $_GET["jsoncall"].'({"response":8})';
			mysqli_close($con);
			exit();
		}	
			$body= '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>'.$siteName.' Password Reset</title></head><body><font face="arial"><div style="width:600px;">'."\r\n";
    		$body = $body.'<img src="'.$strSiteURL.'utils/emaillogo/emaillogo.jpg" width="600px" alt="Header-Image" />'."\r\n";
    		$body = $body.'<hr><h3>Your Password Reset Request for '.$siteName.'.</h3><hr><br/>'."\r\n";
    		$body = $body.'</div>';
    		$body = $body.'<table width="600px;"><tr><td colspan="2">You requested your password be reset for ' .$firstname. ' (' .$userid. ') for your  account.</td></tr><tr><td colspan="2">Your password has been reset to: <strong>' .$password1. '</strong>, '."\r\n";
    		$body = $body.'you should change this temporary password as soon as possible.</td></tr><tr><td colspan="2"><a href="'.$strSiteURL.'" target="_blank">'.$siteName.'</a></td></tr><tr><td colspan="2">&nbsp;</td></tr><tr><td colspan="2"><hr></td></tr>'."\r\n";
    		$body = $body.'<tr><td colspan="2">This transmission (the email and all attachments) is intended solely for the addressee(s) and may be confidential and subject to ' .$siteName. '-client privilege.<br/>'."\r\n";
    		$body = $body.'If you are not the intended recipient of this email or you feel you have received it in error, please inform ' .$sendmailfrom. ' immediately and delete this email at once.<br/>'."\r\n";
    		$body = $body.'This email was sent to you as this email address was used to sign up to the ' .$siteName. ' web site.<br/>We never send unsolicited emails.<br/>'."\r\n";
    		$body = $body.'Any opinions or views contained in this email are those of the sender, and do not represent those of ' .$siteName. ' in any way unless signed by us and reliance should not be made on its contents.</td></tr>'."\r\n";
    		$body = $body.'</tr><tr><td colspan="2"><hr></td></tr></table></div></body></html>'."\r\n";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject = 'You requested a Password Reset at '.$siteName.'.';		

// More headers
$headers .= 'From:' . $siteName . '<'.$sendmailfrom.'>'."\r\n";
$headers .= 'Reply-To:' . $sendmailfrom . "\r\n";
$headers .= "X-Mailer: PHP/".phpversion();
				if(!mail($email,$subject,$body,$headers)){
					echo $_GET["jsoncall"].'({"response":9})';
				} 
				else 
				{
					echo $_GET["jsoncall"].'({"response":2})';				
				}
			}
		mysqli_close($con);
?>
<?php
			$body= '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>'.$siteName.' Membership Application</title></head><body><font face="arial"><div style="width:600px;">'."\r\n";
    		$body = $body.'<img src="'.$strSiteURL.'utils/emaillogo/emaillogo.jpg" width="600px" alt="Header-Image" />'."\r\n";
    		$body = $body.'<hr><h3>Your Account at '.$siteName.'.</h3><hr><br/>'."\r\n";
    		$body = $body.'</div>';
    		$body = $body.'<table width="600px;"><tr><td colspan="2">Welcome to '.$siteName.', ' .$firstname. ' (' .$userid. ').</td></tr>'."\r\n";
			$body = $body.'<tr><td colspan="2">To activate your account please click the link below and enter the code : <b>'.$secureit.'</b><br>'."\r\n";
			$body = $body.'<a href="'.$strSiteURL.'verify.php?RID=lakuebfmkqbcvgshdlkjueyrtgfsvcsg&SID='.$secureit.'&EID='.$email.'" target="_blank">'.$strSiteURL.'verify.php?RID=lakuebfmkqbcvgshdlkjueyrtgfsvcsg&SID='.$secureit.'&EID='.$email.'</a><br>'."\r\n";
			$body = $body.'If clicking the link above does not work, please copy the entire link text and paste in a new browser window and click Go or Press Enter.<br>'."\r\n";
			$body = $body.'If you have any problems activating your account please email:'.$sendmailfrom.'</td></tr><tr><td colspan="2"><a href="'.$strSiteURL.'" target="_blank">'.$siteName.'</a></td></tr><tr><td colspan="2">&nbsp;</td></tr><tr><td colspan="2"><hr></td></tr>'."\r\n";
    		$body = $body.'<tr><td colspan="2">This transmission (the email and all attachments) is intended solely for the addressee(s) and may be confidential and subject to ' .$siteName. '-client privilege.<br>'."\r\n";
    		$body = $body.'If you are not the intended recipient of this email or you feel you have received it in error, please inform ' .$sendmailfrom. ' immediately and delete this email at once.<br>'."\r\n";
    		$body = $body.'This email was sent to you as this email address was used to sign up to the ' .$siteName. ' web site.<br>We never send unsolicited emails.<br>'."\r\n";
    		$body = $body.'Any opinions or views contained in this email are those of the sender, and do not represent those of ' .$siteName. ' in any way unless signed by us and reliance should not be made on its contents.</td></tr>'."\r\n";
    		$body = $body.'</tr><tr><td colspan="2"><hr></td></tr></table></div></body></html>'."\r\n";
?>
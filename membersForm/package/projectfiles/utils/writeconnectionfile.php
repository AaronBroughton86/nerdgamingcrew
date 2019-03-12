<?php
			if (!file_exists('_private/')) {
				mkdir('_private/', 0755, true);
			}
$data_file = "_private/dbconnect.php";

$fileConn = fopen($data_file,"w");
if (!$fileConn) {
		echo '<p class="mbr-section-lead lead" style="color:#ff0000;font-weight:700;">Error opening dbconnect.php file for writing.</p>';
		exit();
	}
fwrite($fileConn,"<?php".PHP_EOL);
fwrite($fileConn,"\$db = \"".$_POST['dbname']."\";".PHP_EOL);
fwrite($fileConn,"\$dblocation = \"".$_POST['dblocation']."\";".PHP_EOL);
fwrite($fileConn,"\$dbusername = \"".$_POST['dbusername']."\";".PHP_EOL);
fwrite($fileConn,"\$dbpassword = \"".$_POST['dbpass']."\";".PHP_EOL);
fwrite($fileConn,"\$con = mysqli_connect(\$dblocation,\$dbusername,\$dbpassword,\$db) or die(\"Error in connect string: \". mysqli_error(\$con));".PHP_EOL);
fwrite($fileConn,"\$strSiteURL = \"".$_POST['siteurl']."\";".PHP_EOL);
fwrite($fileConn,"\$siteName = \"".$_POST['sitename']."\";".PHP_EOL);
fwrite($fileConn,"\$siteEmail = \"".$_POST['siteemail']."\";".PHP_EOL);
fwrite($fileConn,"?>".PHP_EOL);
fclose($fileConn);
$_SESSION["usesiteemail"]=$_POST['siteemail'];
		echo '<p class="mbr-section-lead lead" style="color:#ffffff;font-weight:700;">File written successfully.</p>';
?>
     
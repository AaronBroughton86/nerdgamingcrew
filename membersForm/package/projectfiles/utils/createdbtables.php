<?php
include '_private/dbconnect.php';
error_reporting(0);
echo '<p style="font-weight:700;color:#ffffff;">Creating Table mobi_members.</p>';
$strsql="CREATE TABLE IF NOT EXISTS `mobi_members` (`ID` bigint(20) NOT NULL,  `userid` varchar(30) COLLATE utf8_bin DEFAULT NULL,  `password` varchar(128) COLLATE utf8_bin DEFAULT NULL,  `salt` char(128) COLLATE utf8_bin DEFAULT NULL,  `fname` varchar(60) COLLATE utf8_bin DEFAULT NULL,  `email` varchar(150) COLLATE utf8_bin DEFAULT NULL,  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,  `status` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'P',  `ipaddress` varchar(100) COLLATE utf8_bin DEFAULT NULL,  `website` varchar(150) COLLATE utf8_bin DEFAULT NULL,  `facebookpage` varchar(150) COLLATE utf8_bin DEFAULT NULL,  `country` varchar(100) COLLATE utf8_bin DEFAULT NULL,  `sessionid` varchar(255) COLLATE utf8_bin DEFAULT NULL) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;";
if (!mysqli_query($con,$strsql)) {
		echo '<p style="font-weight:700;color:#ff0000;">An error has occurred, Table mobi_members not Created - Contact Support.<hr></p>';
		}
		else
		{
		echo '<p style="font-weight:700;color:#ffffff;">Table mobi_members created successfully.<hr></p>';
		}
echo '<p style="font-weight:700;color:#ffffff;">Creating Table mobi_params.</p>';
$strsql="CREATE TABLE IF NOT EXISTS `mobi_params` (  `ID` bigint(20) NOT NULL DEFAULT '0',  `param_name` varchar(50) COLLATE utf8_bin NOT NULL,  `param_value` varchar(50) COLLATE utf8_bin DEFAULT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;";
if (!mysqli_query($con,$strsql)) {
		echo '<p style="font-weight:700;color:#ff0000;">An error has occurred, Table mobi_params not Created - Contact Support.<hr></p>';
		}
		else
		{
		echo '<p style="font-weight:700;color:#ffffff;">Table mobi_params created successfully.<hr></p>';
		}
echo '<p style="font-weight:700;color:#ffffff;">Altering Table mobi_params.</p>';
$strsql="ALTER TABLE `mobi_params` ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `param_name` (`param_name`), ADD KEY `param_value` (`param_value`);
";
if (!mysqli_query($con,$strsql)) {
		echo '<p style="font-weight:700;color:#ff0000;">An error has occurred, Table mobi_params not Altered - Contact Support.<hr></p>';
		}
		else
		{
		echo '<p style="font-weight:700;color:#ffffff;">Table mobi_params altered successfully.<hr></p>';
		}
echo '<p style="font-weight:700;color:#ffffff;">Altering Table mobi_members adding indexes.</p>';
$strsql="ALTER TABLE `mobi_members` ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `userid` (`userid`), ADD KEY `password` (`password`,`status`), ADD KEY `sessionid` (`sessionid`);";
if (!mysqli_query($con,$strsql)) {
		echo '<p style="font-weight:700;color:#ff0000;">An error has occurred, Table mobi_members not Altered (adding indexes) - Contact Support.<hr></p>';
		}
		else
		{
		echo '<p style="font-weight:700;color:#ffffff;">Table mobi_members altered (adding indexes) successfully.<hr></p>';
		}
echo '<p style="font-weight:700;color:#ffffff;">Altering Table mobi_members setting primary key.</p>';
$strsql="ALTER TABLE `mobi_members` MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;";
if (!mysqli_query($con,$strsql)) {
		echo '<p style="font-weight:700;color:#ff0000;">An error has occurred, Table mobi_members not Altered (setting primary key) - Contact Support.<hr></p>';
		}
		else
		{
		echo '<p style="font-weight:700;color:#ffffff;">Table mobi_members altered (setting primary key) successfully.<hr></p>';
		}
echo '<p style="font-weight:700;color:#ffffff;">Adding admin record to mobi_members.</p>';
$strsql="INSERT INTO `mobi_members` (`ID`, `userid`, `password`, `salt`, `fname`, `email`, `dateadded`, `status`, `ipaddress`, `website`, `facebookpage`, `country`, `sessionid`) VALUES(1, 'admin', '0690487c4b7b3ac87cbf4de941b8b540fd8a769efe828f1d2d97c44052573180', 'ccf', 'System Owner', '".$_SESSION["usesiteemail"]."', '2016-10-01 15:11:45', 'A', NULL, NULL, NULL, 'Australia', NULL);";
if (!mysqli_query($con,$strsql)) {
		echo '<p style="font-weight:700;color:#ff0000;">An error has occurred, admin record not added to mobi_members - Contact Support.<hr></p>';
		}
		else
		{
		echo '<p style="font-weight:700;color:#ffffff;">Table mobi_members admin record added successfully.<hr></p>';
		}
echo '<p style="font-weight:700;color:#ffffff;">Adding records to mobi_params.</p>';
$strsql="INSERT INTO `mobi_params` (`ID`, `param_name`, `param_value`) VALUES(1, 'allowregs', 'Y'),(2, 'sendmailfrom', '".$_SESSION["usesiteemail"]."');";
if (!mysqli_query($con,$strsql)) {
		echo '<p style="font-weight:700;color:#ff0000;">An error has occurred, records not added to mobi_params - Contact Support.<hr></p>';
		}
		else
		{
		echo '<p style="font-weight:700;color:#ffffff;">Table mobi_params records added successfully.<hr></p>';
		}
echo '<p style="font-weight:700;color:#ffffff;">Job ended - see reports of progress and status above.</p>';		
mysqli_close($con);
?>
<?php session_start();?>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="css/pagefilter.css" type="text/css">
  <style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Raleway:400,300,700);
.mbr-cards-col:nth-child(2n+1){
background-color:#cccccc !important;
}
.mbr-cards-col{
background-color:#efefef !important;
}
.hlink_1{visibility:visible !important;
}
  label {	color: #ffffff;
}
.form-control-label {
	color: #ffffff;
}
SMALL {
	color: #000000;
	font-family: 'Raleway',sans-serif;
}
.rs-form-control {
  background-color: #f5f5f5;
  border-radius: 3px;
  box-shadow: none;
  color: #565656;
  font-size: 1.3rem;
  line-height: 1.53;
  min-height: 3.5em;
  padding: 0.5em 1.07em 0.5em; }
.rs-form-control, .rs-form-control:focus {
  border: 1px solid #e8e8e8; }
.rs-form-active .rs-form-control:invalid {
 border-color: #f28281; }
.rs-form-control-label {
  cursor: pointer;
  font-size: 0.875rem;
  margin-bottom: 0.357em;
  padding: 0; }
.rs-form-control, .rs-form-control-file, .rs-form-control-range {
    display: block;}
.rs-form-control {
    width: 100%;
    background-image: none;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.regular-checkbox {
	display: none;
}

.regular-checkbox + label {
    width:100%;
	background-color: #fafafa;
	border: 1px solid #cacece;
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
	padding: 9px;
	border-radius: 3px;
	display: inline-block;
	position: relative;
}

.regular-checkbox + label:active, .regular-checkbox:checked + label:active {
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
}

.regular-checkbox:checked + label {
	background-color: #e9ecee;
	border: 1px solid #adb8c0;
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05), inset 15px 10px -12px rgba(255,255,255,0.1);
	color: #000000;
}

.regular-checkbox:checked + label:after {
	content: '\2714';
	font-size: 17px;
	position: absolute;
	top: 0px;
	left: 3px;
	color: #000000;
}


.big-checkbox + label {
    font-size: 1.3rem;
    font-family:'Raleway',sans-serif;
	padding: 18px;
    color:#000000;
}

.big-checkbox:checked + label:after {
	font-size: 1.3rem;
    font-family:'Raleway',sans-serif;
	left: 6px;
    color:#000000;
}
.adj-top{padding-top:20px !important;
}
#notes{background-color:#cdcdcd;
    color:#000000;
    padding:5px;
}
.boldit{font-weight:700;
}
</style>
  
  <script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/sweetalert.css">
<link rel="stylesheet" href="css/RSinvisible.css" type="text/css">
<script src="js/RSValidation.js"></script>
<script src="js/RSupdatefields.js"></script>
</head>
<body>
<section id="memberlisting" class="mbr-cards mbr-section mbr-section-nopadding" style="background-color: rgb(255, 255, 255);">

<?php
include '_private/dbconnect.php';
$strsql="SELECT mobi_params.* FROM mobi_params WHERE(mobi_params.param_name='sendmailfrom') LIMIT 1;";
    $result=mysqli_query($con,$strsql);
    $row=mysqli_fetch_array($result);
    $sendmailfrom=$row["param_value"];

	if (isset($_POST["process"]) && $_POST["process"]=="Add") {
$fname=stripslashes($_POST["fname"]);
$fname = str_replace('"','',$fname);
$fname = str_replace("\'","&#39;",$fname);
$fname = str_replace("'","&#39;",$fname);
$fname = ucwords($fname);    
$fname = mysqli_real_escape_string($con,$fname);
$email=stripslashes($_POST["email"]);
$email = str_replace('"','',$email);
$email = str_replace("\'","&#39;",$email);
$email = str_replace("'","&#39;",$email);
$email = mysqli_real_escape_string($con,$email);
$country=stripslashes($_POST["country"]);
$country = str_replace('"','',$country);
$country = str_replace("\'","&#39;",$country);
$country = str_replace("'","&#39;",$country);
$country = ucwords($country);    
$country = mysqli_real_escape_string($con,$country);
$userid=stripslashes($_POST["userid"]);
$userid = str_replace('"','',$userid);
$userid = str_replace("\'","&#39;",$userid);
$userid = str_replace("'","&#39;",$userid);
$userid = mysqli_real_escape_string($con,$userid);
$password=stripslashes($_POST["password"]);
$password = str_replace('"','',$password);
$password = str_replace("\'","&#39;",$password);
$password = str_replace("'","&#39;",$password);
$password = mysqli_real_escape_string($con,$password);
$website=stripslashes($_POST["website"]);
$website = str_replace('"','',$website);
$website = str_replace("\'","&#39;",$website);
$website = str_replace("'","&#39;",$website);
$website = mysqli_real_escape_string($con,$website);
$facebookpage=stripslashes($_POST["facebookpage"]);
$facebookpage = str_replace('"','',$facebookpage);
$facebookpage = str_replace("\'","&#39;",$facebookpage);
$facebookpage = str_replace("'","&#39;",$facebookpage);
$facebookpage = mysqli_real_escape_string($con,$facebookpage);
if(isset($_POST["checksendmail"])){
	$sendmail=true;
}
else
{
	$sendmail=false;
}
$ipaddress=$_SERVER['REMOTE_ADDR'];
	$hash = hash('sha256', $password);
     
    function createSalt()
    {
    $text = md5(uniqid(rand(), true));
    return substr($text, 0, 3);
    }
     
    $salt = createSalt();
    $newpassword = hash('sha256', $salt . $hash);
$secureit = session_id()."-".rand();
$strsql="INSERT INTO mobi_members (userid,password,salt,fname,email,country,website,facebookpage,ipaddress,sessionid,status) VALUES('".$userid."','".$newpassword."','".$salt."','".$fname."','".$email."','".$country."','".$website."','".$facebookpage."','".$ipaddress."','".$secureit."','A');";
if(!mysqli_query($con,$strsql)){
	echo '<script type="text/javascript">parent.swal({title: "Error!",text: "An error has occurred - User not Added - Please try again.",  type: "error"})</script>';
}
else
{
	echo '<script type="text/javascript">parent.swal({title: "Success!",text: "Member has been Added.",  type: "success"})</script>';
	
	if($sendmail==true){
$names=explode(" ",$fname);
$firstname=$names[0];
include "utils/buildactivationbody-manual.php";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject = 'Your Members Account at '.$siteName.'.';		

// More headers
$headers .= 'From:' . $siteName . '<'.$sendmailfrom.'>'."\r\n";
$headers .= 'Reply-To:' . $sendmailfrom . "\r\n";
$headers .= "X-Mailer: PHP/".phpversion();
	if(!mail($email,$subject,$body,$headers)){
	echo '<script type="text/javascript">parent.swal({title: "Error!",text: "An error has occurred when trying to send the email to the Member - you may need to contact the Member by another means.",  type: "error"});</script>';
	}
	else
	{
	echo '<script type="text/javascript">parent.swal({title: "Success!",text: "An email has been sent to the Member and Record Added.",  type: "success"});</script>';
	}
}
}    
}
	
	$rowsperpage = 6;
	$strcountsql="SELECT COUNT(*) FROM mobi_members ;";
	$strsql="SELECT mobi_members.* FROM mobi_members ORDER BY mobi_members.fname, mobi_members.dateadded ";
		$result=mysqli_query($con,$strcountsql);
        if (mysqli_num_rows($result)==0)  {
        	echo "<div><hr><h2>No Member Records Found.</h2><hr></div>";
        }
        else
        {
        $row = mysqli_fetch_row($result);
		$numrows = $row[0];
		$totalpages = ceil($numrows / $rowsperpage);		
		if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {   
   		$currentpage = (int) $_GET['currentpage'];
		}
		else 
		{
   		$currentpage = 1;
		}
		if ($currentpage > $totalpages) {
   		$currentpage = $totalpages;
		}
		if ($currentpage < 1) {
   		$currentpage = 1;
		} 
		$offset = ($currentpage - 1) * $rowsperpage;

$strsql=$strsql." LIMIT ".$offset.", ".$rowsperpage.";";
		$result=mysqli_query($con,$strsql);
        if (mysqli_num_rows($result)==0)  {
        	echo "<div><hr><h2>No Member Records Found.</h2><hr></div>";
        }
        else
        {
		$ccount=1;
    echo '<div class="mbr-cards-row row striped">';
	    while($row = mysqli_fetch_array($result)) {
        echo '<div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">';
        echo '    <div class="container">';
        echo '        <div class="card cart-block">';
        echo '            <div class="card-block">';
        echo '                <h4 class="card-title">Member Name: '.ucwords($row["fname"]).'</h4>';
        echo '                <h5 class="card-subtitle"><strong>Member User ID: '.$row["userid"].'</strong></h5>';
        echo '                       <div class="form-group">';
		echo '							<input maxlength="150" type="text" class="rs-form-control" placeholder="Email *" id="email" name="email" value="'.$row["email"].'" onblur="updateField(this.name,this.value,'.$row["ID"].');">';
        echo '                        </div>';
        echo '                       <div class="form-group">';
		echo '							<input maxlength="150" type="text" class="rs-form-control" placeholder="Website (Optional)" id="website" name="website" value="'.$row["website"].'" onblur="updateField(this.name,this.value,'.$row["ID"].');">';
        echo '                        </div>';
        echo '                       <div class="form-group">';
		echo '							<input maxlength="150" type="text" class="rs-form-control" placeholder="Facebook Page (Optional)" id="facebookpage" name="facebookpage" value="'.$row["facebookpage"].'" onblur="updateField(this.name,this.value,'.$row["ID"].');">';
        echo '                        </div>';
        echo '                       <div class="form-group">';
		echo '								<select id="country" name="country" class="rs-form-control" onchange="updateField(this.name,this.value,'.$row["ID"].');">';
		echo '									<option value="'.$row["country"].'" selected="">'.$row["country"].'</option>';
		echo '									<optgroup label="------------------------------------">';
		echo '									<option value="United Kingdom">United&nbsp;Kingdom</option>';
		echo '									<option value="USA">USA</option>';
		echo '									<option value="Australia">Australia</option>';
		echo '									</optgroup>';
		echo '									<optgroup label="------------------------------------">';
		echo '									</optgroup>';
		echo '									<option value="Afghanistan">Afghanistan</option>';
		echo '									<option value="Albania">Albania</option>';
		echo '									<option value="Algeria">Algeria</option>';
		echo '									<option value="Andorra">Andorra</option>';
		echo '									<option value="Angola">Angola</option>';
		echo '									<option value="Anguilla">Anguilla</option>';
		echo '									<option value="Antigua and Barbuda">Antigua&nbsp;and&nbsp;Barbuda</option>';
		echo '									<option value="Argentina">Argentina</option>';
		echo '									<option value="Armenia">Armenia</option>';
		echo '									<option value="Aruba">Aruba</option>';
		echo '									<option value="Austria">Austria</option>';
		echo '									<option value="Azerbaijan">Azerbaijan</option>';
		echo '									<option value="Bahamas">Bahamas</option>';
		echo '									<option value="Bahrain">Bahrain</option>';
		echo '									<option value="Bangladesh">Bangladesh</option>';
		echo '									<option value="Barbados">Barbados</option>';
		echo '									<option value="Belarus">Belarus</option>';
		echo '									<option value="Belgium">Belgium</option>';
		echo '									<option value="Belize">Belize</option>';
		echo '									<option value="Benin">Benin</option>';
		echo '									<option value="Bermuda">Bermuda</option>';
		echo '									<option value="Bhutan">Bhutan</option>';
		echo '									<option value="Bolivia">Bolivia</option>';
		echo '									<option value="Bosnia and Herzegovina">Bosnia&nbsp;and&nbsp;Herzegovina</option>';
		echo '									<option value="Botswana">Botswana</option>';
		echo '									<option value="Brazil">Brazil</option>';
		echo '									<option value="Brunei">Brunei</option>';
		echo '									<option value="Bulgaria">Bulgaria</option>';
		echo '									<option value="Burkina Faso">Burkina&nbsp;Faso</option>';
		echo '									<option value="Burundi">Burundi</option>';
		echo '									<option value="Cambodia">Cambodia</option>';
		echo '									<option value="Cameroon">Cameroon</option>';
		echo '									<option value="Canada">Canada</option>';
		echo '									<option value="Cape Verde Islands">Cape&nbsp;Verde&nbsp;Islands</option>';
		echo '									<option value="Cayman Islands">Cayman&nbsp;Islands</option>';
		echo '									<option value="Central African Republic">Central&nbsp;African&nbsp;Republic</option>';
		echo '									<option value="Chad">Chad</option>';
		echo '									<option value="Channel Islands">Channel&nbsp;Islands</option>';
		echo '									<option value="Chile">Chile</option>';
		echo '									<option value="China">China</option>';
		echo '									<option value="Christmas Island">Christmas&nbsp;Island</option>';
		echo '									<option value="Colombia">Colombia</option>';
		echo '									<option value="Comoros">Comoros</option>';
		echo '									<option value="Congo">Congo</option>';
		echo '									<option value="Cook Islands">Cook&nbsp;Islands</option>';
		echo '									<option value="Costa Rica">Costa&nbsp;Rica</option>';
		echo '									<option value="Croatia">Croatia</option>';
		echo '									<option value="Cuba">Cuba</option>';
		echo '									<option value="Cyprus">Cyprus</option>';
		echo '									<option value="Czech Republic">Czech&nbsp;Republic</option>';
		echo '									<option value="Denmark">Denmark</option>';
		echo '									<option value="Djibouti">Djibouti</option>';
		echo '									<option value="Dominica">Dominica</option>';
		echo '									<option value="Dominican Republic">Dominican&nbsp;Republic</option>';
		echo '									<option value="Ecuador">Ecuador</option>';
		echo '									<option value="Egypt">Egypt</option>';
		echo '									<option value="El Salvador">El&nbsp;Salvador</option>';
		echo '									<option value="Estonia">Estonia</option>';
		echo '									<option value="Ethiopia">Ethiopia</option>';
		echo '									<option value="Falkland Islands">Falkland&nbsp;Islands</option>';
		echo '									<option value="Faroe Islands">Faroe&nbsp;Islands</option>';
		echo '									<option value="Fiji">Fiji</option>';
		echo '									<option value="Finland">Finland</option>';
		echo '									<option value="France">France</option>';
		echo '									<option value="Gabon">Gabon</option>';
		echo '									<option value="Gambia">Gambia</option>';
		echo '									<option value="Georgia">Georgia</option>';
		echo '									<option value="Germany">Germany</option>';
		echo '									<option value="Ghana">Ghana</option>';
		echo '									<option value="Gibraltar">Gibraltar</option>';
		echo '									<option value="Greece">Greece</option>';
		echo '									<option value="Greenland">Greenland</option>';
		echo '									<option value="Grenada">Grenada</option>';
		echo '									<option value="Guatemala">Guatemala</option>';
		echo '									<option value="Guinea">Guinea</option>';
		echo '									<option value="Guyana">Guyana</option>';
		echo '									<option value="Haiti">Haiti</option>';
		echo '									<option value="Honduras">Honduras</option>';
		echo '									<option value="Hong Kong">Hong&nbsp;Kong</option>';
		echo '									<option value="Hungary">Hungary</option>';
		echo '									<option value="Iceland">Iceland</option>';
		echo '									<option value="India">India</option>';
		echo '									<option value="Indonesia">Indonesia</option>';
		echo '									<option value="Iran">Iran</option>';
		echo '									<option value="Iraq">Iraq</option>';
		echo '									<option value="Isle of Man">Isle&nbsp;of&nbsp;Man</option>';
		echo '									<option value="Israel">Israel</option>';
		echo '									<option value="Italy">Italy</option>';
		echo '									<option value="Jamaica">Jamaica</option>';
		echo '									<option value="Japan">Japan</option>';
		echo '									<option value="Jordan">Jordan</option>';
		echo '									<option value="Kenya">Kenya</option>';
		echo '									<option value="Kiribati">Kiribati</option>';
		echo '									<option value="Kuwait">Kuwait</option>';
		echo '									<option value="Laos">Laos</option>';
		echo '									<option value="Latvia">Latvia</option>';
		echo '									<option value="Lebanon">Lebanon</option>';
		echo '									<option value="Lesotho">Lesotho</option>';
		echo '									<option value="Liberia">Liberia</option>';
		echo '									<option value="Libya">Libya</option>';
		echo '									<option value="Liechtenstein">Liechtenstein</option>';
		echo '									<option value="Lithuania">Lithuania</option>';
		echo '									<option value="Luxembourg">Luxembourg</option>';
		echo '									<option value="Madagascar">Madagascar</option>';
		echo '									<option value="Malawi">Malawi</option>';
		echo '									<option value="Malaysia">Malaysia</option>';
		echo '									<option value="Maldives">Maldives</option>';
		echo '									<option value="Mali">Mali</option>';
		echo '									<option value="Malta">Malta</option>';
		echo '									<option value="Martinique">Martinique</option>';
		echo '									<option value="Mauritania">Mauritania</option>';
		echo '									<option value="Mauritius">Mauritius</option>';
		echo '									<option value="Mexico">Mexico</option>';
		echo '									<option value="Monaco">Monaco</option>';
		echo '									<option value="Mongolia">Mongolia</option>';
		echo '									<option value="Morocco">Morocco</option>';
		echo '									<option value="Mozambique">Mozambique</option>';
		echo '									<option value="Namibia">Namibia</option>';
		echo '									<option value="Nauru">Nauru</option>';
		echo '									<option value="Nepal">Nepal</option>';
		echo '									<option value="Netherlands">Netherlands</option>';
		echo '									<option value="Netherlands Antilles">Netherlands&nbsp;Antilles</option>';
		echo '									<option value="New Caledonia">New&nbsp;Caledonia</option>';
		echo '									<option value="New Zealand">New&nbsp;Zealand</option>';
		echo '									<option value="Nicaragua">Nicaragua</option>';
		echo '									<option value="Niger">Niger</option>';
		echo '									<option value="Nigeria">Nigeria</option>';
		echo '									<option value="North Korea">North&nbsp;Korea</option>';
		echo '									<option value="Norway">Norway</option>';
		echo '									<option value="Oman">Oman</option>';
		echo '									<option value="Pakistan">Pakistan</option>';
		echo '									<option value="Palau">Palau</option>';
		echo '									<option value="Panama">Panama</option>';
		echo '									<option value="Paraguay">Paraguay</option>';
		echo '									<option value="Peru">Peru</option>';
		echo '									<option value="Philippines">Philippines</option>';
		echo '									<option value="Pitcairn Islands">Pitcairn&nbsp;Islands</option>';
		echo '									<option value="Poland">Poland</option>';
		echo '									<option value="Portugal">Portugal</option>';
		echo '									<option value="Puerto Rico">Puerto&nbsp;Rico</option>';
		echo '									<option value="Qatar">Qatar</option>';
		echo '									<option value="Republic of Ireland">Republic&nbsp;of&nbsp;Ireland</option>';
		echo '									<option value="Republic Of Kazakhstan">Republic&nbsp;Of&nbsp;Kazakhstan</option>';
		echo '									<option value="Romania">Romania</option>';
		echo '									<option value="Russia">Russia</option>';
		echo '									<option value="Rwanda">Rwanda</option>';
		echo '									<option value="Saint Lucia">Saint&nbsp;Lucia</option>';
		echo '									<option value="Sao Tome">Sao&nbsp;Tome</option>';
		echo '									<option value="Saudi Arabia">Saudi&nbsp;Arabia</option>';
		echo '									<option value="Senegal">Senegal</option>';
		echo '									<option value="Serbia and Montenegro">Serbia&nbsp;and&nbsp;Montenegro</option>';
		echo '									<option value="Seychelles">Seychelles</option>';
		echo '									<option value="Sierra Leone">Sierra&nbsp;Leone</option>';
		echo '									<option value="Singapore">Singapore</option>';
		echo '									<option value="Slovakia">Slovakia</option>';
		echo '									<option value="Slovenia">Slovenia</option>';
		echo '									<option value="Somalia">Somalia</option>';
		echo '									<option value="South Africa">South&nbsp;Africa</option>';
		echo '									<option value="South Korea">South&nbsp;Korea</option>';
		echo '									<option value="South Sandwich Islands">South&nbsp;Sandwich&nbsp;Islands</option>';
		echo '									<option value="Spain">Spain</option>';
		echo '									<option value="Sri Lanka">Sri&nbsp;Lanka</option>';
		echo '									<option value="Sudan">Sudan</option>';
		echo '									<option value="Suriname">Suriname</option>';
		echo '									<option value="Swaziland">Swaziland</option>';
		echo '									<option value="Sweden">Sweden</option>';
		echo '									<option value="Switzerland">Switzerland</option>';
		echo '									<option value="Syria">Syria</option>';
		echo '									<option value="Taiwan">Taiwan</option>';
		echo '									<option value="Tanzania">Tanzania</option>';
		echo '									<option value="Thailand">Thailand</option>';
		echo '									<option value="Togo">Togo</option>';
		echo '									<option value="Tonga">Tonga</option>';
		echo '									<option value="Trinidad and Tobago">Trinidad&nbsp;and&nbsp;Tobago</option>';
		echo '									<option value="Tunisia">Tunisia</option>';
		echo '									<option value="Turkey">Turkey</option>';
		echo '									<option value="Tuvalu">Tuvalu</option>';
		echo '									<option value="Uganda">Uganda</option>';
		echo '									<option value="Ukraine">Ukraine</option>';
		echo '									<option value="United Arab Emirates">United&nbsp;Arab&nbsp;Emirates</option>';
		echo '									<option value="Uruguay">Uruguay</option>';
		echo '									<option value="Uzbekistan">Uzbekistan</option>';
		echo '									<option value="Vanuatu">Vanuatu</option>';
		echo '									<option value="Vatican City">Vatican&nbsp;City</option>';
		echo '									<option value="Venezuela">Venezuela</option>';
		echo '									<option value="Vietnam">Vietnam</option>';
		echo '									<option value="Virgin Islands">Virgin&nbsp;Islands</option>';
		echo '									<option value="Yemen">Yemen</option>';
		echo '									<option value="Zambia">Zambia</option>';
		echo '									<option value="Zimbabwe">Zimbabwe</option>';
		echo '								</select>';
		echo '                  </div>';       
        echo '                  	<div class="form-group">';
		echo '								<select id="status" name="status" class="rs-form-control" onchange="updateField(this.name,this.value,'.$row["ID"].');">';
		echo '									<option value="'.$row["status"].'" selected="">'.$row["status"].'</option>';
if($row["userid"]=="admin"){
		echo '									<optgroup label="LOCKED! - admin status cannot be disabled/changed"></optgroup>';
}
else
{
		echo '									<option value="A">A - Active</option>';
}
if($row["userid"]!="admin"){
		echo '									<option value="P">P - Pending Activation</option>';
		echo '									<option value="I">I - Inactive</option>';
		echo '									<option value="S">S - Suspended</option>';
		echo '									<option value="B">B - Banned</option>';
}
		echo '								</select>';
		echo '            			</div>';
		echo '            			<div id="statusarea_'.$row["ID"].'"><p style="color:#ff0000;"></p>';
		echo '            			</div>';
		echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
		$ccount++;
		if($ccount==4){
			echo '    </div><hr><div class="mbr-cards-row row striped">';
		$ccount=1;
		}	

}
        echo '</div>';
?>

<div>
<?php
$range = 3;
echo "<table class='pages'><tr class='pages'>";
if ($currentpage > 1) {
   echo "<th class='pages'> <a class='hlink_1' href='member-list.php?currentpage=1' target='_self'>First</a></th>";
   $prevpage = $currentpage - 1;
   echo "<th class='pages'> <a class='hlink_1' href='member-list.php?currentpage=".$prevpage."' target='_self'>Previous</a></th>";
}
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   if (($x > 0) && ($x <= $totalpages)) {
      if ($x == $currentpage) {
         echo "<th class='pages'> [<b>$x</b>]</th>";
      }
	  else 
	  {
         echo "<th class='pages'> <a class='hlink_1' href='member-list.php?currentpage=".$x."' target='_self'>$x</a></th>";
      }
   } 
}
if ($currentpage != $totalpages) {
   $nextpage = $currentpage + 1;
   echo "<th class='pages'> <a class='hlink_1' href='member-list.php?currentpage=".$nextpage."' target='_self'>Next</a></th>";
   echo "<th class='pages'> <a class='hlink_1' href='member-list.php?currentpage=".$totalpages."' target='_self'>Last</a></th>";
}
echo "</table>";
}
} 

mysqli_close($con);
  
?> 
    </div>
</section>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  <input name="animation" type="hidden">
<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
 </body>
</html>
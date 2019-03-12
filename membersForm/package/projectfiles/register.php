<?php session_start();
session_regenerate_id();?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-128x128-21-128x128.png" type="image/x-icon">
  <meta name="description" content="Register">
  <title>Register</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  <meta name="author" content="Steve Riches">
<!--MobiMembers System | from RichoSoft | - For Mobirise 4 Sites-->
<!-- Created by Steve Riches - March 2018 -->
<!-- For support contact support@richosoft.co.uk -->
<!-- (C) 2018 - All Rights Reserved - RichoSoft - www.richosoft.co.uk -->
<script src="js/sweetalert.min.js"></script>
<link rel="stylesheet" href="css/sweetalert.css">
<link rel="stylesheet" href="css/RSinvisible.css" type="text/css">
<script src="js/RSValidation.js"></script>
<script src="js/RScheckcreate.js"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <section class="menu cid-qKW30RsPde" once="menu" id="menu1-11">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://richosoft.mobi/" target="_blank">
                         <img src="assets/images/logo-128x128-21-128x128.png" alt="RichoSoft Mobi" title="RichoSoft Mobi" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://richosoft.mobi" target="_blank">
                        RICHOSOFT MOBI</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.html">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Home</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="index.html#content4-5">
                        
                        About</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="index.html#content5-c">
                        
                        Features</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="index.html#custom-html-d">Contact</a></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="false">Members</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="members-home.php">Members Home</a><a class="text-white dropdown-item display-4" href="members-news.php">Members News</a><a class="text-white dropdown-item display-4" href="members-offers.php">Members Offers</a><a class="text-white dropdown-item display-4" href="members-photos.php">Members Photos</a><a class="text-white dropdown-item display-4" href="members-home.php#custom-html-1n">Change Password</a><a class="text-white dropdown-item display-4" href="register.php">Member Registration</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="false">Log In</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="login.php">Log In</a><a class="text-white dropdown-item display-4" href="logout.php">Log Out</a><a class="text-white dropdown-item display-4" href="admin.php">Admin</a></div></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-secondary display-4" href="https://richosoft2.co.uk/newshop/" target="_blank">
                    <span class="mbri-save mbr-iconfont mbr-iconfont-btn "></span>
                    Get It</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.ws/d">best free web software</a></section><div id="custom-html-13" custom-code="true" data-rv-view="85"><?php
    include '_private/dbconnect.php';
$strsql="SELECT mobi_params.* FROM mobi_params WHERE(mobi_params.param_name='allowregs') LIMIT 1;";
    $result=mysqli_query($con,$strsql);
    $row=mysqli_fetch_array($result);
    $allowregs=$row["param_value"];
if($allowregs=='N'){
?>
<section class="mbr-section mbr-parallax-background" style="background-image: url(assets/images/060407a0021-2000x1334-16.jpg); padding-top: 160px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2 mbr-editable-content"><strong>SORRY!<br>MEMBER SELF REGISTER<br>IS DISABLED</strong></h3>
                <div class="lead mbr-editable-full"><p>Self registration is currently disabled as Membership is by invitation only at present. If you feel you are entitled to membership, please contact the site owner.</p><p><br></p></div>
                <div><a class="btn btn-primary mbr-editable-button" href="index.html#custom-html-d">CONTACT US</a></div>
            </div>
        </div>
    </div>

</section>
<div class="RSinvisible">DO NOT REMOVE THIS BLOCK! REQUIRED FOR DISABLED REGISTRATIONS</div>
<?php }
else
{
?></div>

<section class="header1 cid-qKWPh7hgri mbr-parallax-background" id="header1-14">

    

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    Member Register</h1>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">To register for access to members only content please complete the form below<br><br><br><br><br></h3>
                
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-primary display-4" href="register.php#custom-html-15">
                        GO TO FORM</a></div>
            </div>
        </div>
    </div>

</section>

<div id="custom-html-15" custom-code="true" data-rv-view="89"><section id="createaccountform" class="mbr-section mbr-parallax-background adj-top" style="background-image: url(assets/images/desert.jpg); padding-top: 40px; padding-bottom: 120px;">
    <div class="mbr-section mbr-section__container mbr-section__container--middle" style="padding-top:50px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form name="frmCreateAccount" id="frmCreateAccount" action="process-create-account.php" method="post" target="_self">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">Name (First Last)</label>
									<input maxlength="60" type="text" placeholder="Your Name (First Last) *" id="fname" name="fname" value="" class="rs-form-control">
                                </div>
							</div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Contact Email Address</label>
									<input maxlength="150" type="text" class="rs-form-control" placeholder="Your Email for contact *" id="email" name="email" value="">
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="website">Enter your website URL (optional)</label>
									<input maxlength="150" type="text" class="rs-form-control" placeholder="Your Website (Optional)" id="website" name="website" value="">
								</div>
                            </div>    
							<div class="col-md-6">
								<div class="form-group">
									<label for="facebookpage">Enter your facebook page URL (optional)</label>
									<input maxlength="150" type="text" class="rs-form-control" placeholder="Your Facebook Page URL (Optional)" id="facebookpage" name="facebookpage" value="">
								</div>
                            </div>    
							<div class="col-md-6">
								<div class="form-group">
								<label for="country">Your Country *</label>
								<select id="country" name="country" class="rs-form-control">
<option value="" selected="">Select your Country *</option>
<optgroup label="------------------------------------">
<option value="United Kingdom">United&nbsp;Kingdom</option>
<option value="USA">USA</option>
<option value="Australia">Australia</option>
</optgroup>
<optgroup label="------------------------------------"></optgroup>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua and Barbuda">Antigua&nbsp;and&nbsp;Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia&nbsp;and&nbsp;Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina&nbsp;Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde Islands">Cape&nbsp;Verde&nbsp;Islands</option>
<option value="Cayman Islands">Cayman&nbsp;Islands</option>
<option value="Central African Republic">Central&nbsp;African&nbsp;Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel&nbsp;Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas&nbsp;Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook&nbsp;Islands</option>
<option value="Costa Rica">Costa&nbsp;Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech&nbsp;Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican&nbsp;Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El&nbsp;Salvador</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland&nbsp;Islands</option>
<option value="Faroe Islands">Faroe&nbsp;Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong&nbsp;Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Isle of Man">Isle&nbsp;of&nbsp;Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mexico">Mexico</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands&nbsp;Antilles</option>
<option value="New Caledonia">New&nbsp;Caledonia</option>
<option value="New Zealand">New&nbsp;Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="North Korea">North&nbsp;Korea</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn Islands">Pitcairn&nbsp;Islands</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto&nbsp;Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Ireland">Republic&nbsp;of&nbsp;Ireland</option>
<option value="Republic Of Kazakhstan">Republic&nbsp;Of&nbsp;Kazakhstan</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Lucia">Saint&nbsp;Lucia</option>
<option value="Sao Tome">Sao&nbsp;Tome</option>
<option value="Saudi Arabia">Saudi&nbsp;Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia and Montenegro">Serbia&nbsp;and&nbsp;Montenegro</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra&nbsp;Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South&nbsp;Africa</option>
<option value="South Korea">South&nbsp;Korea</option>
<option value="South Sandwich Islands">South&nbsp;Sandwich&nbsp;Islands</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri&nbsp;Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad&nbsp;and&nbsp;Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United&nbsp;Arab&nbsp;Emirates</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican&nbsp;City</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands">Virgin&nbsp;Islands</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
								</div>
							</div>
							<div class="col-md-6">
                                <div id="notes" style="margin-top:25px;"><span class="boldit">NOTES:<br></span>Your email address will not be displayed online.<br><br>
								</div><br><br>
                            </div>    
							<div class="col-md-6">
                               <div class="form-group">
                                    <label for="userid">Choose a User ID *</label>
									<input maxlength="30" type="text" class="rs-form-control" placeholder="Choose a User ID *" id="userid" name="userid" value="" onblur="checkid(this.value);">
                                </div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
                                    <label for="password">Choose a Password *</label>
									<input maxlength="30" type="password" class="rs-form-control" placeholder="Choose a Password *" id="password" name="password" value="">
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div>
                                    <label for="checkterms">Accept Terms and Privacy Policy *</label>
									<input id="checkterms" type="checkbox" class="regular-checkbox big-checkbox"><label for="checkterms">&nbsp;&nbsp;Click to accept the Terms and Privacy Policy</label>
									</div>
								</div>
							</div>
                            <div class="clearfix">
							</div>
                            <div class="col-md-8 col-md-offset-2 text-xs-center">
                                <button type="button" id="sendcreate" class="btn btn-md btn-primary" onclick="checkCreate();">Create Account</button>
                            </div>
						</div>
							<input type="hidden" name="process" id="process" value="Add">
                    </form>
				</div>
			</div>
        </div>
    </div>
</section>
<?php
}
mysqli_close($con);
?></div>

<section class="cid-qKWOKVk9k9" id="footer1-12">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://richosoft.mobi/" target="_blank">
                        <img src="assets/images/logo-128x128-21-128x128.png" alt="RichoSoft Mobi" title="RichoSoft Mobi">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Documents</h5>
                <p class="mbr-text">
                    <a href="terms.php">Site Terms of Use &nbsp; </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br><a href="privacy.php">Privacy Policy</a></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    <a href="index.html#custom-html-d">Site Support</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br><a href="https://richosoft.mobi/index.html#RSRCULPROContactForm-4b" target="_blank">RichoSoft Support</a></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text"><a href="https://richosoft.mobi" target="_blank">RichoSoft Mobi</a><br><a href="https://richosoft2.co.uk" target="_blank">RichoSoft Squared</a><br><a href="http://www.aboutcookies.fortunedesign.co.uk/" target="_blank">About Cookies</a><br><br></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2018 <a href="https://richosoft2.co.uk/" target="_blank">RichoSoft Squared</a> &nbsp;- All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/richosofthome/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/share?app=110&url=https%3A%2F%2Fwww.richosoft.co.uk%2F" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-googleplus socicon"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  <input name="cookieData" type="hidden" data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy.html'>cookie policy</a>.">
  </body>
</html>
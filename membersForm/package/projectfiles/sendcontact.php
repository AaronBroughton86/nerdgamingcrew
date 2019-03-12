<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-128x128-21-128x128.png" type="image/x-icon">
  <meta name="description" content="Thank You">
  <title>Thank You</title>
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
  
  
  
</head>
<body>
  <section class="menu cid-qKW30RsPde" once="menu" id="menu1-1d">

    

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

<section class="engine"><a href="https://mobirise.ws/c">best site maker</a></section><section class="header1 cid-qKX0LSTcJJ mbr-fullscreen mbr-parallax-background" id="header1-1i">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                
                
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
<?php 
if(!isset($_POST["process"]) || (isset($_POST["process"]) && $_POST["process"]!="sendcontact")){
echo '<h1 class="mbr-section-title display-1">Sorry - an error has occurred!</h1><p class="mbr-section-lead lead">Please try again.</p>';
}
else
{
$name = strip_tags(htmlspecialchars($_POST['yourname']));
$email = strip_tags(htmlspecialchars($_POST['youremail']));
$phone = strip_tags(htmlspecialchars($_POST['yourphone']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
include "_private/dbconnect.php";
$strsql="SELECT mobi_params.* FROM mobi_params WHERE(mobi_params.param_name='sendmailfrom') LIMIT 1;";
    $result=mysqli_query($con,$strsql);
    $row=mysqli_fetch_array($result);
    $sendmailfrom=$row["param_value"];
mysqli_close($con);    
$names=explode(" ",$name);
$firstname=$names[0];
include "utils/buildcontactbody.php";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject = 'Web Site Contact at '.$siteName.'.';		

// More headers
$headers .= 'From:' . $name . '<'.$sendmailfrom.'>'."\r\n";
$headers .= 'Reply-To:' . $email . "\r\n";
$headers .= "X-Mailer: PHP/".phpversion();
	if(!mail($sendmailfrom,$subject,$body,$headers)){
echo '<h1 class="mbr-section-title display-1">Sorry - Message Not Sent!</h1>
                    <p class="mbr-section-lead lead">An error has occurred - please try again.</p>';
}
else
{
echo '<h1 class="mbr-section-title display-1">Thank you for your message</h1>
                    <p class="mbr-section-lead lead">We will get back to you as soon as possible if your submission requires a response.</p>';
}    
}
?>
                </p>
                
            </div>
        </div>
    </div>

</section>

<section class="cid-qKWZoVhnPc" id="footer1-1e">

    

    

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
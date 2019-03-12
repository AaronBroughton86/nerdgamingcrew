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
  <meta name="description" content="Members News Page">
  <title>Members News Page</title>
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
<link rel="stylesheet" href="css/RSinvisible.css" type="text/css">
  
</head>
<body>
  <section class="menu cid-qKX8ZsZ53u" once="menu" id="menu1-1r">

    

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

<section class="engine"><a href="https://mobirise.ws/e">best web authoring software</a></section><div id="custom-html-1s" custom-code="true" data-rv-view="131"><?php if(!isset($_SESSION["loggedin"]) ||(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]!="active")){ ?>
<section class="mbr-info mbr-info-extra mbr-section mbr-section-md-padding" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">
                <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                    <h2 class="mbr-info-subtitle mbr-section-subtitle mbr-editable-content">You are not logged in, do not have access to this page or your session has expired.</h2>
                    <h3 class="mbr-info-title mbr-section-title display-2 mbr-editable-content">Access to this page is Denied!</h3>
                </div>
                <div class="mbr-table-cell col-md-4">
                    <div class="text-xs-center"><a class="btn btn-primary mbr-editable-button" href="login.php">LOG IN HERE</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
else
{
?>
<div class="RSinvisible">DO NOT REMOVE THIS BLOCK! REQUIRED FOR PAGE SECURITY</div></div>

<section class="mbr-section content5 cid-qKX9ylmW2m mbr-parallax-background" id="content5-27">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">LATEST NEWS</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">News articles for your members would go on this page.
<div>The contents would only be available to logged in members
</div><div>This is a demonstration page</div></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="features17 cid-qKXa5CS9yp" id="features17-28">
    
    

    
    <div class="container-fluid">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/01.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            No Coding
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Mobirise is an easy website builder - just drop site elements to your page, add content and style it to look the way you like.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/02.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Mobile Friendly
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            All sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/03.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Unique Styles
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Mobirise offers many site blocks in several themes, and though these blocks are pre-made, they are flexible.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/04.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Unlimited Sites
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                           Mobirise gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.
                        </p>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<div id="custom-html-1x" custom-code="true" data-rv-view="138"><div class="RSinvisible">DO NOT REMOVE THIS BLOCK! REQUIRED FOR PAGE SECURITY</div>
<?php } ?></div>

<section class="cid-qKX8ZDJNY7" id="footer1-1y">

    

    

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
<!DOCTYPE html>

<?php 
include('../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}
else{
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php?id=2';
        </script>
        ";
}

$qry = "SELECT * FROM studcontactstbl WHERE StudentID ='$StudentID'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $Email = $qry['Email'];
                $Address = $qry['Address'];
                $MobileNumber = $qry['MobileNumber'];
                $Region = $qry['Region'];
                $HomeNumber = $qry['HomeNumber'];
                $City = $qry['City'];
                $WorkNumber = $qry['WorkNumber'];
                $PostalCode = $qry['PostalCode'];
        }

/* Validation Starts Here */
$b = 1;
$txtEmail_Validator = '';
$txtAddress_Validator = '';
$txtMobileNumber_Validator = '';
$txtRegion_Validator = '';
$txtHomeNumber_Validator = '';
$txtCity_Validator = '';
$txtWorkNumber_Validator = '';
$txtPostalCode_Validator = '';

$server_txtEmail = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
$server_txtAddress = isset($_POST['txtAddress']) ? $_POST['txtAddress'] : '';
$server_txtMobileNumber = isset($_POST['txtMobileNumber']) ? $_POST['txtMobileNumber'] : '';
$server_txtRegion = isset($_POST['txtRegion']) ? $_POST['txtRegion'] : '';
$server_txtHomeNumber = isset($_POST['txtHomeNumber']) ? $_POST['txtHomeNumber'] : '';
$server_txtCity = isset($_POST['txtCity']) ? $_POST['txtCity'] : '';
$server_txtWorkNumber = isset($_POST['txtWorkNumber']) ? $_POST['txtWorkNumber'] : '';
$server_txtPostalCode = isset($_POST['txtPostalCode']) ? $_POST['txtPostalCode'] : '';

$server_txtAddress = ucwords(strtolower($server_txtAddress));

$a = isset($_POST['txtEmail']);
$a = $a && isset($_POST['txtAddress']);
$a = $a && isset($_POST['txtMobileNumber']);
$a = $a && isset($_POST['txtRegion']);
$a = $a && isset($_POST['txtHomeNumber']);
$a = $a && isset($_POST['txtCity']);
$a = $a && isset($_POST['txtWorkNumber']);
$a = $a && isset($_POST['txtPostalCode']);

if($a){
    unset($a);
    $txtEmail_Valid = (bool) preg_match('/^[A-Za-z0-9@!#$%&*+-=?^_`{|}~]+$/i', $server_txtEmail);
    $txtAddress_Valid = (bool) preg_match('/^[A-Za-z0-9 . , -]+$/i', $server_txtAddress);
    $txtMobileNumber_Valid = (bool) preg_match('/^[0-9]+$/i', $server_txtMobileNumber);
    $txtHomeNumber_Valid = (bool) preg_match('/^[0-9]+$/i', $server_txtHomeNumber);
    $txtWorkNumber_Valid = (bool) preg_match('/^[0-9]+$/i', $server_txtWorkNumber);
    $txtPostalCode_Valid = (bool) preg_match('/^[0-9]+$/i', $server_txtPostalCode);
    $txtRegion_Valid = 1;
    $txtCity_Valid = 1;

    // 0 for required field not to be empty.
    if(is_null($server_txtEmail) || $server_txtEmail == ''){
        $txtEmail_Validator = 'Email cannot be empty.';
        $txtEmail_Valid = 0;
    }
    elseif(!$txtEmail_Valid){
        $txtEmail_Validator = 'Email is not valid.';
    }


    if(is_null($server_txtAddress) || $server_txtAddress == ''){
        $txtAddress_Validator = '';
        $txtAddress_Valid = 1;
    }
    elseif(!$txtAddress_Valid){
        $txtAddress_Validator = 'Address is not valid.';
    }

    if(is_null($server_txtMobileNumber) || $server_txtMobileNumber == ''){
        $txtMobileNumber_Validator = 'Mobile Number cannot be empty.';
        $txtMobileNumber_Valid = 0;
    }
    elseif(!$txtMobileNumber_Valid){
        $txtMobileNumber_Validator = 'Mobile Number is not valid.';
    }    

    if(is_null($server_txtRegion) || $server_txtRegion == ''){
        $txtRegion_Validator = 'Please Select one.';
        $txtRegion_Valid = 0;
    }

    if(is_null($server_txtHomeNumber) || $server_txtHomeNumber == ''){
        $txtHomeNumber_Validator = '';
        $txtHomeNumber_Valid = 1;
    }
    elseif(!$txtHomeNumber_Valid){
        $txtHomeNumber_Validator = 'Home Number is not valid.';
    }

    if(is_null($server_txtCity) || $server_txtCity == ''){
        $txtCity_Validator = 'Please Select one.';
        $txtCity_Valid = 0;
    }

    if(is_null($server_txtWorkNumber) || $server_txtWorkNumber == ''){
        $txtWorkNumber_Validator = '';
        $txtWorkNumber_Valid = 1;
    }
    elseif(!$txtWorkNumber_Valid){
        $txtWorkNumber_Validator = 'Work Number is not valid.';
    }

    if(is_null($server_txtPostalCode) || $server_txtPostalCode == ''){
        $txtPostalCode_Validator = '';
        $txtPostalCode_Valid = 1;
    }
    elseif(!$txtPostalCode_Valid){
        $txtPostalCode_Validator = 'Postal Code is not vaid.';
    }


    $b=0;


    $a = $txtEmail_Valid;
    $a = $a && $txtAddress_Valid;
    $a = $a && $txtMobileNumber_Valid;
    $a = $a && $txtRegion_Valid;
    $a = $a && $txtHomeNumber_Valid;
    $a = $a && $txtCity_Valid;
    $a = $a && $txtWorkNumber_Valid;
    $a = $a && $txtPostalCode_Valid;

    if($a){
        unset($a);

        $query = "UPDATE studcontactstbl SET Email = '$server_txtEmail', Address = '$server_txtAddress', MobileNumber = '$server_txtMobileNumber', Region = '$server_txtRegion', HomeNumber = '$server_txtHomeNumber', City = '$server_txtCity', WorkNumber = '$server_txtWorkNumber', PostalCode = '$server_txtPostalCode' WHERE StudentID = '$StudentID'";
        $Result = mysql_query($query);
        echo "
             <script type='text/javascript'>
             </script>
             ";
        $b=2;
        }

}
?>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../../css/slicknav.css" media="screen">

    <!-- CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/colors/jade.css" title="jade" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/green.css" title="green" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/blue.css" title="blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/beige.css" title="beige" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/cyan.css" title="cyan" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/orange.css" title="orange" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/peach.css" title="peach" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/pink.css" title="pink" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/purple.css" title="purple" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/sky-blue.css" title="sky-blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen" />

    <!-- JS  -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/modernizrr.js"></script>
    <script type="text/javascript" src="../../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../../js/count-to.js"></script>
    <script type="text/javascript" src="../../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.slicknav.js"></script>

    <script type="text/javascript" src="../../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.textillate.js"></script>

    <script type="text/javascript" src="../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../../js/mediaelement-and-player.js"></script>
</head>

<body>
    <div id="container">
        <!-- Start Header Section -->
        <div class="hidden-header"></div>
        <header class="clearfix">
        <!-- Start Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Start Contact Info
                            <ul class="contact-details">
                                <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                                </li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                                </li>
                                <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                                </li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-5">
                        <!-- Start Social Links 
                            <ul class="social-list">
                                <li>
                                <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li>
                                    <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                </li>
                                <li>
                                    <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                </li>
                                <li>
                                    <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                            <!-- End Social Links -->
                        </div>
                        <!-- .col-md-6 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .top-bar -->
            <!-- End Top Bar -->

            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="">Online JPMS</a>
                    </div>
                    <div class="navbar-collapse collapse">
                    <!-- Stat Search -->
                        <div class="search-side">
                            <a class="show-search"><i class="fa fa-search"></i></a>
                            <div class="search-form">
                                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                                    <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                                </form>
                            </div>
                        </div>
                        <!-- End Search -->
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="personal-info.php">My Info</a>
                                <ul class="dropdown">
                                    <li><a href="personal-info.php">Personal Info</a></li>
                                    <li><a class="active" href="contacts-info.php">Contacts Info</a></li>
                                    <li><a href="work.php">Work</a></li>
                                    <li><a href="education.php">Education</a></li>
                                    <li><a href="certifications.php">Certifications</a></li>
                                    <li><a href="achievements.php">Achievements</a></li>
                                    <li><a href="skills-and-languages.php">Skills & Languages</a></li>
                                    <li><a href="references.php">References</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../resumelink/resume-link.php">Resume Link</a>
                                <ul class="dropdown">
                                    <li><a href="../resumelink/resume-link.php">Resume Link</a></li>
                                    <li><a href="../resumelink/background.php">Background</a></li>
                                    <li><a href="../resumelink/print-share.php">Print/Share</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../applications/applications.php">Applications</a>
                            </li>
                            <li>
                                <a href="../search-job/search-job.php">Jobs</a>
                            </li>
                            <li>
                                <a href="../settings/privacy-settings.php">Settings</a>
                                <ul class="dropdown">
                                    <li><a href="../settings/privacy-settings.php">Privacy Settings</a></li>
                                    <li><a href="../settings/pass-settings.php">Password Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="personal-info.php">My Info</a>
                        <ul class="dropdown">
                            <li><a href="personal-info.php">Personal Info</a></li>
                            <li><a class="active" href="contacts-info.php">Contacts Info</a></li>
                            <li><a href="work.php">Work</a></li>
                            <li><a href="education.php">Education</a></li>
                            <li><a href="certifications.php">Certifications</a></li>
                            <li><a href="achievements.php">Achievements</a></li>
                            <li><a href="skills-and-languages.php">Skills & Languages</a></li>
                            <li><a href="references.php">References</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../resumelink/resume-link.php">Resume Link</a>
                        <ul class="dropdown">
                            <li><a href="../resumelink/resume-link.php">Resume Link</a></li>
                            <li><a href="../resumelink/background.php">Background</a></li>
                            <li><a href="../resumelink/print-share.php">Print/Share</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../applications/applications.php">Applications</a>
                    </li>
                    <li>
                        <a href="../search-job/search-job.php">Jobs</a>
                    </li>
                    <li>
                        <a href="../settings/privacy-settings.php">Settings</a>
                        <ul class="dropdown">
                            <li><a href="../settings/privacy-settings.php">Privacy Settings</a></li>
                            <li><a href="../settings/pass-settings.php">Password Settings</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../login-student.php?id=1"><i class="fa fa-sign-out"></i> Sign Out</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

        <div class="page-banner no-subtitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Contacts Information</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li>Contacts Information</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <div class="row sidebar-page">
                    <!-- Page Content -->
                    <div class="col-md-9 page-content">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Single Testimonial -->
                                <div class="classic-testimonials">
                                    <div class="testimonial-content">
                                        <div class="form-group">
                                            <label>Email <span>(*)</span></label>
                                            <input type="text" class="form-control" id="Email" name="txtEmail" value="<?php if($b==1){ echo $Email; } else{ echo $server_txtEmail; } ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Number <span>(*)</span></label>
                                            <input type="text" class="form-control" id="MobileNumber" name="txtMobileNumber" value="<?php if($b==1){ echo $MobileNumber; } else{ echo $server_txtMobileNumber; } ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Home Number</label>
                                            <input type="text" class="form-control" id="HomeNumber" name="txtHomeNumber" value="<?php if($b==1){ echo $HomeNumber; } else{ echo $server_txtHomeNumber; } ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Work Number</label>
                                            <input type="text" class="form-control" id="WorkNumber" name="txtWorkNumber" value="<?php if($b==1){ echo $WorkNumber; } else{ echo $server_txtWorkNumber; } ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Testimonial -->
                                <div class="classic-testimonials">
                                    <div class="testimonial-content">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" id="Address" name="txtAddress" value="<?php if($b==1){ echo $Address; } else{ echo $server_txtAddress; } ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>City <span>(*)</span></label>
                                            <select id="City" name="txtCity" class="form-control" style="width:100%; height:34px;" value = "<?php echo $City; ?>">
                                                <option value>- Please select one -</option>
                                                <option value="Caloocan City" 
                                                    <?php 
                                                    if($b==1){
                                                    if($City=="Caloocan City") echo 'selected="selected"'; 
                                                    }
                                                    else{
                                                     if($server_txtCity=="Caloocan City") echo 'selected="selected"';
                                                    }
                                                    ?>>
                                                    Caloocan City
                                                </option>
                                                <option value="Las Pińas City" 
                                                    <?php 
                                                    if($b==1){
                                                    if($City=="Las Pińas City") echo 'selected="selected"';
                                                    }
                                                    else{
                                                    if($server_txtCity=="Las Pińas City") echo 'selected="selected"';
                                                    }
                                                    
                                                    ?>>
                                                    Las Pińas City
                                                </option>
                                                <option value="Makati City" 
                                                    <?php
                                                    if($b==1){
                                                    if($City=="Makati City") echo 'selected="selected"';
                                                    }
                                                    else{
                                                    if($server_txtCity=="Makati City") echo 'selected="selected"';
                                                    } 
                                                    ?>>
                                                    Makati City
                                                </option>
                                                <option value="Malabon City" 
                                                    <?php
                                                    if($b==1){
                                                    if($City=="Malabon City") echo 'selected="selected"'; 
                                                    }
                                                    else{
                                                    if($server_txtCity=="Malabon City") echo 'selected="selected"'; 
                                                    }
                                                    ?>>
                                                    Malabon City
                                                </option>

                                                <option value="Mandaluyong City" 
                                                    <?php 
                                                    if($b==1){
                                                        if($City=="Mandaluyong City") echo 'selected="selected"'; 
                                                    }
                                                    else{
                                                        if($server_txtCity=="Mandaluyong City") echo 'selected="selected"'; 
                                                    }
                                                    ?>>
                                                    Mandaluyong City
                                                </option>
                                                <option value="Manila" 
                                    <?php 
                                    if($b==1){
                                     if($City=="Manila") echo 'selected="selected"';
                                    }
                                    else{
                                        if($server_txtCity=="Manila") echo 'selected="selected"';
                                    }
                                    ?>>
                                    Manila
                                    </option>

                                    <option value="Marikina City" 
                                    <?php 
                                    if($b==1){
                                    if($City=="Marikina City") echo 'selected="selected"'; 
                                    }
                                    else{
                                    if($server_txtCity=="Marikina City") echo 'selected="selected"'; 
                                    }
                                ?>>
                                Marikina City
                                </option>

                                <option value="Muntinlupa City"
                                <?php 
                                if($b==1){
                                    if($City=="Muntinlupa City") echo 'selected="selected"';
                                }
                                else{
                                    if($server_txtCity=="Muntinlupa City") echo 'selected="selected"';
                                }
                                ?>>
                                Muntinlupa City
                                </option>

                                <option value="Navotas City" 
                                <?php 
                                if($b==1){
                                    if($City=="Navotas City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Navotas City") echo 'selected="selected"'; 
                                }
                                ?>>
                                Navotas City
                                </option>

                                <option value="Parańaque City"
                                <?php 
                                if($b==1){
                                    if($City=="Parańaque City") echo 'selected="selected"';     
                                }
                                else{
                                    if($server_txtCity=="Parańaque City") echo 'selected="selected"'; 
                                }
                                
                                ?>>
                                Parańaque City
                                </option>


                                <option value="Pasay City" 
                                <?php 
                                if($b==1){
                                    if($City=="Pasay City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Pasay City") echo 'selected="selected"'; 
                                }
                                
                                ?>>
                                Pasay City
                                </option>

                                <option value="Pasig City" 
                                <?php 
                                if($b==1){
                                    if($City=="Pasig City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Pasig City") echo 'selected="selected"'; 
                                }
                                
                                ?>>
                                Pasig City
                                </option>

                                <option value="Pateros City" 
                                <?php 
                                if($b==1){
                                    if($City=="Pateros City") echo 'selected="selected"'; 
                                }
                                
                                else{
                                    if($server_txtCity=="Pateros City") echo 'selected="selected"'; 
                                }
                                ?>>
                                Pateros City
                                </option>

                                <option value="Quezon City" 
                                <?php
                                if($b==1){
                                    if($City=="Quezon City") echo 'selected="selected"'; 
                                } 
                                else{
                                    if($server_txtCity=="Quezon City") echo 'selected="selected"';
                                }
                                
                                ?>>
                                Quezon City
                                </option>

                                <option value="San Juan City" 
                                <?php 
                                if($b==1){
                                    if($City=="San Juan City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="San Juan City") echo 'selected="selected"'; 
                                }

                                ?>>
                                San Juan City
                                </option>

                                <option value="Taguig City" 
                                <?php 
                                if($b==1){
                                    if($City=="Taguig City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Taguig City") echo 'selected="selected"';
                                }
                                
                                ?>>
                                Taguig City
                                </option>

                                <option value="Valenzuela City" 
                                <?php 
                                if($b==1){
                                    if($City=="Valenzuela City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Valenzuela City") echo 'selected="selected"'; 
                                }
                                
                                ?>>
                                Valenzuela City
                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" id="PostalCode" name="txtPostalCode" value="<?php if($b==1){ echo $PostalCode; } else{ echo $server_txtPostalCode; } ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                        </div>
                    </div>
                    <!-- End Page Content -->

                    <!--Sidebar-->
                    <div class="col-md-3 sidebar right-sidebar">
                        <!-- Search Widget -->
                        <div class="call-action call-action-boxed call-action-style2 clearfix">
                            (*) Note: Required fields.
                        </div>
                    </div>
                    <!--End sidebar-->
                </div>
                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                <div class="field">
                    <div class="text-center">
                        <button class="btn btn-lg btn-hg btn-primary" name ="btnSave">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>
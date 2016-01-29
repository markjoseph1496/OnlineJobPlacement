<?php
session_start();
include('../../connection.php');

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}else{
    header("location: ../../login-student.php");
}

$infoquery =
    GSecureSQL::query(
        "SELECT FirstName, LastName, MajorCourse FROM studentinfotbl WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );

$FirstName = $infoquery[0][0];
$LastName = $infoquery[0][1];
$MajorCourse =  $infoquery[0][2];
$StudentName = $FirstName . " " . $LastName;

$course_qry =
    GSecureSQL::query(
        "SELECT CourseTitle FROM coursetbl WHERE CourseCode = ?",
        TRUE,
        "s",
        $MajorCourse
    );
$MajorCourse = $course_qry[0][0];
?>
<!DOCTYPE html>
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

    <!-- Bootstrap CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../../css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

    <!-- BootstrapValidator -->
    <script src="../../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link href="../../fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- Important! -->
    <link rel="stylesheet" type="text/css" href="../../css/about-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="../../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../../js/modernizrr.js"></script>
    <script type="text/javascript" src="../../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../../js/count-to.js"></script>
    <script type="text/javascript" src="../../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../../js/jquery.slicknav.js"></script>

    <!-- Notification -->
    <link rel="stylesheet" href="../../css/notif.css"/>

    <script type="text/javascript" >
        $(document).ready(function()
        {
        $("#notificationLink").click(function()
        {
        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;
        });

        //Document Click
        $(document).click(function()
        {
        $("#notificationContainer").hide();
        });
        //Popup Click
        $("#notificationContainer").click(function()
        {
        return false
        });

        });
    </script>
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
                            <!-- Start Contact Info -->
                            <ul class="profile-name">
                                <li>Course: <b><?php echo $MajorCourse; ?></b></li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-5">
                        <!-- Start Social Links -->
                            <ul class="social-list">
                                <li id="notification_li">
                                    <span id="notification_count">3</span>
                                    <a class="bell itl-tooltip" data-placement="bottom" title="" id="notificationLink"><i class="fa fa-bell"></i></a>
                                    <div id="notificationContainer">
                                        <div id="notificationTitle">Notifications</div>
                                        <div id="notificationsBody" class="notifications">
                                            <div class="hr1" style="margin-top:40px;"></div>

                                            <label><a href="">The admin granted your request.</a></label>
                                            <div class="hr2" style="margin-top:1px; margin-bottom:1px;"></div>
                                            <label><a href="">The admin granted your request.</a></label>
                                            <div class="hr2" style="margin-top:1px; margin-bottom:1px;"></div>
                                            <label><a href="">The admin granted your request.</a></label>
                                            <div class="hr2" style="margin-top:1px; margin-bottom:1px;"></div>
                                        </div>
                                        <div id="notificationFooter"><a href="../notification/notification.php">See All</a></div>
                                    </div>
                                </li>
                                <li class="profile-name">
                                    &nbsp;
                                </li>
                                <li class="profile-name">
                                    <i class="fa fa-user"></i> Hello, <b><?php echo $StudentName; ?></b>
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
                        <a class="navbar-brand" href="">
                            <img src="../../images/ojpms.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Sign-out -->
                        <div class="signout-side">
                            <a class="show-signout"><i class="fa fa-sign-out"></i></a>
                        </div>
                        <!-- End Sign-out -->
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="../myinfo/personal-info.php">My Info</a>
                                <ul class="dropdown">
                                    <li><a href="../myinfo/personal-info.php">Personal Info</a></li>
                                    <li><a href="../myinfo/contacts-info.php">Contacts Info</a></li>
                                    <li><a href="../myinfo/work.php">Work</a></li>
                                    <li><a href="../myinfo/education.php">Education</a></li>
                                    <li><a href="../myinfo/certifications.php">Certifications</a></li>
                                    <li><a href="../myinfo/achievements.php">Achievements</a></li>
                                    <li><a href="../myinfo/specialization-and-languages.php">Specialization & Languages</a>
                                    </li>
                                    <li><a href="../myinfo/references.php">References</a></li>
                                    <li><a href="../myinfo/portfolio.php">Portfolio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="active" href="resume-link.php">Resume Link</a>
                                <ul class="dropdown">
                                    <li><a href="resume-link.php">Resume Link</a></li>
                                    <li><a href="background.php">Background</a></li>
                                    <li><a class="active" href="print-share.php">Print/Share</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../applications/applications.php">Applications</a>
                            </li>
                            <li>
                                <a href="../search-job/jobs.php">Jobs</a>
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
                        <a href="../myinfo/personal-info.php">My Info</a>
                        <ul class="dropdown">
                            <li><a href="../myinfo/personal-info.php">Personal Info</a></li>
                            <li><a href="../myinfo/contacts-info.php">Contacts Info</a></li>
                            <li><a href="../myinfo/work.php">Work</a></li>
                            <li><a href="../myinfo/education.php">Education</a></li>
                            <li><a href="../myinfo/certifications.php">Certifications</a></li>
                            <li><a href="../myinfo/achievements.php">Achievements</a></li>
                            <li><a href="../myinfo/specialization-and-languages.php">Specialization & Languages</a></li>
                            <li><a href="../myinfo/references.php">References</a></li>
                            <li><a href="../myinfo/portfolio.php">Portfolio</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="active" href="resume-link.php">Resume Link</a>
                        <ul class="dropdown">
                            <li><a href="resume-link.php">Resume Link</a></li>
                            <li><a href="background.php">Background</a></li>
                            <li><a class="active" href="print-share.php">Print/Share</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../applications/applications.php">Applications</a>
                    </li>
                    <li>
                        <a href="../search-job/jobs.php">Jobs</a>
                    </li>
                    <li>
                        <a href="../settings/privacy-settings.php">Settings</a>
                        <ul class="dropdown">
                            <li><a href="../settings/privacy-settings.php">Privacy Settings</a></li>
                            <li><a href="../settings/pass-settings.php">Password Settings</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

        <div class="page-banner no-subtitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Print/Share</h2>
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
                    <div class="col-md-12 page-content">
                        <div class="row">
                            <div class="col-md-12">
                                <p><b>Resumé Link URL:</b><a href="../../../resumelinkprofile.php" target="_blank">
                                http://markjoseph1496.ojpms.com <i class="fa fa-external-link-square"></i></a>
                                </p><br>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label>Download PDF <i class="fa fa-chevron-right"></i> Print</label>
                            </div>
                        </div>
                        <div class "row">
                            <div class="print">
                                <div class="column">
                                    <div class="myoverlay">
                                        <p>Your Resume</p>
                                        <button href="#" class="btn-system btn-mini border-btn"><i class="fa fa-file-text"></i> Download PDF</button>
                                    </div>
                                    <img src="../../img/one-column.jpg">
                                </div>
                            </div>  
                        </div>
                    </div>
                    <!-- End Page Content -->
                </div>
                <div class="hr3" style="margin-top:35px;margin-bottom:40px;"></div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>
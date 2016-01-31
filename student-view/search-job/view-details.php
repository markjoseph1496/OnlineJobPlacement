<?php
include('../../connection.php');
session_start();
$StudentID = $_SESSION['StudentID'];

$PositionID = $_GET['id'];

$position_tbl =
    GSecureSQL::query(
        "SELECT * FROM comppositiontbl WHERE PositionID = ?",
        TRUE,
        "s",
        $PositionID
    );
$CompanyID = $position_tbl[0][1];
$Email = $position_tbl[0][2];
$PostingDateFrom = $position_tbl[0][3];
$PostingDateTo = $position_tbl[0][4];
$PositionLevel = $position_tbl[0][5];
$JobDescription = $position_tbl[0][6];
$EmployementType = $position_tbl[0][7];
$AvailablePosition = $position_tbl[0][8];
$MonthlySalary = $position_tbl[0][10];
$YearExperience = $position_tbl[0][11];

$companyinfo_tbl =
    GSecureSQL::query(
        "SELECT * FROM companyinfotbl WHERE CompanyID = ?",
        TRUE,
        "s",
        $CompanyID
    );
$CompanyName = $companyinfo_tbl[0][1];
$CompanyDescription = $companyinfo_tbl[0][2];


$infoquery =
    GSecureSQL::query(
        "SELECT FirstName, LastName, MajorCourse FROM studentinfotbl WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );

$FirstName = $infoquery[0][0];
$LastName = $infoquery[0][1];
$CourseCode = $infoquery[0][2];
$StudentName = $FirstName . " " . $LastName;

$coursetbl =
    GSecureSQL::query(
        "SELECT CourseTitle FROM coursetbl WHERE CourseCode = ?",
        TRUE,
        "s",
        $CourseCode
    );
$MajorCourse = $coursetbl[0][0];
?>

<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="../../fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/ffonts/open-sans.css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../../css/ojpms-style.css" media="screen">

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

    <script type="text/javascript">
        $(document).ready(function () {
            $("#notificationLink").click(function () {
                $("#notificationContainer").fadeToggle(300);
                $("#notification_count").fadeOut("slow");
                return false;
            });

            //Document Click
            $(document).click(function () {
                $("#notificationContainer").hide();
            });
            //Popup Click
            $("#notificationContainer").click(function () {
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
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown icon-border" id="notificationLink">
                                <span id="notification_count">3</span>
                                <a href="#" class="bell itl-tooltip" data-placement="bottom" data-toggle="dropdown"><i class="fa fa-bell"></i></a>
                                <ul id="notificationContainer" class="dropdown-menu dropdown-menu-inverse">
                                    <li class="dropdown-header"><label>Notification</label></li>
                                    <li class="disabled"><a href="#" tabindex="-1">No new notification.</a></li>
                                    <li><a href="#" tabindex="-1">The administrator accepted your request.</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../notification/notification.php" tabindex="-1">See All</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-user"></b> Welcome, <b><?php echo $StudentName; ?> </b><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile <b class="fa fa-user" style="float:right;"></b></a></li>
                                    <li><a href="../settings/settings.php">Settings <b class="fa fa-cog" style="float:right;"></b></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" data-target='#Logout' data-toggle='modal'>Sign Out <b class="fa fa-sign-out" style="float:right;"></b></a></li>
                                </ul>
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
                        <button class="btn-system btn-mini border-btn" data-toggle="modal"
                                data-target="#ApplyNow">Apply Now
                        </button>
                    </div>
                    <!-- End Sign-out -->
                    <!-- Modal -->
                    <div class="modal fade" id="ApplyNow" role="dialog">
                        <div class="modal-dialog" style="padding:100px">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Apply Job?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-15 fieldcol">
                                        <label = "usr" class = "control-label">Do you want to Apply to this position?
                                        Your resume will be sent to this company.</label>
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="function.php?id=<?php echo $PositionID; ?>&cid=<?php echo $CompanyID; ?>"
                                           class="btn-system btn-large">Send</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal End -->

                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a>&nbsp;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
                <li>
                    <a href="#">Apply Now</a>
                </li>
            </ul>
            <!-- Mobile Menu End -->
        </div>
    </header>

    <div class="middle-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <ul class="mid-list">
                        &nbsp;
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Content -->
    <form id="Save" name="Save" autocomplete="off" action="addfunction.php">
        <div id="content">
            <div class="container">
                <div class="row sidebar-page">
                    <!-- Page Content -->
                    <div class="col-md-9 page-content">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Single Testimonial -->
                                <div class="classic-testimonials">
                                    Post Date 18-Dec-15
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Testimonial -->
                                <div class="classic-testimonials" style="float:right;">
                                    ojpms Ref. JPH500003003534608
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Single Testimonial -->
                                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                                <div class="classic-testimonials text-center">
                                    <img src="../../images/marg.png">
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="classic-testimonials">
                                    <h4><?php echo $CompanyName; ?></h4>
                                </div>
                                <label><?php echo nl2br($CompanyDescription); ?></label>
                                <div class="hr3" style="margin-top:35px;margin-bottom:40px;"></div>
                                <div class="text-center"><h3><?php echo $PositionLevel; ?></h3></div>
                                <div class="hr3" style="margin-top:35px;margin-bottom:40px;"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="classic-testimonials">
                                    <label><u>Good candidate must have the following qualifications:</u></label>
                                </div>
                                <?php
                                $requirement_tbl =
                                    GSecureSQL::query(
                                        "SELECT Knowledge FROM comprequirementtbl WHERE CompanyID = ? AND PositionID = ?",
                                        TRUE,
                                        "ss",
                                        $CompanyID,
                                        $PositionID
                                    );
                                foreach($requirement_tbl as $value){
                                    $Knowledge = $value[0];
                                    ?>
                                    <li><?php echo $Knowledge; ?></li>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                        <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>

                        <div class="row">
                            <div class="col-md-3">
                                <label>Year(s) of Experience</label>
                            </div>
                            <div class="col-md-3"><?php echo $YearExperience; ?> year(s)</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Qualification</label>
                            </div>
                            <div class="col-md-3">Degree</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Industry</label>
                            </div>
                            <div class="col-md-3">Information Technology</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Job Function</label>
                            </div>
                            <div class="col-md-4"><?php echo $JobDescription; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Location</label>
                            </div>
                            <div class="col-md-3"><a href="">Taguig City</a></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Salary</label>
                            </div>
                            <div class="col-md-3">Salary Negotiable</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Employment Type</label>
                            </div>
                            <div class="col-md-3">Full time, Permanent</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>&nbsp;</label>
                            </div>
                        </div>

                        <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                        <div><h3>People also viewed</h3></div>
                        <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                        <div><h3>Related Searches</h3></div>

                    </div>
                    <!-- End Page Content -->

                    <!--Sidebar-->
                    <div class="col-md-3 sidebar right-sidebar">
                        <!-- Search Widget -->
                        <div class="widget widget-categories">
                            <h4>Tools <span class="head-line"></span></h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-bookmark"></i> Bookmark this Job</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-share-alt"></i> Share</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-print"></i> Print this Job Ad</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-exclamation-triangle"></i> Report this Job</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget-tags">
                            <h4>Keywords: <span class="head-line"></span></h4>
                            <div class="tagcloud">
                                <a href="#">cpa</a>
                                <a href="#">mnc</a>
                                <a href="#">accountant</a>
                                <a href="#">multinational</a>
                                <a href="#">accounting</a>
                                <a href="#">asset</a>
                                <a href="#">taguig</a>
                                <a href="#">senior accountant</a>
                                <a href="#">audit</a>
                                <a href="#">tax</a>
                                <a href="#">global accounting</a>
                            </div>
                        </div>
                    </div>
                    <!--End sidebar-->
                </div>
            </div>
        </div>
    </form>
</div>
<!-- End Content -->
<script type="text/javascript" src="../../js/script.js"></script>


<!-- Start Footer Section -->
<footer>
    <div class="container">
        <!-- Start Copyright -->
        <div class="copyright-section">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2015 OJPMS - All Rights Reserved</p>
                </div>
                <!-- .col-md-6 -->
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="#">Sitemap</a>
                        </li>
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- .col-md-6 -->
            </div>
            <!-- .row -->
        </div>
        <!-- End Copyright -->
    </div>
</footer>
<!-- End Footer Section -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
</body>
</html>

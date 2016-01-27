<?php
include('../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}else{
    header("location: ../../login-student.php");
}

$infoquery =
    GSecureSQL::query(
        "SELECT FirstName, LastName FROM studentinfotbl WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );

$FirstName = $infoquery[0][0];
$LastName = $infoquery[0][1];
$StudentName = $FirstName . " " . $LastName;
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
    <script type="text/javascript" src="../../js/bootstrap.min.js" ></script>

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

    <!-- CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- Checkbox -->
    <link rel="stylesheet" type="text/css" href="../../css/checkbox.css" media="screen" />
    
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
                            <li>Student No.: <b><?php echo $StudentID; ?></b></li>
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
                        <a class="show-signout" data-toggle='modal' data-target='#Logout'><i class="fa fa-sign-out"></i></a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Logout"
                         role="dialog">
                        <div class="modal-dialog" style="padding:100px">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Log out?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-15 fieldcol">
                                        <label = "usr" class = "control-label">Do you want to log out?</label>
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="../logout.php"
                                           class="btn btn-primary">Log out</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sign-out -->
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="active" href="personal-info.php">My Info</a>
                            <ul class="dropdown">
                                <li><a href="personal-info.php">Personal Info</a></li>
                                <li><a href="contacts-info.php">Contacts Info</a></li>
                                <li><a class="active" href="work.php">Work</a></li>
                                <li><a href="education.php">Education</a></li>
                                <li><a href="certifications.php">Certifications</a></li>
                                <li><a href="achievements.php">Achievements</a></li>
                                <li><a href="specialization-and-languages.php">Specialization & Languages</a></li>
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
                    <a class="active" href="personal-info.php">My Info</a>
                    <ul class="dropdown">
                        <li><a href="personal-info.php">Personal Info</a></li>
                        <li><a href="contacts-info.php">Contacts Info</a></li>
                        <li><a class="active" href="work.php">Work</a></li>
                        <li><a href="education.php">Education</a></li>
                        <li><a href="certifications.php">Certifications</a></li>
                        <li><a href="achievements.php">Achievements</a></li>
                        <li><a href="specialization-and-languages.php">Specialization & Languages</a></li>
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
                    <a href="../search-job/jobs.php">Jobs</a>
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
                    <h2>Work</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <div class="skill-shortcode">
                <div class="skill">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-percentage="30" style="width: 30%;">
                            <span class="progress-bar-span">30%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sidebar-page">
                <!-- Page Content -->
                <div class="col-md-9 page-content">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Single Testimonial -->
                            <div class="classic-testimonials">
                                <label>Work Options</label>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox3" class="styled" type="checkbox">
                                    <label for="checkbox3">
                                        <b>Willing to work night shifts</b>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox3" class="styled" type="checkbox">
                                    <label for="checkbox3">
                                        <b>Willing to relocate</b>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox3" class="styled" type="checkbox">
                                    <label for="checkbox3">
                                        <b>Looking for OJT position</b>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox3" class="styled" type="checkbox">
                                    <label for="checkbox3">
                                        <b>Willing to work overseas</b>
                                    </label>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                        </div>
                        <div class="col-md-8">
                            <!-- Single Testimonial -->
                            <div class="classic-testimonials">
                                <div class="testimonial-content">
                                    <label>Objectives</label>
                                    <textarea class="form-control" id="" name="" rows="7"></textarea>
                                    <span class="counter">120 characters remaining.</span>
                                </div>
                                <div class="testimonial-author">
                                    <button type="submit" id="" class="btn-system btn-large" name=""
                                            style="float:right;">Save
                                    </button>
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
            <div class="row">
                <div class="col-md-6">
                    <h4>Work Experiences<span class="head-line"></span></h4>
                </div>
                <div class="col-md-6">
                    <a href="add/add-workexperience.php" class="main-button" style="float:right;">
                        <span class="fa fa-plus"> Add Work Experience</span>
                    </a>
                </div>
            </div>

            <div class="hr2" style="margin-top:35px;"></div>
            <table class="table segment table-hover">
                <thead>
                <tr>
                    <th>Company</th>
                    <th>Position</th>
                    <th>Industry</th>
                    <th>Specialization</th>
                    <th>From - To</th>
                    <th width="15%">&nbsp;</th>
                </tr>
                </thead>
                <?php
                $workexperience_tbl =
                    GSecureSQL::query(
                        "SELECT * FROM workexperiencetbl WHERE StudentID = ? ORDER BY DateToYear DESC",
                        TRUE,
                        "s",
                        $StudentID
                    );
                $count = 0;
                foreach ($workexperience_tbl as $value) {
                    $WorkID = $value[0];
                    $CompanyName = $value[2];
                    $CompanyWebsite = $value[3];
                    $Industry = $value[4];
                    $WorkSpecialization = $value[5];
                    $DateFromMonth = $value[6];
                    $DateFromYear = $value[7];
                    $DateToMonth = $value[8];
                    $DateToYear = $value[9];
                    $PositionLevel = $value[11];
                    $MonthlySalary = $value[12];
                    $NatureOfWork = $value[10];
                    $count++;

                    $specialization_tbl =
                        GSecureSQL::query(
                            "SELECT Specialization FROM listofspecializationtbl WHERE id = ?",
                            TRUE,
                            "s",
                            $WorkSpecialization
                        );
                    foreach ($specialization_tbl as $value1) {
                        $WorkSpecialization = $value1[0];
                    }

                    $industry_tbl =
                        GSecureSQL::query(
                            "SELECT Industry FROM listofindustrytbl WHERE id = ?",
                            TRUE,
                            "s",
                            $Industry
                        );
                    $count2 = 0;
                    foreach ($industry_tbl as $value2) {
                        $Industry = $value2[0];
                        $count2++;
                    }

                    $position_tbl =
                        GSecureSQL::query(
                            "SELECT Position FROM listofpositiontbl WHERE id = ?",
                            TRUE,
                            "s",
                            $PositionLevel
                        );
                    foreach ($position_tbl as $value3) {
                        $PositionLevel = $value3[0];
                    }
                    if ($DateFromMonth == 1) {
                        $DateFromMonth = 'January';
                    }
                    if ($DateFromMonth == 2) {
                        $DateFromMonth = 'February';
                    }
                    if ($DateFromMonth == 3) {
                        $DateFromMonth = 'March';
                    }
                    if ($DateFromMonth == 4) {
                        $DateFromMonth = 'April';
                    }
                    if ($DateFromMonth == 5) {
                        $DateFromMonth = 'May';
                    }
                    if ($DateFromMonth == 6) {
                        $DateFromMonth = 'June';
                    }
                    if ($DateFromMonth == 7) {
                        $DateFromMonth = 'July';
                    }
                    if ($DateFromMonth == 8) {
                        $DateFromMonth = 'August';
                    }
                    if ($DateFromMonth == 9) {
                        $DateFromMonth = 'September';
                    }
                    if ($DateFromMonth == 10) {
                        $DateFromMonth = 'October';
                    }
                    if ($DateFromMonth == 11) {
                        $DateFromMonth = 'November';
                    }
                    if ($DateFromMonth == 12) {
                        $DateFromMonth = 'December';
                    }

                    /* Year */
                    if ($DateToMonth == 1) {
                        $DateToMonth = 'January';
                    }
                    if ($DateToMonth == 2) {
                        $DateToMonth = 'February';
                    }
                    if ($DateToMonth == 3) {
                        $DateToMonth = 'March';
                    }
                    if ($DateToMonth == 4) {
                        $DateToMonth = 'April';
                    }
                    if ($DateToMonth == 5) {
                        $DateToMonth = 'May';
                    }
                    if ($DateToMonth == 6) {
                        $DateToMonth = 'June';
                    }
                    if ($DateToMonth == 7) {
                        $DateToMonth = 'July';
                    }
                    if ($DateToMonth == 8) {
                        $DateToMonth = 'August';
                    }
                    if ($DateToMonth == 9) {
                        $DateToMonth = 'September';
                    }
                    if ($DateToMonth == 10) {
                        $DateToMonth = 'October';
                    }
                    if ($DateToMonth == 11) {
                        $DateToMonth = 'November';
                    }
                    if ($DateToMonth == 12) {
                        $DateToMonth = 'December';
                    }
                    $Duration = $DateFromMonth . " " .$DateFromYear . " - " . $DateToMonth . " " . $DateToYear;
                    ?>
                    <tbody>
                    <tr>
                        <td><?php echo $CompanyName; ?></td>
                        <td><?php echo $PositionLevel; ?></td>
                        <td><?php echo $Industry; ?></td>
                        <td><?php echo $WorkSpecialization; ?></td>
                        <td><?php echo $Duration; ?></td>
                        <td  class="text-center">
                            <button href='' class='btn btn-danger'>
                                <i class='fa fa-trash fa-1x'></i>
                            </button>
                            <button href='' class='btn btn-default'>
                                <i class='fa fa-pencil-square-o fa-1x'></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                    <?php
                }
                ?>
            </table>
            <div class="hr2"></div>
        </div>
    </div>
</div>
<!-- End Content -->
<script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>
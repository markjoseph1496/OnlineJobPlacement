<?php
include('../../connection.php');
session_start();
$StudentID = $_SESSION['StudentID'];
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
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen"/>

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
                        <!-- Start Social Links -->
                        <ul class="social-list">
                            <li class="profile-name">
                                <i class="fa fa-user"></i> Hello, <b>Aira Jane Cruz</b>
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
                    <!-- Sign-out -->
                    <div class="signout-side">
                        <a class="show-signout"><i class="fa fa-sign-out"></i></a>
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
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li>Work</li>
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
                        <div class="col-md-4">
                            <!-- Single Testimonial -->
                            <div class="classic-testimonials">
                                <label>Work Options</label>
                                <div>
                                    <input type="checkbox"/><b> Willing to work night shifts</b>
                                </div>
                                <div>
                                    <input type="checkbox"/><b> Willing to relocate</b>
                                </div>
                                <div>
                                    <input type="checkbox"/><b> Looking for OJT position</b>
                                </div>
                                <div>
                                    <input type="checkbox"/><b> Willing to work overseas</b>
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
                <div class="col-md-6 fieldcol">
                    <h4>Work Experiences<span class="head-line"></span></h4>
                </div>
                <div class="col-md-6 fieldcol">
                    <a href="add/add-workexperience.php" class="btnforadding" style="float:right;">
                        <span class="fa fa-plus-square"> Add Work Experience</span>
                    </a>
                </div>
            </div>

            <table class="table segment table-hover">
                <thead>
                <tr class="table-color">
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
                        <td>
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
        </div>
    </div>
</div>
<!-- End Content -->
<script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>
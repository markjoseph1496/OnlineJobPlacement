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
                        "SELECT * FROM workexperiencetbl WHERE StudentID = ? ORDER BY SUBSTRING(DateFrom, 2,5)",
                        TRUE,
                        "s",
                        $StudentID
                    );
                $count = 0;
                foreach ($workexperience_tbl as $value) {
                    $WorkID = $workexperience_tbl[$count]->WorkID;
                    $CompanyName = $workexperience_tbl[$count]->CompanyName;
                    $CompanyWebsite = $workexperience_tbl[$count]->CompanyWebsite;
                    $Industry = $workexperience_tbl[$count]->Industry;
                    $WorkSpecialization = $workexperience_tbl[$count]->Specialization;
                    $DateFrom = $workexperience_tbl[$count]->DateFrom;
                    $DateTo = $workexperience_tbl[$count]->DateTo;
                    $PositionLevel = $workexperience_tbl[$count]->PositionLevel;
                    $MonthlySalary = $workexperience_tbl[$count]->MonthlySalary;
                    $NatureOfWork = $workexperience_tbl[$count]->NatureOfWork;
                    $count++;

                    $specialization_tbl =
                        GSecureSQL::query(
                            "SELECT Specialization FROM listofspecializationtbl WHERE id = ?",
                            TRUE,
                            "s",
                            $WorkSpecialization
                        );
                    $count1 = 0;
                    foreach ($specialization_tbl as $value1) {
                        $WorkSpecialization = $specialization_tbl[$count1]->Specialization;
                        $count1++;
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
                        $Industry = $industry_tbl[$count2]->Industry;
                        $count2++;
                    }

                    $position_tbl =
                        GSecureSQL::query(
                            "SELECT Position FROM listofpositiontbl WHERE id = ?",
                            TRUE,
                            "s",
                            $PositionLevel
                        );
                    $count3 = 0;
                    foreach ($position_tbl as $valu3) {
                        $PositionLevel = $position_tbl[$count3]->Position;
                        $count3++;
                    }
                    if (substr($DateFrom, 0, 2) == 1) {
                        $DateFrom = 'January' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 2) {
                        $DateFrom = 'February' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 3) {
                        $DateFrom = 'March' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 4) {
                        $DateFrom = 'April' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 5) {
                        $DateFrom = 'May' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 6) {
                        $DateFrom = 'June' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 7) {
                        $DateFrom = 'July' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 8) {
                        $DateFrom = 'August' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 9) {
                        $DateFrom = 'September' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 10) {
                        $DateFrom = 'October' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 11) {
                        $DateFrom = 'November' . substr($DateFrom, 2, 5);
                    }
                    if (substr($DateFrom, 0, 2) == 12) {
                        $DateFrom = 'December' . substr($DateFrom, 2, 5);
                    }

                    /* Year */
                    if (substr($DateTo, 0, 2) == 1) {
                        $DateTo = 'January' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 2) {
                        $DateTo = 'February' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 3) {
                        $DateTo = 'March' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 4) {
                        $DateTo = 'April' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 5) {
                        $DateTo = 'May' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 6) {
                        $DateTo = 'June' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 7) {
                        $DateTo = 'July' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 8) {
                        $DateTo = 'August' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 9) {
                        $DateTo = 'September' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 10) {
                        $DateTo = 'October' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 11) {
                        $DateTo = 'November' . substr($DateTo, 2, 5);
                    }
                    if (substr($DateTo, 0, 2) == 12) {
                        $DateTo = 'December' . substr($DateTo, 2, 5);
                    }
                    $Duration = $DateFrom . " - " . $DateTo;
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

<?php
if (isset($_POST['btnSave'])) {

    $fileToUpload = basename($_FILES["fileToUpload"]["name"]);
    $target_dir = "ProfileImages/";   //eto yung folder or directory kung saan mo ma-sasave yung picture mo
    $target_file = $target_dir . $StudentID . ".jpg";
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    //eto chcheck nya yung format ng file kung GIF ba sya or JPEG or PNG in short Check ng FILE TYPE
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

            $query = "UPDATE studentinfotbl SET ProfileImage = '$target_file' WHERE StudentID = '$StudentID'";
            $Result = mysql_query($query);
            echo "
         <script type='text/javascript'>
         </script>
         ";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
</html>
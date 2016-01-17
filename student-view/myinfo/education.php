<!DOCTYPE html>
<?php
include('../../connection.php');
session_start();

if (isset($_SESSION['StudentID'])) {
    $StudentID = $_SESSION['StudentID'];
} else {
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php?id=2';
        </script>
        ";
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

    <!-- Bootstrap CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../../css/bootstrapValidator.min.css" rel="stylesheet"/>
    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

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
                            <li><i class="fa fa-hashtag"></i> <b>008-2012-0805</b></li>
                        </ul>
                        <!-- End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-5">
                        <!-- Start Social Links -->
                        <ul class="social-list">
                            <li class="profile-name">
                                <a class="bell itl-tooltip" data-placement="bottom" title="" href="#"
                                   data-original-title="Notification"><i class="fa fa-bell"></i></a>
                            </li>
                            <li class="profile-name">
                                &nbsp;
                            </li>
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
                    <a class="navbar-brand" href="">
                        <img src="../../images/ojpms.png">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Sign-out -->
                    <div class="signout-side">
                        <a href="../../login-student.php?id=1" class="show-signout"><i class="fa fa-sign-out"></i></a>
                    </div>
                    <!-- End Sign-out -->
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="active" href="personal-info.php">My Info</a>
                            <ul class="dropdown">
                                <li><a href="personal-info.php">Personal Info</a></li>
                                <li><a href="contacts-info.php">Contacts Info</a></li>
                                <li><a href="work.php">Work</a></li>
                                <li><a class="active" href="education.php">Education</a></li>
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
                        <li><a href="work.php">Work</a></li>
                        <li><a class="active" href="education.php">Education</a></li>
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
                    <h2>Education</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                if ($id == 1) {
                    echo '
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                School information successfully updated.
                            </div>
                            ';
                } elseif ($id == 2) {
                    echo '
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                Seminar information successfully updated.
                            </div>
                            ';
                } elseif ($id == 3) {
                    echo '
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                School information successfully deleted.
                            </div>
                            ';
                } elseif ($id == 4) {
                    echo '
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                School information successfully added.
                            </div>
                            ';
                } elseif ($id == 5) {
                    echo '
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                Seminar successfully added.
                            </div>
                            ';
                } elseif ($id == 6) {
                    echo '
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                Seminar successfully deleted.
                            </div>
                            ';
                }

            }
            ?>
            <div class="row sidebar-page">
                <!-- Page Content -->
                <div class="col-md-9 page-content">
                    <div class="classic-testimonials">
                        <!-- Single Testimonial -->
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <h4>Schools<span class="head-line"></span></h4>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <a href="add/add-school.php" class="btnforadding" style="float:right;">
                                    <span class="fa fa-plus-square"> Add School</span>
                                </a>
                            </div>
                        </div>

                        <div class="hr2" style="margin-top:35px;"></div>
                        <table class="table segment table-hover">
                            <thead>
                            <tr class="table-color">
                                <th>School</th>
                                <th>Attainment</th>
                                <th>Course</th>
                                <th width="15%">Graduated On</th>
                                <th width="15%">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $school_tbl =
                                GSecureSQL::query(
                                    "SELECT * FROM schooltbl WHERE StudentID = ? AND _Default = 1",
                                    TRUE,
                                    "s",
                                    $StudentID
                                );
                            foreach ($school_tbl as $value) {
                                $SchoolID = $value[0];
                                $School = $value[2];
                                $Attainment = $value[3];
                                $Course = $value[4];
                                $Graduated = $value[5];

                                $course_tbl =
                                    GSecureSQL::query(
                                        "SELECT * FROM coursetbl WHERE CourseID = ?",
                                        TRUE,
                                        "s",
                                        $Course
                                    );
                                foreach ($course_tbl as $value1) {
                                    $CourseTitle = $value1[1];
                                    if (substr($Graduated, 0, 2) == 1) {
                                        $Graduated = 'January' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 2) {
                                        $Graduated = 'February' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 3) {
                                        $Graduated = 'March' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 4) {
                                        $Graduated = 'April' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 5) {
                                        $Graduated = 'May' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 6) {
                                        $Graduated = 'June' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 7) {
                                        $Graduated = 'July' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 8) {
                                        $Graduated = 'August' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 9) {
                                        $Graduated = 'September' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 10) {
                                        $Graduated = 'October' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 11) {
                                        $Graduated = 'November' . substr($Graduated, 2, 5);
                                    }
                                    if (substr($Graduated, 0, 2) == 12) {
                                        $Graduated = 'December' . substr($Graduated, 2, 5);
                                    }
                                }
                                ?>
                                <tr>
                                    <td><?php echo $School; ?></td>
                                    <td><?php echo $Attainment; ?></td>
                                    <td><?php echo $Course; ?></td>
                                    <td><?php echo $Graduated; ?></td>
                                    <td>
                                        <a href="edit/edit-school.php?id=<?php echo $SchoolID; ?>"
                                           class="btn btn-default btnformaintenance">
                                            <i class="fa fa-pencil-square-o fa-1x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            <?php
                            $_school_tbl =
                                GSecureSQL::query(
                                    "SELECT * FROM schooltbl WHERE StudentID = ? AND _Default = 0",
                                    TRUE,
                                    "s",
                                    $StudentID
                                );
                            foreach ($_school_tbl as $_value) {
                                $_SchoolID = $_value[0];
                                $_School = $_value[2];
                                $_Attainment = $_value[3];
                                $_Course = $_value[4];
                                $_Graduated = $_value[5];

                                $_course_tbl =
                                    GSecureSQL::query(
                                        "SELECT * FROM coursetbl WHERE CourseID = ?",
                                        TRUE,
                                        "s",
                                        $_Course
                                    );
                                foreach ($_course_tbl as $_value1) {
                                    $_CourseTitle = $_value1[1];
                                    if (substr($_Graduated, 0, 2) == 1) {
                                        $_Graduated = 'January' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 2) {
                                        $_Graduated = 'February' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 3) {
                                        $_Graduated = 'March' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 4) {
                                        $_Graduated = 'April' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 5) {
                                        $_Graduated = 'May' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 6) {
                                        $_Graduated = 'June' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 7) {
                                        $_Graduated = 'July' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 8) {
                                        $_Graduated = 'August' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 9) {
                                        $_Graduated = 'September' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 10) {
                                        $_Graduated = 'October' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 11) {
                                        $_Graduated = 'November' . substr($_Graduated, 2, 5);
                                    }
                                    if (substr($_Graduated, 0, 2) == 12) {
                                        $_Graduated = 'December' . substr($_Graduated, 2, 5);
                                    }
                                }
                                ?>
                                <tr>
                                    <td><?php echo $_School; ?></td>
                                    <td><?php echo $_Attainment; ?></td>
                                    <td><?php echo $_Course; ?></td>
                                    <td><?php echo $_Graduated; ?></td>
                                    <td>
                                        <a href="edit/edit-school.php?id=<?php echo $_SchoolID; ?>"
                                           class="btn btn-default btnformaintenance">
                                            <i class="fa fa-pencil-square-o fa-1x"></i>
                                        </a>
                                        <button class="btn btn-danger" data-toggle="modal"
                                                data-target="#DeleteSchool<?php echo $_SchoolID; ?>">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </button>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="DeleteSchool<?php echo $_SchoolID; ?>" role="dialog">
                                    <div class="modal-dialog" style="padding:100px">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Delete School information?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-15 fieldcol">
                                                    <label = "usr" class = "control-label">Do you want to delete this
                                                    information? This cannot be undone.</label>
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="delete.php?delete_SchoolID=<?php echo $_SchoolID; ?>" class="btn btn-danger">Delete</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                            </tbody>
                        </table>
                        <div class="hr2"></div>

                        <div class="hr4" style="margin-top:40px;margin-bottom:40px;"></div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <h4>Seminars<span class="head-line"></span></h4>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <a href="add/add-seminar.php" class="btnforadding" style="float:right;">
                                    <span class="fa fa-plus-square"> Add Seminar</span>
                                </a>
                            </div>
                        </div>

                        <div class="hr2" style="margin-top:35px;"></div>
                        <table class="table segment table-hover">
                            <thead>
                            <tr class="table-color">
                                <th>Seminar</th>
                                <th>Year Attended</th>
                                <th width="15%">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $seminar_tbl =
                                GSecureSQL::query(
                                    "SELECT * FROM seminartbl WHERE StudentID = ?",
                                    TRUE,
                                    "s",
                                    $StudentID
                                );
                            foreach ($seminar_tbl as $item) {
                                $SeminarID = $item[0];
                                $Seminar = $item[2];
                                $YearAttended = $item[3];
                                ?>
                                <tr>
                                    <td><?php echo $Seminar; ?></td>
                                    <td><?php echo $YearAttended; ?></td>
                                    <td class="text-center">
                                        <a href="edit/edit-seminar.php?id=<?php echo $SeminarID; ?>"
                                           class="btn btn-default btnformaintenance">
                                            <i class="fa fa-pencil-square-o fa-1x"></i>
                                        </a>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#DeleteSeminar">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="DeleteSeminar" role="dialog">
                                    <div class="modal-dialog" style="padding:100px">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Delete Seminar?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-15 fieldcol">
                                                    <label = "usr" class = "control-label">Do you want to delete this
                                                    information? This cannot be undone.</label>
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="delete.php?delete_SeminarID=<?php echo $SeminarID; ?>"
                                                       class="btn btn-danger">Delete</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        <div class="hr2"></div>
                    </div>
                </div>
                <!-- End Page Content -->

                <!--Sidebar-->
                <div class="col-md-3 sidebar right-sidebar">
                    <!-- Search Widget -->
                    <div class="call-action call-action-boxed call-action-style2 clearfix">
                        <label><span>(*)</span> Note: Required fields.</label>
                    </div>
                </div>
                <!--End sidebar-->
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
<script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>
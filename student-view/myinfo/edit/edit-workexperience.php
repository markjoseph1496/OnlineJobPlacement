<?php
include("../../../connection.php");
session_start();

if (isset($_SESSION['StudentID'])) {
    $StudentID = $_SESSION['StudentID'];
} else {
    header("location: ../../../login-student.php");
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
    <link rel="stylesheet" href="../../../css/bootstrap.min.css"/>

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="../../../css/bootstrapValidator.min.css"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>

    <!-- BootstrapValidator -->
    <script type="text/javascript" src="../../../js/bootstrapValidator.min.js"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.min.css" media="screen">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="../../../fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="../../../fonts/ffonts/open-sans.css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../../../css/slicknav.css" media="screen">

    <!-- CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../../../css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="../../../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../../../js/modernizrr.js"></script>
    <script type="text/javascript" src="../../../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../../../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../../../js/count-to.js"></script>
    <script type="text/javascript" src="../../../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../../../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../../../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../../../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../../../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../../../js/jquery.slicknav.js"></script>

    <!-- Notification -->
    <link rel="stylesheet" href="../../../css/notif.css"/>

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
                                <span id="notification_count">5</span>
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
                                    <li><a href="../../settings/settings.php">Settings <b class="fa fa-cog" style="float:right;"></b></a></li>
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
                    <a class="navbar-brand">
                        <img src="../../../images/ojpms.png">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="page-banner no-subtitle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Work Experience</h2>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#"></a></li>
                        <li>Edit Work Experience</li>
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
                            <div class="form-group">
                                <label>Company Name <span>(*)</span></label>
                                <input type="text" class="form-control" id="" name="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Website</label>
                                <input type="text" class="form-control" id="" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Industry <span>(*)</span></label>
                                <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Duration</label><br>
                                <label><input type="checkbox" name="" value=""> Currently Work Here</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>From <span>(*)</span></label>
                                <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>To <span>(*)</span></label>
                                <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 fieldcol">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position Title <span>(*)</span></label>
                                <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position Level <span>(*)</span></label>
                                <input type="text" class="form-control" id="" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Specialization <span>(*)</span></label>
                                <input type="text" class="form-control" id="" name="">
                            </div>
                        </div>
                        <div class="col-md-3 fieldcol">
                            <div class="form-group">
                                <label>Monthly Salary</label><br>
                                <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 fieldcol">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <input type="text" class="form-control" id="" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-12 fieldcol">
                            <div class="form-group">
                                <label>Nature of Work</label><br>
                                <textarea class="form-control" id="" name="" rows="5"></textarea>
                                <span class="counter">150 characters remaining.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Content -->

                <!--Sidebar-->
                <div class="col-md-3 sidebar left-sidebar">
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
                    <button type="submit" class="btn-system btn-large" name="btnSave">Save</button>
                    <a href="../work.php" class="btn-system btn-large btn-black">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
<script type="text/javascript" src="../../../js/script.js"></script>
</body>
</html>
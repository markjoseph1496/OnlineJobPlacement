<?php
include('../../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}else{
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
    <link rel="stylesheet" href="../../../css/bootstrap.min.css" />

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="../../../css/bootstrapValidator.min.css" />

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.min.js" ></script>

    <!-- BootstrapValidator -->
    <script type="text/javascript" src="../../../js/bootstrapValidator.min.js" ></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.min.css" media="screen">

    <!-- Fonts -->
    <link href="../../../fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../../fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../../fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../../fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

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
                                <li class="profile-name">
                                    <a class="bell itl-tooltip" data-placement="bottom" title="" href="#"
                                       data-original-title="Notification"><i class="fa fa-bell"></i></a>
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
                            <img src="../../../images/ojpms.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">                            
                            <a href="../../../login-student.php?id=1" class="line-height"><i class="fa fa-sign-out"></i></a>                           
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a href="../../../login-student.php?id=1"><i class="fa fa-sign-out"></i> Sign Out</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

        <div class="page-banner no-subtitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Documents</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="#"></a></li>
                            <li>Edit Documents</li>
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
                            <div class="col-md-12 fieldcol">
                                <div class="form-group">
                                    <label>Document</label>
                                    <input type="file" id="file" name="file">
                                </div>
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
                        <button type="submit" class="btn-system btn-large" name="btnSave">Save</button>
                        <a href="../portfolio.php" class="btn-system btn-large btn-black">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../../js/script.js"></script>
</body>
</html>
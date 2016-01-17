<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];
?>
<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js"> <![endif]-->
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
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <!-- BootstrapValidator -->
    <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link href="../fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../js/modernizrr.js"></script>
    <script type="text/javascript" src="../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../js/count-to.js"></script>
    <script type="text/javascript" src="../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../js/jquery.slicknav.js"></script>
</head>

<body>

<!-- Full Body Container -->
<div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

        <!-- Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Start Contact Info -->
                        <ul class="contact-details">
                            <li class="profile-name"><i class="fa fa-hashtag"></i> <b>008-2012-0805</b></li>
                        </ul>
                        <!-- End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6">
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
                        <img src="../images/ojpms.png">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Sign-out -->
                    <div class="signout-side">
                        <a class="show-signout" href="../login-company.php?id=1"><i class="fa fa-sign-out"></i></a>
                    </div>
                    <!-- End Sign-out -->
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="company.php">Home</a>
                        </li>
                        <li>
                            <a>Position</a>
                            <ul class="dropdown">
                                <li><a href="company-positionlist.php">Position List</a></li>
                                <li><a href="company-createposition.php">Create Position</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="company-calendar.php">Calendar</a>
                        </li>
                        <li><a href="company-settings.php">Settings</a>
                        </li>
                        <li>
                            <a class="active" href="company-applicants.php">Applicant List</a>
                            <ul class="dropdown">
                                <li><a href="company-pendingapplicants.php">Pending</a></li>
                                <li><a href="company-acceptedapplicants.php" class="active">Accepted</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
                <li>
                    <a href="company.php">Home</a>
                </li>
                <li>
                    <a>Position</a>
                    <ul class="dropdown">
                        <li><a href="company-positionlist.php">Position List</a></li>
                        <li><a href="company-createposition.php">Create Position</a></li>
                    </ul>
                </li>
                <li>
                    <a href="company-calendar.php">Calendar</a>
                </li>
                <li><a href="company-settings.php">Settings</a>
                </li>
                <li>
                    <a class="active" href="company-applicants.php">Applicant List</a>
                    <ul class="dropdown">
                        <li><a href="company-pendingapplicants.php">Pending</a></li>
                        <li><a href="company-acceptedapplicants.php" class="active">Accepted</a></li>
                    </ul>
                </li>
            </ul>
    </header>
    <!-- Mobile Menu End -->

</div>
<!-- End Header Logo & Naviagtion -->

</header>
<!-- End Header Section -->

<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; center #f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>List of Accepted Applicants</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!--Content-->
<br><br><br>
<div class="container">
    <div class="col-md-12">

        <table class="table segment table-hover">
            <thead>
            <tr>

            </tr>
            <tr>
                <th width='20%' class='tabletitle'>Applicant Name</th>
                <th width='20%' class='tabletitle'>Position</th>
                <th width='15%' class='tabletitle'>Course</th>
                <th width='20%' class='tabletitle'>Location</th>
                <th width='15%' class='tabletitle'>Email</th>
                <th width='5%' class='tabletitle'>Remove</th>
            <tr>
            </thead>
            <?php
            $requesttocompany_tbl =
                GSecureSQL::query(
                    "SELECT
                          requesttocompanytbl.RID,
                          requesttocompanytbl.StudentID,
                          requesttocompanytbl.PositionID,
                          requesttocompanytbl.Status,
                          studentinfotbl.StudentID,
                          studentinfotbl.FirstName,
                          studentinfotbl.LastName,
                          studentinfotbl.MajorCourse,
                          studcontactstbl.StudentID,
                          studcontactstbl.City,
                          studcontactstbl.Email,
                          comppositiontbl.PositionID,
                          comppositiontbl.PositionLevel
                          FROM
                          requesttocompanytbl
                          INNER JOIN comppositiontbl ON requesttocompanytbl.PositionID = comppositiontbl.PositionID
                          INNER JOIN studentinfotbl ON requesttocompanytbl.StudentID = studentinfotbl.StudentID
                          INNER JOIN studcontactstbl ON studentinfotbl.StudentID = studcontactstbl.StudentID
                          WHERE requesttocompanytbl.Status = 'Accepted'
                          ",
                    TRUE
                );
            foreach ($requesttocompany_tbl as $value) {
                $RID = $value[0];
                $PositionLevel = $value[12];
                $FirstName = $value[5];
                $LastName = $value[6];
                $MajorCourse = $value[7];
                $Location = $value[9];
                $Email = $value[10];

                $coursetbl =
                    GSecureSQL::query(
                        "SELECT CourseTitle FROM coursetbl WHERE CourseCode = ?",
                        TRUE,
                        "s",
                        $MajorCourse
                    );
                foreach ($coursetbl as $value1) {
                    $MajorCourse = $value1[0];
                }
                ?>
                <tbody>
                <tr>
                    <td width=20% class=tabletitle><a href=''><?php echo $LastName . ", " . $FirstName; ?></td>
                    <td width=20% class=tabletitle><?php echo $PositionLevel; ?></a></td>
                    <td width=15% class=tabletitle><?php echo $MajorCourse; ?></td>
                    <td width=15% class=tabletitle><?php echo $Location; ?></td>
                    <td width=15% class=tabletitle><?php echo $Email; ?></td>
                    <td width="5%" class="tabletitle">
                        <button class='btn btn-danger' data-toggle='modal'
                                data-target='#DeclineRequest<?php echo $RID; ?>'><i
                                class='fa fa-trash fa-1x'></i></button>
                    </td>
                <tr>
                </tbody>
                <?php
            }
            ?>
        </table>
    </div>
</div>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
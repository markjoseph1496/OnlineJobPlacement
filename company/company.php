<?php
include('../connection.php');
session_start();

if (isset($_SESSION['CompanyID'])) {
    $CompanyID = $_SESSION['CompanyID'];
} else {
    header("location: ../login-company.php");
}

$companyinfo_tbl =
    GSecureSQL::query(
        "SELECT CompanyName, FirstName, LastName FROM companyinfotbl WHERE CompanyID = ?",
        TRUE,
        "s",
        $CompanyID
    );
$CompanyName = $companyinfo_tbl[0][0];
$cFirstName = $companyinfo_tbl[0][1];
$cLastName = $companyinfo_tbl[0][2];


$Course_Default = isset($_POST['Course']) ? $_POST['Course'] : '';
$Location_Default = isset($_POST['Location']) ? $_POST['Location'] : '';


$LOGquery =
    GSecureSQL::query(
        "SELECT * FROM logrequesttbl WHERE CompanyID = ? AND Status = 'Accepted'",
        TRUE,
        "s",
        $CompanyID
    );
if (count($LOGquery) > 0) {

    $DateFrom = $LOGquery[0][3];
    $DateTo = $LOGquery[0][4];

    $diff_from = date_diff(new DateTime(), new DateTime($DateFrom));
    $diff_to = date_diff(new DateTime(), new DateTime($DateTo));

    if ($diff_to->d == 0) {
        $diff_to->invert = 0;
    }

    $a = $diff_from->y >= 0 &&
        $diff_from->m >= 0 &&
        $diff_from->d >= 0 &&
        $diff_from->invert == 1;

    $b = $diff_to->y >= 0 &&
        $diff_to->m >= 0 &&
        $diff_to->d >= 0 &&
        $diff_to->invert == 0;

    if ($a && $b) {
        $RequestedCourses = $LOGquery[0][2];
        $RequestedCourses = explode(", ", $RequestedCourses);
        $RequestedCourses = implode("', '", $RequestedCourses);
        $ContentCount = 1;
    } else {
        $ContentCount = 0;
    }

} else {
    $ContentCount = 0;
}

$LOGquery1 =
    GSecureSQL::query(
        "SELECT * FROM logrequesttbl WHERE CompanyID = ? AND Status = 'Pending'",
        TRUE,
        "s",
        $CompanyID
    );
if (count($LOGquery1) > 0) {
    $ContentCount = 2;
}
?>
<!doctype html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS | List of Graduates</title>

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
    <link rel="stylesheet" type="text/css" href="../../../fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="../../../fonts/ffonts/open-sans.css">

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

    <!-- Notification -->
    <link rel="stylesheet" href="../css/notif.css"/>

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

    <style type="text/css">
        .wrap {
            margin: 20px auto;
            display: block;
            width: 350px;
            height: 310px;
            padding: 30px;

            /* general */
            border: 1px solid;

            /* curved corners */
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px; /* standard version at last */

            /* drop shadows. */
            -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.45), 0px 1px 2px rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.45), 0px 1px 2px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.45), 0px 1px 2px rgba(0, 0, 0, 0.2); /* standard version at last */
        }

        /* ----------------------------------------------
        -- YELLOW BORDER
        ---------------------------------------------- */

        .yellow {
            /* general */
            border-color: #fed136;

            /* background color (for non css3 browsers) and gradient */
            background-color: #fed136;
            background: -moz-linear-gradient(top,
            #fff,
            #fff 50%,
            #fff
            );
            background: -webkit-gradient(linear, left top, left bottom,
            from(#fff),
            color-stop(0.5, #fff),
            to(#fff)
            );

            /* linear gradient for IE 5.5+ */
            filter: progid:DXImageTransform.Microsoft.gradient(StartColorStr='#FFFFFF', EndColorStr='#fff');

        }

    </style>
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
                    <div class="col-md-7">
                        <!-- Start Contact Info -->
                        <ul class="contact-details">
                            <li class="profile-name"><b><?php echo $CompanyName; ?></b></li>
                        </ul>
                        <!-- End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-5">
                        <!-- Start Social Links -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown icon-border" id="notificationLink">
                                <span id="notification_count">3</span>
                                <a href="#" class="bell itl-tooltip" data-placement="bottom" data-toggle="dropdown"><i
                                        class="fa fa-bell"></i></a>
                                <ul id="notificationContainer" class="dropdown-menu dropdown-menu-inverse">
                                    <li class="dropdown-header"><label>Notification</label></li>
                                    <li class="disabled"><a href="#" tabindex="-1">No new notification.</a></li>
                                    <li><a href="#" tabindex="-1">The administrator accepted your request.</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../notification/notification.php" tabindex="-1">See All</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-user"></b>
                                    Welcome, <b><?php echo $cFirstName . " " . $cLastName; ?> </b><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile <b class="fa fa-user" style="float:right;"></b></a></li>
                                    <li><a href="../settings/privacy-settings.php">Settings <b class="fa fa-cog"
                                                                                               style="float:right;"></b></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#" data-target='#Logout' data-toggle='modal'>Sign Out <b
                                                class="fa fa-sign-out" style="float:right;"></b></a></li>
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
                        <img src="../images/ojpms.png">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Modal -->
                    <div class="modal fade" id="Logout"
                         role="dialog">
                        <div class="modal-dialog" style="padding:100px">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button style=type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Log out?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-15 fieldcol">
                                        <label = "usr" class = "control-label">Do you want to log out?</label>
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="logout.php"
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
                            <a class="active" href="company.php">Home</a>
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
                            <a>Applicant List</a>
                            <ul class="dropdown">
                                <li><a href="company-pendingapplicants.php">Pending</a></li>
                                <li><a href="company-acceptedapplicants.php">Accepted</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
                <li>
                    <a class="active" href="company.php">Home</a>
                </li>
                <li>
                    <a>Position</a>
                    <ul class="dropdown">
                        <li><a href="company-positionlist.php" class="active">Position List</a></li>
                        <li><a href="company-createposition.php">Create Position</a></li>
                    </ul>
                </li>
                <li>
                    <a href="company-calendar.php">Calendar</a>
                </li>
                <li><a href="company-settings.php">Settings</a>
                </li>
                <li>
                    <a>Applicant List</a>
                    <ul class="dropdown">
                        <li><a href="company-pendingapplicants.php" class="active">Pending</a></li>
                        <li><a href="company-acceptedapplicants.php">Accepted</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End Header Logo & Naviagtion -->
    </header>
    <!-- Mobile Menu End -->

    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; center #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>List of Graduates</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <?php
    if ($ContentCount == 0) {
        ?>
        <!--Content-->
        <br><br><br>
        <div id="RequestLOG" class="container">
            <div class="wrap yellow ">
                <BR>
                <h4 style="text-align:center;"> You are not able to access the list of graduates. You may request it to
                    the administrator. </h4> <br>
                <button style="width: 290px;" class="btn-system btn-large border-btn" name="RequestLists"
                        data-toggle='modal'
                        data-target='#Request'>Request List of Graduates.
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Request"
                 role="dialog">
                <div class="modal-dialog" style="padding:100px">
                    <!-- Modal content-->
                    <form autocomplete="off" method="POST" action="add-company.php">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Do you want to request the List of Graduates?</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-15 fieldcol">
                                    <label = "usr" class = "control-label">Select the course(s) you want to
                                    request.</label>
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-15 fieldcol">
                                    <div class="container">
                                        <div class="form-group">
                                            <ul>
                                                <li><input type="checkbox" name="select-all" id="select-all"/> <label>
                                                        Select
                                                        All </label></li>
                                            </ul>
                                            <?php
                                            $coursequery =
                                                GSecureSQL::query(
                                                    "SELECT CourseCode FROM coursetbl ORDER BY CourseCode",
                                                    TRUE
                                                );
                                            foreach ($coursequery as $value) {
                                                $Courses = $value[0];
                                                ?>
                                                <ul>
                                                    <li><input type="checkbox" name="CourseCheckbox[]"
                                                               value="<?php echo $Courses; ?>">
                                                        <label><?php echo $Courses; ?></label></li>
                                                </ul>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary">Request</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

    <?php
    if ($ContentCount == 2) {
        ?>
        <div id="Requested" class="wrap yellow ">
            <h4 = "usr" class = "control-label">You have already requested the list of graduates. Please wait for the
            admin
            to approve your request.</h4>
        </div>

        <?php
    }
    ?>
    <?php
    if ($ContentCount == 1) {
        ?>
        <div id="Content" class="container">
            <form method="POST">
                <div class="header2_advertising">
                    <div class="container">
                        <div class="row field">
                            <br><br>
                            <div>
                                <b>Available Courses:</b>
                                <?php
                                $AvailableCourses = $LOGquery[0][2];
                                echo $AvailableCourses;
                                ?>
                            </div>
                            <div><b>Valid until:</b> <?php echo $DateTo; ?></div>
                            <br><br>
                            <div class="col-sm-5">
                                <div class="form-group text-center">
                                    <label>
                                        <center><b>Course</b>
                                    </label></center>
                                    <select id="Course" name="Course" class="form-control" style="width:400x;">
                                        <option value="" selected="selected">- Please select one -</option>
                                        <?php
                                        $course_tbl =
                                            GSecureSQL::query(
                                                "SELECT CourseTitle, CourseCode FROM coursetbl WHERE CourseCode IN ('$RequestedCourses') ORDER BY CourseTitle ASC",
                                                TRUE
                                            );
                                        foreach ($course_tbl as $value) {
                                            $CourseTitle = $value[0];
                                            $CourseCode = $value[1];
                                            ?>
                                            <option
                                                value="<?php echo $CourseCode; ?>" <?php if ($Course_Default == $CourseCode) {
                                                echo "selected='selected'";
                                            } ?>><?php echo $CourseTitle; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div> <!--col-sm-5-->
                            <div class="col-sm-5">
                                <div class="form-group text-center">
                                    <label>
                                        <center><b>Location</b>
                                    </label></center>
                                    <select id="Location" name="Location" class="form-control" style="width:420px;">
                                        <option value="" selected="selected">- Please select one -</option>
                                        <option value="Bulacan City" <?php if ($Location_Default == "Bulacan City") {
                                            echo "selected='selected'";
                                        } ?>>Bulacan City
                                        </option>
                                        <option value="Caloocan City"<?php if ($Location_Default == "Caloocan City") {
                                            echo "selected='selected'";
                                        } ?>>Caloocan City
                                        </option>
                                        <option value="Las Pińas City"<?php if ($Location_Default == "Las Pińas City") {
                                            echo "selected='selected'";
                                        } ?>>Las Pińas City
                                        </option>
                                        <option value="Makati City"<?php if ($Location_Default == "Makati City") {
                                            echo "selected='selected'";
                                        } ?>>Makati City
                                        </option>
                                        <option value="Malabon City"<?php if ($Location_Default == "Malabon City") {
                                            echo "selected='selected'";
                                        } ?>>Malabon City
                                        </option>
                                        <option
                                            value="Mandaluyong City"<?php if ($Location_Default == "Mandaluyong City") {
                                            echo "selected='selected'";
                                        } ?>>Mandaluyong City
                                        </option>
                                        <option value="Manila"<?php if ($Location_Default == "Manila") {
                                            echo "selected='selected'";
                                        } ?>>Manila
                                        </option>
                                        <option value="Marikina City"<?php if ($Location_Default == "Marikina City") {
                                            echo "selected='selected'";
                                        } ?>>Marikina City
                                        </option>
                                        <option
                                            value="Muntinlupa City"<?php if ($Location_Default == "Muntinlupa City") {
                                            echo "selected='selected'";
                                        } ?>>Muntinlupa City
                                        </option>
                                        <option value="Navotas City"<?php if ($Location_Default == "Navotas City") {
                                            echo "selected='selected'";
                                        } ?>>Navotas City
                                        </option>
                                        <option value="Parańaque City"<?php if ($Location_Default == "Parańaque City") {
                                            echo "selected='selected'";
                                        } ?>>Parańaque City
                                        </option>
                                        <option value="Pasay City"<?php if ($Location_Default == "Pasay City") {
                                            echo "selected='selected'";
                                        } ?>>Pasay City
                                        </option>
                                        <option value="Pasig City"<?php if ($Location_Default == "Pasig City") {
                                            echo "selected='selected'";
                                        } ?>>Pasig City
                                        </option>
                                        <option value="Pateros City"<?php if ($Location_Default == "Pateros City") {
                                            echo "selected='selected'";
                                        } ?>>Pateros City
                                        </option>
                                        <option value="Quezon City"<?php if ($Location_Default == "Quezon City") {
                                            echo "selected='selected'";
                                        } ?>>Quezon City
                                        </option>
                                        <option value="San Juan City"<?php if ($Location_Default == "San Juan City") {
                                            echo "selected='selected'";
                                        } ?>>San Juan City
                                        </option>
                                        <option value="Taguig City"<?php if ($Location_Default == "Taguig City") {
                                            echo "selected='selected'";
                                        } ?>>Taguig City
                                        </option>
                                        <option
                                            value="Valenzuela City"<?php if ($Location_Default == "Valenzuela City") {
                                            echo "selected='selected'";
                                        } ?>>Valenzuela City
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn-system btn-large border-btn" name="btnView"
                                        style="margin-top: 20px;">View
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--table-->
                <table class="table segment table-hover">
                    <thead>
                    <tr>
                    </tr>
                    <tr>
                        <th width='20%' class='tabletitle'>Student Name</th>
                        <th width='10%' class='tabletitle'>Course</th>
                        <th width='20%' class='tabletitle'>Contact No.</th>
                        <th width='25%' class='tabletitle'>Email</th>
                        <th width='20%' class='tabletitle'>Location</th>
                    <tr>
                    </thead>
                    <?php
                    if (isset($_POST['btnView'])) {
                        $isEmpty = 0;
                        $Course = $_POST['Course'];
                        $Location = $_POST['Location'];

                        if (empty($Course) && empty($Location)) {
                            $listofgraduates_tbl =
                                GSecureSQL::query(
                                    "SELECT
                                    studentinfotbl.StudentID,
                                    studentinfotbl.FirstName,
                                    studentinfotbl.LastName,
                                    studentinfotbl.MajorCourse,
                                    studcontactstbl.Email,
                                    studcontactstbl.MobileNumber,
                                    studcontactstbl.City
                                    FROM
                                    studcontactstbl
                                    INNER JOIN `studentinfotbl` ON `studcontactstbl`.`StudentID` = `studentinfotbl`.`StudentID` WHERE studentinfotbl.MajorCourse IN ('$RequestedCourses')",
                                    TRUE
                                );
                            if (empty($listofgraduates_tbl)) {
                                $isEmpty = 1;
                            }
                        } elseif (empty($Course)) {
                            $listofgraduates_tbl =
                                GSecureSQL::query(
                                    "SELECT
                                    studentinfotbl.StudentID,
                                    studentinfotbl.FirstName,
                                    studentinfotbl.LastName,
                                    studentinfotbl.MajorCourse,
                                    studcontactstbl.Email,
                                    studcontactstbl.MobileNumber,
                                    studcontactstbl.City
                                    FROM
                                    studcontactstbl
                                    INNER JOIN `studentinfotbl` ON `studcontactstbl`.`StudentID` = `studentinfotbl`.`StudentID` WHERE studcontactstbl.City = ? AND studentinfotbl.MajorCourse IN ('$RequestedCourses')",
                                    TRUE,
                                    "s",
                                    $Location
                                );
                            if (empty($listofgraduates_tbl)) {
                                $isEmpty = 1;
                            }
                        } elseif (empty($Location)) {
                            $listofgraduates_tbl =
                                GSecureSQL::query(
                                    "SELECT
                                    studentinfotbl.StudentID,
                                    studentinfotbl.FirstName,
                                    studentinfotbl.LastName,
                                    studentinfotbl.MajorCourse,
                                    studcontactstbl.Email,
                                    studcontactstbl.MobileNumber,
                                    studcontactstbl.City
                                    FROM
                                    studcontactstbl
                                    INNER JOIN `studentinfotbl` ON `studcontactstbl`.`StudentID` = `studentinfotbl`.`StudentID` WHERE studentinfotbl.MajorCourse = ?",
                                    TRUE,
                                    "s",
                                    $Course
                                );
                            if (empty($listofgraduates_tbl)) {
                                $isEmpty = 1;
                            }
                        } else {
                            $listofgraduates_tbl =
                                GSecureSQL::query(
                                    "SELECT
                                    studentinfotbl.StudentID,
                                    studentinfotbl.FirstName,
                                    studentinfotbl.LastName,
                                    studentinfotbl.MajorCourse,
                                    studcontactstbl.Email,
                                    studcontactstbl.MobileNumber,
                                    studcontactstbl.City
                                    FROM
                                    studcontactstbl
                                    INNER JOIN `studentinfotbl` ON `studcontactstbl`.`StudentID` = `studentinfotbl`.`StudentID` WHERE studentinfotbl.MajorCourse = ? AND studcontactstbl.City = ?",
                                    TRUE,
                                    "ss",
                                    $Course,
                                    $Location
                                );
                            if (empty($listofgraduates_tbl)) {
                                $isEmpty = 1;
                            }
                        }
                        if ($isEmpty == 1) {
                            echo '
                            <tbody>
                                <tr>
                                    <td width="20%" class="tabletitle">No results found.</td>
                                    <td width="10%" class="tabletitle"></td>
                                    <td width="20%" class="tabletitle"></td>
                                    <td width="25%" class="tabletitle"></td>
                                    <td width="20%" class="tabletitle"></td>
                                </tr>
                            </tbody>
                                ';
                        } else {
                            foreach ($listofgraduates_tbl as $value) {
                                $StudentID = $value[0];
                                $FirstName = $value[1];
                                $LastName = $value[2];
                                $_Course = $value[3];
                                $Email = $value[4];
                                $MobileNumber = $value[5];
                                $_Location = $value[6];
                                ?>
                                <tbody>
                                <tr>
                                    <td width='20%' class='tabletitle'><?php echo $LastName . ", " . $FirstName; ?></td>
                                    <td width='10%' class='tabletitle'><?php echo $_Course; ?></td>
                                    <td width='20%' class='tabletitle'><?php echo $MobileNumber; ?></td>
                                    <td width='25%' class='tabletitle'><?php echo $Email; ?></td>
                                    <td width='20%' class='tabletitle'><?php echo $_Location; ?></td>
                                </tr>
                                </tbody>
                                <?php
                            }
                        }
                    }else{
                        $isEmpty = 0;
                        $listofgraduates_tbl =
                            GSecureSQL::query(
                                "SELECT
                                    studentinfotbl.StudentID,
                                    studentinfotbl.FirstName,
                                    studentinfotbl.LastName,
                                    studentinfotbl.MajorCourse,
                                    studcontactstbl.Email,
                                    studcontactstbl.MobileNumber,
                                    studcontactstbl.City
                                    FROM
                                    studcontactstbl
                                    INNER JOIN `studentinfotbl` ON `studcontactstbl`.`StudentID` = `studentinfotbl`.`StudentID` WHERE studentinfotbl.MajorCourse IN ('$RequestedCourses')",
                                TRUE
                            );
                        if (empty($listofgraduates_tbl)) {
                            $isEmpty = 1;
                        }
                        if ($isEmpty == 1) {
                            echo '
                            <tbody>
                                <tr>
                                    <td width="20%" class="tabletitle">No results found.</td>
                                    <td width="10%" class="tabletitle"></td>
                                    <td width="20%" class="tabletitle"></td>
                                    <td width="25%" class="tabletitle"></td>
                                    <td width="20%" class="tabletitle"></td>
                                </tr>
                            </tbody>
                                ';
                        } else {
                            foreach ($listofgraduates_tbl as $value) {
                                $StudentID = $value[0];
                                $FirstName = $value[1];
                                $LastName = $value[2];
                                $_Course = $value[3];
                                $Email = $value[4];
                                $MobileNumber = $value[5];
                                $_Location = $value[6];
                                ?>
                                <tbody>
                                <tr>
                                    <td width='20%' class='tabletitle'><?php echo $LastName . ", " . $FirstName; ?></td>
                                    <td width='10%' class='tabletitle'><?php echo $_Course; ?></td>
                                    <td width='20%' class='tabletitle'><?php echo $MobileNumber; ?></td>
                                    <td width='25%' class='tabletitle'><?php echo $Email; ?></td>
                                    <td width='20%' class='tabletitle'><?php echo $_Location; ?></td>
                                </tr>
                                </tbody>
                                <?php
                            }
                        }
                    }
                    ?>
                </table>
            </form>
        </div>
        <?php
    }
    ?>
</div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>

<script type="text/javascript">
    var ContentValue = "<?php echo $ContentCount; ?>";
    if (ContentValue == "1") {
        $('#Requested').hide();
        $('#RequestLOG').hide();
        $('#Content').show();
    } else if (ContentValue == "2") {
        $('#Requested').show();
        $('#RequestLOG').hide();
        $('#Content').hide();
    } else {
        $('#Requested').hide();
        $('#RequestLOG').show();
        $('#Content').hide();
    }

    $('#select-all').click(function (event) {
        if (this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function () {
                this.checked = true;
            });
        } else {
            $(':checkbox').each(function () {
                this.checked = false;
            });
        }
    });
</script>
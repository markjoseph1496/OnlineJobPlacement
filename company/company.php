<?php
include('../connection.php');
session_start();

$b = 0;
$Course_Default = isset($_POST['Course']) ? $_POST['Course'] : '';
$Specialization_Default = isset($_POST['Specialization']) ? $_POST['Specialization'] : '';
if (isset($_POST['btnView'])) {
    $b = 1;
}
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
                            <a href="company-applicants.php">Applicant List</a>
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
                    <a href="company-applicants.php">Applicant List</a>
                    <ul class="dropdown">
                        <li><a href="company-pendingapplicants.php">Pending</a></li>
                        <li><a href="company-acceptedapplicants.php">Accepted</a></li>
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
                <h2>List of Graduates</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->
<!--Content-->
<br><br><br>
<div class="container">
    <form method="POST">

        <div class="header2_advertising">
            <div class="container">
                <div class="row field">
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
                                        "SELECT CourseTitle, CourseCode FROM coursetbl ORDER BY CourseTitle ASC",
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
                                <center><b>Field of Specialization</b>
                            </label></center>
                            <select id="Specialization" name="Specialization" class="form-control" style="width:420px;">
                                <option value="" selected="selected">- Please select one -</option>
                                <?php
                                $specialization_tbl =
                                    GSecureSQL::query(
                                        "SELECT Specialization FROM listofspecializationtbl ORDER BY Specialization ASC",
                                        TRUE
                                    );
                                foreach ($specialization_tbl as $value) {
                                $Specialization = $value[0];
                                ?>
                                <option
                                    value="<?php echo $Specialization; ?>" <?php if ($Specialization_Default == $Specialization) {
                                echo "selected='selected'"; }?>><?php echo $Specialization; ?></option>
                            <?php
                            }
                            ?>
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
                <th width="3%" class='tabletitle'><input type="checkbox" id="select"/></th>
                <th width='20%' class='tabletitle'> Student Name</th>
                <th width='25%' class='tabletitle'>Course</th>
                <th width='25%' class='tabletitle'> Field of Specialization</th>
                <th width="5%" class='tabletitle'>Years of experience</th>
                <th width='3%' class='tabletitle'></th>
            <tr>
            </thead>
            <?php
            if (isset($_POST['btnView'])) {
                $isEmpty = 0;
                $Course = $_POST['Course'];
                $Specialization = $_POST['Specialization'];

                if (empty($Course) && empty($Specialization)) {
                    $isEmpty = 1;
                } elseif (empty($Course)) {
                    $listofgraduates_tbl =
                        GSecureSQL::query(
                            "SELECT
                            studentinfotbl.StudentID,
                            studentinfotbl.FirstName,
                            studentinfotbl.LastName,
                            studentinfotbl.MajorCourse,
                            specializationtbl.Specialization
                            FROM
                            `specializationtbl`
                            INNER JOIN `studentinfotbl` ON `specializationtbl`.`StudentID` = `studentinfotbl`.`StudentID` WHERE specializationtbl.Specialization = ?",
                            TRUE,
                            "s",
                            $Specialization
                        );
                    if (empty($listofgraduates_tbl)) {
                        $isEmpty = 1;
                    }
                } elseif (empty($Specialization)) {
                    $listofgraduates_tbl =
                        GSecureSQL::query(
                            "SELECT
                            studentinfotbl.StudentID,
                            studentinfotbl.FirstName,
                            studentinfotbl.LastName,
                            studentinfotbl.MajorCourse,
                            specializationtbl.Specialization
                            FROM
                            `specializationtbl`
                            INNER JOIN `studentinfotbl` ON `specializationtbl`.`StudentID` = `studentinfotbl`.`StudentID` WHERE studentinfotbl.MajorCourse = ?",
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
                            specializationtbl.Specialization
                            FROM
                            `specializationtbl`
                            INNER JOIN `studentinfotbl` ON `specializationtbl`.`StudentID` = `studentinfotbl`.`StudentID` WHERE studentinfotbl.MajorCourse = ? AND specializationtbl.Specialization = ?",
                            TRUE,
                            "ss",
                            $Course,
                            $Specialization
                        );
                    if (empty($listofgraduates_tbl)) {
                        $isEmpty = 1;
                    }
                }
                if ($isEmpty == 1) {
                    echo '
                    <tbody>
                        <tr>
                            <td width="3%"></td>
                            <td width="20%">No results found.</td>
                            <td width="25%"></td>
                            <td width="25%"></td>
                            <td width="5%"></td>
                            <td width="3%"></td>
                        </tr>
                    </tbody>
                        ';
                } else {
                    foreach ($listofgraduates_tbl as $value) {
                        $StudentID = $value[0];
                        $FirstName = $value[1];
                        $LastName = $value[2];
                        $_Course = $value[3];
                        $_Specialization = $value[4];
                        ?>
                        <tbody>
                        <tr>
                            <td width="3%"><input type="checkbox" id="select"/></td>
                            <td width="20%"><?php echo $LastName . ", " . $FirstName; ?></td>
                            <td width="25%"><?php echo $_Course; ?></td>
                            <td width="25%"> <?php echo $_Specialization; ?></td>
                            <td width="5%"> 1</td>
                            <td width="3%">
                                <input type="hidden" name="company_id" value="$company_id"/>
                                <input type="hidden" name="studentid" value=" $studentid"/>
                                <button id="Edit" name="requestresume" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-right"></i></button>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                    }
                }

            }
            ?>
        </table>
</div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
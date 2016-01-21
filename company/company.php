<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];

$b = 0;
$Course_Default = isset($_POST['Course']) ? $_POST['Course'] : '';
$Location_Default = isset($_POST['Location']) ? $_POST['Location'] : '';
if (isset($_POST['btnView'])) {
    $b = 1;
}

$LOGquery =
    GSecureSQL::query(
        "SELECT * FROM logrequesttbl WHERE CompanyID = ?",
        TRUE,
        "s",
        $CompanyID
    );
$RequestedCourses = $LOGquery[0][2];
$RequestedCourses = explode(",",$RequestedCourses);
$RequestedCourses = implode("', '",$RequestedCourses);
print_r($RequestedCourses);
if (count($LOGquery) == 0) {
    $ContentCount = 0;
} else {
    $ContentCount = 1;
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
<div id="RequestLOG" class="container">
    <button name="RequestLists" data-toggle='modal'
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
                        <label = "usr" class = "control-label">Select the course(s) you want to request.</label>
                        <div class="form-group">
                        </div>
                    </div>
                    <div class="col-md-15 fieldcol">
                        <div class="container">
                            <div class="form-group">
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
                        <button
                        "
                        class="btn btn-primary">Request</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="Content" class="container">
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
                                <option value="Bulacan City" <?php if ($Location_Default == "Bulacan City") {echo "selected='selected'";} ?>>Bulacan City</option>
                                <option value="Caloocan City"<?php if ($Location_Default == "Caloocan City") {echo "selected='selected'";} ?>>Caloocan City</option>
                                <option value="Las Pińas City"<?php if ($Location_Default == "Las Pińas City") {echo "selected='selected'";} ?>>Las Pińas City</option>
                                <option value="Makati City"<?php if ($Location_Default == "Makati City") {echo "selected='selected'";} ?>>Makati City</option>
                                <option value="Malabon City"<?php if ($Location_Default == "Malabon City") {echo "selected='selected'";} ?>>Malabon City</option>
                                <option value="Mandaluyong City"<?php if ($Location_Default == "Mandaluyong City") {echo "selected='selected'";} ?>>Mandaluyong City</option>
                                <option value="Manila"<?php if ($Location_Default == "Manila") {echo "selected='selected'";} ?>>Manila</option>
                                <option value="Marikina City"<?php if ($Location_Default == "Marikina City") {echo "selected='selected'";} ?>>Marikina City</option>
                                <option value="Muntinlupa City"<?php if ($Location_Default == "Muntinlupa City") {echo "selected='selected'";} ?>>Muntinlupa City</option>
                                <option value="Navotas City"<?php if ($Location_Default == "Navotas City") {echo "selected='selected'";} ?>>Navotas City</option>
                                <option value="Parańaque City"<?php if ($Location_Default == "Parańaque City") {echo "selected='selected'";} ?>>Parańaque City</option>
                                <option value="Pasay City"<?php if ($Location_Default == "Pasay City") {echo "selected='selected'";} ?>>Pasay City</option>
                                <option value="Pasig City"<?php if ($Location_Default == "Pasig City") {echo "selected='selected'";} ?>>Pasig City</option>
                                <option value="Pateros City"<?php if ($Location_Default == "Pateros City") {echo "selected='selected'";} ?>>Pateros City</option>
                                <option value="Quezon City"<?php if ($Location_Default == "Quezon City") {echo "selected='selected'";} ?>>Quezon City</option>
                                <option value="San Juan City"<?php if ($Location_Default == "San Juan City") {echo "selected='selected'";} ?>>San Juan City</option>
                                <option value="Taguig City"<?php if ($Location_Default == "Taguig City") {echo "selected='selected'";} ?>>Taguig City</option>
                                <option value="Valenzuela City"<?php if ($Location_Default == "Valenzuela City") {echo "selected='selected'";} ?>>Valenzuela City</option>
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
                    $isEmpty = 1;
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
                            INNER JOIN `studentinfotbl` ON `studcontactstbl`.`StudentID` = `studentinfotbl`.`StudentID` WHERE studcontactstbl.City = ?",
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
            }
            ?>
        </table>
    </form>
</div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
<script type="text/javascript">
    var ContentValue = "<?php echo $ContentCount; ?>";
    if (ContentValue == "1") {
        $('#RequestLOG').hide();
        $('#Content').show();
    } else {
        $('#RequestLOG').show();
        $('#Content').hide();
    }
</script>
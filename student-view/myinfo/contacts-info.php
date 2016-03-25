<?php
include('../../connection.php');
session_start();
include('../../common-functions.php');
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID']; // to conform with your coding style -- ghabx

$hashStudentID = hash('md4', $StudentID);

$student_tbl =
    GSecureSQL::query(
        "SELECT * FROM studcontactstbl WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );
$Email = $student_tbl[0][2];
$Address = $student_tbl[0][3];
$MobileNumber = $student_tbl[0][4];
$Region = $student_tbl[0][5];
$HomeNumber = $student_tbl[0][6];
$PostalCode = $student_tbl[0][7];
$WorkNumber = $student_tbl[0][8];
$City = $student_tbl[0][9];

$infoquery =
    GSecureSQL::query(
        "SELECT FirstName, LastName, MajorCourse FROM studentinfotbl WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );

$FirstName = $infoquery[0][0];
$LastName = $infoquery[0][1];
$MajorCourse = $infoquery[0][2];
$StudentName = $FirstName . " " . $LastName;

$course_qry =
    GSecureSQL::query(
        "SELECT CourseTitle FROM coursetbl WHERE CourseCode = ?",
        TRUE,
        "s",
        $MajorCourse
    );
$MajorCourse = $course_qry[0][0];

$progress_tbl =
    GSecureSQL::query(
        "SELECT
        Pinfo,
        Cinfo,
        Objective,
        WorkXP,
        School,
        Seminar,
        Certification,
        Achievements,
        Specialization,
        Languages,
        _References
        FROM progresstbl
        WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );

$nPinfo = "*";
$nCinfo = "*";
$nObjective = "*";
$nWorkXP = "*";
$nSchool = "*";
$nSeminar = "*";
$nCertification = "*";
$nAchievements = "*";
$nSpecialization = "*";
$nLanguages = "*";
$nReferences = "*";

$Progress = 10;
$Pinfo = $progress_tbl[0][0];
$Cinfo = $progress_tbl[0][1];
$Objective = $progress_tbl[0][2];
$WorkXP = $progress_tbl[0][3];
$School = $progress_tbl[0][4];
$Seminar = $progress_tbl[0][5];
$Certification = $progress_tbl[0][6];
$Achievements = $progress_tbl[0][7];
$Specialization = $progress_tbl[0][8];
$Languages = $progress_tbl[0][9];
$References = $progress_tbl[0][10];

if ($Pinfo == "ok") {
    $Progress = $Progress + 10;
    $nPinfo = "";
}
if ($Cinfo == "ok") {
    $Progress = $Progress + 10;
    $nCinfo = "";
}
if ($Objective == "ok") {
    $Progress = $Progress + 15;
    $nWorkXP = "";
}
if ($School == "ok") {
    $Progress = $Progress + 5;
    $nSchool = "";
}
if ($Seminar == "ok") {
    $Progress = $Progress + 5;
    $nSeminar = "";
}
if ($Certification == "ok") {
    $Progress = $Progress + 10;
    $nCertification = "";
}
if ($Achievements == "ok") {
    $Progress = $Progress + 10;
    $nAchievements = "";
}
if ($Specialization == "ok") {
    $Progress = $Progress + 10;
    if ($Languages == "ok" && $Specialization == "ok") {
        $nSpecialization = "";
    }
}
if ($Languages == "ok") {
    $Progress = $Progress + 5;
    if ($Languages == "ok" && $Specialization == "ok") {
        $nSpecialization = "";
    }

}
if ($References == "ok") {
    $Progress = $Progress + 10;
    $nReferences = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS | Contacts Info</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="OJPMS">

    <link rel="shortcut icon" href="../../images/logo/favicon.ico">

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
    <link rel="stylesheet" type="text/css" href="../../fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/ffonts/open-sans.css">

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
<form id="Save" name="Save" autocomplete="off" action="addfunction.php">
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
                                <li>Course: </i> <b><?php echo $MajorCourse; ?></b></li>
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b
                                            class="fa fa-user"></b> Welcome, <b><?php echo $StudentName; ?> </b><b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="../../student-profile.php?id=<?php echo $hashStudentID; ?>">Profile
                                                <b class="fa fa-user" style="float:right;"></b></a></li>
                                        <li><a href="../settings/settings.php">Settings <b class="fa fa-cog"
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

            <!-- Modal -->
            <div class="modal fade" id="Logout" role="dialog">
                <div class="modal-dialog" style="padding:100px">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Sign Out</h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-15 fieldcol">
                                <label>Do you want to sign out?</label>
                            </div>
                            <div class="modal-footer">
                                <a href="../logout.php"
                                   class="btn btn-primary">Sign Out</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand">
                            <img src="../../images/ojpms.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="personal-info.php">My Info</a>
                                <ul class="dropdown">
                                    <li><a href="personal-info.php"><?php echo $nPinfo; ?> Personal Info</a></li>
                                    <li><a class="active" href="contacts-info.php"><?php echo $nCinfo; ?> Contacts
                                            Info</a></li>
                                    <li><a href="work.php"><?php echo $nWorkXP; ?> Work</a></li>
                                    <li><a href="education.php"><?php echo $nSchool; ?> Education</a></li>
                                    <li><a href="certifications.php"><?php echo $nCertification; ?> Certifications</a>
                                    </li>
                                    <li><a href="achievements.php"><?php echo $nAchievements; ?> Achievements</a></li>
                                    <li><a href="skills-and-languages.php"><?php echo $nSpecialization; ?> Skills &
                                            Languages</a></li>
                                    <li><a href="references.php"><?php echo $nReferences; ?> References</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../resume/print.php">Print</a>
                            </li>
                            <li>
                                <a href="../applications/applications.php">Applications</a>
                            </li>
                            <li>
                                <a href="../search-job/jobs.php">Jobs</a>
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
                            <li><a href="personal-info.php"><?php echo $nPinfo; ?> Personal Info</a></li>
                            <li><a class="active" href="contacts-info.php"><?php echo $nCinfo; ?> Contacts Info</a></li>
                            <li><a href="work.php"><?php echo $nWorkXP ?> Work</a></li>
                            <li><a href="education.php"><?php echo $nSchool; ?> Education</a></li>
                            <li><a href="certifications.php"><?php echo $nCertification; ?> Certifications</a></li>
                            <li><a href="achievements.php"><?php echo $nAchievements; ?> Achievements</a></li>
                            <li><a href="skills-and-languages.php"><?php echo $nSpecialization; ?> Skills &
                                    Languages</a></li>
                            <li><a href="references.php"><?php echo $nReferences; ?> References</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../resume/resume.php">Resumé</a>
                        <ul class="dropdown">
                            <li><a href="../resume/resume.php">Resumé</a></li>
                            <li><a href="../resume/background.php">Background</a></li>
                            <li><a href="../resume/print.php">Print</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../applications/applications.php">Applications</a>
                    </li>
                    <li>
                        <a href="../search-job/jobs.php">Jobs</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

        <div class="page-banner no-subtitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Contacts Information</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->


        <!-- Start Content -->
        <div id="content">
            <div class="container">

                <?php
                if (isset($_GET['saved'])) {
                    echo '
                        <div class="alert alert-success fade in" id="success-alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong><span class="fa fa-info-circle"></span> Contact information successfully updated.</strong>
                        </div>
                        ';
                }
                if (isset($_GET['error'])) {
                    echo '
                        <div class="alert alert-danger fade in" id="danger-alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong><span class="fa fa-warning"></span> Some errors occured, Please try again.</strong>
                        </div>
                        ';
                }
                ?>

                <script type="text/javascript">
                    $("#success-alert").fadeTo(5000, 500).slideUp(500, function(){
                        $("#success-alert").alert('close');
                    });
                </script>

                <label><span class="fa fa-check-circle"></span> Your information progress..</label>
                <div class="skill-shortcode">
                    <div class="skill">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="<?php echo $Progress; ?>"
                                 style="width: <?php echo $Progress; ?>%;">
                                <span class="progress-bar-span"><?php echo $Progress; ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row sidebar-page">
                    <!-- Page Content -->
                    <div class="col-md-9 page-content">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Single Testimonial -->
                                <div class="call-action call-action-boxed call-action-style1 clearfix">
                                    <div class="form-group">
                                        <label>Email <span>(*)</span></label>
                                        <input type="email" class="form-control" id="Email" name="Email"
                                               value="<?php echo $Email; ?>" maxlength="50">
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile Number <span>(*)</span></label>
                                        <input type="text" class="form-control" id="MobileNumber" name="MobileNumber"
                                               value="<?php echo $MobileNumber; ?>" maxlength="11">
                                    </div>
                                    <div class="form-group">
                                        <label>Home Number</label>
                                        <input type="text" class="form-control" id="HomeNumber" name="HomeNumber"
                                               value="<?php echo $HomeNumber; ?>" maxlength="11">
                                    </div>
                                    <div class="form-group">
                                        <label>Work Number</label>
                                        <input type="text" class="form-control" id="WorkNumber" name="WorkNumber"
                                               value="<?php echo $WorkNumber; ?>" maxlength="11">
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Testimonial -->
                                <div class="call-action call-action-boxed call-action-style1 clearfix">
                                    <div class="form-group">
                                        <label>Address <span>(*)</span></label>
                                        <input type="text" class="form-control" id="Address" name="Address"
                                               value="<?php echo $Address; ?>" maxlength="60">
                                    </div>
                                    <div class="form-group">
                                        <label>City <span>(*)</span></label>
                                        <select id="City" name="City" class="form-control"
                                                style="width:100%; height:34px;">
                                            <option value="" <?php if ($City == "") echo 'selected="selected"'; ?>>-
                                                Please select one -
                                            </option>
                                            <option
                                                value="Caloocan City" <?php if ($City == "Caloocan City") echo 'selected="selected"'; ?>>
                                                Caloocan City
                                            </option>
                                            <option
                                                value="Las Piñas City" <?php if ($City == "Las Piñas City") echo 'selected="selected"'; ?>>
                                                Las Piñas City
                                            </option>
                                            <option
                                                value="Makati City" <?php if ($City == "Makati City") echo 'selected="selected"'; ?>>
                                                Makati City
                                            </option>
                                            <option
                                                value="Malabon City" <?php if ($City == "Malabon City") echo 'selected="selected"'; ?>>
                                                Malabon City
                                            </option>
                                            <option
                                                value="Mandaluyong City" <?php if ($City == "Mandaluyong City") echo 'selected="selected"'; ?>>
                                                Mandaluyong City
                                            </option>
                                            <option
                                                value="Manila" <?php if ($City == "Manila") echo 'selected="selected"'; ?>>
                                                Manila
                                            </option>
                                            <option
                                                value="Marikina City" <?php if ($City == "Marikina City") echo 'selected="selected"'; ?>>
                                                Marikina City
                                            </option>
                                            <option
                                                value="Muntinlupa City" <?php if ($City == "Muntinlupa City") echo 'selected="selected"'; ?>>
                                                Muntinlupa City
                                            </option>
                                            <option
                                                value="Navotas City" <?php if ($City == "Navotas City") echo 'selected="selected"'; ?>>
                                                Navotas City
                                            </option>
                                            <option
                                                value="Parañaque City" <?php if ($City == "Parañaque City") echo 'selected="selected"'; ?>>
                                                Parañaque City
                                            </option>
                                            <option
                                                value="Pasay City" <?php if ($City == "Pasay City") echo 'selected="selected"'; ?>>
                                                Pasay City
                                            </option>
                                            <option
                                                value="Pasig City" <?php if ($City == "Pasig City") echo 'selected="selected"'; ?>>
                                                Pasig City
                                            </option>
                                            <option
                                                value="Pateros" <?php if ($City == "Pateros") echo 'selected="selected"'; ?>>
                                                Pateros
                                            </option>
                                            <option
                                                value="Quezon City" <?php if ($City == "Quezon City") echo 'selected="selected"'; ?>>
                                                Quezon City
                                            </option>
                                            <option
                                                value="San Juan City" <?php if ($City == "San Juan City") echo 'selected="selected"'; ?>>
                                                San Juan City
                                            </option>
                                            <option
                                                value="Taguig City" <?php if ($City == "Taguig City") echo 'selected="selected"'; ?>>
                                                Taguig City
                                            </option>
                                            <option
                                                value="Valenzuela City" <?php if ($City == "Valenzuela City") echo 'selected="selected"'; ?>>
                                                Valenzuela City
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control" id="PostalCode" name="PostalCode"
                                               value="<?php echo $PostalCode; ?>" maxlength="11">
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
                            <label><span>(*)</span> Note: Required fields.</label>
                        </div>
                    </div>
                    <!--End sidebar-->
                </div>
                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                <div class="field">
                    <div class="text-center">
                        <button type="submit" class="btn-system btn-large" name="btnSaveContactInfo" id="btnsave">Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Content -->
<script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $("#Save").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                Email: {
                    validators: {
                        notEmpty: {
                            message: "Email is required."
                        }
                    }
                },
                MobileNumber: {
                    validators: {
                        notEmpty: {
                            message: "Mobile Number is required."
                        },
                        regexp: {
                            regexp: /^(0(9(05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|32|33|34|35|36|37|38|39|42|43|46|47|48|49|75|77|89|94|96|97|98)[0-9]{7}|[0-8][0-9]{5})|[1-9][0-9]{6})$/,
                            message: "Invalid mobile number"
                        }
                    }
                },
                HomeNumber: {
                    validators: {
                        regexp: {
                            regexp: /(^(0(9(05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|32|33|34|35|36|37|38|39|42|43|46|47|48|49|75|77|89|94|96|97|98)[0-9]{7}|[0-8][0-9]{5})|[1-9][0-9]{6})$|^$)/,
                            message: "Invalid home number"
                        }
                    }
                },
                WorkNumber: {
                    validators: {
                        regexp: {
                            regexp: /(^(0(9(05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|32|33|34|35|36|37|38|39|42|43|46|47|48|49|75|77|89|94|96|97|98)[0-9]{7}|[0-8][0-9]{5})|[1-9][0-9]{6})$|^$)/,
                            message: "Invalid work number"
                        }
                    }
                },
                Address: {
                    validators: {
                        notEmpty: {
                            message: "Address is required."
                        }
                    }
                },
                City: {
                    validators: {
                        notEmpty: {
                            message: "City is required."
                        }
                    }
                },
                PostalCode: {
                    validators: {
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: "Postal Code can consist of numeric characters only."
                        }
                    }
                }
            }
        });
    });
</script>
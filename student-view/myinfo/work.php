<?php
include('../../connection.php');
session_start();
include('../../common-functions.php');
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID']; // to conform with your coding style -- ghabx

$hashStudentID = hash('md4', $StudentID);

if (isset($_SESSION['StudentID'])) {
    $StudentID = $_SESSION['StudentID'];
} else {
    header("location: ../../login-student.php");
}

$infoquery =
    GSecureSQL::query(
        "SELECT FirstName, LastName, MajorCourse, Objectives FROM studentinfotbl WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );

$FirstName = $infoquery[0][0];
$LastName = $infoquery[0][1];
$MajorCourse = $infoquery[0][2];
$StudentName = $FirstName . " " . $LastName;
$Objectives = $infoquery[0][3];

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
<!doctype html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS | Work</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content=" - Responsive HTML5 Template">

    <link rel="shortcut icon" href="../../images/logo/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../../css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

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

    <!-- Checkbox -->
    <link rel="stylesheet" type="text/css" href="../../css/checkbox.css" media="screen"/>

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
                                        class="fa fa-user"></b>
                                    Welcome, <b><?php echo $StudentName; ?> </b><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../../student-profile.php?id=<?php echo $hashStudentID; ?>">Profile <b class="fa fa-user" style="float:right;"></b></a></li>
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
                                <li><a href="contacts-info.php"><?php echo $nCinfo; ?> Contacts Info</a></li>
                                <li><a class="active" href="work.php"><?php echo $nWorkXP; ?> Work</a></li>
                                <li><a href="education.php"><?php echo $nSchool; ?> Education</a></li>
                                <li><a href="certifications.php"><?php echo $nCertification; ?> Certifications</a></li>
                                <li><a href="achievements.php"><?php echo $nAchievements; ?> Achievements</a></li>
                                <li><a href="skills-and-languages.php"><?php echo $nSpecialization; ?> Skills & Languages</a></li>
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
                        <li><a href="personal-info.php">Personal Info</a></li>
                        <li><a href="contacts-info.php">Contacts Info</a></li>
                        <li><a class="active" href="work.php">Work</a></li>
                        <li><a href="education.php">Education</a></li>
                        <li><a href="certifications.php">Certifications</a></li>
                        <li><a href="achievements.php">Achievements</a></li>
                        <li><a href="skills-and-languages.php">Skills & Languages</a></li>
                        <li><a href="references.php">References</a></li>
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
                    <h2>Work</h2>
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
                            <strong><span class="fa fa-info-circle"></span> Information successfully updated.</strong>
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
                $("#success-alert").fadeTo(5000, 500).slideUp(500, function () {
                    $("#success-alert").alert('close');
                });
            </script>
            <label><span class="fa fa-check-circle"></span> Your information progress..</label>
            <div class="skill-shortcode">
                <div class="skill">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-percentage="<?php echo $Progress; ?>" style="width: <?php echo $Progress; ?>%;">
                            <span class="progress-bar-span"><?php echo $Progress; ?>%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sidebar-page">
                <!-- Page Content -->
                <form method="POST" action="addfunction.php" autocomplete="off">
                    <div class="col-md-9 page-content">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Single Testimonial -->
                                <div class="classic-testimonials">
                                    <div class="testimonial-content">
                                        <label>Objectives <span>(*)</span></label>
                                        <textarea class="form-control" id="Objective" name="Objective" rows="7" maxlength="300" required><?php echo htmlspecialchars($Objectives); ?></textarea>
                                        <div id="textarea_feedback"></div>
                                    </div>
                                    <div class="testimonial-author">
                                        <button type="submit" class="btn-system btn-large" name="btnSave" style="float:right;">Save</button>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End Page Content -->

                <!--Sidebar-->
                <div class="col-md-3 sidebar right-sidebar">
                    <!-- Search Widget -->
                    <div class="call-action call-action-boxed call-action-style2 clearfix">
                        <label><span>TIP:</span> A resume <span class="accent-color">objective</span> is a short, targeted statement that clearly outlines your career direction while simultaneously positioning you as someone who fits what the employer is looking for exactly. Your objective is
                            carefully researched and tailored to fit the job you’re applying for. <em>--theinterviewguys.com</em></label>
                    </div>
                </div>
                <!--End sidebar-->
            </div>
            <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
            <div class="row">
                <div class="col-md-6">
                    <h4>Work Experiences<span class="head-line"></span></h4>
                </div>
                <div class="col-md-6">
                    <a class="main-button" style="float:right;cursor:pointer;" data-toggle="modal"
                       data-target="#AddWork">
                        <span class=""> Add Work Experience</span>
                    </a>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="AddWork" role="dialog">
                <div class="modal-dialog modal-lg" style="padding:160px;width:100%;">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Work Experience</h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-15 fieldcol">
                                <div class="form-group">
                                    <label>Company Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="CompanyName" name="CompanyName">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="delete.php?delete_AchievementID=<?php echo $AchievementID; ?>"
                                   class="btn btn-danger">Delete</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hr2" style="margin-top:35px;"></div>
            <table class="table segment table-hover">
                <thead>
                <tr>
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

                    $specialization_tbl =
                        GSecureSQL::query(
                            "SELECT Specialization FROM listofspecializationtbl WHERE id = ?",
                            TRUE,
                            "s",
                            $WorkSpecialization
                        );
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
                    $Duration = $DateFromMonth . " " . $DateFromYear . " - " . $DateToMonth . " " . $DateToYear;
                    ?>
                    <tbody>
                    <tr>
                        <td><?php echo $CompanyName; ?></td>
                        <td><?php echo $PositionLevel; ?></td>
                        <td><?php echo $Industry; ?></td>
                        <td><?php echo $WorkSpecialization; ?></td>
                        <td><?php echo $Duration; ?></td>
                        <td class="text-center">
                            <button class="btn btn-danger" data-toggle="modal"
                                    data-target="#DeleteWork<?php echo $WorkID; ?>">
                                <i class="fa fa-trash fa-1x"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="DeleteWork<?php echo $WorkID; ?>"
                         role="dialog">
                        <div class="modal-dialog" style="padding:100px">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Position?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-15">
                                        <label = "usr" class = "control-label">Do you want to delete
                                        Work ? This cannot be undone.</label>
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="delete.php?delete_WorkID=<?php echo $WorkID; ?>"
                                           class="btn btn-danger">Delete</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
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
<script>
    $(document).ready(function () {
        var text_max = 300;
        $(window).load(function(){
            var text_length = $('#Objective').val().length;
            var text_remaining = text_max - text_length;

            $('#textarea_feedback').html(text_remaining + ' characters remaining.');
        });

        $('#textarea_feedback').html(text_max + ' characters remaining.');

        $('#Objective').keyup(function () {
            var text_length = $('#Objective').val().length;
            var text_remaining = text_max - text_length;

            $('#textarea_feedback').html(text_remaining + ' characters remaining.');
        });
    });
</script>
<!--
    <script type="text/javascript">
        $(window).load(function(){
            $('#AddWork').modal('show');
        });
    </script>
-->
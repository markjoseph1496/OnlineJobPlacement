<?php
session_start();
include('../../connection.php');

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}else{
    header("location: ../../login-student.php");
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
<!DOCTYPE html>
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

    <!-- Checkbox -->
    <link rel="stylesheet" type="text/css" href="../../css/checkbox.css" media="screen" />

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
                                    <li><a href="../settings/privacy-settings.php">Settings <b class="fa fa-cog" style="float:right;"></b></a></li>
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

        <!-- Modal -->
        <div class="modal fade" id="Logout" role="dialog">
            <div class="modal-dialog" style="padding:100px">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign Out?</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label">Do you want to sign out?</label>
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="../logout.php"
                               class="btn btn-primary">Sign out</a>
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
                                <li><a href="work.php">Work</a></li>
                                <li><a href="education.php">Education</a></li>
                                <li><a href="certifications.php">Certifications</a></li>
                                <li><a class="active" href="achievements.php">Achievements</a></li>
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
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
                <li>
                    <a href="personal-info.php">My Info</a>
                    <ul class="dropdown">
                        <li><a class="active" href="personal-info.php">Personal Info</a></li>
                        <li><a href="contacts-info.php">Contacts Info</a></li>
                        <li><a href="work.php">Work</a></li>
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
            </ul>
            <!-- Mobile Menu End -->
        </div>
    </header>

    <div class="page-banner no-subtitle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Settings</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <!-- Page Content -->
            <div class="col-md-12 page-content">
                

                <div class="tabs-section">

                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-key"></i>Password Settings</a></li>
                        <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-check"></i>Privacy Settings</a></li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!-- Tab Content 1 -->
                        <div class="tab-pane fade in active" id="tab-1">
                            <div class="call-action call-action-boxed call-action-style2 clearfix">         
                                <h2 class="primary"><strong>Change Password</strong></h2>
                            </div>
                            <div class="hr4" style="margin-top:15px;margin-bottom:25px;"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Current Password <span>(*)</span></label>
                                        <input type="password" class="form-control" id="txtCurrentPassword" name="txtCurrentPassword">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>New Password <span>(*)</span></label>
                                        <input type="password" class="form-control" id="txtNewPassword" name="txtNewPassword">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm New Password <span>(*)</span></label>
                                        <input type="password" class="form-control" id="txtConfPassword" name="txtConfPassword">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    &nbsp;
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn-system btn-large" style="float:right;" name="btnChangePass">Change Password</button>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content 2 -->
                        <div class="tab-pane fade" id="tab-2">
                            <div class="call-action call-action-boxed call-action-style2 clearfix">         
                                <h2 class="primary"><strong>Privacy Settings</strong></h2>
                            </div>
                            <div class="hr4" style="margin-top:15px;margin-bottom:25px;"></div>
                            <p><b>Resumé Link URL:</b><a href="../../../resumelinkprofile.php" target="_blank">
                                http://markjoseph1496.ojpms.com <i class="fa fa-external-link-square"></i></a>
                            </p><br>
                            <div class="row">
                                <div class="project-content col-md-6">
                                    <h4><span>Enable Public Resumelink</span></h4>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox" checked="checked">
                                        <label for="checkbox3"><b><em> Please note that your name is always displayed.</em></b></label>
                                    </div>
                                </div>
                            </div>

                            <div class="hr4" style="margin-top:35px;margin-bottom:40px;"></div>
                            <div class="row">
                                <div class="project-content col-md-3">
                                    <h4><span>Personal Info</span></h4>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Photo</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Birthdate</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Nationality</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Gender</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Civil Status</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Social Networking</b></label>
                                    </div>
                                </div>
                    
                               <div class="project-content col-md-3">
                                    <h4><span>Contact Info</span></h4>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Email</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Mobile</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Home Number</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Work Number</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Address</b></label>
                                    </div>
                                </div>

                                <div class="project-content col-md-3">
                                    <h4><span>Work</span></h4>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Work Options</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Objectives</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Work Experience</b></label>
                                    </div>
                                </div>
                            </div>

                            <div class="hr4" style="margin-top:35px;margin-bottom:40px;"></div>
                            <div class="row">
                                <div class="project-content col-md-3">
                                    <h4><span>Education</span></h4>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Schools</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Seminars</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>References</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Portfolio</b></label>
                                    </div>
                                </div>
                    
                               <div class="project-content col-md-3">
                                    <br><br>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Certifications</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Achievements</b></label>
                                    </div>
                                </div>

                                <div class="project-content col-md-5">
                                    <h4><span>Specialization & Languages</span></h4>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Specialization</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Languages</b></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content 3 -->
                    </div>
                    <!-- End Tab Panels -->
                </div>
            </div>
            <!-- End Page Content -->
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script>
</body>

<?php

if(isset($_POST['btnChangePass'])){

$x = $_SESSION['StudentID'];

$qry = "SELECT * FROM studentinfotbl WHERE StudentID ='$x'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $Password = $qry['Password'];
        }

$oldpassword = $_POST['txtCurrentPassword']; 
$newpassword = $_POST['txtNewPassword']; 
$confirmpass = $_POST['txtConfPassword']; 

        if($oldpassword <> $Password){
            echo "
            <script type='text/javascript'>
            alert('Incorrect Password. Please try again.');
            </script>
            ";
        }
        else {
            if ($newpassword <> $confirmpass) {
                echo "
                <script type='text/javascript'>
                alert('Password mismatch. Please try again.');
                </script>
                ";
            }
            else{
                $query = "UPDATE studentinfotbl SET Password = '$newpassword' WHERE StudentID = '$x'";
                $Result = mysql_query($query);
                echo "
                <script type='text/javascript'>
                location.href='./settings.php';
                alert('Password Changed!');
                </script>
                ";
            }
        }
}
?>
</html>
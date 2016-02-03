<?php 
include('../../connection.php');
session_start();

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
    <title>OJPMS | Specialization & Languages</title>

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
    <script type="text/javascript" src="../../js/bootstrap.min.js" ></script>

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

    <!-- Star Rate -->
    <link rel="stylesheet" type="text/css" href="../../css/star-rate.css" media="screen" />
    
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

    <script type="text/javascript" >
        $(document).ready(function()
        {
        $("#notificationLink").click(function()
        {
        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;
        });

        //Document Click
        $(document).click(function()
        {
        $("#notificationContainer").hide();
        });
        //Popup Click
        $("#notificationContainer").click(function()
        {
        return false
        });

        });
    </script>

    <!-- Alert -->
    <script type="text/javascript">
        $(document).ready (function(){
        $("#success-alert").hide();
        $("#btnsave").click(function showAlert() {
            $("#success-alert").alert();
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
           $("#success-alert").alert('close');
                });   
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
                                        <li><a href="../settings/settings.php">Settings <b class="fa fa-cog" style="float:right;"></b></a></li>
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
                                    <li><a href="personal-info.php">Personal Info</a></li>
                                    <li><a href="contacts-info.php">Contacts Info</a></li>
                                    <li><a href="work.php">Work</a></li>
                                    <li><a href="education.php">Education</a></li>
                                    <li><a href="certifications.php">Certifications</a></li>
                                    <li><a href="achievements.php">Achievements</a></li>
                                    <li><a class="active" href="specialization-and-languages.php">Specialization & Languages</a></li>
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
                        <a class="active" href="personal-info.php">My Info</a>
                        <ul class="dropdown">
                            <li><a href="personal-info.php">Personal Info</a></li>
                            <li><a href="contacts-info.php">Contacts Info</a></li>
                            <li><a href="work.php">Work</a></li>
                            <li><a href="education.php">Education</a></li>
                            <li><a href="certifications.php">Certifications</a></li>
                            <li><a href="achievements.php">Achievements</a></li>
                            <li><a class="active" href="specialization-and-languages.php">Specialization & Languages</a></li>
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
                        <h2>Specialization & Languages</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <?php
                if(isset($_GET['id'])){
                    $id=$_GET['id'];

                    if($id==1){
                        echo'
                            <div class="alert alert-success" id="success-alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong><span class="fa fa-info-circle"></span> Specialization successfully updated.</strong> 
                            </div>
                            ';
                    }
                    elseif($id==2){
                        echo'
                            <div class="alert alert-success" id="success-alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong><span class="fa fa-info-circle"></span> Specialization successfully added.</strong> 
                            </div>
                            ';
                    }
                    elseif($id==3){
                        echo'
                            <div class="alert alert-success" id="success-alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong><span class="fa fa-info-circle"></span> Specialization successfully deleted.</strong> 
                            </div>
                            ';
                    }
                    elseif($id==4){
                        echo'
                            <div class="alert alert-success" id="success-alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong><span class="fa fa-info-circle"></span> Languages successfully updated.</strong> 
                            </div>
                            ';
                    }
                    elseif($id==5){
                        echo'
                            <div class="alert alert-success" id="success-alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong><span class="fa fa-info-circle"></span> Languages successfully added.</strong> 
                            </div>
                            ';
                    }
                    elseif($id==6){
                        echo'
                            <div class="alert alert-success" id="success-alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong><span class="fa fa-info-circle"></span> Language successfully deleted.</strong> 
                            </div>
                            ';
                    }

                }
                ?>

                <div class="skill-shortcode">
                    <div class="skill">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percentage="70" style="width: 70%;">
                                <span class="progress-bar-span">70%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row sidebar-page">
                    <!-- Page Content -->
                    <div class="col-md-9 page-content">
                        <div class="classic-testimonials">
                            <!-- Single Testimonial -->
                            <div class="row field">
                                <div class="col-md-6">
                                    <h4>Specialization<span="head-line"></span></h4>
                                </div>
                                <div class="col-md-6">
                                    <a href="add/add-specialization.php" class="main-button" style="float:right;">
                                        <span class="fa fa-plus"> Add Specialization</span>
                                    </a>
                                </div>
                            </div>

                            <div class="hr2" style="margin-top:35px;"></div>
                            <table class="table segment table-hover">
                                <thead>
                                    <tr>
                                        <th>Skill</th>
                                        <th>Specialization</th>
                                        <th>Year of Experience</th>
                                        <th>Proficiency</th>
                                        <th width="15%">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $specialization_tbl =
                                        GSecureSQL::query(
                                            "SELECT * FROM specializationtbl WHERE StudentID = ?",
                                            TRUE,
                                            "s",
                                            $StudentID
                                        );
                                        foreach($specialization_tbl as $value){
                                            $SID = $value[0];
                                            $Specialization = $value[2];
                                            $YearOfExperience = $value[3];
                                            $Proficiency = $value[4];
                                            $Skills = $value[5];
                                    ?>
                                    <tr>
                                        <td><?php echo $Skills; ?></td>
                                        <td><?php echo $Specialization; ?></td>
                                        <td class="text-center"><?php echo $YearOfExperience; ?></td>
                                        <td class="text-center">
                                            <fieldset class="rating">
                                                <input <?php if($Proficiency == "5") echo "checked"; ?> type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                <input <?php if($Proficiency == "4.5") echo "checked"; ?> type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                <input <?php if($Proficiency == "4") echo "checked"; ?> type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input <?php if($Proficiency == "3.5") echo "checked"; ?> type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                <input <?php if($Proficiency == "3") echo "checked"; ?> type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                <input <?php if($Proficiency == "2.5") echo "checked"; ?> type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                <input <?php if($Proficiency == "2") echo "checked"; ?> type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input <?php if($Proficiency == "1.5") echo "checked"; ?> type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                <input <?php if($Proficiency == "1") echo "checked"; ?> type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                <input <?php if($Proficiency == "0.5") echo "checked"; ?> type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                            </fieldset>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#DeleteSpecialization<?php echo $SID; ?>">
                                                <i class="fa fa-trash fa-1x"></i>
                                            </button>
                                            <a href="edit/edit-specialization.php?id=<?php echo $SID; ?>" class="btn btn-default">
                                                <i class="fa fa-pencil-square-o fa-1x"></i>
                                            </a>
                                        </td>
                                     </tr>
                                     <!-- Modal -->
                                        <div class="modal fade" id="DeleteSpecialization<?php echo $SID; ?>" role="dialog">
                                            <div class="modal-dialog" style="padding:100px">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Delete Specialization?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-md-15">
                                                            <label = "usr" class = "control-label">Do you want to delete this information? This cannot be undone.</label>
                                                            <div class="form-group">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="delete.php?delete_SID=<?php echo $SID; ?>" class="btn btn-danger">Delete</a>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
                                <div class="col-md-6">
                                    <h4>Languages<span="head-line"></span></h4>
                                </div>
                                <div class="col-md-6">
                                    <a href="add/add-language.php" class="main-button" style="float:right;">
                                        <span class="fa fa-plus"> Add Language</span>
                                    </a>
                                </div>
                            </div>

                            <div class="hr2" style="margin-top:35px;"></div>
                            <table class="table segment table-hover">
                                <thead>
                                    <tr>
                                        <th>Language</th>
                                        <th>Written Proficiency</th>
                                        <th>Spoken Proficiency</th>
                                        <th width="15%">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        $language_tbl =
                                            GSecureSQL::query(
                                                "SELECT * FROM languagetbl WHERE StudentID = ?",
                                                TRUE,
                                                "s",
                                                $StudentID
                                            );
                                        foreach ($language_tbl as $value2) {
                                            $LangID = $value2[0];
                                            $Language = $value2[2];
                                            $WrittenProf = $value2[3];
                                            $SpokenProf = $value2[4];
                                    ?>
                                    <tr>
                                        <td><?php echo $Language; ?></td>
                                        <td class="text-center">
                                            <fieldset class="rating">
                                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                            </fieldset>
                                        </td>
                                        <td class="text-center">
                                            <fieldset class="rating">
                                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                            </fieldset>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#DeleteLanguage">
                                                <i class="fa fa-trash fa-1x"></i>
                                            </button>
                                            <a href="edit/edit-language.php?id=<?php echo $LangID; ?>" class="btn btn-default">
                                                <i class="fa fa-pencil-square-o fa-1x"></i>
                                            </a>
                                        </td>
                                    </tr>
                                     <!-- Modal -->
                                        <div class="modal fade" id="DeleteLanguage" role="dialog">
                                            <div class="modal-dialog" style="padding:100px">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Delete Language?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-md-15">
                                                            <label = "usr" class = "control-label">Do you want to delete this information? This cannot be undone.</label>
                                                            <div class="form-group">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="delete.php?delete_LangID=<?php echo $LangID; ?>" class="btn btn-danger">Delete</a>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
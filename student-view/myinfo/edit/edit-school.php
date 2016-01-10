<?php 
include('../../../connection.php');
session_start();

$EditSchoolID="";

if(is_null($_SESSION['StudentID'])){
    echo "
        <script type='text/javascript'>
        location.href='../../../../login-student.php';
        </script>
        ";
}
else{
    $EditSchoolID = $_GET['id'];
}

$school_tbl =
    GSecureSQL::query(
        "SELECT * FROM schooltbl WHERE SchoolID = ?",
        TRUE,
        "s",
        $EditSchoolID
    );
    $SchoolID = $school_tbl[0][0];
    $StudentID = $school_tbl[0][1];
    $School = $school_tbl[0][2];
    $Attainment = $school_tbl[0][3];
    $Course = $school_tbl[0][4];
    $Graduated = $school_tbl[0][5];
    $GraduatedMonth = substr($Graduated, 0,2);
    $GraduatedYear = substr($Graduated, 3,6);

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
    <form id="EditSchool" name="EditSchool" autocomplete="off" action="myinfoedit.php">
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
                                <li><i class="fa fa-hashtag"></i> <b>008-2012-0805</b></li>
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
                            <img src="../../../images/ojpms.png">
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
                                <a class="active" href="../personal-info.php">My Info</a>
                                <ul class="dropdown">
                                    <li><a  href="../personal-info.php">Personal Info</a></li>
                                    <li><a href="../contacts-info.php">Contacts Info</a></li>
                                    <li><a href="../work.php">Work</a></li>
                                    <li><a class="active"href="../education.php">Education</a></li>
                                    <li><a href="../certifications.php">Certifications</a></li>
                                    <li><a href="../achievements.php">Achievements</a></li>
                                    <li><a href="../specialization-and-languages.php">Specialization & Languages</a></li>
                                    <li><a href="../references.php">References</a></li>
                                    <li><a href="../portfolio.php">Portfolio</a></li>
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
                            <li>
                                <a href="../settings/privacy-settings.php">Settings</a>
                                <ul class="dropdown">
                                    <li><a href="../settings/privacy-settings.php">Privacy Settings</a></li>
                                    <li><a href="../settings/pass-settings.php">Password Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="../personal-info.php">My Info</a>
                        <ul class="dropdown">
                            <li><a  href="../personal-info.php">Personal Info</a></li>
                            <li><a href="../contacts-info.php">Contacts Info</a></li>
                            <li><a href="../work.php">Work</a></li>
                            <li><a class="active"href="../education.php">Education</a></li>
                            <li><a href="../certifications.php">Certifications</a></li>
                            <li><a href="../achievements.php">Achievements</a></li>
                            <li><a href="../specialization-and-languages.php">Specialization & Languages</a></li>
                            <li><a href="../references.php">References</a></li>
                            <li><a href="../portfolio.php">Portfolio</a></li>
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
                    <li>
                        <a href="../settings/privacy-settings.php">Settings</a>
                        <ul class="dropdown">
                            <li><a href="../settings/privacy-settings.php">Privacy Settings</a></li>
                            <li><a href="../settings/pass-settings.php">Password Settings</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../../../login-student.php?id=1"><i class="fa fa-sign-out"></i> Sign Out</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

        <div class="page-banner no-subtitle">
            <input type="text" class="form-control" id="SchoolID" name="SchoolID" style="display: none;" value="<?php echo $SchoolID;?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>School</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li>Edit School</li>
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>School <span>(*)</span></label>
                                    <input type="text" class="form-control" id="School" name="School" style="height:34px;" value="<?php echo $School; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Educational Attainment <span>(*)</span></label>
                                    <select id="EducAttainment" name="EducAttainment" class="form-control" style="width:100%; height:34px;">
                                        <option value="" <?php if($Attainment=="") echo 'selected="selected"'; ?>>- Please select one -</option>
                                        <option value="High School Diploma" <?php if($Attainment=="High School Diploma") echo 'selected="selected"'; ?>>High School Diploma</option>
                                        <option value="Technical Vocational/Certificate" <?php if($Attainment=="Technical Vocational/Certificate") echo 'selected="selected"'; ?>>Technical Vocational/Certificate</option>
                                        <option value="Bachelor's/College Degree" <?php if($Attainment=="Bachelor's/College Degree") echo 'selected="selected"'; ?>>Bachelor's/College Degree</option>
                                        <option value="Post Graduate Diploma/Master's Degree" <?php if($Attainment=="Post Graduate Diploma/Master's Degree") echo 'selected="selected"'; ?>>Post Graduate Diploma/Master's Degree</option>
                                        <option value="Professional License (Passed Board/Bar/Professional License Exam)" <?php if($Attainment=="Professional License (Passed Board/Bar/Professional License Exam") echo 'selected="selected"'; ?>>Professional License (Passed Board/Bar/Professional License Exam</option>
                                        <option value="Doctorate Degree" <?php if($Attainment=="Doctorate Degree") echo 'selected="selected"'; ?>>Doctorate Degree</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Course <span>(*)</span></label>
                                    <select id="Course" name="Course" class="form-control" style="width:100%; height:34px;">
                                        <?php   
                                            $query ="SELECT * FROM coursetbl";
                                            $result = mysql_query($query);
                                            while($query = mysql_fetch_array($result)){
                                                $CourseCode = $query['CourseCode'];
                                                $CourseTitle = $query['CourseTitle'];
                                        ?>
                                            <option value="<?php echo $CourseCode;?>" <?php if($CourseCode==$Course) echo 'selected="selected"'; ?>><?php echo $CourseTitle; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Graduation Date <span>(*)</span></label>
                                    <select id="GraduatedMonth" name="GraduatedMonth" class="form-control" style="width:100%; height:34px;">
                                        <option value="" <?php if($GraduatedMonth=="") echo 'selected="selected"'; ?>>- Month -</option>
                                        <option value="01" <?php if($GraduatedMonth=="01") echo 'selected="selected"'; ?>>January</option>
                                        <option value="02" <?php if($GraduatedMonth=="02") echo 'selected="selected"'; ?>>February</option> 
                                        <option value="03" <?php if($GraduatedMonth=="03") echo 'selected="selected"'; ?>>March</option> 
                                        <option value="04" <?php if($GraduatedMonth=="04") echo 'selected="selected"'; ?>>April</option> 
                                        <option value="05" <?php if($GraduatedMonth=="05") echo 'selected="selected"'; ?>>May</option> 
                                        <option value="06" <?php if($GraduatedMonth=="06") echo 'selected="selected"'; ?>>June</option> 
                                        <option value="07" <?php if($GraduatedMonth=="07") echo 'selected="selected"'; ?>>July</option> 
                                        <option value="08" <?php if($GraduatedMonth=="08") echo 'selected="selected"'; ?>>August</option>
                                        <option value="09" <?php if($GraduatedMonth=="09") echo 'selected="selected"'; ?>>September</option>
                                        <option value="10" <?php if($GraduatedMonth=="10") echo 'selected="selected"'; ?>>October</option>
                                        <option value="11" <?php if($GraduatedMonth=="11") echo 'selected="selected"'; ?>>November</option>
                                        <option value="12" <?php if($GraduatedMonth=="12") echo 'selected="selected"'; ?>>December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select id="GraduatedYear" name="GraduatedYear" class="form-control" style="width:100%; height:34px;">
                                        <option value="">-Year-</option>
                                        <?php 
                                            $date = Date("Y") + 4;
                                            $choose = $GraduatedYear;
                                                while($date != 1935){
                                                    $date--;
                                                    if($date == $choose){
                                                        echo "<option selected value='$date'> $date</option>";
                                                        }
                                                        else{
                                                        echo "<option value='$date'> $date</option>";
                                                        }
                                                    }
                                        ?>
                                    </select>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../../js/script.js"></script>
</form>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
            var validator = $("#EditSchool").bootstrapValidator({
                feedbackIcons:{
                    valid: "glyphicon glyphicon-ok",
                    invalid: "glyphicon glyphicon-remove",
                    validating: "glyphicon glyphicon-refresh"
                },
                fields: {
                    School: {
                        validators: {
                            notEmpty: {
                                message: "School is required."
                            },
                            stringLength: {
                                min: 3,
                                max: 30,
                                message: "School must be 3-30 characters long."
                            }
                        }
                    },
                    EducAttainment: {
                        validators: {
                            notEmpty: {
                                message: "Educational Attainment is required."
                            }
                        }
                    },
                    Course: {
                        validators: {
                            notEmpty: {
                                message: "Course is required."
                            }
                        }
                    },
                    GraduatedMonth: {
                        validators: {
                            notEmpty: {
                                message: "Month graduated is required."
                            }
                        }
                    },
                    GraduatedYear: {
                        validators: {
                            notEmpty: {
                                message: "Year graduated is required."
                            }
                        }
                    }
                }
            });
    });
</script>
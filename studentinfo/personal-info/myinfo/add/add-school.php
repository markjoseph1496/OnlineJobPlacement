<!DOCTYPE html>
<?php 
include('../../../../connection.php');
session_start();

$x = $_SESSION['StudentID'];

if(is_null($x)){
    echo "
        <script type='text/javascript'>
        location.href='../../../../login-student.php';
        </script>
        ";
}
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online JPMS</title>

    <!-- Bootstrap CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../css/basic-template.css" rel="stylesheet" />


    <!-- BootstrapValidator CSS -->
    <link href="../../../css/bootstrapValidator.min.css" rel="stylesheet"/>
  
    <!-- jQuery and Bootstrap JS -->
    <script src="../../../js/jquery.min.js" type="text/javascript"></script>
    <script src="../../../js/bootstrap.min.js" type="text/javascript"></script>
      
    <!-- BootstrapValidator -->
    <script src="../../../js/bootstrapValidator.min.js" type="text/javascript"></script>


    <!-- CSS -->
    <link href="../../../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>



<body id="page-top" class="index bg">
    <form id="AddSchool" name="AddSchool" autocomplete="off" action="myinfoadd.php">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="#page-top">Online Job Placement Management</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div id="yellow-text-fields">
         <div class="white-holder">
            <div class="row field">
                <div class="col-md-10">
                    <ul class="nav nav-tabs">
                        <li role="presentation" id="myinfo" class="item active"><a href="personal_info.php"><B>My Info</B></a></li>
                        <li role="presentation" id="resumelink" class="item"><a href="../resumelink/resumelink.php">Resumé Link</a></li>
                        <li role="presentation" id="applications" class="item"><a href="../applications/applications.php">Applications</a></li>
                        <li role="presentation" id="search-job" class="item"><a href="../search-job/search-job.php">Jobs</a></li>
                        <li role="presentation" id="settings" class="item"><a href="../settings/settings.php">Settings</a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-center">
                    <label>Your Student ID<h4>008-2012-0805</h4></label>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow"><a href="../personal_info.php">Personal Info</a></li>
                <li class="yellow"><a href="../contacts_info.php">Contacts Info</a></li>
                <li class="yellow"><a href="../work.php">Work</a></li>
                <li class="yellow active"><a href="../education.php">Education</a></li>
                <li class="yellow"><a href="../certifications.php">Certifications</a></li>
                <li class="yellow"><a href="../achievements.php">Achievements</a></li>
                <li class="yellow"><a href="../skills_languages.php">Skills & Languages</a></li>
                <li class="yellow"><a href="../references.php">References</a></li>
                <li class="yellow"><a href="../portfolio.php">Portfolio</a></li>
            </ul>
            <div class="space-1"></div>

            <div>
                <div class"row">
                    <div class="col-md-10">
                        <div class="row field">
                            <div class="col-md-12 fieldcol">
                                <div class="form-group">
                                    <label>School <span>(*)</span></label>
                                    <input type="text" class="form-control" id="School" name="School" style="height:34px;">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Educational Attainment <span>(*)</span></label>
                                    <select id="EducAttainment" name="EducAttainment" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Please select one -</option>
                                        <option value="High School Diploma">High School Diploma</option>
                                        <option value="Technical Vocational/Certificate">Technical Vocational/Certificate</option>
                                        <option value="Bachelor's/College Degree">Bachelor's/College Degree</option>
                                        <option value="Post Graduate Diploma/Master's Degree">Post Graduate Diploma/Master's Degree</option>
                                        <option value="Professional License (Passed Board/Bar/Professional License Exam)">Professional License (Passed Board/Bar/Professional License Exam</option>
                                        <option value="Doctorate Degree">Doctorate Degree</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Course <span>(*)</span></label>
                                    <select id="Course" name="Course" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Course -</option>
                                        <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
                                        <option value="Bachelor of Science in Business Management Major in Operations">Bachelor of Science in Business Management Major in Operations</option>
                                        <option value="Bachelor of Arts in Communication">Bachelor of Arts in Communication</option>
                                        <option value="Bachelor of Science in Information Technology Major in Digital Arts">Bachelor of Science in Information Technology Major in Digital Arts</option>
                                        <option value="Bachelor of Science in Hotel and Restaurant Management">Bachelor of Science in Hotel and Restaurant Management</option>
                                        <option value="Bachelor of Science in Computer Science">Bachelor of Science of Computer Science</option>
                                        <option value="Bachelor of Science in Information Technology">Bachelor of Science of Information Technology</option>
                                        <option value="Bachelor of Science in Computer Engineering">Bachelor of Science of Computer Engineering</option>
                                        <option value="Bachelor of Science in Accounting Technology">Bachelor of Science in Accounting Technology</option>
                                        <option value="Bachelor of Science in Information Technology with Specialization Digital Arts">Bachelor of Science in Information Technology with Specialization Digital Arts</option>
                                        <option value="2-yr. Associate in Computer Technology">2-yr. Associate in Computer Technology</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 fieldcol">
                                <div class="form-group">
                                    <label>Graduation Date <span>(*)</span></label>
                                    <select id="GraduatedMonth" name="GraduatedMonth" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Month -</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option> 
                                        <option value="03">March</option> 
                                        <option value="04">April</option> 
                                        <option value="05">May</option> 
                                        <option value="06">June</option> 
                                        <option value="07">July</option> 
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 fieldcol">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select id="GraduatedYear" name="GraduatedYear" class="form-control" style="width:100%; height:34px;">
                                        <option value="">-Year-</option>
                                        <?php 
                                            $date = Date("Y") + 4;
                                            while($date != 1935){
                                                $date--;
                                                if($date == $server_txtGradYear){
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
                </div>
                <div class="field">
                    <div class="profile_divider"></div>
                    <div class"row field">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-lg btn-hg btn-primary" style="float:right;" name="btnSave">Add</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
            var validator = $("#AddSchool").bootstrapValidator({
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
</body>
</html>
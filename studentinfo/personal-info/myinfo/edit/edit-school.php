<!DOCTYPE html>

<?php 
include('../../../../connection.php');
session_start();

$x="";

if(is_null($_SESSION['StudentID'])){
    echo "
        <script type='text/javascript'>
        location.href='../../../../login-student.php';
        </script>
        ";
}
else{
    $x = $_GET['EditSchoolID'];
}

$qry = "SELECT * FROM schooltbl WHERE SchoolID ='$x'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $SchoolID = $qry['SchoolID'];
                $StudentID = $qry['StudentID'];
                $School = $qry['School'];
                $Attainment = $qry['Attainment'];
                $Course = $qry['Course'];
                $Graduated = $qry['Graduated'];
         
        }

/*
    if($a){
        unset($a);
            $Graduation = $server_txtGradMonth ." ". $server_txtGradYear;
            $CourseOk = mysql_real_escape_string($server_txtCourse);
            $EducAttainmentOk = mysql_real_escape_string($server_txtEducAttainment);    
            $query = "UPDATE schooltbl SET School = '$server_txtSchool', Attainment ='$EducAttainmentOk', Course = '$CourseOk', Graduated = '$Graduation' WHERE SchoolID = '$SchoolID'";
            $Result = mysql_query($query);
            echo "
                 <script type='text/javascript'>
                 location.href='../education.php?id=SchoolEdited';
                 </script>
                 ";
                 
        }

}

*/
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
    <form name="EditSchool" id="EditSchool" autocomplete="off" action="myinfoedit.php">
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
            <div class="form-group">
                <input type="text" class="form-control" id="SchoolID" name="SchoolID" style="display: none;" value="<?php echo $SchoolID;?>">
            </div>
                <div class"row">
                    <div class="col-md-10">
                        <div class="row field">
                            <div class="col-md-12 fieldcol">
                                <div class="form-group">
                                    <label>School <span>(*)</span></label>
                                    <input type="text" class="form-control" id="School" name="School" style="height:34px;" value="<?php echo $School; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Educational Attainment <span>(*)</span></label>
                                        <select id="EducAttainment" name="EducAttainment" class="form-control" style="width:100%; height:34px;">
                                            <option value="">- Please Select one -</option>
                                            <option value="High School Diploma"<?php if(htmlspecialchars($Attainment)=="High School Diploma") echo 'selected="selected"'; ?>>High School Diploma</option>
                                            <option value="Technical Vocational/Certificate"<?php if(htmlspecialchars($Attainment)=="Technical Vocational/Certificate") echo 'selected="selected"';?>>Technical Vocational/Certificate</option>
                                            <option value="Bachelor's/College Degree"<?php if(htmlspecialchars($Attainment)=="Bachelor's/College Degree") echo 'selected="selected"'; ?>>Bachelor's/College Degree</option>
                                            <option value="Post Graduate Diploma/Master's Degree"<?php if(htmlspecialchars($Attainment)=="Post Graduate Diploma/Master's Degree") echo 'selected="selected"'; ?>>Post Graduate Diploma/Master's Degree</option>
                                            <option value="Professional License (Passed Board/Bar/Professional License Exam)" <?php if(htmlspecialchars($Attainment)=="Professional License (Passed Board/Bar/Professional License Exam)") echo 'selected="selected"'; ?>>Professional License (Passed Board/Bar/Professional License Exam</option>
                                            <option value="Doctorate Degree"<?php if(htmlspecialchars($Attainment)=="Doctorate Degree") echo 'selected="selected"';?>>Doctorate Degree</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Course</label>
                                        <select id="Course" name="Course" class="form-control" style="width:100%; height:34px;">
                                            <option value="">- Course -</option>
                                            <option value="Bachelor of Science in Tourism Management"<?php if(htmlspecialchars($Course)=="Bachelor of Science in Tourism Management") echo 'selected="selected"';?>>Bachelor of Science in Tourism Management</option>
                                            <option value="Bachelor of Science in Business Management Major in Operations"<?php if(htmlspecialchars($Course)=="Bachelor of Science in Business Management Major in Operations") echo 'selected="selected"'; ?>>Bachelor of Science in Business Management Major in Operations</option>
                                            <option value="Bachelor of Arts in Communication" <?php if(htmlspecialchars($Course)=="Bachelor of Arts in Communication") echo 'selected="selected"';?>>Bachelor of Arts in Communication</option>
                                            <option value="Bachelor of Science in Information Technology Major in Digital Arts" <?php if(htmlspecialchars($Course)=="Bachelor of Science in Information Technology Major in Digital Arts") echo 'selected="selected"';?>>Bachelor of Science in Information Technology Major in Digital Arts</option>
                                            <option value="Bachelor of Science in Hotel and Restaurant Management" <?php if(htmlspecialchars($Course)=="Bachelor of Science in Hotel and Restaurant Management") echo 'selected="selected"'; ?>>Bachelor of Science in Hotel and Restaurant Management </option>
                                            <option value="Bachelor of Science in Computer Science" <?php if(htmlspecialchars($Course)=="Bachelor of Science in Computer Science") echo 'selected="selected"'; ?>>Bachelor of Science of Computer Science</option>
                                            <option value="Bachelor of Science in Information Technology" <?php if(htmlspecialchars($Course)=="Bachelor of Science in Information Technology") echo 'selected="selected"'; ?>>Bachelor of Science of Information Technology</option>
                                            <option value="Bachelor of Science in Computer Engineering" <?php if(htmlspecialchars($Course)=="Bachelor of Science in Computer Engineering") echo 'selected="selected"'; ?>>Bachelor of Science of Computer Engineering</option>
                                            <option value="Bachelor of Science in Accounting Technology" <?php if(htmlspecialchars($Course)=="Bachelor of Science in Accounting Technology") echo 'selected="selected"';?>>Bachelor of Science in Accounting Technology</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 fieldcol">
                                <div class="form-group">
                                    <label>Graduation Date</label><br>
                                    <select id="GraduatedMonth" name="GraduatedMonth" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Month -</option>
                                        <option value="01" <?php if(substr($Graduated, 0,2)=="01") echo 'selected="selected"';?>>January</option>
                                        <option value="02" <?php if(substr($Graduated, 0,2)=="02") echo 'selected="selected"';?>>February</option> 
                                        <option value="03" <?php if(substr($Graduated, 0,2)=="03") echo 'selected="selected"';?>>March</option> 
                                        <option value="04" <?php if(substr($Graduated, 0,2)=="04") echo 'selected="selected"';?>>April</option> 
                                        <option value="05" <?php if(substr($Graduated, 0,2)=="05") echo 'selected="selected"';?>>May</option> 
                                        <option value="06" <?php if(substr($Graduated, 0,2)=="06") echo 'selected="selected"';?>>June</option> 
                                        <option value="07" <?php if(substr($Graduated, 0,2)=="07") echo 'selected="selected"';?>>July</option> 
                                        <option value="08" <?php if(substr($Graduated, 0,2)=="08") echo 'selected="selected"';?>>August</option>
                                        <option value="09" <?php if(substr($Graduated, 0,2)=="09") echo 'selected="selected"';?>>September</option>
                                        <option value="10" <?php if(substr($Graduated, 0,2)=="10") echo 'selected="selected"';?>>October</option>
                                        <option value="11" <?php if(substr($Graduated, 0,2)=="11") echo 'selected="selected"';?>>November</option>
                                        <option value="12" <?php if(substr($Graduated, 0,2)=="12") echo 'selected="selected"';?>>December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 fieldcol">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select id="GraduatedYear" name="GraduatedYear" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Year -</option>
                                        <?php 
                                            $date = Date("Y") + 4;
                                            $choose = substr($Graduated, 3,6);
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
                </div>
            <div class="field">
                <div class="profile_divider"></div>
                <div class"row field">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-lg btn-hg btn-primary" style="float:right;" name ="btnSave">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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
</body>
</html>
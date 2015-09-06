<!DOCTYPE html>

<?php 
include('connection.php');
session_start();

$x = $_SESSION['delete_SchoolID'];

$qry = "SELECT * FROM schooltbl WHERE SchoolID ='$x'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $SchoolID = $qry['SchoolID'];
                $StudentID = $qry['StudentID'];
                $School = $qry['School'];
                $Attainment = $qry['Attainment'];
                $Course = $qry['Course'];
                $FieldOfStudy = $qry['FieldOfStudy'];
                $Graduated = $qry['Graduated'];
         
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

    <!-- Bootstrap Core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

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
    <form method = "POST">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
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
        <div class="container">
            <div class="white-holder">
                <ul class="nav nav-tabs">
                    <li id="my_info" class="item active"><a href="../personal_info.php"><B>My Info</B></a></li>
                    <li id="resumelink" class="item"><a href="../../Resumelink/resumelink.php">Resumé Link</a></li>
                    <li id="applications" class="item"><a href="../../Applications/applications.php">Applications</a></li>
                    <li id="settings" class="item"><a href="../../Settings/settings.php">Settings</a></li>
                </ul>
                <div class="space"></div>
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

                <div class"row">
                    <div class="col-md-10">
                        <div class="row field">
                            <div class="col-md-12 fieldcol">
                                <label>School <span>(*)</span></label>
                                <select id="txtSchool" name="txtSchool" class="" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value="STI College Caloocan" <?php if($School=="STI College Caloocan") echo 'selected="selected"'; ?> >STI College Caloocan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <label>Educational Attainment <span>(*)</span></label>
                                <select id="txtEducAttainment" name="txtEducAttainment" class="txtEducAttainment" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value="College Graduate" <?php if($Attainment=="College Graduate") echo 'selected="selected"'; ?> >College Graduate</option>
                                </select>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <label>Field of Study</label>
                                <select id="txtFieldOfStudy" name="txtFieldOfStudy" class="" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value="Computer Science" <?php if($FieldOfStudy=="Computer Science") echo 'selected="selected"'; ?> >Computer Science</option>
                                </select>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <label>Course</label>
                                <select id="txtCourse" name="txtCourse" class="txtCourse" style="width:100%; height:34px;">
                                    <option value></option>
                                    <option value="Computer Science" <?php if($Course=="Computer Science") echo 'selected="selected"'; ?> >Computer Science</option>
                                </select>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <label>Graduation Date</label><br>
                                <select id="txtGradMonth" name="txtGradMonth" class="txtGradMonth" style="width:50%; height:34px;">
                                    <option value="01"<?php if(substr($Graduated, 0,2)=="01") echo 'selected="selected"'; ?> >January</option>
                                    <option value="02"<?php if(substr($Graduated, 0,2)=="02") echo 'selected="selected"'; ?> >February</option> 
                                    <option value="03"<?php if(substr($Graduated, 0,2)=="03") echo 'selected="selected"'; ?> >March</option> 
                                    <option value="04"<?php if(substr($Graduated, 0,2)=="04") echo 'selected="selected"'; ?> >April</option> 
                                    <option value="05"<?php if(substr($Graduated, 0,2)=="05") echo 'selected="selected"'; ?> >May</option> 
                                    <option value="06"<?php if(substr($Graduated, 0,2)=="06") echo 'selected="selected"'; ?> >June</option> 
                                    <option value="07"<?php if(substr($Graduated, 0,2)=="07") echo 'selected="selected"'; ?> >July</option> 
                                    <option value="08"<?php if(substr($Graduated, 0,2)=="08") echo 'selected="selected"'; ?> >August</option>
                                    <option value="09"<?php if(substr($Graduated, 0,2)=="09") echo 'selected="selected"'; ?> >September</option>
                                    <option value="10"<?php if(substr($Graduated, 0,2)=="10") echo 'selected="selected"'; ?> >October</option>
                                    <option value="11"<?php if(substr($Graduated, 0,2)=="11") echo 'selected="selected"'; ?> >November</option>
                                    <option value="12"<?php if(substr($Graduated, 0,2)=="12") echo 'selected="selected"'; ?> >December</option>
                                </select>
                                <select id="txtGradYear" name="txtGradYear" class="txtGradYear" style="width:49%; height:34px;">
                                    <?php 
                                    $date = 1934;
                                    $choose = substr($Graduated, 3,6);
                                    while($date != Date("Y")){
                                        $date++;
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
                <div class="field">
                    <div class="profile_divider"></div>
                    <div class"row field">
                        <div class="col-md-12">
                            <button class="btn btn-lg btn-hg btn-primary" style="float:right;" name ="btnSave">Save</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</form>
</body>

<?php
include('connection.php');

if(isset($_POST['btnSave'])){

    $txtSchool = $_POST['txtSchool']; 
    $txtAttainment = $_POST['txtEducAttainment']; 
    $txtCourse = $_POST['txtCourse']; 
    $txtFieldOfStudy = $_POST['txtFieldOfStudy']; 
    $txtGradYear = $_POST['txtGradYear']; 
    $txtGradMonth = $_POST['txtGradMonth'];
    $txtGraduation = $txtGradMonth .'/'. $txtGradYear;

    $query = "UPDATE schooltbl SET School = '$txtSchool', Attainment ='$txtAttainment', Course = '$txtCourse', FieldOfStudy = '$txtFieldOfStudy', Graduated = '$txtGraduation' WHERE SchoolID = '$SchoolID'";
    $Result = mysql_query($query);
  echo "
         <script type='text/javascript'>
         location.href='../education.php'
         </script>
         ";
         unset($session['delete_SchoolID']);
}
?>

</html>
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
    $x = $_GET['EditSerminarID'];
}


$qry = "SELECT * FROM seminartbl WHERE SeminarID ='$x'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $SeminarID = $qry['SeminarID'];
                $Seminar = $qry['Seminar'];
                $YearAttended = $qry['YearAttended'];
        }


$b = 1;
$txtSeminarValidator = '';
$txtYearAttendedValidator = '';

$server_txtSeminar = isset($_POST['txtSeminar']) ? $_POST['txtSeminar'] : '';
$server_txtYearAttended = isset($_POST['txtYearAttended']) ? $_POST['txtYearAttended'] : '';

$server_txtSeminar = ucwords(strtolower($server_txtSeminar));

$a = isset($_POST['txtSeminar']);
$a = $a && isset($_POST['txtYearAttended']);

if($a){

    $txtSeminarValid = 1;
    $txtYearAttendedValid = 1;


    if(is_null($server_txtSeminar) || $server_txtSeminar== ''){
        $txtSeminarValidator = 'This Field cannot be Empty.';
        $txtSeminarValid = 0;
    }   

    if(is_null($server_txtYearAttended) || $server_txtYearAttended == ''){
        $txtYearAttendedValidator = 'Please Select One.';
        $txtYearAttendedValid = 0;
    }

    $b=0;

    $a = $txtSeminarValid;
    $a = $a && $txtYearAttendedValid;

    if($a){
        unset($a);
        $SeminarOk = mysql_real_escape_string($server_txtSeminar);
        $query = "UPDATE seminartbl SET Seminar = '$SeminarOk ', YearAttended ='$server_txtYearAttended' WHERE SeminarID = '$SeminarID'";
        $Result = mysql_query($query);
        echo "
             <script type='text/javascript'>
             location.href='../education.php?id=SeminarEdit'
             </script>
             ";
    }
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
    <form method ="POST">
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
            <ul class="nav nav-tabs">
                <li id="my_info" class="item active"><a href="../personal_info.php"><B>My Info</B></a></li>
                <li id="resumelink" class="item"><a href="../../resumelink/resumelink.php">Resumé Link</a></li>
                <li id="applications" class="item"><a href="../../applications/applications.php">Applications</a></li>
                <li id="search-job" class="item"><a href="../../search-job/search-job.php">Jobs</a></li>
                <li id="settings" class="item"><a href="../../settings/settings.php">Settings</a></li>
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
            <div class="space-1"></div>

                <div class="col-md-6 col-md-5">
                    <div class="row field">
                        <div class="col-md-12 fieldcol">
                            <div class="form-group">
                                <label>Seminar <span>(*)</span></label>
                                <input type="text" class="form-control" id="txtSeminar" name="txtSeminar" value="<?php if($b==1){ echo htmlspecialchars($Seminar); } else{ echo htmlspecialchars($server_txtSeminar); }?>">
                            </div>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-12 fieldcol">
                            <div class="form-group">
                                <label>Year Attended <span>(*)</span></label>
                                <select id="txtYearAttended" name="txtYearAttended" class="form-control" style="width:100%; height:34px;">
                                    <option value="">- Year -</option>
                                    <?php  
                                    $date = 1934;
                                    if($b==1){
                                        $choose = $YearAttended;
                                    }
                                    else{
                                        $choose = $server_txtYearAttended;
                                    }
                                    
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
</html>
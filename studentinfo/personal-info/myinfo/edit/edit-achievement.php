<!DOCTYPE html>

<?php 
include('../../../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
    $x = $_GET['EditAchievementID'];
}
else{
    $StudentID = '';
    $x="";
    echo "
        <script type='text/javascript'>
        location.href='../../../../login-student.php?id=2';
        </script>
        ";
}

$qry = "SELECT * FROM achievementstbl WHERE AchievementID ='$x'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $AchievementID = $qry['AchievementID'];
                $Achievement = $qry['Achievements'];
        }

$b = 1;
$txtAchievementValidator = '';

$server_txtAchievement = isset($_POST['txtAchievement']) ? $_POST['txtAchievement'] : '';

$server_txtAchievement = ucwords(strtolower($server_txtAchievement));

$a = isset($_POST['txtAchievement']);

if($a){
    unset($a);
    $txtAchievemntValid = (bool) preg_match('/^[A-Za-z0-9 ]+$/i', $server_txtAchievement);

    if(is_null($server_txtAchievement) || $server_txtAchievement == ''){
        $txtAchievementValidator = 'This field cannot be empty';
        $txtAchievemntValid = 0;
    }
    elseif(!$txtAchievemntValid){
        $txtAchievementValidator = 'This field contains invalid characters.';
    }
    $b=0;

    $a = $txtAchievemntValid;

    if($a){
        unset($a);

           $query = "UPDATE achievementstbl SET Achievements = '$server_txtAchievement' WHERE AchievementID = '$AchievementID'";
           $Result = mysql_query($query);
           echo "
                 <script type='text/javascript'>
                 location.href='../achievements.php?id=AchievementEdit';
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
    <form method = "POST">
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
                        <a class="page-scroll" href="../../../../login-student.php?id=1">Sign Out</a>
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
                <li class="yellow"><a href="../education.php">Education</a></li>
                <li class="yellow"><a href="../certifications.php">Certifications</a></li>
                <li class="yellow active"><a href="../achievements.php">Achievements</a></li>
                <li class="yellow"><a href="../skills_languages.php">Skills & Languages</a></li>
                <li class="yellow"><a href="../references.php">References</a></li>
                <li class="yellow"><a href="../portfolio.php">Portfolio</a></li>
            </ul>
            <div class="space-1"></div>

            <div class"row">
                <div class="col-md-10">
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Achievement <span>(*)</span></label>
                                <input type="text" class="form-control" id="" name="txtAchievement" value ="<?php if($b==1){ echo htmlspecialchars($Achievement);} else{ echo htmlspecialchars($server_txtAchievement); } ?>">
                            </div>
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
</form>
</body>
</html>
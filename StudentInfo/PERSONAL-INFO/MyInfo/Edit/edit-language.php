<!DOCTYPE html>

<?php 
include('connection.php');
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
    $x = $_SESSION['delete_LangID'];
}


$qry = "SELECT * FROM languagetbl WHERE LangID ='$x'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $LangID = $qry['LangID'];
                $Language = $qry['Language'];
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
                <li id="resumelink" class="item"><a href="../../Resumelink/resumelink.php">Resumé Link</a></li>
                <li id="applications" class="item"><a href="../../Applications/applications.php">Applications</a></li>
                <li id="search-job" class="item"><a href="../../Search-job/search-job.php">Jobs</a></li>
                <li id="settings" class="item"><a href="../../Settings/settings.php">Settings</a></li>
            </ul>
            <div class="space"></div>
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow"><a href="../personal_info.php">Personal Info</a></li>
                <li class="yellow"><a href="../contacts_info.php">Contacts Info</a></li>
                <li class="yellow"><a href="../work.php">Work</a></li>
                <li class="yellow"><a href="../education.php">Education</a></li>
                <li class="yellow"><a href="../certifications.php">Certifications</a></li>
                <li class="yellow"><a href="../achievements.php">Achievements</a></li>
                <li class="yellow active"><a href="../skills_languages.php">Skills & Languages</a></li>
                <li class="yellow"><a href="../references.php">References</a></li>
                <li class="yellow"><a href="../portfolio.php">Portfolio</a></li>
            </ul>
            <div class="space-1"></div>

                <div class"row">
                    <div class="col-md-10">
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Language <span>(*)</span></label>
                                    <input type="text" class="form-control" id="txtLanguage" name="txtLanguage" value="<?php echo $Language; ?>" >
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol text-center">
                                <div class="form-group">
                                    <label>Proficiency <span>(*)</span></label>
                                    <div class="rating text-center">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
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
    </div>
</form>
</body>

<?php
include('connection.php');

if(isset($_POST['btnSave'])){

    $txtLanguage = $_POST['txtLanguage']; 

    $query = "UPDATE languagetbl SET Language = '$txtLanguage' WHERE LangID = '$LangID'";
    $Result = mysql_query($query);
    echo "
         <script type='text/javascript'>
         location.href='../skills_languages.php'
         </script>
         ";
         unset($session['delete_LangID']);
}
?>

</html>
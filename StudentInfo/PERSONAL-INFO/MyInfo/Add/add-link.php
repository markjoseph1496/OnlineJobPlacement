<!DOCTYPE html>
<?php 
include('connection.php');
session_start();

$x = $_SESSION['StudentID'];

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
                    <li class="yellow"><a href="../education.php">Education</a></li>
                    <li class="yellow"><a href="../certifications.php">Certifications</a></li>
                    <li class="yellow"><a href="../achievements.php">Achievements</a></li>
                    <li class="yellow"><a href="../skills_languages.php">Skills & Languages</a></li>
                    <li class="yellow"><a href="../references.php">References</a></li>
                    <li class="yellow active"><a href="../portfolio.php">Portfolio</a></li>
                </ul>

                <div class"row">
                    <div class="col-md-10">
                        <div class="row field">
                            <div class="col-md-12 fieldcol">
                                <label>URL <span>(*)</span></label>
                                <input type="text" class="form-control" id="txtURL" name="txtURL">
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-12 fieldcol">
                                <label>Name/Title/Caption <span>(*)</span></label>
                                <input type="text" class="form-control" id="txtCaption" name="txtCaption">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="profile_divider"></div>
                    <div class"row field">
                        <div class="col-md-12">
                            <button class="btn btn-lg btn-hg btn-primary" style="float:right;" name ="btnSave">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</form>

<?php
include('connection.php');

if(isset($_POST['btnSave'])){

    $URL = $_POST['txtURL'];
    $Caption = $_POST['txtCaption'];   

   $query = "INSERT INTO urltbl (StudentID,URL,Caption) values  ('$x','$URL','$Caption')";
   $Result = mysql_query($query);
   echo "
         <script type='text/javascript'>
         </script>
         ";
}
?>

</html>
<!DOCTYPE html>
<?php
session_start();
include('../../../connection.php');

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}
else{
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php?id=2';
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

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>



<body id="page-top" class="index bg">
<form  method = "POST">
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
                        <a href="../../../login-student.php?id=1">Sign Out</a>
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
                        <li role="presentation" id="personal_info" class="item"><a href="../myinfo/personal_info.php">My Info</a></li>
                        <li role="presentation" id="resumelink" class="item"><a href="../resumelink/resumelink.php">Resumé Link</a></li>
                        <li role="presentation" id="applications" class="item"><a href="../applications/applications.php">Applications</a></li>
                        <li role="presentation" id="search-job" class="item"><a href="../search-job/search-job.php">Jobs</a></li>
                        <li role="presentation" id="settings" class="item active"><a href="settings.php"><B>Settings</B></a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-center">
                    <label>Your Student ID<h4>008-2012-0805</h4></label>
                </div>
            </div>
            
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow active"><a href="settings.php">Change Password</a></li>
            </ul>
            <div class="space-1"></div>
            
            <div class"row">
                <div class="col-md-10 col-md-12">
                    <div class="row field">
                        <div class="col-md-10 col-sm-9">
                            <div class="row field">
                                <div class="col-md-6 fieldcol">
                                    <div class="form-group">
                                        <label>Current Password <span>(*)</span></label>
                                        <input type="password" class="form-control" id="txtCurrentPassword" name="txtCurrentPassword">
                                    </div>
                                </div>
                            </div>
                            <div class="row field">
                                <div class="col-md-6 col-sm-6 fieldcol">
                                    <div class="form-group">
                                        <label>New Password <span>(*)</span></label>
                                        <input type="password" class="form-control" id="txtNewPassword" name="txtNewPassword">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 fieldcol">
                                    <div class="form-group">
                                        <label>Confirm New Password <span>(*)</span></label>
                                        <input type="password" class="form-control" id="txtConfPassword" name="txtConfPassword">
                                    </div>
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
                        <form method="post">
                            <button class="btn btn-lg btn-hg btn-primary" style="float:right;" name="btnChangePass">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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
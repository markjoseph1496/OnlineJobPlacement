<!DOCTYPE html>
<?php
session_start();
include('connection.php');
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
                    <li role="presentation" id="personal_info" class="item"><a href="../MyInfo/personal_info.php">My Info</a></li>
                    <li role="presentation" id="resumelink" class="item"><a href="../Resumelink/resumelink.php">Resumé Link</a></li>
                    <li role="presentation" id="applications" class="item"><a href="../Applications/applications.php">Applications</a></li>
                    <li role="presentation" id="settings" class="item active"><a href="settings.php"><B>Settings</B></a></li>
                </ul>
                <div class="space"></div>
                <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                    <li class="yellow active"><a href="settings.php">Change Password</a></li>
                </ul>

                <div class"row">
                    <div class="col-md-10 col-md-12">
                        <div class="row field">
                            <div class="col-md-10 col-sm-9">
                                <div class="row field">
                                    <div class="col-md-6 fieldcol">
                                        <label>Current Password <span>(*)</span></label>
                                        <input type="password" class="form-control" id="txtCurrentPassword" name="txtCurrentPassword">
                                    </div>
                                </div>
                                <div class="row field">
                                    <div class="col-md-6 col-sm-6 fieldcol">
                                        <label>New Password <span>(*)</span></label>
                                        <input type="password" class="form-control" id="txtNewPassword" name="txtNewPassword">
                                    </div>
                                    <div class="col-md-6 col-sm-6 fieldcol">
                                        <label>Confirm New Password <span>(*)</span></label>
                                        <input type="password" class="form-control" id="txtConfPassword" name="txtConfPassword">
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
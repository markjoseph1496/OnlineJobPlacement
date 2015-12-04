<?php 
include('../../../connection.php');
session_start();

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

$StudentID = $_SESSION['StudentID'];

$qry = "select * from studentinfotbl where StudentID = '$StudentID'";
$result = mysql_query($qry);

while($qry = mysql_fetch_Array($result))
{
$course = $qry['MajorCourse'];

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
    <link href="../../css/flat-ui.min.css" rel="stylesheet">


    <!-- Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>


<body id="page-top" class="index bg">
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
                        <a class="page-scroll" href="../../../login-student.php?id=1">Sign Out</a>
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
                        <li role="presentation" id="search-job" class="item active"><a href="search-job.php"><B>Jobs</B></a></li>
                        <li role="presentation" id="settings" class="item"><a href="../settings/settings.php">Settings</a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-center">
                    <label>Your Student ID<h4>008-2012-0805</h4></label>
                </div>
            </div>
            <?php
                if(isset($_GET['id'])){
                    echo '
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            Resume submitted.
                        </div>
                    ';
                }
            ?>

            <div class="white-bg">
                <h3>Job Lists</h3>
                <div class="space"></div>
                <div class="row field">
                    <div class="col-md-4">
                        <div class="form-group text-center">
                            <label>Position</label>
                            <select id="" name="" class="form-control">
                                <option value="" selected="selected">- Please select one -</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group text-center">
                            <label>Company</label>
                            <select id="" name="" class="form-control">
                                <option value="" selected="selected">- Please select one -</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group text-center">
                            <label>Location</label>
                            <select id="" name="" class="form-control">
                                <option value="" selected="selected">- Please select one -</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="btn btn-hg btn-primary">Filter Search</div>
                    <div class="btn btn-hg btn-primary">Clear</div>
                </div>
                <div class="divider"></div>

                <div class="row field">
                    <table class="table table-hover">
                        <thead>
                            <tr class="table-color">
                                <th>Position</th>
                                <th>Company</th>
                                <th>Location</th>
                                <th width="20%">&nbsp;</th>
                            </tr>
                        </thead>
                        <?php 

                                $qry = "select  * from comppositiontbl where MajorCourse = '$course'";
                                $result = mysql_query($qry);
                                while($qry = mysql_fetch_array($result))
                                {
                                    $PositionID = $qry['PositionID'];
                                    $position = $qry['PositionLevel'];
                                    $company = $qry['CompanyID'];


                                        $q = "select * from companyinfotbl where CompanyID = '$company'";
                                        $r = mysql_query($q);
                                            while($q = mysql_fetch_array($r))
                                            {
                                            $company_name = $q['CompanyName'];
                                            $location = $q['City'];
                                            echo 
                                            "
                                            <tbody>
                                            <tr>
                                                <td>$position</td>
                                                <td>$company_name</td>
                                                <td>$location</td>
                                                <td>
                                                    <a href='job.php?PID=$PositionID' class='btn btn-primary btnfor-search-job'>
                                                        <i class='fa fa-paper-plane-o fa-1x'></i>
                                                    </a>
                                               </td>
                                            </tr>
                                            </tbody>
                                            ";
                                            }
                                }
                                ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
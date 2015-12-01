<!DOCTYPE html>


<?php 
session_start();
if(is_null($_SESSION['StudentID'])){
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php';
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
                        <a href="../../../index.php?id=SignOut">Sign Out</a>
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
                <li class="yellow"><a href="personal_info.php">Personal Info</a></li>
                <li class="yellow"><a href="contacts_info.php">Contacts Info</a></li>
                <li class="yellow active"><a href="work.php">Work</a></li>
                <li class="yellow"><a href="education.php">Education</a></li>
                <li class="yellow"><a href="certifications.php">Certifications</a></li>
                <li class="yellow"><a href="achievements.php">Achievements</a></li>
                <li class="yellow"><a href="skills_languages.php">Skills & Languages</a></li>
                <li class="yellow"><a href="references.php">References</a></li>
                <li class="yellow"><a href="portfolio.php">Portfolio</a></li>
            </ul>
            <div class="space-1"></div>

            <div class="col-md-10">
                <div class="row field">
                    <div class="col-md-6">
                        <label>Work Options</label>
                        <div class="bootstrap-switch-square">
                            <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                            <B>Willing to work night shifts</B>
                        </div>
                        <div class="space-2"></div>

                        <div class="bootstrap-switch-square">
                            <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                            <B>Willing to relocate</B>
                        </div>
                        <div class="space-2"></div>

                        <div class="bootstrap-switch-square">
                            <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                            <B>Looking for OJT position</B>
                        </div>
                        <div class="space-2"></div>

                        <div class="bootstrap-switch-square">
                            <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                            <B>Willing to work overseas</B>
                        </div>
                        <div class="space-2"></div>
                    </div>

                    <div class="col-md-6">
                        <label>Objectives</label>
                        <textarea class="form-control" id="" name="" rows="7"></textarea>
                        <span class="counter">120 characters remaining.</span>
                    </div>
                </div>

                <div class"row field">
                    <div class="col-md-6">
                        &nbsp;
                    </div>
                    <div class="col-md-6">
                        <form method="post">
                            <button class="btn btn-lg btn-block btn-primary" style="float:right;">Save</button>
                        </form>
                    </div>
                </div>

                <div class="divider-1"></div>
               
                <div class="row field">
                    <div class="col-md-6 fieldcol">
                        <label>Work Experiences</label>
                    </div>
                    <div class="col-md-6 fieldcol">
                        <a href="add/add-work_experience.php" class="btnforadding" style="float:right;">
                            <span class="fa fa-plus-square"> Add Work Experience</span>
                        </a>
                    </div>
                </div>

                <table class="table segment table-hover">
                    <thead>
                        <tr class="table-color">
                            <th>Company</th>
                            <th>Position</th>
                            <th>Industry</th>
                            <th>Specialization</th>
                            <th>From - To</th>
                            <th width="15%">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button href="" class="btn btn-danger btnformaintenance">
                                    <i class="fa fa-trash fa-1x"></i>
                                </button>
                                <button href="" class="btn btn-default btnformaintenance">
                                    <i class="fa fa-pencil-square-o fa-1x"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="field">
                <div class="invisible-line"></div>
            </div>
        </div>
    </div>

    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/flat-ui.min.js"></script>
    <script src="../../js/application.js"></script>
</body>
</html>
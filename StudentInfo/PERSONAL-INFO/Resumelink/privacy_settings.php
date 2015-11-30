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
            <ul class="nav nav-tabs">
                <li role="presentation" id="my_info" class="item"><a href="../myinfo/personal_info.php">My Info</a></li>
                <li role="presentation" id="resume_link" class="item active"><a href="resumelink.php"><B>Resumé Link</B></a></li>
                <li role="presentation" id="applications" class="item"><a href="../applications/applications.php">Applications</a></li>
                <li role="presentation" id="search-job" class="item"><a href="../search-job/search-job.php">Jobs</a></li>
                <li role="presentation" id="settings" class="item"><a href="../settings/settings.php">Settings</a></li>
            </ul>
            <div class="space"></div>
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow"><a href="resumelink.php">Resume Link</a></li>
                <li class="yellow"><a href="background.php">Background</a></li>
                <li class="yellow active"><a href="privacy_settings.php">Privacy Settings</a></li>
                <li class="yellow"><a href="print.php">Print/Share</a></li>
            </ul>
            <div class="space-1"></div>

            <div class"row">
                <div class="col-md-10">
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Resumé Link URL</label>
                        </div>
                        <div class="field">
                            <div class="col-md-4">
                                <a href="../../../resumelinkprofile.php" target="_blank">
                                    http://markjoseph1496.ojpms.com <i class="fa fa-external-link-square"></i>
                                </a>  
                            </div>             
                        </div>
                        <div class="row">
                            <div class="space">
                                &nbsp;
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <label>Settings</label>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-10 fieldcol">
                                <label>Enable Public Resumelink</label><br>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <em><B>Please note that your name is always displayed.</B></em>
                                </div>
                            </div>
                        </div>
                        <div class="row field"> 
                            <div class="col-md-3">
                                <label>Personal Info</label>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Photo</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Birthdate</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Nationality</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Gender</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Civil Status</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Social Networking</B>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Contact Info</label>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Email</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Mobile</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Home Number</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Wok Number</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Address</B>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Work</label>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Work Options</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Objectives</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Work Experience</B>
                                </div>
                            </div> 
                        </div>
                        <div class="space"></div>
                        <div class="row field">
                            <div class="col-md-3">
                                <label>Education</label>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Schools</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Seminars</B>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>&nbsp;</label>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>References</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Portfolio</B>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>&nbsp;</label>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Certifications</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Achievements</B>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Skills & Languages</label>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Skills</B>
                                </div>
                                <div class="space-2"></div>
                                <div class="bootstrap-switch-square">
                                    <input type="checkbox" checked data-toggle="switch" name="square-switch" id="switch-02" />
                                    <B>Languages</B>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
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
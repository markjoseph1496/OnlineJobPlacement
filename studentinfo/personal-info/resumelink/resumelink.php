<!DOCTYPE html>
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
                        <li role="presentation" id="my_info" class="item"><a href="../myinfo/personal_info.php">My Info</a></li>
                        <li role="presentation" id="resume_link" class="item active"><a href="resumelink.php"><B>Resumé Link</B></a></li>
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
                <li class="yellow active"><a href="resumelink.php">Resume Link</a></li>
                <li class="yellow"><a href="background.php">Background</a></li>
                <li class="yellow"><a href="privacy_settings.php">Privacy Settings</a></li>
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
                                <a href="../../../ResumelinkProfile.php" target="_blank">
                                    http://markjoseph1496.ojpms.com <i class="fa fa-external-link-square"></i>
                                </a>  
                            </div>             
                        </div>
                        <div class="row">
                            <div class="space">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>About Me</label>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-12 fieldcol">
                            <div class="form-group">
                                <textarea class="form-control" name="" id="" rows="10"></textarea>
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
                            <button class="btn btn-lg btn-hg btn-primary" style="float:right;">Save</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>
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

    <div class="container">
        <div class="white-holder">
            <ul class="nav nav-tabs">
                <li role="presentation" id="my_info" class="item"><a href="../MyInfo/personal_info.php">My Info</a></li>
                <li role="presentation" id="resume_link" class="item active"><a href="resumelink.php"><B>Resumé Link</B></a></li>
                <li role="presentation" id="applications" class="item"><a href="../Applications/applications.php">Applications</a></li>
                <li role="presentation" id="settings" class="item"><a href="../Settings/settings.php">Settings</a></li>
            </ul>
            <div class="space"></div>
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow active"><a href="resumelink.php">Resume Link</a></li>
                <li class="yellow"><a href="background.php">Background</a></li>
                <li class="yellow"><a href="privacy_settings.php">Privacy Settings</a></li>
                <li class="yellow"><a href="print.php">Print/Share</a></li>
            </ul>

            <div class"row">
                <div class="col-md-10">
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Resumé Link URL</label>
                        </div>
                        <div class="field">
                            <div class="col-md-3">
                                http://markjoseph1496.jobs180.com
                            </div>
                            <div class="col-md-2">
                                <a href="../../../ResumelinkProfile.php" class="btnforadding" target="_blank">
                                    <i class="fa fa-external-link"> Preview</i>
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
                            <textarea name="" id="" cols="100" rows="10"></textarea>
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
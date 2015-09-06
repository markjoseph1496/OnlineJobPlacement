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
            <li role="presentation" id="myinfo" class="item active"><a href="personal_info.php"><B>My Info</B></a></li>
            <li role="presentation" id="resumelink" class="item"><a href="../Resumelink/resumelink.php">Resumé Link</a></li>
            <li role="presentation" id="applications" class="item"><a href="../Applications/applications.php">Applications</a></li>
            <li role="presentation" id="settings" class="item"><a href="../Settings/settings.php">Settings</a></li>
        </ul>
        <div class="space"></div>
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


        <div class="col-md-10">
            <div class="row field">
                <div class="col-md-6 fieldcol">
                    <label>Work Options</label>
                    <div class="field">
                        <div class="col-md-3">
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9"><h6>Willing to work night shifts</h6></div>
                    </div>

                    <div class="field">
                        <div class="col-md-3">
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9"><h6>Willing to relocate</h6></div>
                    </div>

                    <div class="field">
                        <div class="col-md-3">
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9"><h6>Looking for OJT position</h6></div>
                    </div>

                    <div class="field">
                        <div class="col-md-3">
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9"><h6>Willing to work overseas</h6></div>
                    </div>
                </div>

                <div class="col-md-6 fieldcol">
                    <div class="fieldcol">
                        <label>Objectives</label>
                        <textarea id="" name="" rows="6" style="margin: 0px; height: 126px; width: 381px;"></textarea>
                    </div>
                </div>

                <div class"row field">
                    <div class="col-md-15">
                        <form method="post">
                            <button class="btn btn-lg btn-hg btn-primary" style="float:right;">Save Objective</button>
                        </form>
                    </div>
                </div>
            </div><br><br>
            
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
            <div class="row field">
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
                            <td>arfewrfe</td>
                            <td>fasf</td>
                            <td>rwerfe</td>
                            <td>rewfeddt</td>
                            <td>09267694941</td>
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
        </div>
        <div class="field">
            <div class="invisible-line"></div>
        </div>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>

<?php 

session_start();
if(is_null($_SESSION['StudentID'])){
    echo "
        <script type='text/javascript'>
        location.href='../../../../login-student.php';
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
            <li role="presentation" class="item"><a href="../../Search-job/search-job.php">Jobs</a></li>
            <li id="settings" class="item"><a href="../../Settings/settings.php">Settings</a></li>
        </ul>
        <div class="space"></div>
        <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
            <li class="yellow"><a href="../personal_info.php">Personal Info</a></li>
            <li class="yellow"><a href="../contacts_info.php">Contacts Info</a></li>
            <li class="yellow active"><a href="../work.php">Work</a></li>
            <li class="yellow"><a href="../education.php">Education</a></li>
            <li class="yellow"><a href="../certifications.php">Certifications</a></li>
            <li class="yellow"><a href="../achievements.php">Achievements</a></li>
            <li class="yellow"><a href="../skills_languages.php">Skills & Languages</a></li>
            <li class="yellow"><a href="../references.php">References</a></li>
            <li class="yellow"><a href="../portfolio.php">Portfolio</a></li>
        </ul>
        <div class="space-1"></div>

        <div class"row">
            <div class="col-md-10">
                <div class="row field">
                    <div class="col-md-6 fieldcol">
                        <div class="form-group">
                            <label>Company Name <span>(*)</span></label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                    <div class="col-md-6 fieldcol">
                        <div class="form-group">
                            <label>Company Website</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-6 fieldcol">
                        <div class="form-group">
                            <label>Industry <span>(*)</span></label>
                            <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                <option value></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 fieldcol">
                        <div class="form-group">
                            <label>Duration</label><br>
                            <label><input type="checkbox" name="" value=""> Currently Work Here</label>
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-3 fieldcol">
                        <div class="form-group">
                            <label>From <span>(*)</span></label>
                            <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                <option value></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 fieldcol">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                <option value></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 fieldcol">
                        <div class="form-group">
                            <label>To <span>(*)</span></label>
                            <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                <option value></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 fieldcol">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                <option value></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-6 fieldcol">
                        <div class="form-group">
                            <label>Position Title <span>(*)</span></label>
                            <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                <option value></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 fieldcol">
                        <div class="form-group">
                            <label>Position Level <span>(*)</span></label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-6 fieldcol">
                        <div class="form-group">
                            <label>Specialization <span>(*)</span></label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                    <div class="col-md-3 fieldcol">
                        <div class="form-group">
                            <label>Monthly Salary</label><br>
                            <select id="" name="" class="form-control" style="width:100%; height:34px;">
                                <option value></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 fieldcol">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <div class="form-group">
                            <label>Nature of Work</label><br>
                            <textarea class="form-control" id="" name="" rows="5"></textarea>
                            <span class="counter">150 characters remaining.</span>
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
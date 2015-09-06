<!DOCTYPE html>

<?php 
include('connection.php');
session_start();

$x = $_SESSION['StudentID'];

$URLID = 'URLID';
$URL = 'URL';
$Caption = 'Caption';

$qry = "SELECT * FROM urltbl WHERE StudentID ='$x'";
$result = mysql_query($qry);
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
                <li class="yellow"><a href="work.php">Work</a></li>
                <li class="yellow"><a href="education.php">Education</a></li>
                <li class="yellow"><a href="certifications.php">Certifications</a></li>
                <li class="yellow"><a href="achievements.php">Achievements</a></li>
                <li class="yellow"><a href="skills_languages.php">Skills & Languages</a></li>
                <li class="yellow"><a href="references.php">References</a></li>
                <li class="yellow active"><a href="portfolio.php">Portfolio</a></li>
            </ul>

            <div class"row">
                <div class="col-md-10">
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Documents</label>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <a href="add/add-document.php" class="btnforadding" style="float:right;">
                                <span class="fa fa-plus-square"> Add Document</span>
                            </a>
                        </div>
                    </div>

                    <div class="row field">
                        <table class="table segment table-hover">
                            <thead>
                            <tr class="table-color">
                                <th>File</th>
                                <th width="15%">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>sdfdsfs</td>
                                    <form method = "POST">
                                    <input type="hidden" name="delete_DocumentID" value="" />
                                    <td>
                                        <button name ="btnDelete" href="" class="btn btn-danger btnformaintenance">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </button>
                                        <button name ="btnEdit" href="" class="btn btn-default btnformaintenance">
                                            <i class="fa fa-pencil-square-o fa-1x"></i>
                                        </button>
                                    </td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Links</label>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <a href="add/add-link.php" class="btnforadding" style="float:right;">
                                <span class="fa fa-plus-square"> Add Links</h6></span>
                            </a>
                        </div>
                    </div>

                    <div class="row field">
                        <table class="table segment table-hover">
                            <thead>
                                <tr class="table-color">
                                    <th>URL</th>
                                    <th>Caption</th>
                                    <th width="15%">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php
                                        while($rows = mysql_fetch_array($result)){
                                    ?>
                                        <tr>
                                  
                                    <td><?php echo $rows[$URL]; ?></td>
                                    <td><?php echo $rows[$Caption]; ?></td>

                                    <form method = "POST">
                                    <input type="hidden" name="delete_URLID" value="<?php echo $rows['URLID']; ?>" />
                                    <td>
                                        <button name ="btnDelete" href="" class="btn btn-danger btnformaintenance">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </button>
                                        <button name ="btnEdit" href="" class="btn btn-default btnformaintenance">
                                            <i class="fa fa-pencil-square-o fa-1x"></i>
                                        </button>
                                    </td>
                                    </form>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="invisible-line"></div>
            </div>
        </div>
    </div>
</body>

<?php
include('connection.php');

if(isset($_POST['btnDelete'])){

    $Z = $_POST['delete_URLID'];

    $query = "DELETE FROM urltbl WHERE URLID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='portfolio.php';
            </script>
            ";
} 

if(isset($_POST['btnEdit'])){
    $Z = $_POST['delete_URLID'];
    $_SESSION['delete_URLID'] = $Z;
    echo "
            <script type='text/javascript'>
            location.href='Edit/edit-link.php';
            </script>
            ";
} 
?>


</html>
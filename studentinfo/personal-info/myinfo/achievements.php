<!DOCTYPE html>
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
    

$AchievementID= 'AchievementID';
$Achievements = 'Achievements';

$qry = "SELECT * FROM achievementstbl WHERE StudentID ='$StudentID'";
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

    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/bootbox.min.js"></script>

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
    <script>
            $(document).on("click", ".deleteAchievement", function(result) {
                bootbox.confirm({
                  title: 'Delete',
                  message: 'Are you sure you want to delete this Achievement?',
                  buttons: {
                      'cancel': {
                          label: 'Cancel',
                          
                      },
                      'confirm': {
                          label: 'Delete',
                          className: 'btn-danger pull-right'
                      }
                  },
                  callback: function(result) {
                      if (result) {
                           window.location = $("a[data-bb='confirmDeleteAchievement']").attr('href');
                      }
                  }
              });
            });
    </script>
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
                <li class="yellow"><a href="work.php">Work</a></li>
                <li class="yellow"><a href="education.php">Education</a></li>
                <li class="yellow"><a href="certifications.php">Certifications</a></li>
                <li class="yellow active"><a href="achievements.php">Achievements</a></li>
                <li class="yellow"><a href="skills_languages.php">Skills & Languages</a></li>
                <li class="yellow"><a href="references.php">References</a></li>
                <li class="yellow"><a href="portfolio.php">Portfolio</a></li>
            </ul>
            <div class="space-1"></div>

            <div class"row">
                <div class="col-md-10">
                    <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        if($id=="AchievementEdit"){
                            echo '<div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            Achievement successfully updated.
                            </div>';
                        }
                        elseif($id=="AchievementDelete"){
                            echo '<div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            Achievement successfully deleted.
                            </div>';
                        }
                        elseif($id=="AchievementAdd"){
                            echo '<div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            Achievement successfully added.
                            </div>';
                        }
                    }
                    ?>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Achievements</label>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <a href="add/add-achievement.php" class="btnforadding" style="float:right;">
                                <i class="fa fa-plus-square"> Add Achievement</i>
                            </a>
                        </div>
                    </div>

                    <div class="row field">
                        <table class="table segment table-hover">
                            <thead>
                                <tr class="table-color">
                                    <th>Achievement</th>
                                    <th width="15%">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        $ctr = 0;
                                        while($rows = mysql_fetch_array($result)){
                                        $ctr++;
                                    ?>
                                <tr>

                                    <td><?php echo $rows[$Achievements]; ?></td>
                                    <td>
                                       <a href=# class="btn btn-danger btnformaintenance deleteAchievement">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </a>
                                        <a data-bb="confirmDeleteAchievement" class="bb-alert alert alert-info" style="display: none;" href="delete.php?delete_AchievementID=<?php echo $rows['AchievementID'];?>">
                                        
                                        <a href="edit/edit-achievement.php?EditAchievementID=<?php echo $rows['AchievementID'];?>" class="btn btn-default btnformaintenance">
                                            <i class="fa fa-pencil-square-o fa-1x"></i>
                                        </a>
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
</html>
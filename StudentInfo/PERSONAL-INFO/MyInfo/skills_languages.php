<!DOCTYPE html>

<?php 
include('../../../connection.php');
session_start();

$x = $_SESSION['StudentID'];

if(is_null($x)){
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php';
        </script>
        ";
}

$SkillID = 'SkillID';
$Skill = 'Skill';
$YearOfExperience = 'YearOfExperience';

$LangID = 'LanguageID';
$Language = 'Language';


$qry1 = "SELECT * FROM skilltbl WHERE StudentID ='$x'";
$result1 = mysql_query($qry1);

$qry2 = "SELECT * FROM languagetbl WHERE StudentID ='$x'";
$result2 = mysql_query($qry2);
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
                <li role="presentation" id="myinfo" class="item active"><a href="personal_info.php"><B>My Info</B></a></li>
                <li role="presentation" id="resumelink" class="item"><a href="../resumelink/resumelink.php">Resumé Link</a></li>
                <li role="presentation" id="applications" class="item"><a href="../applications/applications.php">Applications</a></li>
                <li role="presentation" id="search-job" class="item"><a href="../search-job/search-job.php">Jobs</a></li>
                <li role="presentation" id="settings" class="item"><a href="../settings/settings.php">Settings</a></li>
            </ul>
            <div class="space"></div>
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow"><a href="personal_info.php">Personal Info</a></li>
                <li class="yellow"><a href="contacts_info.php">Contacts Info</a></li>
                <li class="yellow"><a href="work.php">Work</a></li>
                <li class="yellow"><a href="education.php">Education</a></li>
                <li class="yellow"><a href="certifications.php">Certifications</a></li>
                <li class="yellow"><a href="achievements.php">Achievements</a></li>
                <li class="yellow active"><a href="skills_languages.php">Skills & Languages</a></li>
                <li class="yellow"><a href="references.php">References</a></li>
                <li class="yellow"><a href="portfolio.php">Portfolio</a></li>
            </ul>
            <div class="space-1"></div>

            <div class"row">
                <div class="col-md-10">
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Skills</label>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <a href="add/add-skill.php" class="btnforadding" style="float:right;">
                                <span class="fa fa-plus-square"> Add Skill</span>
                            </a>
                        </div>
                    </div>

                    <div class="row field">
                        <table class="table segment table-hover">
                            <thead>
                                <tr class="table-color">
                                    <th>Skill</th>
                                    <th>Year of Experience</th>
                                    <th class="text-center">Proficiency</th>
                                    <th width="15%">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                        while($rows = mysql_fetch_array($result1)){
                                    ?>
                                        <tr>
                                  
                                    <td><?php echo $rows[$Skill]; ?></td>
                                    <td><?php echo $rows[$YearOfExperience]; ?></td>
                                    <td class="rating text-center">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </td>
                                    <form method = "POST">
                                    <input type="hidden" name="delete_SkillID" value="<?php echo $rows['SkillID']; ?>" />
                                    <td>
                                        <button name ="btnDeleteSkill" href="" class="btn btn-danger btnformaintenance">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </button>
                                        <button name ="btnEditSkill" href="" class="btn btn-default btnformaintenance">
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

                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Languages</label>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <a href="add/add-language.php" class="btnforadding" style="float:right;">
                                <span class="fa fa-plus-square"> Add Language</span>
                            </a>
                        </div>
                    </div>

                    <div class="row field">
                        <table class="table segment table-hover">
                            <thead>
                                <tr class="table-color">
                                    <th>Language</th>
                                    <th class="text-center">Written Proficiency</th>
                                    <th class="text-center">Spoken Proficiency</th>
                                    <th width="15%">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                        while($rows = mysql_fetch_array($result2)){
                                    ?>
                                        <tr>
                                  
                                    <td><?php echo $rows[$Language]; ?></td>
                                    <td class="rating text-center">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </td>
                                    <td class="rating text-center">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </td>
                                    <form method = "POST">
                                    <input type="hidden" name="delete_LangID" value="<?php echo $rows['LangID']; ?>" />
                                    <td>
                                        <button name ="btnDeleteLang" href="" class="btn btn-danger btnformaintenance">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </button>
                                        <button name ="btnEditLang" href="" class="btn btn-default btnformaintenance">
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
include('../../../connection.php');

if(isset($_POST['btnDeleteSkill'])){

    $Z = $_POST['delete_SkillID'];

    $query = "DELETE FROM skilltbl WHERE SkillID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='skills_languages.php';
            </script>
            ";
} 

if(isset($_POST['btnEditSkill'])){
    $Z = $_POST['delete_SkillID'];
    $_SESSION['delete_SkillID'] = $Z;
    echo "
            <script type='text/javascript'>
            location.href='Edit/edit-skill.php';
            </script>
            ";
} 

if(isset($_POST['btnDeleteLang'])){

    $Z = $_POST['delete_LangID'];

    $query = "DELETE FROM languagetbl WHERE LangID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='skills_languages.php';
            </script>
            ";
} 

if(isset($_POST['btnEditLang'])){
    $Z = $_POST['delete_LangID'];
    $_SESSION['delete_LangID'] = $Z;
    echo "
            <script type='text/javascript'>
            location.href='Edit/edit-language.php';
            </script>
            ";
} 

?>

</html>
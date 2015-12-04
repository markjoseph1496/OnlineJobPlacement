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


$SchoolID = 'SchoolID';
$School = 'School';
$Attainment = 'Attainment';
$Course = 'Course';
$Graduated = 'Graduated';

$SeminarID = 'SeminarID';
$Seminar = 'Seminar';
$YearAttended = 'YearAttended';

$qry = "SELECT * FROM schooltbl WHERE StudentID ='$StudentID' AND _Default = '0'";
$result = mysql_query($qry);

$qry1 = "SELECT * FROM seminartbl WHERE StudentID ='$StudentID'";
$result1 = mysql_query($qry1);

$qry2 = "SELECT * FROM schooltbl WHERE StudentID = '$StudentID' AND _Default = '1'";
$result2 = mysql_query($qry2);

while($qry2 = mysql_fetch_Array($result2))
        {       
                $SchoolID1 = $qry2['SchoolID'];
                $StudentID1 = $qry2['StudentID'];
                $School1 = $qry2['School'];
                $Attainment1 = $qry2['Attainment'];
                $Course1 = $qry2['Course'];
                $Graduated1 = $qry2['Graduated'];
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
            $(document).on("click", ".deleteSchool", function(result) {
                bootbox.confirm({
                  title: 'Delete',
                  message: 'Are you sure you want to delete this Information?',
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
                           window.location = $("a[data-bb='confirmDeleteSchool']").attr('href');
                      }
                  }
              });
            });

            $(document).on("click", ".deleteSeminar", function(result) {
                bootbox.confirm({
                  title: 'Delete',
                  message: 'Are you sure you want to delete this Information?',
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
                           window.location = $("a[data-bb='confirmDeleteSeminar']").attr('href');
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
                <li class="yellow active"><a href="education.php">Education</a></li>
                <li class="yellow"><a href="certifications.php">Certifications</a></li>
                <li class="yellow"><a href="achievements.php">Achievements</a></li>
                <li class="yellow"><a href="specialization_languages.php">Specialization & Languages</a></li>
                <li class="yellow"><a href="references.php">References</a></li>
                <li class="yellow"><a href="portfolio.php">Portfolio</a></li>
            </ul>
            <div class="space-1"></div>

            <div class"row">
                <div class="col-md-10">
                    <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        if($id=="SchoolEdited"){
                            echo '<div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            School Information successfully updated.
                            </div>';
                        }
                        elseif($id=="SchoolDeleted"){
                            echo '<div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            School Information successfully deleted.
                            </div>';
                        }
                        elseif($id=="SchoolAdd"){
                            echo '<div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            School Information successfully added.
                            </div>';
                        }
                        elseif($id=="SeminarAdd"){
                            echo '<div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            Seminar Information successfully added.
                            </div>';
                        }
                        elseif($id=="SeminarEdit"){
                            echo '<div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            Seminar Information successfully updated.
                            </div>';
                        }
                        elseif($id=="SeminarDeleted"){
                            echo '<div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> 
                            Seminar Information successfully deleted.
                            </div>';
                        }
                    }
                    ?>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                             <input type="hidden" name="ID"/>
                            <label>Schools</label>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <a href="add/add-school.php" class="btnforadding" style="float:right;">
                                <span class="fa fa-plus-square"> Add School</span>
                            </a>
                        </div>
                    </div>

                    <div class="row field">
                        <table class="table segment table-hover">
                            <thead>
                                <tr class="table-color">
                                    <th>School</th>
                                    <th>Attainment</th>
                                    <th>Course</th>
                                    <th>Graduated On</th>
                                    <th width="15%">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  
                                    <td><?php echo $School1; ?></td>
                                    <td><?php echo $Attainment1; ?></td>
                                    <td><?php echo $Course1; ?></td>
                                    <td><?php
                                    if(substr($Graduated1, 0,2)==1){
                                        echo "January" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==2){
                                        echo "February" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==3){
                                        echo "March" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==4){
                                        echo "April" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==5){
                                        echo "May" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==6){
                                        echo "June" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==7){
                                        echo "July" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==8){
                                        echo "August" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==9){
                                        echo "September" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==10){
                                        echo "October" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==11){
                                        echo "November" . substr($Graduated1, 2,5);
                                    }
                                    if(substr($Graduated1, 0,2)==12){
                                        echo "December" . substr($Graduated1, 2,5);
                                    }
                                    ; ?>
                                    </td>
                                    <td>
                                        <a href="edit/edit-school.php?EditSchoolID=<?php echo $SchoolID1;?>" class="btn btn-default btnformaintenance">
                                            <i class="fa fa-pencil-square-o fa-1x"></i>
                                        </a> 
                                    </td>
                                <?php
                                        $ctr = 0;
                                        while($rows = mysql_fetch_array($result)){
                                        $ctr++;
                                    ?>
                                <tr>
                                  
                                    <td><?php echo $rows[$School]; ?></td>
                                    <td><?php echo $rows[$Attainment]; ?></td>
                                    <td><?php echo $rows[$Course]; ?></td>
                                    <td>
                                    <?php
                                    if(substr($rows[$Graduated], 0,2)==1){
                                        echo "January" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==2){
                                        echo "February" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==3){
                                        echo "March" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==4){
                                        echo "April" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==5){
                                        echo "May" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==6){
                                        echo "June" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==7){
                                        echo "July" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==8){
                                        echo "August" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==9){
                                        echo "September" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==10){
                                        echo "October" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==11){
                                        echo "November" . substr($rows[$Graduated], 2,5);
                                    }
                                    if(substr($rows[$Graduated], 0,2)==12){
                                        echo "December" . substr($rows[$Graduated], 2,5);
                                    }
                                    ; ?>
                                    </td>
                                    <td>
                                        <a href=# class="btn btn-danger btnformaintenance deleteSchool">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </a>
                                        <a data-bb="confirmDeleteSchool" class="bb-alert alert alert-info" style="display: none;" href="delete.php?delete_SchoolID=<?php echo $rows['SchoolID'];?>">
                                        
                                        <a href="edit/edit-school.php?EditSchoolID=<?php echo $rows['SchoolID'];?>" class="btn btn-default btnformaintenance">
                                            <i class="fa fa-pencil-square-o fa-1x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Seminars</label>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <a href="add/add-seminar.php" class="btnforadding" style="float:right;">
                                <span class="fa fa-plus-square"> Add Seminar</span>
                            </a>
                        </div>
                    </div>

                    <div class="row field">
                        <table class="table segment table-hover">
                            <thead>
                                <tr class="table-color">
                                    <th>Seminar</th>
                                    <th>Year Attended</th>
                                    <th width="15%">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                        $ctr=0;
                                        while($rows = mysql_fetch_array($result1)){
                                        $ctr++;
                                    ?>
                                        <tr>
                                  
                                    <td><?php echo $rows[$Seminar]; ?></td>
                                    <td><?php echo $rows[$YearAttended]; ?></td>
                                    <td>
                                        <a href=# class="btn btn-danger btnformaintenance deleteSeminar">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </a>
                                        <a data-bb="confirmDeleteSeminar" class="bb-alert alert alert-info" style="display: none;" href="delete.php?delete_SeminarID=<?php echo $rows['SeminarID'];?>">
                                        
                                        <a href="edit/edit-seminar.php?EditSerminarID=<?php echo $rows['SeminarID'];?>" class="btn btn-default btnformaintenance">
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

<?php
include('../../../connection.php');

if(isset($_POST['delete_flagSchool'])){
    if($_POST['delete_flagSchool'] == "true"){
        $Z = $_POST['delete_idSchool'];

    $query = "DELETE FROM schooltbl WHERE SchoolID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='education.php';
            </script>
            ";
}

    elseif($_POST['delete_flagSchool'] == "edit"){
        $Z = $_POST['delete_idSchool'];
        $_SESSION['delete_SchoolID'] = $Z;
        echo "
            <script type='text/javascript'>
            location.href='Edit/edit-school.php';
            </script>
            ";
        }
}

if(isset($_POST['delete_flagSeminar'])){
    if($_POST['delete_flagSeminar'] == "true"){
        $Z = $_POST['delete_idSeminar'];

    $query = "DELETE FROM seminartbl WHERE SeminarID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='education.php';
            </script>
            ";
} 
    elseif($_POST['delete_flagSeminar'] == "edit"){
        $Z = $_POST['delete_idSeminar'];
        $_SESSION['delete_SeminarID'] = $Z;
        echo "
            <script type='text/javascript'>
            location.href='Edit/edit-seminar.php';
            </script>
            ";
        }
}

?>
</html>
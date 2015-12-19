<!DOCTYPE html>
<?php 
include('../../connection.php');
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

    <!-- Basic -->
    <title>OJPMS</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../../css/slicknav.css" media="screen">

    <!-- CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/colors/jade.css" title="jade" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/green.css" title="green" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/blue.css" title="blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/beige.css" title="beige" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/cyan.css" title="cyan" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/orange.css" title="orange" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/peach.css" title="peach" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/pink.css" title="pink" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/purple.css" title="purple" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/sky-blue.css" title="sky-blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen" />

    <!-- JS  -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/modernizrr.js"></script>
    <script type="text/javascript" src="../../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../../js/count-to.js"></script>
    <script type="text/javascript" src="../../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.slicknav.js"></script>

    <script type="text/javascript" src="../../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.textillate.js"></script>

    <script type="text/javascript" src="../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../../js/mediaelement-and-player.js"></script>
</head>

<body>
    <div id="container">
        <!-- Start Header Section -->
        <div class="hidden-header"></div>
        <header class="clearfix">
        <!-- Start Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Start Contact Info 
                            <ul class="contact-details">
                                <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                                </li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                                </li>
                                <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                                </li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-5">
                        <!-- Start Social Links -->
                            <ul class="social-list">
                               <li class="profile-name">
                                    <i class="fa fa-user"></i> Hello, <b>Aira Jane Cruz</b>                               
                                </li>
                            </ul>
                            <!-- End Social Links -->
                        </div>
                        <!-- .col-md-6 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .top-bar -->
            <!-- End Top Bar -->

            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="">Online JPMS</a>
                    </div>
                    <div class="navbar-collapse collapse">
                    <!-- Sign-out -->
                        <div class="signout-side">
                               <a class="show-signout"><i class="fa fa-sign-out"></i></a>
                        </div>
                     <!-- End Sign-out -->
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="personal-info.php">My Info</a>
                                <ul class="dropdown">
                                    <li><a href="personal-info.php">Personal Info</a></li>
                                    <li><a href="contacts-info.php">Contacts Info</a></li>
                                    <li><a href="work.php">Work</a></li>
                                    <li><a class="active" href="education.php">Education</a></li>
                                    <li><a href="certifications.php">Certifications</a></li>
                                    <li><a href="achievements.php">Achievements</a></li>
                                    <li><a href="skills-and-languages.php">Skills & Languages</a></li>
                                    <li><a href="references.php">References</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../resumelink/resume-link.php">Resume Link</a>
                                <ul class="dropdown">
                                    <li><a href="../resumelink/resume-link.php">Resume Link</a></li>
                                    <li><a href="../resumelink/background.php">Background</a></li>
                                    <li><a href="../resumelink/print-share.php">Print/Share</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../applications/applications.php">Applications</a>
                            </li>
                            <li>
                                <a href="../search-job/search-job.php">Jobs</a>
                            </li>
                            <li>
                                <a href="../settings/privacy-settings.php">Settings</a>
                                <ul class="dropdown">
                                    <li><a href="../settings/privacy-settings.php">Privacy Settings</a></li>
                                    <li><a href="../settings/pass-settings.php">Password Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="personal-info.php">My Info</a>
                        <ul class="dropdown">
                            <li><a href="personal-info.php">Personal Info</a></li>
                            <li><a href="contacts-info.php">Contacts Info</a></li>
                            <li><a href="work.php">Work</a></li>
                            <li><a class="active" href="education.php">Education</a></li>
                            <li><a href="certifications.php">Certifications</a></li>
                            <li><a href="achievements.php">Achievements</a></li>
                            <li><a href="skills-and-languages.php">Skills & Languages</a></li>
                            <li><a href="references.php">References</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../resumelink/resume-link.php">Resume Link</a>
                        <ul class="dropdown">
                            <li><a href="../resumelink/resume-link.php">Resume Link</a></li>
                            <li><a href="../resumelink/background.php">Background</a></li>
                            <li><a href="../resumelink/print-share.php">Print/Share</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../applications/applications.php">Applications</a>
                    </li>
                    <li>
                        <a href="../search-job/search-job.php">Jobs</a>
                    </li>
                    <li>
                        <a href="../settings/privacy-settings.php">Settings</a>
                        <ul class="dropdown">
                            <li><a href="../settings/privacy-settings.php">Privacy Settings</a></li>
                            <li><a href="../settings/pass-settings.php">Password Settings</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../login-student.php?id=1"><i class="fa fa-sign-out"></i> Sign Out</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

        <div class="page-banner no-subtitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Education</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li>Education</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <div class="row sidebar-page">
                    <!-- Page Content -->
                    <div class="col-md-9 page-content">
                        <div class="row">
                            <div class="classic-testimonials">
                                <!-- Single Testimonial -->
                                <div class="row field">
                                    <div class="col-md-6 fieldcol">
                                        <h4>Schools<span class="head-line"></span></h4>
                                    </div>
                                    <div class="col-md-6 fieldcol">
                                        <a href="add/add-school.php" class="btnforadding" style="float:right;">
                                            <span class="fa fa-plus-square"> Add School</span>
                                        </a>
                                    </div>
                                </div>

                                <table class="table segment table-hover">
                                    <thead>
                                        <tr class="table-color">
                                            <th>School</th>
                                            <th>Attainment</th>
                                            <th>Course</th>
                                            <th width="15%">Graduated On</th>
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
                                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                                <div class="row field">
                                    <div class="col-md-6 fieldcol">
                                        <h4>Seminars<span class="head-line"></span></h4>
                                    </div>
                                    <div class="col-md-6 fieldcol">
                                        <a href="add/add-seminar.php" class="btnforadding" style="float:right;">
                                            <span class="fa fa-plus-square"> Add Seminar</span>
                                        </a>
                                    </div>
                                </div>

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
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Content -->

                    <!--Sidebar-->
                    <div class="col-md-3 sidebar right-sidebar">
                        <!-- Search Widget -->
                        <div class="call-action call-action-boxed call-action-style2 clearfix">
                            (*) Note: Required fields.
                        </div>
                    </div>
                    <!--End sidebar-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script>
</body>

<?php
include('../../connection.php');

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
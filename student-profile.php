<?php
include('connection.php');
session_start();
$StudentID = $_GET['id'];

$student_id =
    GSecureSQL::query(
        "SELECT StudentID FROM studentinfotbl",
        TRUE
    );
foreach ($student_id as $value) {
    $db_StudentID = $value[0];
    $hashStudentID = hash('md4', $db_StudentID);
    if ($hashStudentID == $StudentID) {
        $StudentID = $db_StudentID;
    }
}


$StudentInfo_tbl =
    GSecureSQL::query(
        "SELECT
        FirstName,
        MiddleName,
        LastName,
        MajorCourse,
        Birthdate,
        ProfileImage
        FROM studentinfotbl
        WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );

$FirstName = $StudentInfo_tbl[0][0];
$MiddleName = $StudentInfo_tbl[0][1];
$LastName = $StudentInfo_tbl[0][2];
$MajorCourse = $StudentInfo_tbl[0][3];
$Birthdate = $StudentInfo_tbl[0][4];
$ProfileImage = $StudentInfo_tbl[0][5];

$course_code =
    GSecureSQL::query(
        "SELECT CourseTitle FROM coursetbl WHERE CourseCode = ?",
        TRUE,
        "s",
        $MajorCourse
    );
$MajorCourse = $course_code[0][0];

$monthNum = substr($Birthdate, 5, 2);
$yearNum = substr($Birthdate, 0, 4);
$dayNum = substr($Birthdate, 8, 2);
$dateObj = DateTime::createFromFormat('!m', $monthNum);
$monthName = $dateObj->format('F');

$Birthdate = $monthName . " " . $dayNum . ", " . $yearNum;


$studcontacts_tbl =
    GSecureSQL::query(
        "SELECT Email, Address, MobileNumber FROM studcontactstbl WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );

$Email = $studcontacts_tbl[0][0];
$Address = $studcontacts_tbl[0][1];
$MobileNumber = $studcontacts_tbl[0][2];

?>
<!doctype html>
<html lang="en">
<head>

    <!-- Basic -->
    <title>OJPMS | Profile</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="OJPMS">
    <link rel="shortcut icon" href="images/logo/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- BootstrapValidator -->
    <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/open-sans.css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

    <!-- Borderless Table CSS  -->
    <link rel="stylesheet" type="text/css" href="css/borderless-tbl.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/count-to.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.js"></script>
</head>

<body>
    <div id="container">
        <!-- Start Header Section -->
        <div class="hidden-header"></div>
        <div id="join" class="parallax" style="background-image:url(img/profile-bg.jpg); height: 400px;">
            <div class="overlay" style=" height: 400px;"></div>
        </div>
        <header class="clearfix">
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand">
                            <img src="images/ojpms.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">

                    </div>
                </div>
            </div>
        </header>

        <div class="profile-bar" style="padding:10px 0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">&nbsp;</div>
                    <div class="col-sm-3">
                        <div class="profile-photo">
                            <img src="student-view/myinfo/<?php echo $ProfileImage; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-7">
                        <label class="text-center"
                               style="font-size:30px;"><?php echo $FirstName . " " . $MiddleName . " " . $LastName; ?></label>
                        <div><i class="fa fa-quote-left fa-2x fa-pull-left fa-border"></i>To obtain the position of ONLINE
                            ESL INSTRUCTOR with BabelSpeak.com where I can apply my education, fifteen years of teaching
                            experience and native linguistic skills and provide clients with a high quality language
                            instruction experience.
                        </div>
                    </div>
                    <div class="col-sm-2">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="hr1" style="margin-top:10px;margin-bottom:10px;"></div>

        <!-- Start Content -->
        <div id="content">
            <div class="section" style="padding-top:40px; padding-bottom:40px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1><img src="images/pro-icon/personal-info.png" style="width:20%;height:20%">
                                Personal Information
                            </h1>
                        </div>
                        <div class="col-sm-8">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Course:</td>
                                        <td><b><?php echo $MajorCourse; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><b><?php echo $Address; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Birthday:</td>
                                        <td><b><?php echo $Birthdate; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Contact No.:</td>
                                        <td><b><?php echo $MobileNumber; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><b><?php echo $Email; ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <div class="section" style="padding-top:40px; padding-bottom:40px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1><img src="images/pro-icon/education.png" style="width:20%;height:20%">
                                Education
                            </h1>
                        </div>
                        <div class="col-sm-8">
                            <h1>Bachelor's/College Degree</h1>
                            <div class="hr4" style="margin-top:5px;margin-bottom:10px;"></div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>School</td>
                                        <td>STI COLLEGE CALOOCAN</td>
                                    </tr>
                                    <tr>
                                        <td>Graduated</td>
                                        <td>May 2016</td>
                                    </tr>
                                    <tr>
                                        <td>Major</td>
                                        <td>Bachelor of Science in Computer Science</td>
                                    </tr>
                                    <tr>
                                        <td>Field of Study</td>
                                        <td>Computer Software</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h1>High School Diploma</h1>
                            <div class="hr4" style="margin-top:5px;margin-bottom:10px;"></div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>School</td>
                                        <td>TINAJEROS NATIONAL HIGH SCHOOL</td>
                                    </tr>
                                    <tr>
                                        <td>Graduated</td>
                                        <td>March 2012</td>
                                    </tr>
                                    <tr>
                                        <td>Field of Study</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section" style="padding-top:40px; padding-bottom:40px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1><img src="images/pro-icon/language.png" style="width:20%;height:20%">
                                Languages
                            </h1>
                        </div>
                        <div class="col-sm-8">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Language</th>
                                        <th>Proficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Filipino</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar-info progress-bar-striped" role="progressbar"
                                                     aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <font style="color:white;">
                                                        <center>70%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nihonggo</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar-info progress-bar-striped" role="progressbar"
                                                     aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                    <font style="color:white;">
                                                        <center>100%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section" style="padding-top:40px; padding-bottom:40px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1><img src="images/pro-icon/skill.png" style="width:20%;height:20%">
                                Skills
                            </h1>
                        </div>
                        <div class="col-sm-8">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Skill</th>
                                        <th>Years of Experience</th>
                                        <th>Proficiency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Skill in Web Development (PHP, JAVASCRIPT, HTML, BOOTSTRAP)</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar-warning progress-bar-striped" role="progressbar"
                                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                    <font style="color:white;">
                                                        <center>80%
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar-warning progress-bar-striped" role="progressbar"
                                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                    <font style="color:white;">
                                                        <center>80%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Essay, Poetry, and Story Writing enthusiast and Blogging</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar-warning progress-bar-striped" role="progressbar"
                                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                    <font style="color:white;">
                                                        <center>80%
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar-warning progress-bar-striped" role="progressbar"
                                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                    <font style="color:white;">
                                                        <center>50%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <div class="section" style="padding-top:40px; padding-bottom:40px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1><img src="images/pro-icon/certification.png" style="width:20%;height:20%">
                                Certifications
                            </h1>
                        </div>
                        <div class="col-sm-8">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Certificate</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tagisan ng Talino 2016 - Essay Does It!</td>
                                        <td>
                                            2016
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section" style="padding-top:40px; padding-bottom:40px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1><img src="images/pro-icon/achievement.png" style="width:20%;height:20%">
                                Achievements
                            </h1>
                        </div>
                        <div class="col-sm-8">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        
                                        <?php
                                            $achievement_tbl =
                                                GSecureSQL::query(
                                                    "SELECT Achievements FROM achievementstbl WHERE StudentID = ?",
                                                    TRUE,
                                                    "s",
                                                    $StudentID
                                                );
                                            foreach ($achievement_tbl as $value) {
                                                $Achievement = $value[0];
                                                ?>
                                                <td><?php echo $Achievement; ?></td>
                                                <!--<?php
                                                    }
                                                    $seminar_tbl =
                                                        GSecureSQL::query(
                                                            "SELECT Seminar, YearAttended FROM seminartbl WHERE StudentID = ?",
                                                            TRUE,
                                                            "s",
                                                            $StudentID
                                                        );
                                                    foreach ($seminar_tbl as $value) {
                                                        $Seminar = $value[0];
                                                        $YearAttended = $value[1];
                                                        ?>
                                                        <td><?php echo $Seminar . " (" . $YearAttended . ")"; ?></td>
                                                        <?php
                                                    }
                                            ?>-->
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section" style="padding-top:40px; padding-bottom:40px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1><img src="images/pro-icon/reference.png" style="width:20%;height:20%">
                                References
                            </h1>
                        </div>
                        <div class="col-sm-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                    </tr>
                                    <tr>
                                        <td>Relationship</td>
                                    </tr>
                                    <tr>
                                        <td>Company</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-4">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                    </tr>
                                    <tr>
                                        <td>Relationship</td>
                                    </tr>
                                    <tr>
                                        <td>Company</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="js/script.js"></script>


    <!-- Start Footer Section -->
    <footer>
        <div class="container">
            <!-- Start Copyright -->
            <div class="copyright-section">
                <div class="row">
                    <div class="col-sm-6">
                        <p>&copy; 2015 OJPMS - All Rights Reserved</p>
                    </div>
                    <!-- .col-sm-6 -->
                    <div class="col-sm-6">
                        <ul class="footer-nav">
                            <li><a href="#">Sitemap</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .col-sm-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- End Copyright -->
        </div>
    </footer>
    <!-- End Footer Section -->
    </div>


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</body>
</html>

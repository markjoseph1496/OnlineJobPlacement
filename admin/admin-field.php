<?php
include('../connection.php');
session_start();

if(isset($_SESSION['AdminID'])){
    $AdminID = $_SESSION['AdminID'];
}else{
    header("location: ../login-admin.php");
}

$CourseID = $_GET['id'];

$course_tbl =
    GSecureSQL::query(
        "SELECT * FROM coursetbl WHERE CourseID = ?",
        TRUE,
        "s",
        $CourseID
    );
$CourseTitle = $course_tbl[0][1];
$CourseCode = $course_tbl[0][2];

$studentinfo_tbl =
    GSecureSQL::query(
        "SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse=?",
        TRUE,
        "s",
        $CourseCode
    );
$Total = $studentinfo_tbl[0][0];
?>
<!doctype html>
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

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <!-- BootstrapValidator -->
    <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link href="../fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../js/modernizrr.js"></script>
    <script type="text/javascript" src="../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../js/count-to.js"></script>
    <script type="text/javascript" src="../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../js/jquery.slicknav.js"></script>
</head>

<body>

<!-- Full Body Container -->
<div id="container">


            <!-- Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Start Contact Info -->
                            <ul class="contact-details">
                                <li class="profile-name"><i class="fa fa-hashtag"></i> <b>008-2012-0805</b></li>
                            </ul>
                        <!-- End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6">
                        <!-- Start Social Links -->
                            <ul class="social-list">
                                <li class="profile-name">
                                    <a class="bell itl-tooltip" data-placement="bottom" title="" href="#" data-original-title="Notification"><i class="fa fa-bell"></i></a>
                                </li>
                                <li class="profile-name">
                                    &nbsp;
                                </li>
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
                     <a class="navbar-brand" href="">
                        <img src="../images/ojpms.png">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Sign-out -->
                    <div class="signout-side">
                        <a class="show-signout" data-toggle='modal' data-target='#Logout'><i class="fa fa-sign-out"></i></a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Logout"
                         role="dialog">
                        <div class="modal-dialog" style="padding:100px">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button style = type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Log out?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-15 fieldcol">
                                        <label = "usr" class = "control-label">Do you want to log out?</label>
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="logout.php"
                                           class="btn btn-primary">Log out</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sign-out -->
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="admin.php">Home</a>
                        </li>
                        <li>
                            <a>Reports</a>
                        <ul class="dropdown">
                            <li><a href="admin-reports.php" class = "active">Alumni Reports</a></li>
                            <li><a href="admin-ojtreports.php">OJT Reports</a></li>
                        </ul>
                         </li>
                        <li>
                            <a href="admin-account.php">Account</a>
                        </li>
                        <li>
                            <a href="admin-requested.php">Requested</a>
                        </li>
                        <li>
                           <a>Company List</a>
                        <ul class="dropdown">
                            <li><a href="admin-companylist.php">Active</a></li>
                            <li><a href="admin-company_pending.php">Pending</a></li>
                        </ul>
                        </li>
                        <li>
                        <a> Maintenance</a>
                        <ul class="dropdown">
                            <li><a class="active" href="admin-maintenance.php">Courses</a></li>
                            <li><a href="admin-users.php">Users</a></li>
                        </ul>
                    </li>
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="admin.php">Home</a>
                    </li>
                    <li>
                    <a>Reports</a>
                        <ul class="dropdown">
                            <li><a href="admin-reports.php" class = "active">Alumni Reports</a></li>
                            <li><a href="admin-ojtreports.php">OJT Reports</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="admin-account.php">Account</a>
                    </li>
                    <li>
                        <a href="admin-requested.php">Requested</a>
                    </li>
                    <li>
                       <a>Company List</a>
                        <ul class="dropdown">
                            <li><a href="admin-companylist.php" class = "active">Active</a></li>
                            <li><a href="admin-company_pending.php">Pending</a></li>
                        </ul>
                    </li>
                    <li>
                       <a> Maintenance</a>
                        <ul class="dropdown">
                            <li><a class="active" href="admin-maintenance.php">Courses</a></li>
                            <li><a href="admin-users.php">Users</a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
    </header>
    <!-- Mobile Menu End -->

</div>
<!-- End Header Logo & Naviagtion -->

</header>
<!-- End Header Section -->

<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; center #f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Reports</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!--Content-->
<br><br><br>

<div class="container">
    <div class="header_advertising">
        <div class="container">
            <div class="col-md-8">
                <h5> <?php echo $CourseTitle; ?> <h5>
            </div>
            <div class="col-md-4">
                <div class="form-group text-center">
                    <a href="" >
                        <span class="fa fa-download"> Export XLS </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header2_advertising">
        <div class="container">

            <div class="col-sm-4">
                <label><b>TOTAL NUMBER OF STUDENTS: <?php echo $Total; ?></b></label>
            </div>

            <div class="col-sm-4">
                <div class="form-group text-center">
                    <label>
                        <center><b>Select an Industry</b>
                    </label></center>
                    <select id="industry" name="industry" class="form-control" style="width:280px;">
                        <option value="ind"> Select one</option>
                        <option value="acc"> Accounting / Audit</option>
                        <option value="amp">Advertising / Marketing Promotion</option>
                        <option value="aaa">Aerospace/Aviation/Airline</option>
                        <option value="appf">Agricultural/Plantation/Poultry/Fisheries</option>
                        <option value="af">Apparel/Fashion</option>
                        <option value="ad">Arts/Design</option>
                        <option value="aav"> Automobile/Automotive Ancillary/Vehicle</option>
                    </select>
                    <label>
                        <center><b>Select Position</b>
                    </label></center>
                    <select id="position" name="position" class="form-control" style="width:280px;">
                        <option value="pos"> Select one</option>
                        <option value="tlp"> Top Level Management</option>
                        <option value="sm"> Senior Manager</option>
                        <option value="man"> Manager</option>
                        <option value="ses"> Senior Executive/ Supervisor</option>
                        <option value="je"> Junior Executive</option>
                        <option value="fel"> Fresh/Entry Level</option>
                        <option value="nex"> Non-Executive</option>
                        <option value="train"> Trainee</option>
                    </select>
                    <label>
                        <center><b>Select Position</b>
                    </label></center>
                    <select id="position" name="position" class="form-control" style="width:280px;">
                        <option value="pos"> Select one</option>
                        <option value="tlp"> Top Level Management</option>
                        <option value="sm"> Senior Manager</option>
                        <option value="man"> Manager</option>
                        <option value="ses"> Senior Executive/ Supervisor</option>
                        <option value="je"> Junior Executive</option>
                        <option value="fel"> Fresh/Entry Level</option>
                        <option value="nex"> Non-Executive</option>
                        <option value="train"> Trainee</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group text-center">
                    <label>
                        <center><b>Select Specialization</b>
                    </label></center>
                    <select id="specialization" name="specialization" class="form-control" style="width:280px;">
                        <option value="spe"> Select One</option>
                        <option value="ass"> Actuarial Science/ Statistics</option>
                        <option value="amp"> Advertising/ Media Planning</option>
                        <option value="aid"> Architecture/ Interior Design</option>
                        <option value="aad">Arts and Design</option>
                        <option value="acgd"> Arts/ Creative/ Graphics Design</option>
                        <option value="aam"> Aviation/ Aircraft Maintenance</option>
                        <option value="bfs"> Banking/ Financial Services</option>
                        <option value="bio"> Biotechnology</option>
                        <option value="ccca"> Call Center Agent</option>
                    </select>
                    <label>
                        <center><b>Select Employment Status </b>
                    </label></center>
                    <select id="status" name="status" class="form-control" style="width:280px;">
                        <option value="pos"> Select One</option>
                        <option value="emp">Employed</option>
                        <option value="unemp">Unemployed</option>
                    </select><br>
                        <button type="submit" class="btn-system btn-large border-btn" href="#">Filter</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table segment table-hover">
        <thead>
        <tr>

        </tr>
        <tr>
            <th width="25%" class="tabletitle"> Student Name</th>
            <th width="15%" class="tabletitle"> Position Level</th>
            <th width="20%" class="tabletitle"> Specialization</th>
            <th width="15%" class="tabletitle"> Industry</th>
            <th width="20%" class="tabletitle"> Employment Status</th>
            <th width="5%" class="tabletitle"></th>
        <tr>
        </thead>
        <?php
        $studentinfocourse_tbl =
            GSecureSQL::query(
                "SELECT `StudentID`,`FirstName`,`LastName`,`EmploymentStatus`  FROM studentinfotbl WHERE MajorCourse = ?",
                TRUE,
                "s",
                $CourseCode
            );
        foreach ($studentinfocourse_tbl as $value) {
            $StudentID = $value[0];
            $FirstName = $value[1];
            $LastName = $value[2];
            $FullName = $LastName . ", " . $FirstName;
            $EmploymentStatus = $value[3];

            ?>
            <tbody>
            <tr>
                <td>
                    <a href = 'resumelink.php'><?php echo $FullName; ?></a>
                </td>
                <td class = 'tcenter'></td>
                <td class = 'tcenter'></td>
                <td class = 'tcenter'></td>
                <td class = 'tcenter'><?php echo $EmploymentStatus; ?></td>
                <td>
                    <a id='Edit' href='admin-editstudent.php' class='btn btn-default'>
                        <i class='fa fa-pencil'></i>
                    </a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>
<br><br>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
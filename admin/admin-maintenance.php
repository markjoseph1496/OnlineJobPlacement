<?php
include('../connection.php');
session_start();

if (isset($_SESSION['AdminID'])) {
    $AdminID = $_SESSION['AdminID'];
} else {
    header("location: ../login-admin.php");
}

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
                            <a class="bell itl-tooltip" data-placement="bottom" title="" href="#"
                               data-original-title="Notification"><i class="fa fa-bell"></i></a>
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
                                <button style=type="button" class="close" data-dismiss="modal">&times;</button>
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
                            <li><a href="admin-companylist.php" class="active">Active</a></li>
                            <li><a href="admin-company_pending.php">Pending</a></li>
                        </ul>
                    </li>
                    <li><a href="admin-adviser.php">Adviser List</a>
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
                        <li><a href="admin-companylist.php">Active</a></li>
                        <li><a href="admin-company_pending.php">Pending</a></li>
                    </ul>
                </li>
                <li><a href="admin-adviser.php">Adviser List</a>
                </li>
                <li>
                    <a> Maintenance</a>
                    <ul class="dropdown">
                        <li><a class="active" href="admin-maintenance.php">Courses</a></li>
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
                    <h2>List of Courses</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!--Content-->
    <br><br><br>

    <div class="container">
        <div class="col-md-12 fieldcol">
            <a href="admin-addcourse.php" class="btnforadding" style="float:right;">
                <span class="fa fa-plus-square"> Add Course </span>
            </a>
        </div>
        <div class="col-md-12">
            &nbsp;
            <table class="table segment table-hover">
                <thead>
                <tr>
                </tr>
                <tr>
                    <th width='10%' class='tabletitle'>Course Code</th>
                    <th width='20%' class='tabletitle'>Course Title</th>
                    <th width='30%' class='tabletitle'>Course Description</th>
                    <th width='10%' class='tabletitle'></th>
                <tr>
                </thead>
                <?php

                $ListCourseQuery =
                    GSecureSQL::query(
                        "SELECT * FROM coursetbl",
                        TRUE
                    );
                foreach ($ListCourseQuery as $value) {
                    $CourseID = $value[0];
                    $CourseTitle = $value[1];
                    $CourseCode = $value[2];
                    $CourseDesc = $value[3];
                    ?>
                    <tbody>
                    <tr>
                        <td width=10% class=tabletitle><?php echo $CourseCode; ?></td>
                        <td width=20% class=tabletitle><?php echo $CourseTitle; ?></td>
                        <td width=30% class=tabletitle><?php echo $CourseDesc; ?></td>
                        <td width=10% class=tabletitle>
                            <a href="admin-editcourse.php?id=<?php echo $CourseID; ?>" class='btn btn-default'> <i
                                    class='fa fa-pencil-square-o fa-1x'></i> </a>
                            <button class='btn btn-danger' data-toggle='modal'
                                    data-target='#DeleteCourse<?php echo $CourseID; ?>'><i
                                    class='fa fa-trash fa-1x'></i></button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="DeleteCourse<?php echo $CourseID; ?>" role="dialog">
                        <div class="modal-dialog" style="padding:100px">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Course?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-15 fieldcol">
                                        <label = "usr" class = "control-label">Do you want to delete this
                                        course?</label>
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="functions.php?DeleteID=<?php echo $CourseID; ?>"
                                           class="btn btn-danger">Delete <?php echo $CourseCode; ?></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </tbody>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
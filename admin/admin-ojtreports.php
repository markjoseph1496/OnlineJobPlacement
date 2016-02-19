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
    <link rel="stylesheet" type="text/css" href="../fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="../fonts/ffonts/open-sans.css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- CSS Styles  -->
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

    <link rel="stylesheet" href="../css/checkbox.css"/>

    <!-- Notification -->
    <link rel="stylesheet" href="../css/notif.css"/>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#notificationLink").click(function () {
                $("#notificationContainer").fadeToggle(300);
                $("#notification_count").fadeOut("slow");
                return false;
            });

            //Document Click
            $(document).click(function () {
                $("#notificationContainer").hide();
            });
            //Popup Click
            $("#notificationContainer").click(function () {
                return false
            });

        });
    </script>
</head>

<body>
    <!-- Full Body Container -->
    <div id="container">
        <div class="hidden-header"></div>
        <header class="clearfix">
            <!-- Start Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Start Contact Info -->
                            <ul class="profile-name">
                                <li></li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-5">
                            <!-- Notification -->
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown icon-border" id="notificationLink">
                                    <span id="notification_count">3</span>
                                    <a href="#" class="bell itl-tooltip" data-placement="bottom" data-toggle="dropdown"><i
                                            class="fa fa-bell"></i></a>
                                    <ul id="notificationContainer" class="dropdown-menu dropdown-menu-inverse">
                                        <li class="dropdown-header"><label>Notification</label></li>
                                        <li class="disabled"><a href="#" tabindex="-1">No new notification.</a></li>
                                        <li><a href="#" tabindex="-1">This is a notification.</a></li>
                                        <li class="divider"></li>
                                        <li><a href="../notification/notification.php" tabindex="-1">See All</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-user"></b>
                                        Welcome, <b>Admin Tim </b><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="admin-account.php">Account <b class="fa fa-user"
                                                                                   style="float:right;"></b></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" data-target='#Logout' data-toggle='modal'>Sign Out <b
                                                    class="fa fa-sign-out" style="float:right;"></b></a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Notification -->
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
                        <!-- Modal -->
                        <div class="modal fade" id="Logout"
                             role="dialog">
                            <div class="modal-dialog" style="padding:100px">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button style=type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Sign Out</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-15 fieldcol">
                                            <label = "usr" class = "control-label">Do you want to Sign Out?</label>
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="logout.php"
                                               class="btn btn-primary">Sign out</a>
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
                                <a class="active">Reports</a>
                                <ul class="dropdown">
                                    <li><a href="admin-reports.php">Alumni Reports</a></li>
                                    <li><a href="admin-ojtreports.php" class="active">OJT Reports</a></li>
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
                                    <li><a href="admin-maintenance.php">Courses</a></li>
                                    <li><a href="admin-users.php">Users</a></li>
                                    <li><a href="admin-calendar.php">Calendar Events</a></li>
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
                                <li><a href="admin-reports.php">Alumni Reports</a></li>
                                <li><a href="admin-ojtreports.php" class="active">OJT Reports</a></li>
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
                                <li><a href="admin-maintenance.php">Courses</a></li>
                                <li><a href="admin-users.php">Users</a></li>
                                <li><a href="admin-calendar.php">Calendar Events</a></li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>
            <!-- End Header Logo & Naviagtion -->
        </header>
        <!-- End Header Section -->

        <!-- Start Page Banner -->
        <div class="page-banner" style="padding:40px 0; center #f9f9f9;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>OJT Reports</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!--Content-->
        <br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4 style="margin-top:20px;">TOTAL NUMBER OF STUDENTS:</b></h4>
                </div>
                <div class="col-sm-3">
                    <label>
                        <center><b>Filter by: </b></center>
                    </label>
                    <select class="form-control" style="width:250px;">
                        <option value="00">- Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label>
                        <center><b>Search by: </b></center>
                    </label>
                    <select class="form-control" style="width:250px;">
                        <option value="00">- Status</option>
                        <option value="asd">adsa</option>
                        <option value="ada">ada</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn-system btn-large border-btn"
                            style="margin-top: 20px;">Search
                    </button>
                </div>
            </div>
            <div class="hr1" style="margin-bottom:10px;margin-top:10px;"></div>

            <div class="scrollable-table">
                <table class="table table-striped table-header-rotated">
                    <thead>
                        <tr>
                            <!-- First column header is not rotated -->
                            <th width="15%">Student No.</th>
                            <th width="20%">Name</th>
                            <th width="20%">Course</th>
                            <th width="20%">Company</th>
                            <th width="30%">Address</th>
                            <th width="10%">Remarks</th>
                            <th width="">Adviser</th>
                            <!-- Following headers are rotated -->
                            <th class="rotate-45">
                                <div><span>Hours</span></div>
                            </th>
                            <th class="rotate-45">
                                <div><span>Endorsement</span></div>
                            </th>
                            <th class="rotate-45">
                                <div><span>DTR</span></div>
                            </th>
                            <th class="rotate-45">
                                <div><span>Waiver</span></div>
                            </th>
                            <th class="rotate-45">
                                <div><span>Training Plan</span></div>
                            </th>
                            <th class="rotate-45">
                                <div><span>MOA</span></div>
                            </th>
                            <th class="rotate-45">
                                <div><span>Journal</span></div>
                            </th>
                            <th class="rotate-45">
                                <div><span>Integration</span></div>
                            </th>
                            <th class="rotate-45">
                                <div><span>PAF</span></div>
                            </th>
                            <th class="rotate-45">
                                <div><span>Certificate</span></div>
                            </th>
                            <th width="5%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="15%"></td>
                            <td width="20%"></td>
                            <td width="20%"></td>
                            <td width="20%"></td>
                            <td width="30%"></td>
                            <td width="10%"></td>
                            <td width=""></td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <input class="styled" type="checkbox" disabled>
                                    <label for=""></label>
                                </div>
                            </td>
                            <td width="5%">
                                <button class='btn btn-default' data-toggle='modal'
                                        data-target='#EditInfo<?php echo $StudentID; ?>'>
                                    <i class="fa fa-pencil-square-o fa-1x"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
<?php
include('../connection.php');
session_start();

if(isset($_SESSION['AdminID'])){
    $AdminID = $_SESSION['AdminID'];
}else{
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

    <!--  CSS Styles  -->
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-user"></b> Welcome, <b>Admin Tim </b><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="admin-account.php">Account <b class="fa fa-user" style="float:right;"></b></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" data-target='#Logout' data-toggle='modal'>Sign Out <b class="fa fa-sign-out" style="float:right;"></b></a></li>
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
                                        <button style = type="button" class="close" data-dismiss="modal">&times;</button>
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
                    <a>Reports</a>
                        <ul class="dropdown">
                            <li><a href="admin-reports.php">Alumni Reports</a></li>
                            <li><a href="admin-ojtreports.php">OJT Reports</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="admin-account.php">Account</a>
                    </li>
                    <li>
                        <a class="active" href="admin-requested.php">Requested</a>
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
                            <li><a href="admin-reports.php" class = "active">Alumni Reports</a></li>
                            <li><a href="admin-ojtreports.php">OJT Reports</a></li>
                        </ul>
                </li>
                <li>
                    <a href="admin-account.php">Account</a>
                </li>
                <li>
                    <a class="active" href="admin-requested.php">Requested</a>
                </li>
                <li>
                    <a>Company List</a>
                    <ul class="dropdown">
                        <li><a href="admin-companylist.php" class="active">Active</a></li>
                        <li><a href="admin-company_pending.php">Pending</a></li>
                    </ul>
                </li>
                <li>
                    <a> Maintenance</a>
                    <ul class="dropdown">
                        <li><a class="active" href="admin-maintenance.php">Courses</a></li>
                        <li><a href="admin-users.php">Users</a></li>
                        <li><a href="admin-calendar.php">Calendar Events</a></li>
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
                    <h2>Requested</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!--Content-->
    <br><br><br>

    <div class="container">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id == "1") {
                echo '
                              <div class="alert alert-success">
                                  <span class="glyphicon glyphicon-info-sign"></span> 
                                  Request Accepted.
                              </div>
                          ';
            } elseif ($id == "2") {
                echo '
                              <div class="alert alert-success">
                                  <span class="glyphicon glyphicon-info-sign"></span> 
                                  Request Rejected.
                              </div>
                          ';
            }
        }
        ?>
        <div class="col-md-12">
            <table class="table segment table-hover">
                <thead>
                <tr>
                </tr>
                <tr>
                    <th width='25%' class='tabletitle'>Company Name</th>
                    <th width='25%' class='tabletitle'>Courses</th>
                    <th width='20%' class='tabletitle'>Location</th>
                    <th width='15%' class='tabletitle'>Date Requested</th>
                    <th width='15%' class='tabletitle'>Status</th>
                    <th width='3%' class='tabletitle'></th>
                <tr>
                </thead>
                <tbody>
                <?php
                $requestlog_tbl =
                    GSecureSQL::query(
                        "SELECT
                            logrequesttbl.LID,
                            logrequesttbl.CompanyID,
                            logrequesttbl.Course,
                            logrequesttbl.Status,
                            logrequesttbl.DateRequested,
                            logrequesttbl.PositionTitle,
                            logrequesttbl.EmployeeClassification,
                            logrequesttbl.PositionLevel,
                            logrequesttbl.Description,
                            logrequesttbl.Qualifications,
                            logrequesttbl.Location,
                            logrequesttbl.SalaryRange,
                            logrequesttbl.RequiredYOE,
                            logrequesttbl.CFG,
                            logrequesttbl.DurationOfRequest,
                            logrequesttbl.MarketingMaterials,
                            companyinfotbl.CompanyName,
                            companyinfotbl.City
                        FROM
                            companyinfotbl
                        INNER JOIN logrequesttbl ON companyinfotbl.CompanyID = logrequesttbl.CompanyID WHERE logrequesttbl.Status = 'Pending' ORDER BY logrequesttbl.DateRequested ASC",
                        TRUE
                    );
                foreach ($requestlog_tbl as $value) {
                $LID = $value[0];
                $CompanyID = $value[1];
                $Course = $value[2];
                $Status = $value[3];
                $DateRequested = $value[4];
                $PositionTitle = $value[5];
                $EmployeeClassification = $value[6];
                $PositionLevel = $value[7];
                $Description = $value[8];
                $Qualifications = $value[9];
                $Location = $value[10];
                $SalaryRange = $value[11];
                $RequiredYOE = $value[12];
                $CFG = $value[13];
                $DurationOfRequest = $value[14];
                $MarketingMaterials = $value[15];
                $CompanyName = $value[16];
                $Location = $value[17];
                ?>
                <tr>
                    <td width=25% class=tabletitle><a href='#'><?php echo $CompanyName; ?></a></td>
                    <td width=25% class=tabletitle><?php echo $Course; ?></td>
                    <td width=20% class=tabletitle><?php echo $Location; ?></td>
                    <td width=15% class=tabletitle><?php echo $DateRequested; ?></td>
                    <td width=15% class=tabletitle><?php echo $Status; ?></td>
                    <td width="3%" class=tabletitle>
                        <button class='btn btn-default' data-toggle='modal'
                                data-target='#AcceptRequest'><i
                                class='fa fa-reply'></i></button>
                    </td>
                <tr>
                </tbody>
                <!-- Modal -->
                <form class="ModalForm" id="ModalForm" action="functions.php" method="POST">
                    <div class='modal fade' id='AcceptRequest' role='dialog'>
                        <div class='modal-dialog' style='padding:100px'>
                            <!-- Modal content-->
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                    <h4 class='modal-title'>Accept Resume?</h4>
                                </div>
                                <div class='modal-body'>
                                    <div class='col-md-15 fieldcol'>
                                        <label = 'usr' class = 'control-label'>Do you want to accept this request? <br>
                                        Courses to be approved:</label>
                                        <div class="row">
                                        <div class="col-md-4">
                                            <label> Position Title: </label>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label><?php echo $PositionTitle; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label> Employee Classification: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $EmployeeClassification; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Level: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $PositionLevel; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label> Description: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $Description; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>  Qualifications: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $Qualifications; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label> Location: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $Location; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label> Range of Salary: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $SalaryRange; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label> Required years of experience: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $RequiredYOE; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label> Consider Fresh Graduate: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $CFG; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label> Duration of Request: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $DurationOfRequest; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Materials for posting.: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label> <?php echo $MarketingMaterials; ?> </label>
                                                </div>
                                            </div>
                                        </div>
                                            &nbsp;
                                            <?php
                                            $Course = explode(", ", $Course);
                                            foreach ($Course as $value1) {
                                                $Course = $value1;
                                                ?>
                                                <ul>
                                                    <li class="fa fa-angle-right"> <?php echo $Course; ?></li>
                                                </ul>
                                            <?php
                                        }
                                        ?>
                                        <div class='form-group'>
                                        </div>
                                        <label = "usr" class = "control-label" id = "label">Duration</label>
                                        <div class="form-group">
                                            <label = "usr" class = "control-label" id = "label">
                                            From: <?php echo date("Y/m/d"); ?> </label>
                                            <div class="date_to">
                                                <label = "usr" class = "control-label" id = "label">to: </label>
                                                <input type="date" name="DateTo" id="date_to" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="lid" value="<?php echo $LID; ?>"/>
                                    <div class='modal-footer'>
                                        <button type="submit"
                                                class='btn btn-primary'>Accept
                                        </button>
                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
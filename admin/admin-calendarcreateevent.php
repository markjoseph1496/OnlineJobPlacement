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
    <title>OJPMS | Create an Event</title>

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

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../css/ojpms-style.css" media="screen">

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
    <script type="text/javascript" src="../js/script.js"></script>

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


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

        <!-- Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <!-- .col-md-6 -->
                    <div class="col-md-6">
                        &nbsp;
                    </div>
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
                    <a class="navbar-brand" href="index.html">
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
                    <li>
                        <a> Maintenance</a>
                        <ul class="dropdown">
                            <li><a href="admin-maintenance.php">Courses</a></li>
                            <li><a href="admin-users.php">Users</a></li>
                            <li><a class="active" href="admin-calendar.php">Calendar Events</a></li>
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
                <li>
                    <a> Maintenance</a>
                    <ul class="dropdown">
                        <li><a href="admin-maintenance.php">Courses</a></li>
                        <li><a href="admin-users.php">Users</a></li>
                        <li><a class="active" href="admin-calendar.php">Calendar Events</a></li>
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
                <h2>Create an Event</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!--Content-->
<br><br><br>
<form action="functions.php" name="addcalendar" id="addcalendar" autocomplete="off">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="row field">
                    <div class="col-md-3 fieldcol">
                        <label = "usr" class = "control-label">Event from: </label>
                    </div>
                    <div class="col-md-3 fieldcol">
                        <div class = "form-group">
                            <input type="date" name="datefrom" id="date_from" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1 fieldcol">
                        <label = "usr" class = "control-label" style = "text-indent:20px;">to: </label>
                    </div>
                    <div class="col-md-3 fieldcol">
                        <div class = "form-group">
                            <input type="date" name="dateto" id="date_to" class="form-control">
                        </div>
                    </div>

                    
                </div>
                <div class="row field">
                    <div class="col-md-3 fieldcol">
                        <label = "usr" class = "control-label"> Event Title: </label>
                    </div>
                    <div class="col-md-8 fieldcol">
                        <div class="form-group">
                            <input type="text" name="eventtitle" id="eventtitle" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-3 fieldcol">
                        <label = "usr" class = "control-label"> Location: </label>
                    </div>
                    <div class="col-md-8 fieldcol">
                        <div class="form-group">
                            <input type="text" name="location" id="location" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-3 fieldcol">
                        <label = "usr" class = "control-label"> Caption: </label>
                    </div>
                    <div class="col-md-8 fieldcol">
                        <div class="form-group">
                            <input type="text" class="form-control" id="descrip" name="descrip">
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                <div class="field">
                    <div class="text-center">
                        <button type="submit" class="btn-system btn-large" id="BtnCalendarsave" name="BtnCalendarsave">
                            Save
                        </button>
                        <a href = "admin-calendarcreateevent.php" class="btn-system btn-large btn-black">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        var validator = $("#addcalendar").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                datefrom: {
                    validators: {
                        notEmpty: {
                            message: "Date From is required."
                        }
                    }
                },
                dateto: {
                    validators: {
                        notEmpty: {
                            message: "Date To is required."
                        }
                    }
                },
                eventtitle: {
                    validators: {
                        notEmpty: {
                            message: "Event Title is required."
                        },
                        stringLength: {
                            min: 1,
                            max: 25,
                            message: "Event Title is 25 characters only."
                        }
                    }
                },
                location: {
                    validators: {
                        notEmpty: {
                            message: "Location is required."
                        },
                        stringLength: {
                            min: 1,
                            max: 15,
                            message: "Location is 15 characters only."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "Location can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                descrip: {
                    validators: {
                        notEmpty: {
                            message: "Description is required."
                        },
                        stringLength: {
                            min: 1,
                            max: 25,
                            message: "Description is 25 characters only."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "Description can consist of alphabetical characters and spaces only"
                        }
                    }
                },
            }
        });
    });
</script>
</html>
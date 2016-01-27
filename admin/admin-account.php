<?php
include('../connection.php');
session_start();

if(isset($_SESSION['AdminID'])){
    $AdminID = $_SESSION['AdminID'];
}else{
    header("location: ../login-admin.php");
}

$admin_tbl =
    GSecureSQL::query(
        "SELECT * FROM admintbl WHERE AdminID = ?",
        TRUE,
        "s",
        $AdminID
    );

$Username = $admin_tbl[0][1];
$FirstName = $admin_tbl[0][4];
$MiddleName = $admin_tbl[0][5];
$LastName = $admin_tbl[0][6];
$Position = $admin_tbl[0][7];
$Address = $admin_tbl[0][8];
$ContactNumber = $admin_tbl[0][9];

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
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="ChangeUsername" role="dialog">
        <div class="modal-dialog" style="padding:100px">

            <!-- Modal content-->
            <form id="change-Username-form" autocomplete="off" method="POST" action="functions.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Username</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> New Username: </label>
                            <div class="form-group">
                                <input type="text" name="ModalNewUsername" id="ModalNewUsername" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> Confirm Username: </label>
                            <div class="form-group">
                                <input type="text" name="ModalConfirmUsername" id="ModalConfirmUsername" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btnChangeUsername">Change Username</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="ChangePassword" role="dialog">
        <div class="modal-dialog" style="padding:100px">

            <!-- Modal content-->
            <form id="change-password-form" autocomplete="off" method="POST" action="functions.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Password</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-15 fieldcol">
                            <div id="message"></div>
                            <br>
                            <label = "usr" class = "control-label"> Old Password: </label>
                            <div class="form-group">
                                <input type="password" name="ModalOldPassword" id="ModalOldPassword"
                                       class="form-control">
                            </div>
                        </div>


                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> New Password: </label>
                            <div class="form-group">
                                <input type="password" name="ModalNewPassword" id="ModalNewPassword"
                                       class="form-control">
                            </div>
                        </div>


                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> Confirm Password: </label>
                            <div class="form-group">
                                <input type="password" name="ModalConfirmPassword" id="ModalConfirmPassword"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="submitPassword" class="btn btn-primary">Change Password</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Full Body Container -->
<div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

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
                            <a class="active" href="admin-account.php">Account</a>
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
                        <a class="active" href="admin-account.php">Account</a>
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
                            <li><a href="admin-maintenance.php">Courses</a></li>
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
                <h2>Personal Information</h2>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!--Content-->
<br><br><br>

<div class="container">
    <form name="UpdateAdmin" id="UpdateAdmin" autocomplete="off" action="functions.php" method="POST">
        <div class="col-md-12">
            <div class="row field">
                <?php

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    if ($id == 1) {
                        echo '
                    <div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Username successfully changed.
                    </div>
                    ';
                    } elseif ($id == 2) {
                        echo '
                    <div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Password successfully changed.
                    </div>
                    ';
                    } elseif ($id == 3) {
                        echo '
                    <div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Personal info successfully updated.
                    </div>
                    ';
                    }

                }
                ?>
                <div class="col-md-2 fieldcol">
                    <label = "usr" class = "control-label"> Username: </label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <label = "usr" class = "control-label"><?php echo $Username; ?></label>
                    </div>
                </div>
                <div class="col-md-3 fieldcol">
                    <div class="form-group">
                        <div class="box">
                            <button class="btn btn-default" data-toggle="modal" data-target="#ChangeUsername">Change
                                Username
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-2 fieldcol">
                    <label = "usr" class = "control-label"> Password: </label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <label = "usr" class = "control-label">**********</label>
                    </div>
                </div>
                <div class="col-md-3 fieldcol">
                    <div class="form-group">
                        <div class="box">
                            <button class="btn btn-default" data-toggle="modal" data-target="#ChangePassword">
                                ChangePassword
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-2 fieldcol">
                    <label>First Name <span>(*)</span></label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <input type="text" name="FirstName" id="FirstName" class="form-control"
                               value="<?php echo $FirstName; ?>">
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-2 fieldcol">
                    <label>Middle Name <span>(*)</span></label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <input type="text" name="MiddleName" id="MiddleName" class="form-control"
                               value="<?php echo $MiddleName; ?>">
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-2 fieldcol">
                    <label>Last Name <span>(*)</span></label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <input type="text" name="LastName" id="LastName" class="form-control"
                               value="<?php echo $LastName; ?>">
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-2 fieldcol">
                    <label>Position <span>(*)</span></label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <input type="text" name="Position" id="Position" class="form-control"
                               value="<?php echo $Position; ?>">
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-2 fieldcol">
                    <label>Address <span>(*)</span></label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <input type="text" name="Address" id="Address" class="form-control"
                               value="<?php echo $Address; ?>">
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-2 fieldcol">
                    <label>Contact Number <span>(*)</span></label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <input type="text" name="ContactNumber" id="ContactNumber" class="form-control"
                               value="<?php echo $ContactNumber ?>">
                    </div>
                </div>
            </div>
        </div>
        &nbsp;
        <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
        <div class="field">
            <div class="text-center">
                <button type="submit" class="btn-system btn-large">Save</button>
                <button type="submit" class="btn-system btn-large">Cancel</button>
            </div>
        </div>
    </form>
</div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $("#change-Username-form").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                ModalNewUsername: {
                    validators: {
                        notEmpty: {
                            message: "Username is required."
                        },
                        identical: {
                            field: "ModalConfirmUsername",
                            message: "Username and Confirm Username mismatched."
                        }
                    }
                },
                ModalConfirmUsername: {
                    validators: {
                        notEmpty: {
                            message: "Username is required."
                        },
                        identical: {
                            field: "ModalNewUsername",
                            message: "Username and Confirm Username mismatched."
                        }
                    }
                }
            }
        });

        $("#change-password-form").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                ModalOldPassword: {
                    validators: {
                        notEmpty: {
                            message: "Old Password is required."
                        }
                    }
                },
                ModalNewPassword: {
                    validators: {
                        notEmpty: {
                            message: "New Password is required."
                        }
                    }
                },
                ModalConfirmPassword: {
                    validators: {
                        notEmpty: {
                            message: "Confirm Password is required."
                        },
                        identical: {
                            field: "ModalNewPassword",
                            message: "Password mismatched."
                        }
                    }
                }
            }
        });

        $("#UpdateAdmin").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                FirstName: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "First Name can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                MiddleName: {
                    validators: {
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "Middle Name can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                LastName: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "Last Name Name can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                Position: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                Department: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                Address: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                ContactNumber: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        },
                        regexp: {
                            regexp: /^[0-9]+$/i,
                            message: "Contact Number can consist of numeric characters only"
                        }
                    }
                }
            }
        });
    });


    $("button#submitPassword").click(function () {
        $.post($("#change-password-form").attr("action"),
            $("#change-password-form :input").serializeArray(),
            function (data) {
                $("div#message").html(data);
            });

        $("#change-password-form").submit(function () {
            return false;
        });
    });
</script>
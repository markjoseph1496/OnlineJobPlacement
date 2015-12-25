<?php

include('../connection.php');
session_start();

$AdminID = $_SESSION['AdminID'];

$qry = "SELECT * FROM admintbl WHERE AdminID ='$AdminID'";
$result = mysql_query($qry);
while ($qry = mysql_fetch_Array($result)) {
    $Email = $qry['Email'];
    $Password = $qry['Password'];
    $FirstName = $qry['FirstName'];
    $MiddleName = $qry['MiddleName'];
    $LastName = $qry['LastName'];
    $Position = $qry['Position'];
    $Department = $qry['Department'];
    $Address = $qry['Address'];
    $ContactNumber = $qry['ContactNumber'];
}

?>
<!doctype html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS</title>

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="../css/basic-template.css" rel="stylesheet"/>
    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <!-- BootstrapValidator -->
    <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen"/>


    <!-- Margo JS  -->
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
    <div class="modal fade" id="ChangeEmail" role="dialog">
        <div class="modal-dialog" style="padding:100px">

            <!-- Modal content-->
            <form id="change-email-form" autocomplete="off" method="POST" action="functions.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Email</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> New email: </label>
                            <div class="form-group">
                                <input type="email" name="ModalNewEmail" id="ModalNewEmail" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> Confirm Email: </label>
                            <div class="form-group">
                                <input type="text" name="ModalConfirmEmail" id="ModalConfirmEmail" class="form-control">
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btnChangeEmail">Change Email</button>
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
                            <label = "usr" class = "control-label"> Old Password: </label>
                            <div class="form-group">
                                <input type="password" name="ModalOldPassword" id="ModalOldPassword" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> New Password: </label>
                            <div class="form-group">
                                <input type="password" name="ModalNewPassword" id="ModalNewPassword" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> Confirm Password: </label>
                            <div class="form-group">
                                <input type="password" name="ModalConfirmPassword" id="ModalConfirmPassword" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Change Password</button>
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
                        <!-- Start Contact Info
                        <ul class="contact-details">
                          <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                          </li>
                          <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                          </li>
                          <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                          </li>
                        </ul>
                         End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6">
                        <!-- Start Social Links
                        <ul class="social-list">
                          <li>
                            <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li>
                            <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li>
                            <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                          </li>
                          <li>
                            <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                          </li>
                          <li>
                            <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                          </li>
                          <li>
                            <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                          </li>
                          <li>
                            <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                          </li>
                          <li>
                            <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li>
                            <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                          </li>
                          <li>
                            <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                          </li>
                        </ul>
                         End Social Links -->
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
                        OJPMS
                    </a>
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
                            <a href="admin.php">Home</a>
                        </li>
                        <li>
                            <a href="admin-reports.php">Reports</a>
                        </li>
                        <li>
                            <a class="active" href="admin-account.php">Account</a>
                        </li>
                        <li>
                            <a href="admin-requested.php">Requested</a>
                        </li>
                        <li>
                            <a href="admin-companylist.php">Company List</a>
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
                        <a href="admin-reports.php">Reports</a>
                    </li>
                    <li>
                        <a class="active" href="admin-account.php">Account</a>
                    </li>
                    <li>
                        <a href="admin-requested.php">Requested</a>
                    </li>
                    <li>
                        <a href="admin-companylist.php">Company List</a>
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
                <ul class="breadcrumbs">
                    <li><a href="admin-userlist.php">View User's List</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!--Content-->
<br><br><br>

<div class="container">
    <div class="col-md-12">
        <div class="row field">
            <div class="col-md-2 fieldcol">
                <label = "usr" class = "control-label"> Email: </label>
            </div>
            <div class="col-md-4 fieldcol">
                <div class="form-group">
                    <label = "usr" class = "control-label"><?php echo $Email; ?></label>
                </div>
            </div>
            <div class="col-md-3 fieldcol">
                <div class="form-group">
                    <div class="box">
                        <button class="btn btn-default" data-toggle="modal" data-target="#ChangeEmail">Change email</button>
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
                        <button class="btn btn-default" data-toggle="modal" data-target="#ChangePassword">ChangePassword</button>
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
                    <input type="text" name="fname" id="usr" class="form-control" style="width: 550px;" value="<?php echo $FirstName; ?>">
                </div>
            </div>
        </div>
        <div class="row field">
            <div class="col-md-2 fieldcol">
                <label>Middle Name <span>(*)</span></label>
            </div>
            <div class="col-md-4 fieldcol">
                <div class="form-group">
                    <input type="text" name="mname" id="usr" class="form-control" style="width: 550px;" value="<?php echo $MiddleName; ?>">
                </div>
            </div>
        </div>
        <div class="row field">
            <div class="col-md-2 fieldcol">
                <label>Last Name <span>(*)</span></label>
            </div>
            <div class="col-md-4 fieldcol">
                <div class="form-group">
                    <input type="text" name="lname" id="usr" class="form-control" style="width: 550px;" value="<?php echo $LastName; ?>">
                </div>
            </div>
        </div>
        <div class="row field">
            <div class="col-md-2 fieldcol">
                <label>Position <span>(*)</span></label>
            </div>
            <div class="col-md-4 fieldcol">
                <div class="form-group">
                    <input type="text" name="position" id="usr" class="form-control" style="width: 550px;" value="<?php echo $Position; ?>">
                </div>
            </div>
        </div>
        <div class="row field">
            <div class="col-md-2 fieldcol">
                <label>Department<span>(*)</span></label>
            </div>
            <div class="col-md-4 fieldcol">
                <div class="form-group">
                    <input type="text" name="dept" id="usr" class="form-control" style="width: 550px;" value="<?php echo $Department; ?>">
                </div>
            </div>
        </div>
        <div class="row field">

            <div class="col-md-2 fieldcol">
                <label>Address <span>(*)</span></label>
            </div>
            <div class="col-md-4 fieldcol">
                <div class="form-group">
                    <input type="text" name="address" id="usr" class="form-control" style="width: 550px;" value="<?php echo $Address; ?>">
                </div>
            </div>
        </div>
        <div class="row field">
            <div class="col-md-2 fieldcol">
                <label>Contact Number <span>(*)</span></label>
            </div>
            <div class="col-md-4 fieldcol">
                <div class="form-group">
                    <input type="text" name="contact" id="usr" class="form-control" style="width: 550px;" value="<?php echo $ContactNumber ?>">
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary " name="btnSave" id="save" href="#"><b> Save </b></button>
    &nbsp;
    <button type="submit" class="btn btn-primary " name="btnSave" id="save" href="#"><b> Cancel </b></button>
</div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $("#change-email-form").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                ModalNewEmail: {
                    validators: {
                        notEmpty: {
                            message: "Email is required."
                        },
                        identical: {
                            field: "ModalConfirmEmail",
                            message: "Email and Confirm email mismatched."
                        }
                    }
                },
                ModalConfirmEmail: {
                    validators: {
                        notEmpty: {
                            message: "Email is required."
                        },
                        identical: {
                            field: "ModalNewEmail",
                            message: "Email and Confirm email mismatched."
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
    });
</script>
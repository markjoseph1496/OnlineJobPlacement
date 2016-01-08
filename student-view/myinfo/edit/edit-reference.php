<?php 
include('../../../connection.php');
session_start();

$ReferenceID = $_GET['id'];

$reference_tbl =
    GSecureSQL::query(
        "SELECT * FROM referencetbl WHERE ReferenceID = ?",
        TRUE,
        "s",
        $ReferenceID
    );

    $Name = $reference_tbl[0][2];
    $Relationship = $reference_tbl[0][3];
    $Company = $reference_tbl[0][4];
    $Position = $reference_tbl[0][5];
    $Phone = $reference_tbl[0][6];
    $Email = $reference_tbl[0][7];
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
    <link rel="stylesheet" href="../../../css/bootstrap.min.css" />

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="../../../css/bootstrapValidator.min.css" />

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.min.js" ></script>

    <!-- BootstrapValidator -->
    <script type="text/javascript" src="../../../js/bootstrapValidator.min.js" ></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.min.css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../../../css/slicknav.css" media="screen">

    <!-- CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../../../css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="../../../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../../../js/modernizrr.js"></script>
    <script type="text/javascript" src="../../../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../../../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../../../js/count-to.js"></script>
    <script type="text/javascript" src="../../../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../../../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../../../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../../../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../../../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../../../js/jquery.slicknav.js"></script>
</head>

<body>
    <form id="EditReference" name="EditReference" autocomplete="off" action="myinfoedit.php">
    <div id="container">
        <!-- Start Header Section -->
        <div class="hidden-header"></div>
        <header class="clearfix">
        <!-- Start Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Start Contact Info -->
                            <ul class="contact-details">
                                <li class="profile-name"><i class="fa fa-hashtag"></i><b> 008-2012-0805</b></li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-5">
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
                            <img src="../../../images/ojpms.png">
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
                                <a class="active" href="../personal-info.php">My Info</a>
                                <ul class="dropdown">
                                    <li><a href="../personal-info.php">Personal Info</a></li>
                                    <li><a href="../contacts-info.php">Contacts Info</a></li>
                                    <li><a href="../work.php">Work</a></li>
                                    <li><a href="../education.php">Education</a></li>
                                    <li><a href="../certifications.php">Certifications</a></li>
                                    <li><a href="../achievements.php">Achievements</a></li>
                                    <li><a href="../specialization-and-languages.php">Specialization & Languages</a></li>
                                    <li><a class="active" href="../references.php">References</a></li>
                                    <li><a href="../portfolio.php">Portfolio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../../resumelink/resume-link.php">Resume Link</a>
                                <ul class="dropdown">
                                    <li><a href="../../resumelink/resume-link.php">Resume Link</a></li>
                                    <li><a href="../../resumelink/background.php">Background</a></li>
                                    <li><a href="../../resumelink/print-share.php">Print/Share</a></li>
                                </ul>
                             </li>
                            <li>
                                <a href="../../applications/applications.php">Applications</a>
                            </li>
                            <li>
                                <a href="../../search-job/jobs.php">Jobs</a>
                            </li>
                            <li>
                                <a href="../../settings/privacy-settings.php">Settings</a>
                                <ul class="dropdown">
                                    <li><a href="../../settings/privacy-settings.php">Privacy Settings</a></li>
                                    <li><a href="../../settings/pass-settings.php">Password Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="../personal-info.php">My Info</a>
                        <ul class="dropdown">
                            <li><a href="../personal-info.php">Personal Info</a></li>
                            <li><a href="../contacts-info.php">Contacts Info</a></li>
                            <li><a href="../work.php">Work</a></li>
                            <li><a href="../education.php">Education</a></li>
                            <li><a href="../certifications.php">Certifications</a></li>
                            <li><a href="../achievements.php">Achievements</a></li>
                            <li><a href="../specialization-and-languages.php">Specialization & Languages</a></li>
                            <li><a class="active" href="../references.php">References</a></li>
                            <li><a href="../portfolio.php">Portfolio</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../resumelink/resume-link.php">Resume Link</a>
                        <ul class="dropdown">
                            <li><a href="../../resumelink/resume-link.php">Resume Link</a></li>
                            <li><a href="../../resumelink/background.php">Background</a></li>
                            <li><a href="../../resumelink/print-share.php">Print/Share</a></li>
                        </ul>
                     </li>
                    <li>
                        <a href="../../applications/applications.php">Applications</a>
                    </li>
                    <li>
                        <a href="../../search-job/jobs.php">Jobs</a>
                    </li>
                    <li>
                        <a href="../../settings/privacy-settings.php">Settings</a>
                        <ul class="dropdown">
                            <li><a href="../../settings/privacy-settings.php">Privacy Settings</a></li>
                            <li><a href="../../settings/pass-settings.php">Password Settings</a></li>
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
            <input type="text" class="form-control" id="ReferenceID" name="ReferenceID" style="display: none;" value="<?php echo $ReferenceID; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>References</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li>References</li>
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
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $Name; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Relationship <span>(*)</span></label>
                                    <input type="text" class="form-control" id="Relationship" name="Relationship" value="<?php echo $Relationship; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Company <span>(*)</span></label>
                                    <input type="text" class="form-control" id="Company" name="Company" value="<?php echo $Company; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Position <span>(*)</span></label>
                                    <input type="text" class="form-control" id="Position" name="Position" value="<?php echo $Position; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Phone <span>(*)</span></label>
                                    <input type="text" class="form-control" id="Phone" name="Phone" value="<?php echo $Phone; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $Email; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-3 fieldcol">
                                &nbsp;
                            </div>
                            <div class="col-md-3 fieldcol">
                                &nbsp;
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
                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                <div class="field">
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-hg btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../../js/script.js"></script>
</form>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
            var validator = $("#EditReference").bootstrapValidator({
                feedbackIcons:{
                    valid: "glyphicon glyphicon-ok",
                    invalid: "glyphicon glyphicon-remove",
                    validating: "glyphicon glyphicon-refresh"
                },
                fields: {
                    Name: {
                        validators: {
                            notEmpty: {
                                message: "This field is required."
                            },
                            regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "Name can consist of alphabetical characters and spaces only"
                            }
                        }
                    },
                    Relationship: {
                        validators: {
                            notEmpty: {
                                message: "This field is required."
                            }
                        }
                    },
                    Company: {
                        validators: {
                            notEmpty: {
                                message: "This field is required."
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
                    Phone: {
                        validators: {
                            notEmpty: {
                                message: "This field is required."
                            },
                            regexp: {
                                    regexp: /^[0-9]+$/i,
                                    message: "Phone number can consist of numeric characters only."
                            }
                        }
                    },
                    Email: {
                        validators: {
                            notEmpty: {
                                message: "This field is required."
                            }
                        }
                    },
                }
            });
    });
</script>
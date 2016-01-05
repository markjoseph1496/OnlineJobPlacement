<?php
include('../../connection.php');
session_start();

if (isset($_SESSION['StudentID'])) {
    $StudentID = $_SESSION['StudentID'];
} else {
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php?id=2';
        </script>
        ";
}
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen"/>

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
                                <li><a class="active" href="personal-info.php">Personal Info</a></li>
                                <li><a href="contacts-info.php">Contacts Info</a></li>
                                <li><a href="work.php">Work</a></li>
                                <li><a href="education.php">Education</a></li>
                                <li><a href="certifications.php">Certifications</a></li>
                                <li><a href="achievements.php">Achievements</a></li>
                                <li><a href="specialization-and-languages.php">Specialization & Languages</a></li>
                                <li><a class="active" href="references.php">References</a></li>
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
                            <a href="../search-job/jobs.php">Jobs</a>
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
                        <li><a href="education.php">Education</a></li>
                        <li><a href="certifications.php">Certifications</a></li>
                        <li><a href="achievements.php">Achievements</a></li>
                        <li><a href="specialization-and-languages.php">Specialization & Languages</a></li>
                        <li><a class="active" href="references.php">References</a></li>
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
                    <a href="../search-job/jobs.php">Jobs</a>
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
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                if ($id == 1) {
                    echo '
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                Reference successfully updated.
                            </div>
                            ';
                } elseif ($id == 2) {
                    echo '
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                Reference successfully added.
                            </div>
                            ';
                } elseif ($id == 3) {
                    echo '
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                Reference successfully deleted.
                            </div>
                            ';
                }

            }
            ?>
            <div class="row sidebar-page">
                <!-- Page Content -->
                <div class="col-md-9 page-content">

                    <div class="classic-testimonials">
                        <!-- Single Testimonial -->
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <h4>References<span class="head-line"></span></h4>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <a href="add/add-reference.php" class="btnforadding" style="float:right;">
                                    <span class="fa fa-plus-square"> Add Reference</span>
                                </a>
                            </div>
                        </div>

                        <table class="table segment table-hover">
                            <thead>
                            <tr class="table-color">
                                <th>Name</th>
                                <th>Relationship</th>
                                <th>Company</th>
                                <th>Position</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th width="15%">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $reference_tbl =
                                GSecureSQL::query(
                                    "SELECT * FROM referencetbl WHERE StudentID = ?",
                                    TRUE,
                                    "s",
                                    $StudentID
                                );
                            foreach ($reference_tbl as $value) {
                                $ReferenceID = $value[0];
                                $Name = $value[2];
                                $Relationship = $value[3];
                                $Company = $value[4];
                                $Position = $value[5];
                                $Phone = $value[6];
                                $Email = $value[7];
                                ?>
                                <tr>
                                    <td><?php echo $Name; ?></td>
                                    <td><?php echo $Relationship; ?></td>
                                    <td><?php echo $Company; ?></td>
                                    <td><?php echo $Position; ?></td>
                                    <td><?php echo $Phone; ?></td>
                                    <td><?php echo $Email; ?></td>
                                    <td>
                                        <button href=# class="btn btn-danger" data-toggle="modal"
                                                data-target="#DeleteReference<?php echo $ReferenceID; ?>">
                                            <i class="fa fa-trash fa-1x"></i>
                                        </button>
                                        <a href="edit/edit-reference.php?id=<?php echo $ReferenceID; ?>"
                                           class="btn btn-default">
                                            <i class="fa fa-pencil-square-o fa-1x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="DeleteReference<?php echo $ReferenceID; ?>" role="dialog">
                                    <div class="modal-dialog" style="padding:100px">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Delete Reference?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-15 fieldcol">
                                                    <label = "usr" class = "control-label">Do you want to delete this
                                                    information? This cannot be undone.</label>
                                                    <div class="form-group">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="delete.php?delete_ReferenceID=<?php echo $ReferenceID; ?>"
                                                       class="btn btn-danger">Delete</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
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
</html>
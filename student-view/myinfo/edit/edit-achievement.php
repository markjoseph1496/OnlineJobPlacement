<?php 
include('../../../connection.php');
session_start();


$AchievementID = $_GET['id'];

$achievements_tbl =
    GSecureSQL::query(
        "SELECT * FROM achievementstbl WHERE AchievementID = ?",
        TRUE,
        "s",
        $AchievementID
    );

    $Achievements = $achievements_tbl[0][2];
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
    <form id="EditAchievement" name="EditAchievement" autocomplete="off" action="myinfoedit.php">
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
                                <a class="active" href="../personal-info.php">My Info</a>
                                <ul class="dropdown">
                                    <li><a href="../personal-info.php">Personal Info</a></li>
                                    <li><a href="../contacts-info.php">Contacts Info</a></li>
                                    <li><a href="../work.php">Work</a></li>
                                    <li><a href="../education.php">Education</a></li>
                                    <li><a href="../certifications.php">Certifications</a></li>
                                    <li><a class="active" href="../achievements.php">Achievements</a></li>
                                    <li><a href="../specialization-and-languages.php">Specialization & Languages</a></li>
                                    <li><a href="../references.php">References</a></li>
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
                            <li><a class="active" href="../achievements.php">Achievements</a></li>
                            <li><a href="../specialization-and-languages.php">Specialization & Languages</a></li>
                            <li><a href="../references.php">References</a></li>
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
            <input type="text" class="form-control" id="AchievementID" name="AchievementID" style="display: none;" value="<?php echo $AchievementID; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Achievements</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li>Achievements</li>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Achievement <span>(*)</span></label>
                                    <input type="text" class="form-control" id="Achievement" name="Achievement" value="<?php echo $Achievements?>">
                                </div>
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
            var validator = $("#EditAchievement").bootstrapValidator({
                feedbackIcons:{
                    valid: "glyphicon glyphicon-ok",
                    invalid: "glyphicon glyphicon-remove",
                    validating: "glyphicon glyphicon-refresh"
                },
                fields: {
                    Achievement: {
                        validators: {
                            notEmpty: {
                                message: "This field is required."
                            }
                        }
                    }
                }
            });
    });
</script>
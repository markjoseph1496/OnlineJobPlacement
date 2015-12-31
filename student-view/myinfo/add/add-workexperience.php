<?php
include('../../../connection.php');
session_start();

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
                                <li><a class="active" href="../work.php">Work</a></li>
                                <li><a href="../education.php">Education</a></li>
                                <li><a href="../certifications.php">Certifications</a></li>
                                <li><a href="../achievements.php">Achievements</a></li>
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
                    <a class="active" href="personal-info.php">My Info</a>
                    <ul class="dropdown">
                        <li><a href="personal-info.php">Personal Info</a></li>
                        <li><a href="contacts-info.php">Contacts Info</a></li>
                        <li><a class="active" href="work.php">Work</a></li>
                        <li><a href="education.php">Education</a></li>
                        <li><a href="certifications.php">Certifications</a></li>
                        <li><a href="achievements.php">Achievements</a></li>
                        <li><a href="specialization-and-languages.php">Specialization & Languages</a></li>
                        <li><a href="references.php">References</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
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
                    <a href="../../../login-student.php?id=1"><i class="fa fa-sign-out"></i> Sign Out</a>
                </li>
            </ul>
            <!-- Mobile Menu End -->
        </div>
    </header>

    <div class="page-banner no-subtitle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Work Experience</h2>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li>Work Experience</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Content -->
    <form id="myForm" name="myForm" action="myinfoadd.php" method="POST" autocomplete="off">
    <div id="content">
        <div class="container">
            <div class="row sidebar-page">
                <!-- Page Content -->
                <div class="col-md-9 page-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Name <span>(*)</span></label>
                                <input type="text" class="form-control" id="CompanyName" name="CompanyName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Website</label>
                                <input type="url" class="form-control" id="CompanyWebsite" name="CompanyWebsite">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Industry <span>(*)</span></label>
                                <select id="Industry" name="Industry" class="form-control"
                                        style="width:100%; height:34px;">
                                    <option value="">- Please select one -</option>
                                    <?php

                                    $industry_tbl =
                                        GSecureSQL::query(
                                            "SELECT * FROM listofindustrytbl",
                                            TRUE
                                        );
                                    $count = 0;
                                    foreach ($industry_tbl as $value) {
                                        $IndustryID = $industry_tbl[$count]->id;
                                        $Industry = $industry_tbl[$count]->Industry;
                                        $count++;
                                        ?>
                                        <option value="<?php echo $IndustryID; ?>"><?php echo $Industry; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Duration</label><br>
                                <label><input type="checkbox" name="Duration" id="Duration" checked="checked"> Currently
                                    Work Here</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>From <span>(*)</span></label>
                                <select id="FromMonth" name="FromMonth" class="form-control"
                                        style="width:100%; height:34px;">
                                    <option value="">- Select Month -</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select id="FromYear" name="FromYear" class="form-control"
                                        style="width:100%; height:34px;">
                                    <option value="">- Select Year -</option>
                                    <?php
                                    $date = Date("Y") + 1;
                                    while ($date != 1935) {
                                        $date--;
                                        echo "<option value='$date'> $date</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div id="ToDuration">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>To <span>(*)</span></label>
                                    <select id="ToMonth" name="ToMonth" class="form-control"
                                            style="width:100%; height:34px;">
                                        <option value="">- Select Month -</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 fieldcol">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select id="ToYear" name="ToYear" class="form-control"
                                            style="width:100%; height:34px;">
                                        <option value="">- Select Year -</option>
                                        <?php
                                        $date = Date("Y") + 1;
                                        while ($date != 1935) {
                                            $date--;
                                            echo "<option value='$date'> $date</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position Level <span>(*)</span></label>
                                <select id="PositionLevel" name="PositionLevel" class="form-control">
                                    <option value="">- Select Position Level -</option>
                                    <?php
                                    $position_tbl =
                                        GSecureSQL::query(
                                            "SELECT * FROM listofpositiontbl",
                                            TRUE
                                        );
                                    $count = 0;
                                    foreach ($position_tbl as $value) {
                                        $PositionID = $position_tbl[$count]->id;
                                        $Position = $position_tbl[$count]->Position;
                                        $count++;
                                        ?>
                                        <option value="<?php echo $PositionID; ?>"><?php echo $Position; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Specialization <span>(*)</span></label>
                                <select id="WorkSpecialization" name="WorkSpecialization" class="form-control"
                                        style="width:100%; height:34px;">
                                    <option value="">- Select Specialization -</option>
                                    <?php
                                    $specialization_tbl =
                                        GSecureSQL::query(
                                            "SELECT * FROM listofspecializationtbl",
                                            TRUE
                                        );
                                    $count = 0;
                                    foreach ($specialization_tbl as $value) {
                                        $SpecializationID = $specialization_tbl[$count]->id;
                                        $Specialization = $specialization_tbl[$count]->Specialization;
                                        $count++;
                                        ?>
                                        <option
                                            value="<?php echo $SpecializationID; ?>"><?php echo $Specialization; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Monthly Salary</label><br>
                                <select id="MonthlySalary" name="MonthlySalary" class="form-control"
                                        style="width:100%; height:34px;">
                                    <option value="">- Select Monthly Salary -</option>
                                    <?php
                                    $salaryrange_tbl =
                                        GSecureSQL::query(
                                            "SELECT * FROM listofsalaryrangetbl",
                                            TRUE
                                        );
                                    $count = 0;
                                    foreach ($salaryrange_tbl as $value) {
                                        $SalaryID = $salaryrange_tbl[$count]->id;
                                        $Salary = $salaryrange_tbl[$count]->SalaryRange;
                                        $count++;
                                        ?>
                                        <option value="<?php echo $SalaryID; ?>"><?php echo $Salary; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-12 fieldcol">
                            <div class="form-group">
                                <label>Nature of Work</label><br>
                                <textarea class="form-control" id="NatureOfWork" name="NatureOfWork"
                                          rows="5" maxlength="150"></textarea>
                                <div id="textarea_feedback"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Content -->

                <!--Sidebar-->
                <div class="col-md-3 sidebar left-sidebar">
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
                    <button type="submit" class="btn btn-lg btn-hg btn-primary" name="btnSave">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- End Content -->
<script type="text/javascript" src="../../../js/script.js"></script>
</body>
</html>
<script type="text/javascript">
    $('#Duration').click(function () {
        if ($(this).is(':checked')) {
            $('#ToDuration').hide();
        } else {
            $('#ToDuration').show();
        }
    });

    if ($('#Duration').is(':checked')) {
        $('#ToDuration').hide();
    } else {
        $('#ToDuration').show();
    }

    $(document).ready(function() {
        var text_max = 150;
        $('#textarea_feedback').html(text_max + ' characters remaining');

        $('#NatureOfWork').keyup(function() {
            var text_length = $('#NatureOfWork').val().length;
            var text_remaining = text_max - text_length;

            $('#textarea_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function () {
        var validator = $("#myForm").bootstrapValidator({
            feedbackIcons:{
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                CompanyName: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                Industry: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                FromMonth: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                FromYear: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                PositionLevel: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                WorkSpecialization: {
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                MonthlySalary: {
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
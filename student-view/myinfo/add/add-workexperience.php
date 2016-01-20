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

    <!-- Fonts -->
    <link href="../../../fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../../fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../../fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../../fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

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
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">                            
                            <a href="../../../login-student.php?id=1" class="line-height"><i class="fa fa-sign-out"></i></a>                           
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
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
                            <li><a href="#"></a></li>
                            <li>Add Work Experience</li>
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
                                        foreach ($industry_tbl as $value) {
                                            $IndustryID = $value[0];
                                            $Industry = $value[1];
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
                                    <label><input type="checkbox" name="Duration" id="Duration" checked="checked"> Currently Work Here</label>
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
                                        <select id="ToMonth" name="ToMonth" class="form-control" style="width:100%; height:34px;">
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
                                        foreach ($position_tbl as $value) {
                                            $PositionID = $value[0];
                                            $Position = $value[1];
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
                                            $SpecializationID = $value[0];
                                            $Specialization = $value[1];
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
                                        foreach ($salaryrange_tbl as $value) {
                                            $SalaryID = $value[0];
                                            $Salary = $value[1];
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
                        <button type="submit" class="btn-system btn-large border-btn">Add</button>
                        <button type="cancel" class="btn-system btn-large btn-black">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    
    <!-- End Content -->
    <script type="text/javascript" src="../../../js/script.js"></script>
</body>
</html>

<script type="text/javascript">
    $('#Duration').(function () {
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
                ToMonth: {
                    required: "#Duration:checked",
                    validators: {
                        notEmpty: {
                            message: "This field is required."
                        }
                    }
                },
                ToYear: {
                    required: "#Duration:checked",
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
<!DOCTYPE html>

<?php 
include('../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}
else{
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php?id=2';
        </script>
        ";
}


$query = "SELECT * FROM studcontactstbl WHERE StudentID ='$StudentID'";
$result = mysql_query($query);
        while($query = mysql_fetch_Array($result))
        {       
                $Email = $query['Email'];
                $Address = $query['Address'];
                $MobileNumber = $query['MobileNumber'];
                $Region = $query['Region'];
                $HomeNumber = $query['HomeNumber'];
                $City = $query['City'];
                $WorkNumber = $query['WorkNumber'];
                $PostalCode = $query['PostalCode'];
        }
?>
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
    <link href="../../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../../css/bootstrapValidator.min.css" rel="stylesheet"/>
    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

    <!-- BootstrapValidator -->
    <script src="../../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../../css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen"/>


    <!-- Margo JS  -->

    <script type="text/javascript" src="../../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../../js/modernizrr.js"></script>
    <script type="text/javascript" src="../../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../../js/count-to.js"></script>
    <script type="text/javascript" src="../../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../../js/jquery.slicknav.js"></script>

</head>

<body>
    <form id="Save" name="Save" autocomplete="off" action="addfunction.php">
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
                                    <li><a href="personal-info.php">Personal Info</a></li>
                                    <li><a class="active" href="contacts-info.php">Contacts Info</a></li>
                                    <li><a href="work.php">Work</a></li>
                                    <li><a href="education.php">Education</a></li>
                                    <li><a href="certifications.php">Certifications</a></li>
                                    <li><a href="achievements.php">Achievements</a></li>
                                    <li><a href="specialization-and-languages.php">Specialization & Languages</a></li>
                                    <li><a href="references.php">References</a></li>
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
                            <li><a class="active" href="contacts-info.php">Contacts Info</a></li>
                            <li><a href="work.php">Work</a></li>
                            <li><a href="education.php">Education</a></li>
                            <li><a href="certifications.php">Certifications</a></li>
                            <li><a href="achievements.php">Achievements</a></li>
                            <li><a href="specialization-and-languages.php">Specialization & Languages</a></li>
                            <li><a href="references.php">References</a></li>
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
                        <h2>Contacts Information</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li>Contacts Information</li>
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
                    <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];

                        if($id==1){
                            echo'
                                <div class="alert alert-success">
                                    <span class="glyphicon glyphicon-info-sign"></span> 
                                    Contacts Information successfully updated.
                                </div>
                                ';
                        }
                    }
                    ?>
                    <!-- Page Content -->
                    <div class="col-md-9 page-content">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Single Testimonial -->
                                <div class="classic-testimonials">
                                    <div class="testimonial-content">
                                        <div class="form-group">
                                            <label>Email <span>(*)</span></label>
                                            <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $Email; ?>" maxlength="30">
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile Number <span>(*)</span></label>
                                            <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" value="<?php echo $MobileNumber; ?>" maxlength="11">
                                        </div>
                                        <div class="form-group">
                                            <label>Home Number</label>
                                            <input type="text" class="form-control" id="HomeNumber" name="HomeNumber" value="<?php echo $HomeNumber; ?>" maxlength="11">
                                        </div>
                                        <div class="form-group">
                                            <label>Work Number</label>
                                            <input type="text" class="form-control" id="WorkNumber" name="WorkNumber" value="<?php echo $WorkNumber; ?>" maxlength="11">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                            <div class="col-md-6">
                                <!-- Single Testimonial -->
                                <div class="classic-testimonials">
                                    <div class="testimonial-content">
                                        <div class="form-group">
                                            <label>Address <span>(*)</span></label>
                                            <input type="text" class="form-control" id="Address" name="Address" value="<?php echo $Address; ?>" maxlength="60">
                                        </div>
                                        <div class="form-group">
                                            <label>City <span>(*)</span></label>
                                            <select id="City" name="City" class="form-control" style="width:100%; height:34px;">
                                                <option value="" <?php if($City=="") echo 'selected="selected"'; ?>>- Please select one -</option>
                                                <option value="Caloocan City" <?php if($City=="Caloocan City") echo 'selected="selected"'; ?>>Caloocan City</option>
                                                <option value="Las Piñas City" <?php if($City=="Las Piñas City") echo 'selected="selected"'; ?>>Las Piñas City</option>
                                                <option value="Makati City" <?php if($City=="Makati City") echo 'selected="selected"'; ?>>Makati City</option>
                                                <option value="Malabon City" <?php if($City=="Malabon City") echo 'selected="selected"'; ?>>Malabon City</option>
                                                <option value="Mandaluyong City" <?php if($City=="Mandaluyong City") echo 'selected="selected"'; ?>>Mandaluyong City</option>
                                                <option value="Manila" <?php if($City=="Manila") echo 'selected="selected"'; ?>>Manila</option>
                                                <option value="Marikina City" <?php if($City=="Marikina City") echo 'selected="selected"'; ?>>Marikina City</option>
                                                <option value="Muntinlupa City" <?php if($City=="Muntinlupa City") echo 'selected="selected"'; ?>>Muntinlupa City</option>
                                                <option value="Navotas City" <?php if($City=="Navotas City") echo 'selected="selected"'; ?>>Navotas City</option>
                                                <option value="Parañaque City" <?php if($City=="Parañaque City") echo 'selected="selected"'; ?>>Parañaque City</option>
                                                <option value="Pasay City" <?php if($City=="Pasay City") echo 'selected="selected"'; ?>>Pasay City</option>
                                                <option value="Pasig City" <?php if($City=="Pasig City") echo 'selected="selected"'; ?>>Pasig City</option>
                                                <option value="Pateros" <?php if($City=="Pateros") echo 'selected="selected"'; ?>>Pateros</option>
                                                <option value="Quezon City" <?php if($City=="Quezon City") echo 'selected="selected"'; ?>>Quezon City</option>
                                                <option value="San Juan City" <?php if($City=="San Juan City") echo 'selected="selected"'; ?>>San Juan City</option>
                                                <option value="Taguig City" <?php if($City=="Taguig City") echo 'selected="selected"'; ?>>Taguig City</option>
                                                <option value="Valenzuela City" <?php if($City=="Valenzuela City") echo 'selected="selected"'; ?>>Valenzuela City</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" id="PostalCode" name="PostalCode" value="<?php echo $PostalCode; ?>" maxlength="11">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
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
                        <button type="submit" class="btn-system btn-large" name ="btnSaveContactInfo">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $("#Save").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                Email: {
                    validators: {
                        notEmpty: {
                            message: "Email is required."
                        }
                    }
                },
                MobileNumber: {
                    validators: {
                            notEmpty: {
                                message: "Mobile Number is required."
                            },
                            regexp: {
                                regexp: /^[0-9]+$/i,
                                message: "Mobile Number can consist of numeric characters only."
                            }
                    }
                },
                HomeNumber: {
                    validators: {
                            regexp: {
                                    regexp: /^[0-9]+$/i,
                                    message: "Home Number can consist of numeric characters only."
                            }
                    }
                },
                WorkNumber: {
                    validators: {
                            regexp: {
                                    regexp: /^[0-9]+$/i,
                                    message: "Work Number can consist of numeric characters only."
                            }
                    }
                },
                Address: {
                    validators: {
                        notEmpty: {
                            message: "Address is required."
                        }
                    }
                },
                City: {
                    validators: {
                        notEmpty: {
                            message: "City is required."
                        }
                    }
                },
                PostalCode: {
                    validators: {
                            regexp: {
                                    regexp: /^[0-9]+$/i,
                                    message: "Postal Code can consist of numeric characters only."
                            }
                    }
                }
            }
        });
    });
</script>
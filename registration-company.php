<?php
include('connection.php');
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
    <meta name="description" content="OJPMS">

    <link rel="shortcut icon" href="../../images/logo/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- BootstrapValidator -->
    <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link href="fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/count-to.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.js"></script>
</head>

<body>
<form method="POST" name="companyregistration" id="companyregistration" action="addcompany.php" autocomplete="off">
    <!-- Container -->
    <div id="container">
        <div class="hidden-header"></div>

        <!-- Start Page Banner -->
        <div class="page-banner no-subtitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/ojpms.png">
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li>Already a member?</li>
                            <li><a href="login-company.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Content -->
        <div id="content">

            <div class="container">
                <div class="row">
                    <div class="big-title text-center">
                        <h1><strong>Registration</strong></h1>
                    </div>

                    <div class="row">
                        <div class="row">
                            <div class="col-md-6">
                                <h3><strong>Company Information:</strong></h3>
                            </div>
                            <div class="col-md-6">
                                <h3><strong>Primary User Information:</strong></h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="CompanyName" name="CompanyName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="FirstName" name="FirstName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Career Site Url <span>(*)</span></label>
                                <input type="text" class="form-control" id="Website" name="Website">
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>Middle Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="MiddleName" name="MiddleName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Industry <span>(*)</span></label><br>
                                    <select id="Industry" name="Industry" class="industry form-control">
                                        <option value>Select Industry</option>
                                        <?php
                                        $listofindustrytbl =
                                            GSecureSQL::query(
                                                "SELECT * FROM listofindustrytbl",
                                                TRUE
                                            );
                                        foreach ($listofindustrytbl as $value) {
                                            $Industry = $value[1];
                                            ?>
                                            <option value="<?php echo $Industry; ?>"><?php echo $Industry; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="LastName" name="LastName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City <span>(*)</span></label><br>
                                    <select id="City" name="City" class="city_id form-control">
                                        <option value="">- Please select one -</option>
                                        <option value="Caloocan City">Caloocan City</option>
                                        <option value="Las Pińas City">Las Pińas City</option>
                                        <option value="Makati City">Makati City</option>
                                        <option value="Malabon City">Malabon City</option>
                                        <option value="Mandaluyong City">Mandaluyong City</option>
                                        <option value="Manila">Manila</option>
                                        <option value="Marikina City">Marikina City</option>
                                        <option value="Muntinlupa City">Muntinlupa City</option>
                                        <option value="Navotas City">Navotas City</option>
                                        <option value="Parańaque City">Parańaque City</option>
                                        <option value="Pasay City">Pasay City</option>
                                        <option value="Pasig City">Pasig City</option>
                                        <option value="Pateros City">Pateros City</option>
                                        <option value="Quezon City">Quezon City</option>
                                        <option value="San Juan City">San Juan City</option>
                                        <option value="Taguig City">Taguig City</option>
                                        <option value="Valenzuela City">Valenzuela City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact Number <span>(*)</span></label>
                                    <input type="text" class="form-control" id="Contact" name="Contact" maxlength="11">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="Email" name="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Position <span>(*)</span></label>
                                    <input type="text" class="form-control" id="Position" name="Position">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="cPassword" name="cPassword">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm Password </label>
                                    <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                &nbsp;
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department <span>(*)</span></label>
                                    <input type="text" class="form-control" id="Department" name="Department">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <br><br>
                        <label style="float:right;"><span>(*)</span> <em> - Required Fields</em></label>
                    </div>
                    <div class="hr5" style="margin-top:40px;margin-bottom:40px;"></div>
                    <div class"row">
                        <div class="col-md-6">
                            <label><b>By clicking the "Sign Up" button below, I certify that I have read and agree to the <a
                                        href="" target="_blank">Terms of Use</a>.</b></label>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="btnsave" id="btnsave" class="btn-system btn-large border-btn"
                                    style="float:right;">Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End content -->

        <!-- Start Footer Section -->
        <footer>
            <div class="container">
                <!-- Start Copyright -->
                <div class="copyright-section">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2015 OJPMS - All Rights Reserved</p>
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-6">
                            <ul class="footer-nav">
                                <li><a href="#">Sitemap</a>
                                </li>
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-6 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- End Copyright -->
            </div>
        </footer>
        <!-- End Footer Section -->

        <!-- Go To Top Link -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
</form>
<script type="text/javascript" src="js/script.js"></script>
<!--
<script type="text/javascript">
    $(document).ready(function () {
        var validator = $("#companyregistration").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
           s: {
                CompanyName: {
                    validators: {
                        notEmpty: {
                            message: "Compamy Name is required."
                        },
                        stringLength: {
                            min: 1,
                            max: 15,
                            message: "Company Name is invalid."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "Company Name can consist of alphabetical characters and spaces only"
                        },
                        remote: {
                            message: 'The Company Name already exists',
                            url: 'addcompany.php',
                            data: {
                                type: 'CompanyName'
                            },
                            type: 'POST'
                        }
                    }
                },
                Industry: {
                    validators: {
                        notEmpty: {
                            message: "Industry is required."
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
                FirstName: {
                    validators: {
                        notEmpty: {
                            message: "First name is required."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "First Name can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                LastName: {
                    validators: {
                        notEmpty: {
                            message: "Last name is required."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "Last Name can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                Position: {
                    validators: {
                        notEmpty: {
                            message: "Position is required."
                        },
                        stringLength: {
                            min: 3,
                            max: 15,
                            message: "Position must be 3-15 characters long."
                        }
                    }
                },
                Department: {
                    validators: {
                        notEmpty: {
                            message: "Department is required."
                        },
                        stringLength: {
                            min: 3,
                            max: 15,
                            message: "Department must be 3-15 characters long."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "Department can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                Email: {
                    validators: {
                        notEmpty: {
                            message: "Email address is required."
                        },
                        stringLength: {
                            min: 6,
                            max: 35,
                            message: "Email address must be 6-35 characters long."
                        }
                    }
                },
                /*
                cPassword: {
                    validators: {
                        notEmpty: {
                            message: "Password is required."
                        },
                        stringLength: {
                            min: 8,
                            max: 16,
                            message: "Password must be 8-16 characters long."
                        }
                    }
                },
                ConfirmPassword: {
                    validators: {
                        notEmpty: {
                            message: "Confirm password is required."
                        },
                        identical: {
                           : "cPassword",
                            message: "Password and confirm password mismatched."
                        }
                    }
                },*/
                Contact: {
                    validators: {
                        notEmpty: {
                            message: "Contact Number is required."
                        },
                        stringLength: {
                            min: 11,
                            message: "Contact Number must be 11 characters long."
                        },
                        regexp: {
                            regexp: /^[0-9]+$/i,
                            message: "Contact Number can consist of numeric characters only."
                        }
                    }
                }

            }
        });
    });
</script>
-->
</body>
</html>
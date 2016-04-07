<?php
include('connection.php');
?>
<!doctype html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS | Registration</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="OJPMS">
    <link rel="shortcut icon" href="images/logo/favicon.ico">

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
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/open-sans.css">

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

    <script type="text/javascript" src="semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="semantic.min.css"></link>


</head>

<body>
<form method="POST" id="registration" name="registration" autocomplete="off" action="registeradd.php">
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
                            <li><a href="login-student.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->


        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <h4 class="ui dividing header">Student Details</h4>
                <div class="ui form"> 
                    <div class="three fields">
                        <div class="field">
                            <label>Student ID <span><i class="fa fa-asterisk"></i></span></label>
                            <input name="" type="text">
                        </div>
                        <div class="field">
                            <label>First Name <span><i class="fa fa-asterisk"></i></span></label>
                            <input name="first-name" type="text">
                        </div>
                        <div class="field">
                            <label>Last Name <span><i class="fa fa-asterisk"></i></span></label>
                            <input name="last-name" type="text">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Birthdate <span><i class="fa fa-asterisk"></i></span></label>
                            <input type="date" name="" id="">
                        </div>
                        <div class="field">
                            <label>Mobile No. <span><i class="fa fa-asterisk"></i></span></label>
                            <input name="" type="text">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Email <span><i class="fa fa-asterisk"></i></span></label>
                            <input name="" type="text">
                        </div>
                        <div class="field">
                            <label>Confirm Email <span><i class="fa fa-asterisk"></i></span></label>
                            <input name="" type="text">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Password <span><i class="fa fa-asterisk"></i></span></label>
                            <input name="" type="password">
                        </div>
                        <div class="field">
                            <label>Confirm Password <span><i class="fa fa-asterisk"></i></span></label>
                            <input name="" type="password">
                        </div>
                    </div>
                    <div class="field">
                        <label>City <span><i class="fa fa-asterisk"></i></span></label>
                        <select class="ui search dropdown">
                            <option value="">Please Select Your City</option>
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
                        <script type="text/javascript">
                            $('select.dropdown')
                            .dropdown();
                        </script>
                    </div>     
                </div><br><br>


                <h4 class="ui dividing header">Educational Background</h4>
                <div class="ui form"> 
                    <div class="two fields">
                        <div class="field">
                            <label>Educational Attainment <span><i class="fa fa-asterisk"></i></span></label>
                            <select class="ui fluid dropdown">
                                <option value="" selected="selected">Please Select One</option>
                                <option value="Bachelor's/College Degree">Bachelor's/College Degree</option>
                            </select>
                            <script type="text/javascript">
                                $('select.dropdown')
                                .dropdown();
                            </script>
                        </div>
                        <div class="field">
                            <label>Course <span><i class="fa fa-asterisk"></i></span></label>
                             <select class="ui fluid search selection dropdown">
                                <option value="">Please Select Your Course</option>
                                <?php
                                    $course_tbl =
                                        GSecureSQL::query(
                                            "SELECT CourseCode,CourseTitle FROM coursetbl",
                                            TRUE
                                        );
                                    foreach ($course_tbl as $value) {
                                        $CourseCode = $value[0];
                                        $CourseTitle = $value[1];
                                        print_r($course_tbl);
                                        ?>
                                        <option value="<?php echo $CourseCode; ?>"><?php echo $CourseTitle; ?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                            <script type="text/javascript">
                                $('select.dropdown')
                                .dropdown();
                            </script>
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Graduation Date <span><i class="fa fa-asterisk"></i></span></label>
                            <select class="ui fluid search dropdown">
                                <option value="">Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <script type="text/javascript">
                                $('select.dropdown')
                                .dropdown();
                            </script>
                        </div>
                        <div class="field">
                            <label>&nbsp; <span><i class="fa fa-asterisk"></i></span></label>
                            <select class="ui fluid search dropdown">
                                <option value="">Year</option>
                                <?php
                                    $date = Date("Y") + 1;
                                    while ($date != 1935) {
                                        $date--;
                                        echo "<option value='$date'>$date</option>";

                                    }
                                ?>
                            </select>
                            <script type="text/javascript">
                                $('select.dropdown')
                                .dropdown();
                            </script>
                        </div>
                    </div>
                </div>
                <h4 class="ui horizontal divider header">
                    <i class="fa fa-asterisk"></i>
                    Required Fields
                </h4>
                <div class="ui grid">
                    <h3 class="eight wide column">By clicking the "Sign Up" button, I certify that I have read and agree to the <a
                        href="" target="_blank">Terms of Use</a>.</h3>
                    <div class="eight wide column">
                        <button style="float:right;"class="ui inverted yellow button">Sign Up</button>
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

    <script type="text/javascript" src="js/script.js"></script>
</form>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        var validator = $("#registration").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                StudentID: {
                    validators: {
                        notEmpty: {
                            message: "Student ID is required."
                        },
                        stringLength: {
                            min: 11,
                            max: 11,
                            message: "Student ID is invalid."
                        },
                        remote: {
                            message: 'The student ID already exists',
                            url: 'registeradd.php',
                            data: {
                                type: 'StudentID'
                            },
                            type: 'POST'
                        }
                    }
                },
                FirstName: {
                    validators: {
                        notEmpty: {
                            message: "First name is required."
                        },
                        stringLength: {
                            min: 3,
                            max: 15,
                            message: "First name must be 3-15 characters long."
                        }
                    }
                },
                LastName: {
                    validators: {
                        notEmpty: {
                            message: "Last name is required."
                        },
                        stringLength: {
                            min: 1,
                            max: 15,
                            message: "Last name must be 15 characters long."
                        }
                    }
                },
                Birthday: {
                    validators: {
                        notEmpty: {
                            message: "Birthdate is required."
                        }
                    }
                },
                MobileNumber: {
                    validators: {
                        notEmpty: {
                            message: "Mobile number is required."
                        },
                        stringLength: {
                            min: 11,
                            message: "Mobile number must be 11 characters long."
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
                ConfirmEmail: {
                    validators: {
                        notEmpty: {
                            message: "Confirm Email is required."
                        },
                        identical: {
                            field: "Email",
                            message: "Email and Confirm email mismatched."
                        }
                    }
                },
                _Password: {
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
                            field: "_Password",
                            message: "Password and confirm password mismatched."
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
                EducAttain: {
                    validators: {
                        notEmpty: {
                            message: "Educational Attainment is required."
                        }
                    }
                },
                Course: {
                    validators: {
                        notEmpty: {
                            message: "Course is required."
                        }
                    }
                },
                GraduatedMonth: {
                    validators: {
                        notEmpty: {
                            message: "Month graduated is required."
                        }
                    }
                },
                GraduatedYear: {
                    validators: {
                        notEmpty: {
                            message: "Year graduated is required."
                        }
                    }
                }
            }
        });
    });
</script>
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
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>

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
<form id="registration" name="registration" autocomplete="off" action="registeradd.php"></form>
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
                <div class="big-title text-center">
                    <h1><strong>Registration</strong></h1>
                </div>
                <h3><strong>Student Details:</strong></h3>
                <div class="row">
                    <div class="col-md-2">
                        &nbsp;
                    </div>
                    <div class="col-md-8 text-center">
                        <div class="form-group">
                            <label><span>(*) </span>Resumé Link: </label><br>
                            <input type="text" class="form-control" id="resumelink" placeholder="http://YourName.sticaloocan.edu" name="resumelink">
                            <p class="note">ex.http://YourName.sticaloocan.edu</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        &nbsp;
                    </div>
                </div>
                <p class="note text-center">You may only use alphanumeric characters, including period (.), dash (-), or underscore (_). This will be the name that will identify your personalized ResumeLink. This name will be permanent and no longer be changeable.</p>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        <label>Student ID <span>(*)</span></label>
                        <div class="form-group">
                            
                                <input type="text" class="form-control" id="StudentID" name="StudentID" maxlength="11">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>First Name <span>(*)</span></label>
                        <div class="form-group">
                            
                                <input type="text" class="form-control" id="FirstName" name="FirstName">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Last Name <span>(*)</span></label>
                        <div class="form-group">
                            <div class="controls">
                                <input type="text" class="form-control" id="LastName" name="LastName">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Birthdate <span>(*)</span></label>
                        <div class="form-group">
                            <div class="controls">
                                <input type="date" class="form-control" name="Birthday" id="Birthday">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Mobile Number <span>(*)</span></label>
                        <div class="form-group">
                            <div class="controls">
                                <input type="text" class="form-control" id="MobileNumber" name="MobileNumber">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Email <span>(*)</span></label>
                        <div class="form-group">
                            <div class="controls">
                                <input type="text" class="form-control" id="Email" name="Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Confirm Email <span>(*)</span></label>
                        <div class="form-group">
                            <div class="controls">
                                <input type="text" class="form-control" id="ConfirmEmail" name="ConfirmEmail">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Password <span>(*)</span></label>
                        <div class="form-group">
                            <div class="controls">
                                <input type="password" class="form-control" id="_Password" name="_Password">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Confirm Password <span>(*)</span></label>
                        <div class="form-group">
                            <div class="controls">
                                <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>City <span>(*)</span></label>
                        <div class="form-group">
                            <div class="controls">
                                <select id="City" name="City" class="form-control" style="width:100%; height:34px;">
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
                    </div>
                </div>

                <br><br>
                <h3><strong>Educational Background:</strong></h3><br>
                <div class="row">
                    <div class="col-md-6">
                        <label>Educational Attainment <span>(*)</span></label>
                        <div class="form-group">
                            <select id="EducAttain" name="EducAttain" class="form-control" style="width:100%; height:34px;">
                                <option value="">- Please select one -</option>
                                <option value="Bachelor's/College Degree">Bachelor's/College Degree</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Course <span>(*)</span></label>
                        <div class="form-group">
                            <select id="Course" name="Course" class="form-control" style="width:100%; height:34px;">
                                <option value="">- Please select one</option>
                                <option value="Bachelor of Science in Information Technology Major in Digital Arts">Bachelor of Science in Information Technology Major in Digital Arts</option>
                                <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                <option value="2 - Year Associate in Computer Technology">2 - Year Associate in Computer Technology</option>
                                <option value="Bachelor of Science in Business Management Major in Operations">Bachelor of Science in Business Management Major in Operations</option>
                                <option value="Bachelor of Science in Business Administration">Bachelor of Science in Business Administration</option>
                                <option value="Bachelor of Science in Accounting Technology">Bachelor of Science in Accounting Technology</option>
                                <option value="Bachelor of Science in Hotel &amp; Restaurant Management">Bachelor of Science in Hotel &amp; Restaurant Management</option>
                                <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
                                <option value="Bachelor of Science in Computer Engineering">Bachelor of Science in Computer Engineering</option>
                                <option value="Bachelor of Arts in Communication">Bachelor of Arts in Communication</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Graduation Date <span>(*)</span></label>
                            <select id="GraduatedMonth" name="GraduatedMonth" class="form-control" style="width:100%; height:34px;">
                                <option value="">- Month -</option>
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
                            <select id="GraduatedYear" name="GraduatedYear" class="form-control" style="width:100%; height:34px;">
                                <option value="">- Year -</option>
                                <?php 
                                    $date = Date("Y") + 4;
                                        if($b==1){
                                            $choose = "";
                                        }
                                        else{
                                            $choose = $server_graduatedyear;
                                        }
                                        while($date != 1935){
                                            $date--;
                                            if($date == $choose){
                                                echo "<option selected value='$date'> $date</option>";
                                                }
                                                else{
                                                echo "<option value='$date'> $date</option>";
                                                }
                                            }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br><br>
                    <label style="float:right;"><span>(*)</span> <em> - Required Fields</em></label>
                </div>
                <div class="hr5" style="margin-top:40px;margin-bottom:40px;"></div>
                <div class"row">
                    <div class="col-md-6">
                        <label><b>By clicking the "Sign Up" button below, I certify that I have read and agree to the <a href="" target="_blank">Terms of Use</a>.</b></label>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" href="registration.php" class="btn-system btn-large border-btn" style="float:right;">Submit</button>
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

    <script type="text/javascript" src="js/script.js"></script>

    <script type="text/javascript">
        $(document).ready(function (){
            var validator = $("#registration").bootstrapValidator({
                feedbackIcons: {
                    valid: "glyphicon glyphicon-ok",
                    invalid: "glyphicon glyphicon-remove",
                    validating: "glyphicon glyphicon-refresh"
                },
               s:{
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
                                min: 3,
                                max: 15,
                                message: "Last name must be 3-15 characters long."
                            }
                        }
                    },
                    MobileNumber: {
                        validators: {
                            notEmpty: {
                                message: "Mobile number is required."
                            },
                            stringLength: {
                                min: 7,
                                max: 11,
                                message: "Mobile number must be 7-11 characters long."
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
                                message: "Email address must be 8-16 characters long."
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
                        validators:{
                            notEmpty: {
                                message: "Educational Attainment is required."
                            }
                        }
                    },
                    Course: {
                        validators:{
                            notEmpty: {
                                message: "Course is required."
                            }
                        }
                    },
                    GraduatedMonth: {
                        validators:{
                            notEmpty: {
                                message: "Month graduated is required."
                            }
                        }
                    },
                    GraduatedYear: {
                        validators:{
                            notEmpty: {
                                message: "Year graduated is required."
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
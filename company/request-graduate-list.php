<!doctype html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS | Request List of Graduates</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <!-- BootstrapValidator -->
    <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="../../../fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="../../../fonts/ffonts/open-sans.css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
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

    <!-- Checkbox -->
    <link rel="stylesheet" type="text/css" href="../css/checkbox.css" media="screen" />

    <!-- Notification -->
    <link rel="stylesheet" href="../css/notif.css"/>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#notificationLink").click(function () {
                $("#notificationContainer").fadeToggle(300);
                $("#notification_count").fadeOut("slow");
                return false;
            });

            //Document Click
            $(document).click(function () {
                $("#notificationContainer").hide();
            });
            //Popup Click
            $("#notificationContainer").click(function () {
                return false
            });

        });
    </script>
</head>
<body>
    <!-- Full Body Container -->
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
                                <li class="profile-name"><b><?php echo $CompanyName; ?></b></li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-5">
                            <!-- Start Social Links -->
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown icon-border" id="notificationLink">
                                    <span id="notification_count">3</span>
                                    <a href="#" class="bell itl-tooltip" data-placement="bottom" data-toggle="dropdown"><i
                                            class="fa fa-bell"></i></a>
                                    <ul id="notificationContainer" class="dropdown-menu dropdown-menu-inverse">
                                        <li class="dropdown-header"><label>Notification</label></li>
                                        <li class="disabled"><a href="#" tabindex="-1">No new notification.</a></li>
                                        <li><a href="#" tabindex="-1">The administrator accepted your request.</a></li>
                                        <li class="divider"></li>
                                        <li><a href="../notification/notification.php" tabindex="-1">See All</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-user"></b>
                                        Welcome, <b><?php echo $cFirstName . " " . $cLastName; ?> </b><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Profile <b class="fa fa-user" style="float:right;"></b></a></li>
                                        <li><a href="../settings/privacy-settings.php">Settings <b class="fa fa-cog"
                                                                                                   style="float:right;"></b></a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#" data-target='#Logout' data-toggle='modal'>Sign Out <b
                                                    class="fa fa-sign-out" style="float:right;"></b></a></li>
                                    </ul>
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
                            <img src="../images/ojpms.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Modal -->
                        <div class="modal fade" id="Logout"
                             role="dialog">
                            <div class="modal-dialog" style="padding:100px">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button style=type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Log out?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-15 fieldcol">
                                            <label = "usr" class = "control-label">Do you want to log out?</label>
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="logout.php"
                                               class="btn btn-primary">Log out</a>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Sign-out -->
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="company.php">Home</a>
                            </li>
                            <li>
                                <a>Position</a>
                                <ul class="dropdown">
                                    <li><a href="company-positionlist.php">Position List</a></li>
                                    <li><a href="company-createposition.php">Create Position</a></li>
                                </ul>
                            </li>
                            <li>
                                <a>Applicant List</a>
                                <ul class="dropdown">
                                    <li><a href="company-pendingapplicants.php">Pending</a></li>
                                    <li><a href="company-acceptedapplicants.php">Accepted</a></li>
                                </ul>
                            </li>
                            <li><a href="company-settings.php">Settings</a>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="company.php">Home</a>
                    </li>
                    <li>
                        <a>Position</a>
                        <ul class="dropdown">
                            <li><a href="company-positionlist.php" class="active">Position List</a></li>
                            <li><a href="company-createposition.php">Create Position</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Applicant List</a>
                        <ul class="dropdown">
                                    <li><a href="company-pendingapplicants.php">Pending</a></li>
                                    <li><a href="company-acceptedapplicants.php">Accepted</a></li>
                        </ul>
                    </li>
                        <a href="company-settings.php">Settings</a>
                    </li>
                </ul>
            </div>
            <!-- End Header Logo & Naviagtion -->
        </header>

        <!-- Start Page Banner -->
        <div class="page-banner" style="padding:40px 0; center #f9f9f9;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Details of Job Opening</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <div class="row sidebar-page">
                    <div class="col-md-12 page-conten">
                        <div class="row">
                            <div class="col-md-3">&nbsp;</div>
                            <div class="col-md-6">
                                <div class="call-action call-action-boxed call-action-style1 clearfix">
                                    <div class="form-group">
                                        <label>Position Title</label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>
                                    <label>Employee Classification</label>
                                    <br><em>(Please select appropriate box)</em>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Full Time</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Part-time</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Contractual</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Freelance</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Project-based</b></label>
                                    </div>
                                    <div class="hr4" style="margin-bottom:10px;"></div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="checkbox checkbox-success">
                                                <input id="" class="styled" type="checkbox">
                                                <label for="checkbox3"><b>Other:</b></label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="" name="">
                                        </div>
                                    </div>

                                    <div class="hr1" style="margin-top:15px;margin-bottom:15px;"></div>

                                    <label>Level</label>
                                    <br><em>(Please select appropriate box)</em>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Entry Level/Gen Staff</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Officer</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Supervisory</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Management</b></label>
                                    </div>
                                    
                                    <div class="hr4" style="margin-bottom:10px;"></div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="checkbox checkbox-success">
                                                <input id="" class="styled" type="checkbox">
                                                <label for="checkbox3"><b>Other:</b></label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="" name="">
                                        </div>
                                    </div>

                                    <div class="hr1" style="margin-top:15px;margin-bottom:15px;"></div>

                                    <label>Description</label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="" id="" rows="7" cols="0"></textarea>
                                    </div>
                                    <label>Qualifications</label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="" id="" rows="7" cols="0"></textarea>
                                    </div>

                                    <div class="hr1" style="margin-top:15px;margin-bottom:15px;"></div>

                                    <div class="form-group">
                                        <label>Location</label>
                                        <br><em>(Please select appropriate box)</em>                                    
                                        <select id="" name="" class="form-control">
                                            <option value=""></option>
                                            <option value="Caloocan City">Caloocan City</option> 
                                            <option value="Makati City">Makati City</option> 
                                            <option value="Malabon City">Malabon City</option> 
                                            <option value="Mandaluyong">Mandaluyong</option> 
                                            <option value="Manila">Manila</option> 
                                            <option value="Marikina City">Marikina City</option> 
                                            <option value="Muntinlupa City">Muntinlupa City</option> 
                                            <option value="Navotas City">Navotas City</option> 
                                            <option value="Ortigas">Ortigas</option> 
                                            <option value="Paranaque">Paranaque</option> 
                                            <option value="Pasig City">Pasig City</option> 
                                            <option value="Quezon City">Quezon City</option> 
                                            <option value="Taguig City">Taguig City</option> 
                                            <option value="Valenzuela City">Valenzuela City</option> 
                                            <option value="Pasay City">Pasay City</option>
                                        </select>
                                    </div>

                                    <div class="hr1" style="margin-top:15px;margin-bottom:15px;"></div>

                                    <div class="form-group">
                                        <label>Salary Range</label>
                                        <em>Should not be lower than the Minimum Wage</em>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>

                                    <div class="hr1" style="margin-top:15px;margin-bottom:15px;"></div>

                                    <div class="form-group">
                                        <label>Required years of experience</label>
                                        <input type="text" class="form-control" id="" name="">
                                    </div>

                                    <div class="hr1" style="margin-top:15px;margin-bottom:15px;"></div>

                                    <label>Consider Fresh Graduate</label>
                                    <br><em>Please select appropriate box</em>
                                    <br>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="Color" value="Color" name="selection">
                                        <label for="inlineRadio1">Yes</label>
                                    </div>

                                    <div class="radio radio-inline">
                                        <input type="radio" id="Image" value="Image" name="selection">
                                        <label for="inlineRadio2">No</label>
                                    </div>

                                    <div class="hr1" style="margin-top:15px;margin-bottom:15px;"></div>

                                    <label>Duration of Request</label>
                                    <br><em>(Please select appropriate box)</em>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>15 Days</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>1 month</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>2 months</b></label>
                                    </div>
                                    
                                    <div class="hr4" style="margin-bottom:10px;"></div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="checkbox checkbox-success">
                                                <input id="" class="styled" type="checkbox">
                                                <label for="checkbox3"><b>Other:</b></label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="" name="">
                                        </div>
                                    </div>

                                    <div class="hr1" style="margin-top:15px;margin-bottom:15px;"></div>

                                    <label>Our company would like to send marketing materials for posting.</label>
                                    <br><em>(Someone from Alumni and Placement Office will contact you to make arrangements for the particulars of the request.)</em>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Yes</b></label>
                                    </div>

                                    <div class="hr1" style="margin-top:15px;margin-bottom:15px;"></div>

                                    <label>In order to complete the process, you are requested to forward the following requirements:</label>
                                    <br><em>Please email at <a href="mailto:jobplacement@caloocan.sti.edu"><u>jobplacement@caloocan.sti.edu</u></a></em>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Company Profile</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Copy  of Securities and Exchange Commission Certificate of Registration or Copy of Department of Trade and Industry Certificate of Registration</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>Copy of Business Permit</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>POEA License for Overseas Employment Opportunities</b></label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="" class="styled" type="checkbox">
                                        <label for="checkbox3"><b>List of Job Openings</b></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
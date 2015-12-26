<?php

include('../connection.php');
session_start();

$AdminID = $_SESSION['AdminID'];

$qry = "SELECT * FROM admintbl WHERE AdminID ='$AdminID'";
$result = mysql_query($qry);
while ($qry = mysql_fetch_Array($result)) {
    $Email = $qry['Email'];
    $Password = $qry['Password'];
    $FirstName = $qry['FirstName'];
    $MiddleName = $qry['MiddleName'];
    $LastName = $qry['LastName'];
    $Position = $qry['Position'];
    $Department = $qry['Department'];
    $Address = $qry['Address'];
    $ContactNumber = $qry['ContactNumber'];
}

?>
<!doctype html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS</title>

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="../css/basic-template.css" rel="stylesheet"/>
    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <!-- BootstrapValidator -->
    <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen"/>


    <!-- Margo JS  -->
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
</head>

<body>
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="ChangeEmail" role="dialog">
        <div class="modal-dialog" style="padding:100px">

            <!-- Modal content-->
            <form id="change-email-form" autocomplete="off" method="POST" action="functions.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Email</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> New email: </label>
                            <div class="form-group">
                                <input type="email" name="ModalNewEmail" id="ModalNewEmail" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> Confirm Email: </label>
                            <div class="form-group">
                                <input type="text" name="ModalConfirmEmail" id="ModalConfirmEmail" class="form-control">
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btnChangeEmail">Change Email</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="ChangePassword" role="dialog">
        <div class="modal-dialog" style="padding:100px">

            <!-- Modal content-->
            <form id="change-password-form" autocomplete="off" method="POST" action="functions.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Password</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> Old Password: </label>
                            <div class="form-group">
                                <input type="password" name="ModalOldPassword" id="ModalOldPassword" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> New Password: </label>
                            <div class="form-group">
                                <input type="password" name="ModalNewPassword" id="ModalNewPassword" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-15 fieldcol">
                            <label = "usr" class = "control-label"> Confirm Password: </label>
                            <div class="form-group">
                                <input type="password" name="ModalConfirmPassword" id="ModalConfirmPassword" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Full Body Container -->
<div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

        <!-- Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Start Contact Info
                        <ul class="contact-details">
                          <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                          </li>
                          <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                          </li>
                          <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                          </li>
                        </ul>
                         End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6">
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
                         End Social Links -->
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
                    <a class="navbar-brand" href="index.html">
                        OJPMS
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    
            </div>
            

</div>
<!-- End Header Logo & Naviagtion -->

</header>
<!-- End Header Section -->

<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; center #f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Registration</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!--Content-->
<br><br><br>

<div class="container">
   <div class = "row">
     <div class="ribbon"><h4>Student Details:</h4></div><br>
                        <div class="row field">
                            <div class="col-md-3" style="float:center;">
                                &nbsp;
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="form-group">
                                    <label><span>(*) </span>Resumé Link: </label>
                                    <input type="text" class="form-control" id="resumelink" placeholder="http://YourName.sticaloocan.edu" name="resumelink">
                                    <p class="note">ex.http://YourName.sticaloocan.edu</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                &nbsp;
                            </div>
                        </div>
                        <p class="note">You may only use alphanumeric characters, including period (.), dash (-), or underscore (_). This will be the name that will identify your personalized ResumeLink. This name will be permanent and no longer be changeable.</p>
                        <br>
                        <div class="row field">
                            <div class="col-md-2 fieldcol">
                                <div class="form-group">
                                    <label>Student ID: <span>(*)</span></label>
                                    <input type="text" class="form-control" id="StudentID" name="StudentID" maxlength="11">
                                </div>
                            </div>
                        </div>
                         <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>First Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="FirstName" name="FirstName">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Last Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="LastName" name="LastName">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Birthdate <span>(*)</span></label><br>
                                    <input type="date" class="form-control" name="Birthday" id="Birthday">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Mobile Number<span>(*)</span></label>
                                    <input type="text" class="form-control" id="MobileNumber" name="MobileNumber">
                                </div>
                            </div>
                        </div>
                         <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Email <span>(*)</span></label>
                                    <input type="email" class="form-control" id="Email" name="Email">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Confirm Email <span>(*)</span></label>
                                    <input type="text" class="form-control" id="ConfirmEmail" name="ConfirmEmail">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Password <span>(*)</span></label>
                                    <input type="password" class="form-control" id="_Password" name="_Password">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Confirm Password <span>(*)</span></label>
                                    <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>City <span>(*)</span></label><br>
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
                        </div><br><br>

                        <div class="ribbon"><h4>Educational Background:</h4></div><br><br>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Educational Attainment <span>(*)</span></label><br>
                                    <select id="EducAttain" name="EducAttain" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Please select one -</option>
                                        <option value="Bachelor's/College Degree">Bachelor's/College Degree</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Course <span>(*)</span></label>
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
                        <div class="row field">
                            <div class="col-md-2 fieldcol">
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
                            <div class="col-md-2 fieldcol">
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
                        </div>
                        <div class"row field">
                            <div class="col-md-6">
                                <label><b>By clicking the "Sign Up" button below, I certify that I have read and agree to the <a href="" target="_blank">Terms of Use</a>.</b></label>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary" style="float:right;">Sign Up</button>
                            </div>
                        </div>
                        <br><br><br>
 </div>
</div> <br><br><br>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>

<?php
include('../connection.php');

$TotalStudents = mysql_query("SELECT COUNT(*) FROM studentinfotbl");
$Q1 = mysql_fetch_array($TotalStudents);
$Total = $Q1[0];

?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>OJPMS</title>

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="../asset/css/bootstrap.min.css" type="text/css" media="screen">

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
  <link rel="stylesheet" type="text/css" href="../css/colors/red.css" title="red" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/jade.css" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/blue.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/beige.css" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/cyan.css" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/green.css" title="green" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/orange.css" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/peach.css" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/pink.css" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/purple.css" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/sky-blue.css" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen" />


  <!-- Margo JS  -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/jquery.migrate.js"></script>
  <script type="text/javascript" src="../js/modernizrr.js"></script>
  <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
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


  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

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
              -->
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
                -->
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
             <!-- Sign-out -->
            <div class="signout-side">
              <a class="show-signout"><i class="fa fa-sign-out"></i></a>
            </div>
            <!-- End Sign-out -->
             <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a  href="admin.php">Home</a>
                </li>
                <li>
                    <a class="active" href="admin-reports.php">Reports</a>
                </li>
                <li>
                    <a href="admin-account.php">Account</a>
                </li>
                <li>
                    <a href="admin-requested.php">Requested</a>
                </li>
                <li>
                    <a href="admin-companylist.php">Company List</a>
                </li>
                 <li><a href="admin-adviser.php">Adviser List</a>
                </li>  
               <li>
                    <a> Maintenance</a>
                    <ul class="dropdown">
                        <li><a href="admin-maintenance.php">Courses</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End Navigation List -->
        </div>
    </div>
        <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="admin.php">Home</a>
                </li>
                <li>
                    <a class="active" href="admin-reports.php">Reports</a>
                </li>
                <li>
                    <a href="admin-account.php">Account</a>
                </li>
                <li>
                    <a href="admin-requested.php">Requested</a>
                </li>
                <li>
                    <a href="admin-companylist.php">Company List</a>
                </li>
                 <li><a href="admin-advisert.php"admin-maintenance.php"">Adviser List</a>
                </li>  
               <li>
                    <a> Maintenance</a>
                    <ul class="dropdown">
                        <li><a href="admin-maintenance.php">Courses</a></li>
                    </ul>
                </li>
            </ul>
    </ul>
    </header>
    <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->

<!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Reports</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="admin-ojtreports.php">OJT Reports</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

<!--Content-->
  <br><br><br>
    
    <div class = "container">
      <div class = "col-md-12">
        <div class="row field">
                <div class = "col-md-3 fieldcol">
                   <label = "usr" class = "control-label"> Student Name </label>
                </div>
                <div class = "col-md-8 fieldcol">
                    <div class="form-group">
                           <input type="text" name="SName" class="form-control" id="SName" style="width: 300px; height:30px;" >
                    </div>
                </div>
         </div>
         <div class="row field">
                    <div class = "col-md-3 fieldcol">
                        <label = "usr" class = "control-label"> Position Level: </label>
                    </div>
                    <div class = "col-md-8 fieldcol">
                        <div class="form-group">
                            <select id="PLevel" name="PLevel" class="position" style="width: 300px; height:30px;">
                                <option value = "" selected="selected"> Select Position </option>
                                <option value = "top level management"> Top Level Management </option>
                                <option value = "senior manager"> Senior Manager </option>
                                <option value = "manager"> Manager </option>
                                <option value = "supervisor"> Senior Executive/ Supervisor </option>
                                <option value = "junior executive"> Junior Executive </option>
                                <option value = "fresh"> Fresh/Entry Level </option>
                                <option value = "non-executive"> Non-Executive </option>
                                <option value = "trainee"> Trainee </option>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="row field">
                    <div class = "col-md-3 fieldcol">
                        <label = "usr" class = "control-label">Specialization: </label>
                    </div>
                    <div class = "col-md-8 fieldcol">
                        <div class="form-group">
                               <select id="Specialization" name="Specialization" class="specialization" style= "width: 300px; height:30px;">
                                    <option value = "" selected="selected"> Select Specialization </option>
                                    <option value = "Actuarial Science"> Actuarial Science/ Statistics </option>
                                    <option value = "Advertising"> Advertising/ Media Planning </option>
                                    <option value = "Architecture"> Architecture/ Interior Design  </option>
                                    <option value = "Arts and Design">Arts and Design  </option>
                                    <option value = "Arts/ Creative"> Arts/ Creative/ Graphics Design  </option>
                                    <option value = "Aviation"> Aviation/ Aircraft Maintenance </option>
                                    <option value = "Banking"> Banking/ Financial Services  </option>
                                    <option value = "Biotechnology"> Biotechnology  </option>
                                    <option value = "Call Center Agent"> Call Center Agent  </option>
                              </select>
                        </div>
                    </div>
                </div>  
                <div class="row field">
                    <div class = "col-md-3 fieldcol">
                        <label = "usr" class = "control-label"> Industry: </label>
                    </div>
                    <div class = "col-md-8 fieldcol">
                        <div class="form-group">
                               <select id="industry" name="industry" style="width: 300px; height:30px;">
                                     <option value = "" selected="selected"> Select Industry </option>
                                     <option value = "ass"> asdfghjkl </option>
                                     <option value = "amp"> asdfghjkl </option>
                                     <option value = "aid"> asdfghjkl  </option>
                                     <option value = "aad"> asdfghjkl  </option>
                                     <option value = "acgd">  asdfghjkl  </option>
                                     <option value = "aam"> asdfghjkl </option>
                                     <option value = "bfs">  asdfghjkl</option>
                                     <option value = "bio"> asdfghjkl  </option>
                                     <option value = "ccca"> asdfghjkl </option>
                                </select>
                        </div>
                    </div>
                </div> 
                <div class="row field">
                    <div class = "col-md-3 fieldcol">
                        <label = "usr" class = "control-label"> Employment Status: </label>
                    </div>
                    <div class = "col-md-8 fieldcol">
                        <div class="form-group">
                               <select id="EStatus" name="EStatu" class="state" style="width: 300px; height:30px;">
                                    <option value="">Select Employment Status</option>
                                    <option value="employed">Employed</option>
                                    <option value="unemployed">Unemployed</option>              
                                </select>
                        </div>
                    </div>
                </div>  
      </div> 
      <br>
        <button type = "submit" class = "btn btn-lg btn-hg btn-primary" href= "#"><b> Save </b></button> &nbsp;
        <button type = "submit" class = "btn btn-lg btn-hg btn-primary"  href= "#"><b> Cancel </b></button> &nbsp;
        <button type = "submit" class = "btn btn-lg btn-hg btn-primary"  href= "#"><b> Delete </b></button>
    </div>  
    
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
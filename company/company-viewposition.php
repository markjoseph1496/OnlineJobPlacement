<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];

$PID = 'PostionID';
$PostingDateFrom = 'PostingDateFrom';
$PostingDateTo = 'PostingDateTo';
$PositionLevel = 'PositionLevel';
$JSpecialization = 'JSpecialization';
$JobDescription = 'JobDescription';
$EType = 'EType';
$AvPosition = 'AvPosition';
$MonthlySalary = 'MonthlySalary';
$YExperience = 'YExperience';

$query = "SELECT * FROM comppositiontbl WHERE CompanyID = '$CompanyID'";
$Result = mysql_query($query);
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
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
  <link href="../css/bootstrap.min.css" rel="stylesheet" />

  <!-- BootstrapValidator CSS -->
  <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>

  <!-- jQuery and Bootstrap JS -->
  <script src="../js/jquery.min.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    
  <!-- BootstrapValidator -->
  <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

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
            <!-- Sign-out -->
            <div class="signout-side">
              <a class="show-signout"><i class="fa fa-sign-out"></i></a>
            </div>
            <!-- End Sign-out -->
             <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a  href="company.php">Home</a>
                </li>
                <li>
                    <a>Position</a>
                    <ul class="dropdown">
                        <li><a  href="company-positionlist.php">Position List</a></li>
                        <li><a class = "active" href="company-createposition.php">Create Position</a></li>
                    </ul>
                </li>
                <li>
                    <a href="company-calendar.php">Calendar</a>
                </li>
                <li>
                    <a  href="company-settings.php">Settings</a>
                </li>
                <li>
                    <a href="company-applicants.php">Applicant List</a>
                    <ul class="dropdown">
                        <li><a href="company-pendingapplicants.php">Pending</a></li>
                        <li><a href="company-acceptedapplicants.php">Accepted</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End Navigation List -->
        </div>
    </div>
        <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
       <li>
                    <a  href="company.php">Home</a>
                </li>
                <li>
                    <a class="active" href="company-position.php">Position</a>
                    <ul class="dropdown">
                        <li><a  href="company-positionlist.php">Position List</a></li>
                        <li><a href="company-createposition.php">Create Position</a></li>
                    </ul>
                </li>
                <li>
                    <a href="company-calendar.php">Calendar</a>
                </li>
                <li>
                    <a href="company-settings.php">Settings</a>
                </li>
               <li>
                    <a  href="company-applicants.php">Applicant List</a>
                    <ul class="dropdown">
                        <li><a href="company-pendingapplicants.php">Pending</a></li>
                        <li><a href="company-acceptedapplicants.php">Accepted</a></li>
                    </ul>
                </li>
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
            <h2>View Position</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
<?php
while ($row = mysql_fetch_array($Result)) {

?>
 <!-- Start Content -->
    <br><br><br>
<form action="company-positionlist.php" name="AddPosition" id="AddPosition" autocomplete="off">
           <div class =  "container">
          <div class = "col-md-12">
          <div class = "row">
            <h3>Post Position </h3>
            &nbsp;
            <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Posting Date </label>
                                        </div>
                                        <div class = "col-md-2 fieldcol">
                                            <label = "usr" class = "control-label"><?php echo $row['PostingDateFrom']; ?></label>
                                        </div>
                                        <div class = "col-md-1 fieldcol">
                                            <label = "usr" class = "control-label"> to </label>
                                        </div>
                                        <div class = "col-md-2 fieldcol">
                                            <label = "usr" class = "control-label"><?php echo $row['PostingDateTo']; ?></label>
                                        </div>
                                        
              </div> 
              &nbsp;
              <h3> Position Information </h3>
              &nbsp;
              <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Position Level: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                <label = "usr" class = "control-label"s><?php echo $row['PositionLevel']; ?></label>
                                            </div>
                                        </div>
                </div> 
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Job Description: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                <label = "usr" class = "control-label"><?php echo $row['JobDescription']; ?></label>
                                            </div>
                                        </div>
                </div> 
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Job Specialization: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                  <label = "usr" class = "control-label"><?php echo $row['JSpecialization']; ?></label>
                                            </div>
                                        </div>
                </div>  
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Employment Type: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                   <label = "usr" class = "control-label"><?php echo $row['EType']; ?></label>
                                            </div>
                                        </div>
                </div>  
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Available Position: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                  <label = "usr" class = "control-label"><?php echo $row['AvPosition']; ?></label>
                                            </div>
                                        </div>
                </div> 
                 <h3> Salary Range </h3>
                 &nbsp;
                 <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Range of Salary: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                  <label = "usr" class = "control-label"><?php echo $row['MonthlySalary']; ?></label>
                                            </div>
                                        </div>
                </div> 
                <h3> General Requirements </h3>
                &nbsp;
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Years of Experience: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <label = "usr" class = "control-label"><?php echo $row['YExperience']; ?></label>
                                        </div>
                </div> 
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Training: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <label = "usr" class = "control-label"> asfsa </label>
                                        </div>
                </div>  
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Knowledge in: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <label = "usr" class = "control-label"> fasfsd </label>
                                        </div>
                </div> 
                &nbsp;            
                <h3> Optional Requirements </h3>
                &nbsp;
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Language: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <label = "usr" class = "control-label"> Filipino </label>
                                        </div>
                </div>   
                <br>
                      
            </div>
          </div>
        </div>       
</form>
<?php
} 
?>
<!--End of Content--> 
  <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
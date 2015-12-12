<?php
include('../connection.php');

$Course = 'MajorCourse';

$qry = mysql_query("SELECT DISTINCT MajorCourse FROM studentinfotbl");
$TotalStudents = mysql_query("SELECT COUNT(*) FROM studentinfotbl");
$Q1 = mysql_fetch_array($TotalStudents);
$Total = $Q1[0];


$BSTM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Tourism Management'");
$qryBSTM = mysql_fetch_array($BSTM);
$TotalBSTM = $qryBSTM[0];

$BSBM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Business Management Major in Operations'");
$qryBSBM = mysql_fetch_array($BSBM);
$TotalBSBM = $qryBSBM[0];

$ABCOMM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Arts in Communication'");
$qryABCOMM = mysql_fetch_array($ABCOMM);
$TotalABCOMM = $qryABCOMM[0];

$BSITDA= mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Information Technology Major in Digital Arts'");
$qryBSITDA = mysql_fetch_array($BSITDA);
$TotalBSITDA = $qryBSITDA[0];

$BSHRM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Hotel & Restaurant Management'");
$qryBSHRM = mysql_fetch_array($BSHRM);
$TotalBSHRM = $qryBSHRM[0];

$BSCS = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Computer Science'");
$qryBSCS = mysql_fetch_array($BSCS);
$TotalBSCS = $qryBSCS[0];

$BSIT= mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Information Technology'");
$qryBSIT = mysql_fetch_array($BSIT);
$TotalBSIT = $qryBSIT[0];

$BSCPE = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Computer Engineering'");
$qryBSCPE = mysql_fetch_array($BSCPE);
$TotalBSCPE = $qryBSCPE[0];

$BSAT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Accounting Technology'");
$qryBSAT = mysql_fetch_array($BSAT);
$TotalBSAT = $qryBSAT[0];

$ASCT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = '2-Year Associate in Computer Technology'");
$qryASCT = mysql_fetch_array($ASCT);
$TotalASCT = $qryASCT[0];

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
  <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
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
  <script type="text/javascript" src="../js/script.js"></script>

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
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
             <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="active" href="admin.php">Home</a>
                </li>
                <li>
                    <a href="admin-reports.php">Reports</a>
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
                 <li><a href="admin-advisert.php">Adviser List</a>
                </li>  
               <li>
                    <a href="admin-maintenance.php">Maintenance</a>
                </li>
            </ul>
            <!-- End Navigation List -->
        </div>
    </div>
        <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="active" href="admin.php">Home</a>
                </li>
                <li>
                    <a href="admin-reports.php">Reports</a>
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
                    <a href="admin-maintenance.php">Maintenance</a>
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
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>List of Courses</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

<!--Content-->
  <br><br><br>
    
    <div class = "container">
      <div class = "col-md-12">
         <table class = "Applicants">
                 <thead>
                  <tr>
                 </tr
                    <tr>
                    <th width = "70%" class = "tabletitle">Course </th>
                    <th width = "30%" class = "tabletitle tcenter">Number of Students </th>
                    </tr> 
                </thead>
                <!--Fields-->
                <tbody>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSTM">Bachelor of Science in Tourism Management</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSTM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSBM">Bachelor of Science in Business Management Major in Operations</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSBM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=ABCOMM">Bachelor of Arts in Communication</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalABCOMM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSITDA">Bachelor of Science in Information Technology Major in Digital Arts</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSITDA; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSHRM">Bachelor of Science in Hotel &amp; Restaurant Management</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSHRM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSCS">Bachelor of Science in Computer Science</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCS; ?></td>
                </tr>
                                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSIT">Bachelor of Science in Information Technology</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSIT; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSCPE">Bachelor of Science in Computer Engineering</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCPE; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSAT">Bachelor of Science in Accounting Technology</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSAT; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=ACT">2-Year Associate in Computer Technology</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalASCT; ?></td>
                </tr>

                </tbody>
                </table>

                
                  <div class = "container">
                    <div class = "col-md-5">
                      <div class = "total">
                    <h5>Total Number of Students: <?php  echo $Total; ?></h5>
                      </div>
                    </div>
                  </div>
      </div>
    </div>
</body>
</html>
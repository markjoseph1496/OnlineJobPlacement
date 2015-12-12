<?php
include('../connection.php');

$FieldOfStudy = 'FieldofStudy';

$qry = mysql_query("SELECT DISTINCT FieldOfStudy FROM studentinfotbl");
$TotalStudents = mysql_query("SELECT COUNT(*) FROM studentinfotbl");
$Q1 = mysql_fetch_array($TotalStudents);
$Total = $Q1[0];

/////////////////////////////////////////////////////
$BSTM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Tourism Management'");
$qryBSTM = mysql_fetch_array($BSTM);
$TotalBSTM = $qryBSTM[0];

$EmployedBSTM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Tourism Management' AND EmploymentStatus = 'Employed'");
$qryEmployedBSTM = mysql_fetch_array($EmployedBSTM);
$TotalEmployedBSTM = $qryEmployedBSTM[0];

$UnemployedBSTM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Tourism Management' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSTM = mysql_fetch_array($UnemployedBSTM);
$TotalUnemployedBSTM = $qryUnemployedBSTM[0];

/////////////////////////////////////////////////////
$BSBM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Business Management Major in Operations'");
$qryBSBM = mysql_fetch_array($BSBM);
$TotalBSBM = $qryBSBM[0];

$EmployedBSBM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Business Management Major in Operations' AND EmploymentStatus = 'Employed'");
$qryEmployedBSBM = mysql_fetch_array($EmployedBSBM);
$TotalEmployedBSBM = $qryEmployedBSBM[0];

$UnemployedBSBM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Business Management Major in Operations' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSBM = mysql_fetch_array($UnemployedBSBM);
$TotalUnemployedBSBM = $qryUnemployedBSBM[0];

/////////////////////////////////////////////////////
$ABCOMM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Arts in Communication'");
$qryABCOMM = mysql_fetch_array($ABCOMM);
$TotalABCOMM = $qryABCOMM[0];

$EmployedABCOMM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Arts in Communication' AND EmploymentStatus = 'Employed'");
$qryEmployedABCOMM = mysql_fetch_array($EmployedABCOMM);
$TotalEmployedABCOMM = $qryEmployedABCOMM[0];

$UnemployedABCOMM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Arts in Communication' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedABCOMM = mysql_fetch_array($UnemployedABCOMM);
$TotalUnemployedABCOMM = $qryUnemployedABCOMM[0];

/////////////////////////////////////////////////////
$BSITDA = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology Major in Digital Arts'");
$qryBSITDA = mysql_fetch_array($BSITDA);
$TotalBSITDA = $qryBSITDA[0];

$EmployedBSITDA = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology Major in Digital Arts' AND EmploymentStatus = 'Employed'");
$qryEmployedBSITDA = mysql_fetch_array($EmployedBSITDA);
$TotalEmployedBSITDA = $qryEmployedBSITDA[0];

$UnemployedBSITDA = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology Major in Digital Arts' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSITDA = mysql_fetch_array($UnemployedBSITDA);
$TotalUnemployedBSITDA = $qryUnemployedBSITDA[0];

/////////////////////////////////////////////////////
$BSHRM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Hotel &amp; Restaurant Management'");
$qryBSHRM = mysql_fetch_array($BSHRM);
$TotalBSHRM = $qryBSHRM[0];

$EmployedBSHRM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Hotel &amp; Restaurant Management' AND EmploymentStatus = 'Employed'");
$qryEmployedBSHRM = mysql_fetch_array($EmployedBSHRM);
$TotalEmployedBSHRM = $qryEmployedBSHRM[0];

$UnemployedBSHRM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Hotel &amp; Restaurant Management' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSHRM = mysql_fetch_array($UnemployedBSHRM);
$TotalUnemployedBSHRM = $qryUnemployedBSHRM[0];

/////////////////////////////////////////////////////
$BSCS = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Science'");
$qryBSCS = mysql_fetch_array($BSCS);
$TotalBSCS = $qryBSCS[0];

$EmployedBSCS = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Science' AND EmploymentStatus = 'Employed'");
$qryEmployedBSCS = mysql_fetch_array($EmployedBSCS);
$TotalEmployedBSCS = $qryEmployedBSCS[0];

$UnemployedBSCS = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Science' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSCS = mysql_fetch_array($UnemployedBSCS);
$TotalUnemployedBSCS = $qryUnemployedBSCS[0];

/////////////////////////////////////////////////////
$BSIT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology'");
$qryBSIT = mysql_fetch_array($BSIT);
$TotalBSIT = $qryBSIT[0];

$EmployedBSIT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology' AND EmploymentStatus = 'Employed'");
$qryEmployedBSIT = mysql_fetch_array($EmployedBSIT);
$TotalEmployedBSIT = $qryEmployedBSIT[0];

$UnemployedBSIT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSIT = mysql_fetch_array($UnemployedBSIT);
$TotalUnemployedBSIT = $qryUnemployedBSIT[0];

/////////////////////////////////////////////////////
$BSCPE = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Engineering'");
$qryBSCPE = mysql_fetch_array($BSCPE);
$TotalBSCPE = $qryBSCPE[0];

$EmployedBSCPE = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Engineering' AND EmploymentStatus = 'Employed'");
$qryEmployedBSCPE = mysql_fetch_array($EmployedBSCPE);
$TotalEmployedBSCPE = $qryEmployedBSCPE[0];

$UnemployedBSCPE = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Engineering' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSCPE = mysql_fetch_array($UnemployedBSCPE);
$TotalUnemployedBSCPE = $qryUnemployedBSCPE[0];

/////////////////////////////////////////////////////
$BSAT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='BBachelor of Science in Accounting Technology'");
$qryBSAT = mysql_fetch_array($BSAT);
$TotalBSAT = $qryBSAT[0];

$EmployedBSAT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Accounting Technology' AND EmploymentStatus = 'Employed'");
$qryEmployedBSAT = mysql_fetch_array($EmployedBSAT);
$TotalEmployedBSAT = $qryEmployedBSAT[0];

$UnemployedBSAT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Accounting Technology' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSAT = mysql_fetch_array($UnemployedBSAT);
$TotalUnemployedBSAT = $qryUnemployedBSAT[0];

/////////////////////////////////////////////////////

$ASCT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='2-Year Associate in Computer Technology'");
$qryASCT = mysql_fetch_array($ASCT);
$TotalASCT = $qryASCT[0];

$EmployedASCT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='2-Year Associate in Computer Technology' AND EmploymentStatus = 'Employed'");
$qryEmployedASCT = mysql_fetch_array($EmployedASCT);
$TotalEmployedASCT = $qryEmployedASCT[0];

$UnemployedASCT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='2-Year Associate in Computer Technology' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedASCT = mysql_fetch_array($UnemployedASCT);
$TotalUnemployedASCT = $qryUnemployedASCT[0];

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
            <div class = "header2_advertising">
                    <div class = "container">
                     
                    <div class="col-sm-4">
                             <label><b>TOTAL NUMBER OF STUDENTS: <?php echo $Total; ?></b></label>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group text-center">
                            <label><center><b>Month</b></label></center>
                             <select id="grad_month" name="grad_month" class="form-control" style = "width:250px;">
                                <option value="00">- Please select Month</option>
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
                    <div class="col-sm-4">
                        <label><center><b>Year Graduated</b></label></center>
                             <select id="grad_year" name="grad_year" class="form-control" style = "width:250px;">
                                <option value="00">- Please select Year Graduated</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                            </select>
                    </div>
                    </div>
                </div>
            <table class = "Applicants table" width = "100%" cellpadding = "0">
                <thead>
                    <tr></tr>  
                    <tr>
                        <th width = "40%" class = "tabletitle">Course</th>
                        <th width = "20%" class = "tabletitle">Number of Students </th>
                        <th width = "20%" class = "tabletitle"> Number of Employed </th>
                        <th width = "20%" class = "tabletitle">Number of Unemployed</th>
                    <tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSTM">BSTM</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSTM; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSTM; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSTM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSBM">BSBM</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSBM; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSBM; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSBM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=ABCOMM">ABCOMM</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalABCOMM; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedABCOMM; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedABCOMM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSITDA">BSITDA</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSITDA; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSITDA; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSITDA; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSHRM">BSHRM</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSHRM; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSHRM; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSHRM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSCS">BSCS</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCS; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSCS; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSCS; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSIT">BSIT</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSIT; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSIT; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSIT; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSCPE">BSAT</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCPE; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSCPE; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSCPE; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=BSCPE">BSCPE</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCPE; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSCPE; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSCPE; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "admin-field.php?CourseID=ACT">ACT</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalASCT; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedASCT; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedASCT; ?></td>
                </tr>
            </tbody>
            </table>
        </div>
</body>
</html>
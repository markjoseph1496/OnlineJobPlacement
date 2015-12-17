<?php 
include('../connection.php');
session_start();

$CourseCode = $_GET['CourseCode'];

$qry = "SELECT CourseTitle FROM coursetbl WHERE CourseCode = '$CourseCode'";
$result = mysql_query($qry);
while($qry = mysql_fetch_array($result)){
    $CourseTitle = $qry['CourseTitle'];
}

$TotalStudents = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse='$CourseTitle'");
$Q1 = mysql_fetch_array($TotalStudents);
$Total = $Q1[0];
/*
$FirstName = 'FirstName';
$LastName = 'LastName';
$EmploymentStatus = 'EmploymentStatus';

    if($Course == "BSTM"){
        $Course = "Bachelor of Science in Tourism Management";
    }
    elseif($Course == "BSBM"){
        $Course = "Bachelor of Science in Business Management Major in Operations";
    }
    elseif($Course == "ABCOMM"){
        $Course = "Bachelor of Arts in Communication";
    }
    elseif($Course == "BSITDA"){
        $Course = "Bachelor of Science in Information Technology Major in Digital Arts";
    }
    elseif($Course == "BSHRM"){
        $Course = "Bachelor of Science in Hotel & Restaurant Management";
    }
    elseif($Course == "BSCS"){
        $Course = "Bachelor of Science in Computer Science";
    }
    elseif($Course == "BSIT"){
        $Course = "Bachelor of Science in Information Technology";
    }
    elseif($Course == "BSAT"){
        $Course = "Bachelor of Science in Accounting Technology";
    }
    elseif($Course == "BSCPE"){
        $Course = "Bachelor of Science in Computer Engineering";
    }
    elseif($Course == "ACT"){
        $Course = "2-Year Associate in Computer Technology";
    }
    else{
        $Course = "No Course Selected.";
    }


$qry = "SELECT * FROM studentinfotbl WHERE MajorCourse='$Course' ORDER BY LastName";
$result = mysql_query($qry);

*/
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
              <div class = "header_advertising">
                   <div class = "container">
                    <div class = "col-md-8">
                      <h5> <?php echo $CourseTitle; ?> <h5>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group text-center">
                            <label><center><b>Export</b></label></center>
                             <div class="btn btn-hg btn-primary" style = "width:100px;">XLS</div>
                        </div>
                    </div>
                   </div>
                </div>
            <div class = "header2_advertising">
                    <div class = "container">
                     
                    <div class="col-sm-4">
                             <label><b>TOTAL NUMBER OF STUDENTS: <?php echo $Total; ?></b></label>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="form-group text-center">
                            <label><center><b>Select an Industry</b></label></center>
                             <select id="industry" name="industry" class="form-control" style = "width:280px;">
                                            <option value = "ind"> Select one </option>
                                            <option value = "acc"> Accounting / Audit </option>
                                            <option value = "amp">Advertising / Marketing Promotion </option>
                                            <option value = "aaa">Aerospace/Aviation/Airline </option>
                                            <option value = "appf">Agricultural/Plantation/Poultry/Fisheries </option>
                                            <option value = "af">Apparel/Fashion </option>
                                            <option value = "ad">Arts/Design </option>
                                            <option value = "aav"> Automobile/Automotive Ancillary/Vehicle </option>
                            </select>
                             <label><center><b>Select Position</b></label></center>
                             <select id="position" name="position" class="form-control" style = "width:280px;">
                                         <option value = "pos"> Select one </option>
                                         <option value = "tlp"> Top Level Management </option>
                                         <option value = "sm"> Senior Manager </option>
                                         <option value = "man"> Manager </option>
                                         <option value = "ses"> Senior Executive/ Supervisor </option>
                                         <option value = "je"> Junior Executive </option>
                                         <option value = "fel"> Fresh/Entry Level </option>
                                         <option value = "nex"> Non-Executive </option>
                                         <option value = "train"> Trainee </option>
                             </select>
                             <label><center><b>Select Position</b></label></center>
                             <select id="position" name="position" class="form-control" style = "width:280px;">
                                         <option value = "pos"> Select one </option>
                                         <option value = "tlp"> Top Level Management </option>
                                         <option value = "sm"> Senior Manager </option>
                                         <option value = "man"> Manager </option>
                                         <option value = "ses"> Senior Executive/ Supervisor </option>
                                         <option value = "je"> Junior Executive </option>
                                         <option value = "fel"> Fresh/Entry Level </option>
                                         <option value = "nex"> Non-Executive </option>
                                         <option value = "train"> Trainee </option>
                             </select>
                        </div>
                    </div> 
                     
                    <div class="col-sm-4">
                       <div class="form-group text-center">
                            <label><center><b>Select Specialization</b></label></center>
                             <select id="specialization" name="specialization" class="form-control" style = "width:280px;">
                                        <option value = "spe"> Select One  </option>
                                         <option value = "ass"> Actuarial Science/ Statistics </option>
                                         <option value = "amp"> Advertising/ Media Planning </option>
                                         <option value = "aid"> Architecture/ Interior Design  </option>
                                         <option value = "aad">Arts and Design  </option>
                                         <option value = "acgd"> Arts/ Creative/ Graphics Design  </option>
                                         <option value = "aam"> Aviation/ Aircraft Maintenance </option>
                                         <option value = "bfs"> Banking/ Financial Services  </option>
                                         <option value = "bio"> Biotechnology  </option>
                                         <option value = "ccca"> Call Center Agent  </option>
                             </select>
                             <label><center><b>Select Employment Status </b></label></center>
                             <select id="status" name="status" class="form-control" style = "width:280px;" >
                                            <option value = "pos"> Select One </option>
                                            <option value="emp">Employed</option>
                                            <option value="unemp">Unemployed</option>
                             </select><br>
                             <button type = "submit" class = "btn btn-hg btn-primary" style = "width:100px;" href= "#"><b> FILTER </b></button>
                        </div>
                    </div> 
                    </div>
                </div>
             <table class = "Applicants" width = "100%" cellpadding = "0">
           <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width= "25%" class = "tabletitle"> Student Name</th>
                    <th width = "15%" class = "tabletitle"> Position Level </th>
                    <th width = "20%" class = "tabletitle">  Specialization</th>
                    <th width = "15%" class = "tabletitle"> Industry</th>
                    <th width = "20%" class = "tabletitle"> Employment Status</th>
                    <th width = "5%" class = "tabletitle"> </th>
                <tr>
            </thead>
            <?php 
                $qry1 = "SELECT * FROM studentinfotbl WHERE MajorCourse = '$CourseCode'";
                $result1 = mysql_query($qry1);
                while($qry1 = mysql_fetch_array($result1)){
                    $FirstName = $qry1['FirstName'];
                    $LastName = $qry1['LastName'];
                    $FullName = $LastName . ", " . $FirstName;
                    $EmploymentStatus = $qry1['EmploymentStatus'];

                    echo"
                      <tbody>
                          <tr>
                              <td>
                              <a href = 'resumelink.php'>$FullName;</a>
                              </td>
                              <td class = 'tcenter'></td>
                              <td class = 'tcenter'></td>
                              <td class = 'tcenter'></td>
                              <td class = 'tcenter'>$EmploymentStatus</td>
                              <td>
                                  <a id='Edit' name='btnedit' href='editstudent.php' class='btn btn-default'> 
                                  <i class='fa fa-pencil'></i>
                                  </a> 
                              </td>

                          </tr>
                      </tbody>


                    ";
                }


            ?>

        </table>
        </div>
        <br><br>
</body>
</html>
<?php
include('../connection.php');
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Margo | Home</title>

  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootbox.min.js"></script>

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
<script>
        $(document).on("click", ".btnDecline", function(result) {
            bootbox.confirm({
              title: 'Decline Request',
              message: 'Are you sure you want to decline this request?',
              buttons: {
                  'cancel': {
                      label: 'Cancel',
                      
                  },
                  'confirm': {
                      label: 'Decline',
                      className: 'btn-danger pull-right'
                  }
              },
              callback: function(result) {
                  if (result) {
                       window.location = $("a[data-bb='confirmDeleteRequest']").attr('href');
                  }
              }
          });
        });

        $(document).on("click", ".btnAccept", function(result) {
            bootbox.confirm({
              title: 'Accept Request',
              message: 'Are you sure you want to accept this request?',
              buttons: {
                  'cancel': {
                      label: 'Cancel',
                      
                  },
                  'confirm': {
                      label: 'Accept',
                      className: 'btn-primary pull-right'
                  }
              },
              callback: function(result) {
                  if (result) {
                       window.location = $("a[data-bb='confirmAcceptRequest']").attr('href');
                  }
              }
          });
        });
</script>
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
                    <a  href="admin-reports.php">Reports</a>
                </li>
                <li>
                    <a href="admin-account.php">Account</a>
                </li>
                <li>
                    <a class="active" href="admin-requested.php">Requested</a>
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
                    <a class="admin-reports.php" href="">Reports</a>
                </li>
                <li>
                    <a href="admin-account.php">Account</a>
                </li>
                <li>
                    <a class="active" href="admin-requested.php">Requested</a>
                </li>
                <li>
                    <a href="admin-companylist.php">Company List</a>
                </li>
                 <li><a href="admin-adviser.php"admin-maintenance.php"">Adviser List</a>
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
            <h2>Requested</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

<!--Content-->
  <br><br><br>
    
     <div class = "container">
              <?php
              if(isset($_GET['ID'])){
                  $ID=$_GET['ID'];
                      if($ID == "Accepted"){
                          echo '
                              <div class="alert alert-success">
                                  <span class="glyphicon glyphicon-info-sign"></span> 
                                  Request Accepted.
                              </div>
                          ';
                      }
                      elseif($ID == "Rejected"){
                          echo '
                              <div class="alert alert-success">
                                  <span class="glyphicon glyphicon-info-sign"></span> 
                                  Request Rejected.
                              </div>
                          ';
                      }
              }
              ?>
          <div class = "col-md-12">
             <table class = 'Applicants' width = '100%' cellpadding = '0'>
          <thead>
           <tr>
           </tr>    
                <tr>
                    <th width= '25%' class = 'tabletitle'>Company Name</th>
                    <th width = '25%' class = 'tabletitle'>Student ID</th>
                    <th width = '25%' class = 'tabletitle'>Student Name</th>
                    <th width = '15%' class = 'tabletitle'>Status</th>
                    <th width = '10%' class = 'tabletitle'></th>
                <tr>
            </thead>

                <?php 
                $qry = "SELECT * FROM resumerequesttbl WHERE Status = 'Pending'";
                $result = mysql_query($qry);
                while($qry = mysql_fetch_array($result)){
                    $RequestID = $qry['RequestID'];
                    $CompanyID = $qry['CompanyID'];
                    $StudentIDa = $qry['StudentID'];
                    $Status = $qry['Status'];

                        $q2 = "SELECT * FROM companyinfotbl WHERE CompanyID = '$CompanyID'";
                        $r2 = mysql_query($q2);
                        while($q2 = mysql_fetch_array($r2)){
                            $CompanyName = $q2['CompanyName'];

                            $q1 = "SELECT * FROM studentinfotbl WHERE StudentID = '$StudentIDa'";
                            $r1 = mysql_query($q1);
                            while($q1 = mysql_fetch_array($r1)){
                                $StudentID = $q1['StudentID'];
                                $FirstName = $q1['FirstName'];
                                $LastName = $q1['LastName'];
                                $FullName = $LastName . ", " . $FirstName;

                                    echo"
                                    <tbody>
                                        <tr>
                                            <td width= 25% class = tabletitle> <a href = '#'></a>$CompanyName</td>
                                            <td width = 25% class = tabletitle>$StudentID</td>
                                            <td width = 25% class = tabletitle>$FullName</td>
                                            <td width = 15% class = tabletitle>$Status</td>
                                            <td>
                                                <a href=# class='btn btn-default btnAccept'> <i class='fa fa-check-circle'></i> </a>
                                                <a href=# class='btn btn-danger btnDecline'> <i class='fa fa-minus-square'></i> </a>    
                                                
                                                <a data-bb='confirmDeleteRequest' class='bb-alert alert alert-info' style='display: none;' href='request.php?fn=Delete&ID=$RequestID'>
                                                <a data-bb='confirmAcceptRequest' class='bb-alert alert alert-info' style='display: none;' href='request.php?fn=Accept&ID=$RequestID'>
                                            </td>
                                        <tr>            
                                    </tbody>                                        
                                    ";

                            }
                        }
                }
                ?>
        </table>
          </div> 
      </div>
</body>
</html>
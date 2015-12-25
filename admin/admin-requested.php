<?php
include('../connection.php');
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
              if(isset($_GET['id'])){
                  $id=$_GET['id'];
                      if($id == "1"){
                          echo '
                              <div class="alert alert-success">
                                  <span class="glyphicon glyphicon-info-sign"></span> 
                                  Request Accepted.
                              </div>
                          ';
                      }
                      elseif($id == "2"){
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
                                            <td class = tabletitle>
                                                <button class='btn btn-default' data-toggle='modal' data-target='#AcceptRequest'> <i class='fa fa-check-circle'></i> </button>
                                                <button class='btn btn-danger' data-toggle='modal' data-target='#DeclineRequest'> <i class='fa fa-minus-square'></i> </button>    
                                            </td>
                                        <tr>            
                                    </tbody>
                                    <!-- Modal -->
                                            <div class='modal fade' id='AcceptRequest' role='dialog'>
                                                <div class='modal-dialog' style='padding:100px'>
                                                    <!-- Modal content-->
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                            <h4 class='modal-title'>Accept Resume?</h4>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <div class='col-md-15 fieldcol'>
                                                                <label = 'usr' class = 'control-label'>Do you want to accept this resume request?</label>
                                                                <div class='form-group'>
                                                                </div>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <a href='functions.php?id=1&rid=$RequestID' class='btn btn-danger'>Accept</a>
                                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>           

                                            <div class='modal fade' id='DeclineRequest' role='dialog'>
                                                <div class='modal-dialog' style='padding:100px'>
                                                    <!-- Modal content-->
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                            <h4 class='modal-title'>Reject Resume?</h4>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <div class='col-md-15 fieldcol'>
                                                                <label = 'usr' class = 'control-label'>Do you want to reject this resume request?</label>
                                                                <div class='form-group'>
                                                                </div>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <a href='functions.php?id=2&rid=$RequestID' class='btn btn-danger'>Delete</a>
                                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Cancel</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                              
                                    ";

                            }
                        }
                }
                ?>
        </table>
          </div> 
      </div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
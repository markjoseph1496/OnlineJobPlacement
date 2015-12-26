<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];

  $qry = "SELECT * FROM companyinfotbl WHERE CompanyID ='$CompanyID'";
  $Result = mysql_query($qry);

      while ($qry = mysql_fetch_Array($Result)) {

          $Email = $qry['Email'];
          $Password = $qry['Password'];
          $FName = $qry['FirstName'];
          $MName = $qry['MiddleName'];
          $LName = $qry['LastName'];
          $Positions = $qry['Position'];
          $Department = $qry['Department'];
          $Address = $qry['Address'];
          $PhoneNum = $qry['PhoneNum'];
      }
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
              <a class="show-signout" href="../login-company.php?id=1"><i class="fa fa-sign-out"></i></a>
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
                        <li><a href="company-positionlist.php">Position List</a></li>
                        <li><a href="company-createposition.php">Create Position</a></li>
                    </ul>
                </li>
                <li>
                    <a href="company-calendar.php">Calendar</a>
                </li>
                <li><a class = "active" href="company-settings.php">Settings</a>
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
                    <a href="company-calendar.php">Calendar</a>
                </li>
                <li>
                    <a class = "active" href="company-settings.php">Settings</a>
                </li>
               <li>
                    <a href="company-applicants.php">Applicant List</a>
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
            <h2>My Account</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

 <!-- Start Content -->
<br><br><br>
    <div class = "container">
      <div class = "col-md-12">
      <form method="POST">
            <?php
              if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    if($id=="AccountEdit"){
                        echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully updated.
                        </div>';
                    }
                }   
             ?> 
                   <div class="row field">
                                        <div class = "col-md-2 fieldcol">
                                           <label = "usr" class = "control-label"> Email: </label>
                                        </div>
                                        <div class = "col-md-4 fieldcol">
                                            <div class="form-group">
                                                  <input type = "text" name = "email" class = "form-control" style ="width: 300px;">
                                            </div>
                                        </div>
                                        <div class = "col-md-3 fieldcol">
                                            <div class="form-group">
                                                  <div class="box">
                                                    <a class="btn btn-default" href="#popup1" >Change email</a>
                                                  </div>
                                            </div>
                                        </div>
                    </div> 
                    <div class="row field">
                                        <div class = "col-md-2 fieldcol">
                                           <label = "usr" class = "control-label"> Password: </label>
                                        </div>
                                        <div class = "col-md-4 fieldcol">
                                            <div class="form-group">
                                                  <input type = "password" name = "password" class = "form-control" style ="width: 300px;">
                                            </div>
                                        </div>
                                        <div class = "col-md-3 fieldcol">
                                            <div class="form-group">
                                                  <div class="box">
                                                    <a class="btn btn-default" href="#popup1" >Change Password</a>
                                                  </div>
                                            </div>
                                        </div>
                    </div> 
                     <div class="row field">
                                        <div class = "col-md-2 fieldcol">
                                             <label>First Name <span>(*)</span></label>
                                        </div>
                                        <div class = "col-md-4 fieldcol">
                                            <div class="form-group">
                                                  <input type = "text" name = "fname" id = "usr" class = "form-control" style ="width: 550px;" value = "<?php echo $FName; ?>">
                                            </div>
                                        </div>
                    </div> 
                     <div class="row field">
                                        <div class = "col-md-2 fieldcol">
                                             <label>Middle Name <span>(*)</span></label>
                                        </div>
                                        <div class = "col-md-4 fieldcol">
                                            <div class="form-group">
                                                 <input type = "text" name = "mname" id = "usr" class = "form-control" style ="width: 550px;" value = "<?php echo $MName; ?>">
                                            </div>
                                        </div>
                    </div> 
                     <div class="row field">
                                        <div class = "col-md-2 fieldcol">
                                            <label>Last Name <span>(*)</span></label>
                                        </div>
                                        <div class = "col-md-4 fieldcol">
                                            <div class="form-group">
                                                <input type = "text" name = "lname" id = "usr" class = "form-control" style ="width: 550px;" value = "<?php echo $LName; ?>">
                                            </div>
                                        </div>
                    </div> 
                    <div class="row field">
                                        <div class = "col-md-2 fieldcol">
                                             <label>Position <span>(*)</span></label>
                                        </div>
                                        <div class = "col-md-4 fieldcol">
                                            <div class="form-group">
                                                 <input type = "text" name = "position" id = "usr" class = "form-control" style ="width: 550px;" value = "<?php echo $Positions; ?>">
                                            </div>
                                        </div>
                    </div> 
                    <div class="row field">
                                        <div class = "col-md-2 fieldcol">
                                             <label>Department<span>(*)</span></label>
                                        </div>
                                        <div class = "col-md-4 fieldcol">
                                            <div class="form-group">
                                                 <input type = "text" name = "dept" id = "usr" class = "form-control" style ="width: 550px;" value = "<?php echo $Department; ?>">
                                            </div>
                                        </div>
                    </div> 
                    <div class="row field">
                                        <div class = "col-md-2 fieldcol">
                                           <label>Address <span>(*)</span></label>
                                        </div>
                                        <div class = "col-md-4 fieldcol">
                                            <div class="form-group">
                                                <input type = "text" name = "address" id = "usr" class = "form-control" style ="width: 550px;" value = "<?php echo $Address; ?>">
                                            </div>
                                        </div>
                    </div> 
                     <div class="row field">
                                        <div class = "col-md-2 fieldcol">
                                           <label>Contact Number <span>(*)</span></label>
                                        </div>
                                        <div class = "col-md-4 fieldcol">
                                            <div class="form-group">
                                                <input type = "text" name = "contact" id = "usr" class = "form-control" style ="width: 550px;" value = "<?php echo $PhoneNum ?>">
                                            </div>
                                        </div>
                    </div> 
      </div>
                    <button type = "submit" class = "btn btn-primary " name="btnSave" id = "save" href= "#"><b> Save </b></button> &nbsp;
                    <button type = "submit" class = "btn btn-primary " name="btnSave" id = "save" href= "#"><b> Cancel </b></button>
      </form>
    </div>
    
<!-- End Page Content -->
<script type="text/javascript" src="../js/script.js"></script>

</body>
<?php
  if(isset($_POST['btnSave'])){

   $fname = $_POST['fname'];
   $mname = $_POST['mname'];
   $lname = $_POST['lname'];
   $position = $_POST['position'];
   $dept = $_POST['dept'];
   $address = $_POST['address'];
   $contact = $_POST['contact'];



    $query = "UPDATE companyinfotbl SET FirstName = '$fname', MiddleName = '$mname', LastName = '$lname', Position = '$position', Department = '$dept', Address = '$address', PhoneNum = '$contact' WHERE CompanyID = '$CompanyID'";
    $Result = mysql_query($query);
    echo "
         <script type='text/javascript'>
         location.href='company-settingsaccount.php?id=AccountEdit';
         </script>
         ";
}
?>

</html>
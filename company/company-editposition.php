<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];
$companyinfo_tbl =
    GSecureSQL::query(
        "SELECT CompanyName, FirstName, LastName FROM companyinfotbl WHERE CompanyID = ?",
        TRUE,
        "s",
        $CompanyID
    );
$CompanyName = $companyinfo_tbl[0][0];
$cFirstName = $companyinfo_tbl[0][1];
$cLastName = $companyinfo_tbl[0][2];

?>
<!doctype html>
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
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" media="screen">

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
                    <a class = "active" href="company-positionlist.php">Position</a>
                    <ul class="dropdown">
                        <li><a  href="company-positionlist.php">Position List</a></li>
                        <li><a href="company-createposition.php">Create Position</a></li>
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
            <h2>Create Position</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

 <!-- Start Content -->

    <br><br><br>

           <div class =  "container">
          <div class = "col-md-12">
          <div class = "row">
          <form method = "POST">
            <h3>Post Position </h3>
            &nbsp;
            <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Posting Date: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                <div class = "date">
                                                   <input type = "date" name = "datefrom" id = "date_from" class = "form-control">
                                                       <div class = "date_to">
                                                            <label = "usr" class = "control-label" id = "label">to: </label>
                                                            <input type = "date" name = "dateto" id = "date_to" class = "form-control">
                                                    </div>
                                                 </div> 
                                            </div>
                                        </div>
              </div> 
              <h3> Position Information </h3>
              &nbsp;
              <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Position Level: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                <select id="position" name="plevel" class="position" style="width: 300px; height:30px;">
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
                                            <label = "usr" class = "control-label"> Job Specialization: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                   <select id="specialization" name="specialization" class="specialization" style= "width: 300px; height:30px;">
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
                                            <label = "usr" class = "control-label"> Employment Type: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                   <select id="state" name="etype" class="state" style="width: 300px; height:30px;">
                                                        <option value="select">Please select One</option>
                                                        <option value="full">Full Time</option>
                                                        <option value="parttime">Part Time</option> 
                                                        <option value="contract">Contract</option> 
                                                        <option value="temporary">Temporary</option>                
                                                    </select>
                                            </div>
                                        </div>
                </div>  
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Available Position: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                  <input type = "number" name = "avposition" class = "form-control" style ="width: 300px;">
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
                                                  <select id="salaryrange" name="salary" class="salaryrange" style="width: 300px; height:30px;">
                                                      <option value = "" selected="selected"> Select Salary Range </option>
                                                      <option value = "10,000 - 15,000"> 10,000 - 15,000 </option>
                                                      <option value = "15,000 - 20,000"> 15,000 - 20,000 </option>
                                                      <option value = "20,000 - 25,000"> 20,000 - 25,000 </option>
                                                      <option value = "25,000 - 30,000"> 25,000 - 30,000 </option>
                                                      <option value = "30,000 - 40,000"> 30,000 - 40,000 </option>
                                                      <option value = "40,000 - 45,000"> 40,000 - 45,000 </option>
                                                      <option value = "45,000 - 50,000"> 45,000 - 50,000 </option>
                                                   </select>
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
                                            <div class="form-group">
                                                   <input type = "number" name = "yexperience" class = "form-control" style ="width: 300px;">
                                            </div>
                                        </div>
                </div> 
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Training: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                   <input type = "text" name = "training" class = "form-control" style ="width: 300px;">
                                            </div>
                                        </div>
                </div>  
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Knowledge in: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                   <input type = "text" name = "knowledge" class = "form-control" style ="width: 300px;">
                                            </div>
                                        </div>
                </div>             
                <h3> Optional Requirements </h3>
                &nbsp;
                <div class="row field">
                                        <div class = "col-md-3 fieldcol">
                                            <label = "usr" class = "control-label"> Language: </label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                   <input type = "text" name = "skills" class = "form-control" style ="width: 300px;">
                                            </div>
                                        </div>
                </div>   
                       <button type = "submit" class = "btn btn-primary " id = "btnsave" name = "btnsave"><b> SAVE </b></button>
                       <button type = "submit" class = "btn btn-primary " id = "cancel"><b> CANCEL</b> </button>
           </form> 
            </div>
          </div>
        </div>       

<!--End of Content--> 
  <script type="text/javascript" src="../js/script.js"></script>
</body>
<?php

    if (isset($_POST['btnsave'])) {
        $datefrom = $_POST['datefrom'];
        $dateto = $_POST['dateto'];
        $plevel = $_POST['plevel'];
        $specialization = $_POST['specialization'];
        $etype = $_POST['etype'];
        $avposition = $_POST['avposition'];
        $salary = $_POST['salary'];
        $yexperience = $_POST['yexperience'];

        $query = ("INSERT INTO comppositiontbl (CompanyID,PostingDateFrom,PostingDateTo,PositionLevel,JSpecialization,EType,AvPosition,MonthlySalary,YExperience) VALUES ('$CompanyID','$datefrom','$dateto','$plevel','$specialization','$etype','$avposition','$salary','$yexperience')");
        $result = mysql_query($query);
        echo "
          <script type='text/javascript'>
          location.href='company-positionlist.php?id=1'
          </script>
        ";
    }
?>

</html>
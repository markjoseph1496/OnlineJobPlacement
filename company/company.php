<?php
include('../connection.php');
session_start();

$qry = "SELECT * FROM studentinfotbl";
$result = mysql_query($qry);

if (isset($_POST['requestresume'])) {
    $a = isset($_POST['company_id']);
    $a = $a && isset($_POST['studentid']);
    if($a){
        mysql_query("INSERT INTO `resumerequesttbl`(`CompanyID`, `StudentID`, `Status`) VALUES('" . $_POST['company_id'] . "','" . $_POST['studentid'] . "','Pending')");
    }
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
              <a class="show-signout"><i class="fa fa-sign-out"></i></a>
            </div>
            <!-- End Sign-out -->
             <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="active" href="company.php">Home</a>
                </li>
                <li>
                    <a href="company-positionlist.php">Position</a>
                    <ul class="dropdown">
                        <li><a  href="company-positionlist.php">Position List</a></li>
                        <li><a href="company-createposition.php">Create Position</a></li>
                    </ul>
                </li>
                <li>
                    <a href="company-calendar.php">Calendar</a>
                </li>
                 <li><a href="company-settings.php">Settings</a>
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
                    <a href="company-positionlist.php">Position</a>
                    <ul class="dropdown">
                        <li><a  href="company-positionlist.php">Position List</a></li>
                        <li><a href="company-createposition.php">Create Position</a></li>
                    </ul>
                </li>
                <li>
                    <a href="company-calendar.php">Calendar</a>
                </li>
                 <li><a href="company-settings.php">Settings</a>
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
            <h2>List of Graduating Students</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
<!--Content-->
  <br><br><br>
  <div class = "container">
  <form method="POST">

                 <div class = "header2_advertising">
                  <div class = "container">
                    <div class = "row field">
                      <div class="col-sm-5">
                        <div class="form-group text-center">
                            <label><center><b>Course</b></label></center>
                            <select id="" name="MajorCourse" class="form-control" style = "width:400x;">
                                <option value="" selected="selected">- Please select one -</option>
                                <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                <option value="Bachelor of Science in Hotel & Restaurant Management">Bachelor of Science in Hotel & Restaurant Management</option>
                                <option value="Bachelor of Science in Business Management Major in Operations">Bachelor of Science in Business Management Major in Operations</option>
                            </select>
                        </div>
                    </div> <!--col-sm-5-->
                        <div class="col-sm-5">
                        <div class="form-group text-center">
                            <label><center><b>Field of Specialization</b></label></center>
                            <select id="" name="Specialization" class="form-control" style = "width:420px;">
                                <option value="" selected="selected">- Please select one -</option> 
                                <option value="12">Actuarial Science/Statistics</option>
                                <option value="3">Advertising/Media Planning</option>
                                <option value="9">Agriculture/Forestry/Fisheries</option>
                                <option value="10">Architecture/Interior Design</option>
                                <option value="11">Arts and Design</option>
                                <option value="8">Arts/Creative/Graphics Design</option>
                                <option value="13">Aviation/Aircraft Maintenance</option>
                                <option value="34">Banking/Financial Services</option>
                                <option value="14">Biotechnology</option>
                                <option value="17">BPO/Call Center</option>
                                <option value="15">Chemistry</option>
                                <option value="7">Clerical/Administrative Support</option>
                                <option value="21">Corporate Strategy/Top Management</option>
                                <option value="19">Costing Management</option>
                                <option value="22">Customer Service</option>
                                <option value="20">Customer Service (Technical)</option>
                                <option value="23">Design and Development</option>
                                <option value="26">Education / Academe</option>
                                <option value="24">Engineering - Chemical</option>
                                <option value="16">Engineering - Civil/Construction/Structural</option>
                                <option value="29">Engineering - Electrical</option>
                                <option value="28">Engineering - Electronics/Communication</option>
                                <option value="32">Engineering - Environmental/Health/Safety</option>
                                <option value="27">Engineering - Industrial</option>
                                <option value="57">Engineering - Mechanical/Automotive</option>
                                <option value="33">Engineering - Oil/Gas</option>
                                <option value="30">Engineering - Others</option>
                                <option value="31">Entertainment/Performing Arts</option>
                                <option value="4">Finance - Audit/Taxation</option>
                                <option value="6">Finance - Corporate Finance/Investment/Merchant Banking</option>
                                <option value="5">Finance - General/Cost Accounting </option>
                                <option value="36">Food Technology/Nutritionist</option>
                                <option value="35">Food/Beverage/Restaurant Service</option>
                                <option value="38">General Work (Housekeeper, Driver, Dispatch, Messenger, etc)</option>
                                <option value="37">Geology/Geophysics</option>
                                <option value="58">Health Diagnosing</option>
                                <option value="41">Healthcare - Doctor/Diagnosis</option>
                                <option value="39">Healthcare - Nurse/Medical Support and Assistant</option>
                                <option value="40">Healthcare - Pharmacy</option>
                                <option value="42">Hotel Management/Tourism Services</option>
                                <option value="43">Human Resources</option>
                                <option value="44">IT/Computer - Creative Design</option>
                                <option value="48">IT/Computer - Hardware</option>
                                <option value="49">IT/Computer - Network/System/Database Admin</option>
                                <option value="46">IT/Computer - Project Management</option>
                                <option value="47">IT/Computer - QA</option>
                                <option value="45">IT/Computer - Software Development</option>
                                <option value="50">Journalism</option>
                                <option value="25">Journalist/Editor</option>
                                <option value="51">Law/Legal Services</option>
                                <option value="80">Logistics/Supply Chain</option>
                                <option value="52">Maintenance/Repair (Facilities and Machinery)</option>
                                <option value="53">Manufacturing/Production Operations</option>
                                <option value="55">Marketing / Brand Management</option>
                                <option value="54">Marketing/Business Development</option>
                                <option value="18">Medical Transcriptionist</option>
                                <option value="59">Merchandising</option>
                                <option value="2">Others</option>
                                <option value="64">Personal Care/Beauty/Fitness Service</option>
                                <option value="60">Process Design and Control/Instrumentation</option>
                                <option value="61">Production Control/Management</option>
                                <option value="63">Project Management</option>
                                <option value="65">Public Relations/Communications</option>
                                <option value="62">Publishing/Printing</option>
                                <option value="56">Purchasing/Inventory/Material and Warehouse Management</option>
                                <option value="66">Quality Control/Assurance</option>
                                <option value="67">Quantity Surveying</option>
                                <option value="69">Research and Development</option>
                                <option value="68">Sales - Corporate / B2B</option>
                                <option value="71">Sales - Engineering/Technical/IT</option>
                                <option value="72">Sales - Financial Services (Insurance, Unit Trust, etc)</option>
                                <option value="75">Sales - Retail/General</option>
                                <option value="76">Sales - Telesales/Telemarketing</option>
                                <option value="74">Sales – Real Estate</option>
                                <option value="73">Sales- Medical / Pharmaceutical</option>
                                <option value="77">Science and Technology/Laboratory</option>
                                <option value="78">Secretarial/Executive and Personal Assistant</option>
                                <option value="70">Security/Armed Forces/Protective Services</option>
                                <option value="79">Social and Counselling Service</option>
                                <option value="81">Stockbroking</option>
                                <option value="82">Technical and Helpdesk Support</option>
                                <option value="83">Training and Development</option>
                            </select>
                        </div>
                    </div> 
                    <div class = "col-sm-2">
                      <button type = "submit" class = "btn btn-primary" name = "filter" style = "width:100px; margin-top: 20px;"><b> Filter </b></button>
                    </div>
                    </div> <!--row field-->
                  </div>
                 </div>
                    <!--table-->   
        <table class = 'Applicants' width = '100%' cellpadding = '0'>
           <thead>
           <tr>
           </tr>    
                <tr>
                    <th width= '5%' class = 'tabletitle'> <input type="checkbox" id="selectall"/> </th>
                    <th width= '10%' class = 'tabletitle'>Student ID </th>
                    <th width = '20%'class = 'tabletitle'> Student Name </th>
                    <th width = '25%'class = 'tabletitle'>Course</th>
                    <th width = '30%'  class = 'tabletitle'> Field of Specialization </th>
                    <th width = '10%'  class = 'tabletitle'></th>
                <tr>
            </thead>
            <tbody>
            <?php
                $result1 = mysql_query("SELECT `CompanyID` FROM `companyinfotbl` WHERE `CompanyID` = '" . $_SESSION['CompanyID'] . "'");
                $row = mysql_fetch_array($result1);
                $company_id = $row['CompanyID'];
                unset($result1, $row);
            ?>

            <?php
              if (isset($_POST['filter'])){
              $Specialization = $_POST['Specialization'];
                  if($Specialization == ""){
                    while($qry = mysql_fetch_array($result)){
                              $fname = $qry['FirstName'];
                              $lname = $qry['LastName'];
                              $studentid = $qry['StudentID'];
                              $course = $qry['MajorCourse'];

                                $query = "SELECT * FROM specializationtbl WHERE StudentID = '$studentid'";
                                $Result = mysql_query($query);
                                while ($query = mysql_fetch_array($Result)) {
                                  $specialization = $query['Specialization'];

                                  echo "
                                  <tr>
                                    <td width = '5%'  class = tabletitle><input type='checkbox' id='select'/></td>
                                    <td width = '10%' class = tabletitle > $studentid </td>
                                    <td width = '20%' class = tabletitle> $lname $fname </td>
                                    <td width = '30%' class = tabletitle> $course </td>
                                    <td width = '30%' class = tabletitle> $Specialization </td>
                                    <td width = '10%' class = tabletitle> <button id='Edit' name='request_resume' class='btn btn-default'><i class='fa fa-arrow-circle-right'></i> </td>
                                  <tr>
                                    <td width = '5%'><input type='checkbox' id='select'/></td>
                                    <td width = '10%'> $studentid </td>
                                    <td width = '20%'> $lname $fname </td>
                                    <td width = '30%'> $course </td>
                                    <td width = '30%'> $Specialization </td>
                                    <td width = '10%'>  <form method='POST'>
                                                        <input type='hidden' name='company_id' value='$company_id'/>
                                                        <input type='hidden' name='studentid' value=' $studentid'/>
                                                        <button id='Edit' name='requestresume' class='btn btn-default'><i class='fa fa-arrow-circle-right'></i></button>
                                                        </form>
                                    </td>
                                  </tr>
                                  ";  
                                }
                            }
                  }
                  else{
                    while($qry = mysql_fetch_array($result)){
                              $fname = $qry['FirstName'];
                              $lname = $qry['LastName'];
                              $studentid = $qry['StudentID'];
                              $course = $qry['MajorCourse'];

                                $query = "SELECT * FROM specializationtbl WHERE StudentID = '$studentid' AND Specialization = '$Specialization'";
                                $Result = mysql_query($query);
                                while ($query = mysql_fetch_array($Result)) {
                                  $specialization = $query['Specialization'];

                                  echo "
                                  <tr>
                                    <td width = '5%' class = tabletitle><input type='checkbox' id='select'/></td>
                                    <td width = '10%' class = tabletitle> $studentid </td>
                                    <td width = '20%' class = tabletitle> $lname $fname </td>
                                    <td width = '30%' class = tabletitle> $course </td>
                                    <td width = '30%' class = tabletitle> $Specialization </td>
                                    <td width = '10%' class = tabletitle> <button id='Edit' name='request_resume' class='btn btn-default'><i class='fa fa-arrow-circle-right'></i> </td>
                                  <tr>
                                    <td width = '5%'><input type='checkbox' id='select'/></td>
                                    <td width = '10%'> $studentid </td>
                                    <td width = '20%'> $lname $fname </td>
                                    <td width = '30%'> $course </td>
                                    <td width = '30%'> $Specialization </td>
                                    <td width = '10%'>  <form method='POST'>
                                                        <input type='hidden' name='company_id' value='$company_id'/>
                                                        <input type='hidden' name='studentid' value='$studentid'/>
                                                        <button id='Edit' name='requestresume' class='btn btn-default'><i class='fa fa-arrow-circle-right'></i></button>
                                                        </form>
                                    </td>
                                  </tr>
                                  ";  
                                }
                    }
                  }
                }
              else{
                  while($qry = mysql_fetch_array($result)){
                    $fname = $qry['FirstName'];
                    $lname = $qry['LastName'];
                    $studentid = $qry['StudentID'];
                    $course = $qry['MajorCourse'];

                      $q = "SELECT * FROM specializationtbl WHERE StudentID = '$studentid'";
                      $r = mysql_query($q);
                      while ($q = mysql_fetch_array($r)) {
                        $Specialization = $q['Specialization'];

                        echo "
                        <tr>
                         <td width = '5%' class = tabletitle><input type='checkbox' id='select'/></td>
                          <td width = '10%' class = tabletitle> $studentid </td>
                          <td width = '20%' class = tabletitle> $lname $fname </td>
                          <td width = '30%' class = tabletitle> $course </td>
                          <td width = '30%' class = tabletitle> $Specialization </td>
                          <td width = '10%' class = tabletitle> <button id='requestresume' name='requestresume' class='btn btn-default'><i class='fa fa-arrow-circle-right'></i> </td>
                        <tr>
                        ";  
                      }
                }

              }
            
            ?>
            </tbody>
        </table>
           </div>
        </div>
    </div>
</div>
  </form>  
</body>
  <script type="text/javascript" src="../js/script.js"></script>
</html>
<?php
include('../connection.php');
session_start();

if(isset($_SESSION['CompanyID'])){
    $CompanyID = $_SESSION['CompanyID'];
}
else{
    header("location: ../login-company.php");
}

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

    <!-- Fonts -->
    <link href="../fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
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

    <!-- Notification -->
    <link rel="stylesheet" href="../../css/notif.css"/>

    <script type="text/javascript" >
        $(document).ready(function()
        {
        $("#notificationLink").click(function()
        {
        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;
        });

        //Document Click
        $(document).click(function()
        {
        $("#notificationContainer").hide();
        });
        //Popup Click
        $("#notificationContainer").click(function()
        {
        return false
        });

        });
    </script>
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
                            <!-- Start Contact Info -->
                            <ul class="contact-details">
                                <li class="profile-name"><b><?php echo $CompanyName; ?></b></li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-6">
                            <!-- Start Social Links -->
                            <ul class="social-list">
                                <li class="profile-name">
                                    <a class="bell itl-tooltip" data-placement="bottom" title="" href="#"
                                       data-original-title="Notification"><i class="fa fa-bell"></i></a>
                                </li>
                                <li class="profile-name">
                                    &nbsp;
                                </li>
                                <li class="profile-name">
                                    <i class="fa fa-user"></i> Hello, <b><?php echo $cFirstName . " " . $cLastName; ?></b>
                                </li>
                            </ul>
                            <!-- End Social Links -->
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
                         <a class="navbar-brand" href="">
                            <img src="../images/ojpms.png">
                        </a>
                    </div>
              <div class="navbar-collapse collapse">
                  <!-- Sign-out -->
                  <div class="signout-side">
                      <a class="show-signout" data-toggle='modal' data-target='#Logout'><i class="fa fa-sign-out"></i></a>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="Logout"
                       role="dialog">
                      <div class="modal-dialog" style="padding:100px">
                          <!-- Modal content-->
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Log out?</h4>
                              </div>
                              <div class="modal-body">
                                  <div class="col-md-15 fieldcol">
                                      <label = "usr" class = "control-label">Do you want to log out?</label>
                                      <div class="form-group">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <a href="logout.php"
                                         class="btn btn-primary">Log out</a>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">
                                          Cancel
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
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
                            <li><a href="company-positionlist.php" class = "active">Position List</a></li>
                            <li><a href="company-createposition.php">Create Position</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="active" href="company-calendar.php">Calendar</a>
                    </li>
                    <li><a href="company-settings.php">Settings</a>
                    </li>
                    <li>
                        <a>Applicant List</a>
                        <ul class="dropdown">
                            <li><a href="company-pendingapplicants.php" class = "active">Pending</a></li>
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
                        <a href="company.php">Home</a>
                    </li>
                    <li>
                        <a>Position</a>
                        <ul class="dropdown">
                            <li><a href="company-positionlist.php" class = "active">Position List</a></li>
                            <li><a href="company-createposition.php">Create Position</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="active" href="company-calendar.php">Calendar</a>
                    </li>
                    <li><a href="company-settings.php">Settings</a>
                    </li>
                  <li>
                        <a > Applicant List</a>
                        <ul class="dropdown">
                            <li><a href="company-pendingapplicants.php" class = "active">Pending</a></li>
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
                <h2>List of Events</h2>
              </div>
            </div>
          </div>
        </div>
        <!-- End Page Banner -->

    <!--Content-->
    <br><br><br>
    <div class = "container">
        <div class="row">
            <div class="col-md-6">
                &nbsp;
            </div>
            <div class="col-md-6">
                <a href="company-calendarcreateevent.php" class="main-button" style="float:right;">
                    <span class="fa fa-pencil-square-o fa-1x"></span> Create an Event 
                </a>
            </div>
        </div>
        &nbsp;
        <div class = "col-md-12">
            <?php
              if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    if($id=="EventEdit"){
                        echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully updated.
                        </div>';
                    }
                    elseif($id=="EventDelete"){
                        echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully deleted.
                        </div>';
                    }
                    elseif($id=="EventAdd"){
                        echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully added.
                        </div>';
                    }
                }   
            ?>
            <table class="table segment table-hover">
                <thead>
                    <?php
                      $eventtitle = 'EventTitle';
                      $datefrom = 'EventDatef';
                      $dateto = 'EventDatet';
                      $location = 'Location';

                      $query = ("SELECT * FROM compeventtbl WHERE CompanyID = '$CompanyID'");
                      $Result = mysql_query($query);
                    ?>
                    <tr>
                        <th width= "20%" class = "tabletitle">Event</th>
                        <th width = "20%" class = "tabletitle">From</th>
                        <th width = "20%" class = "tabletitle">To</th>
                        <th width = "25%" class = "tabletitle"> Location </th>
                        <th width = "15%" class = "tabletitle"> </th>
                    <tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysql_fetch_array($Result)) {
                      
                    ?>
                    <tr>
                       <td width = 20% class = tabletitle><?php echo $row[$eventtitle];?></td>
                       <td width = 20% class = tabletitle><?php echo $row[$datefrom]; ?> </td>
                       <td width = 20% class = tabletitle><?php echo $row[$dateto]; ?> </td>
                       <td width = 20% class = tabletitle><?php echo $row[$location];?> </td>
                       <form method="POST">
                          <input type="hidden" name="delete_id" value="<?php echo $row['EventID']; ?>" />
                       <td class = tabletitle> 
                            <button id="Adduser" href="" name="btnedit" class=" btn btn-primary"> 
                            <i class="fa fa-pencil-square-o fa-1x"></i></button> 
                            <button id="Adduser" href="#" class=" btn btn-primary"> 
                            <i class="fa fa-exclamation"></i> </button>
                            <button id="Adduser" name="btndelete" href="#" class=" btn btn-primary"> 
                            <i class="fa fa-trash fa-1x"></i> </button> 
                       </td>
                       </form>
                    <tr> 
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="../js/script.js"></script>
</body>

<?php
    if(isset($_POST['btndelete'])){
        $delete = $_POST['delete_id'];
        
        $query = "DELETE FROM compeventtbl WHERE EventID='$delete'";
        $Result = mysql_query($query);

        echo "
                <script type='text/javascript'>
                location.href='company-calendar.php?id=EventDelete';
                </script>
                ";
    }
    if(isset($_POST['btnedit'])){
        $Z = $_POST['delete_id'];
        $_SESSION['delete_id'] = $Z;
        echo "
                <script type='text/javascript'>
                location.href='edit_event.php';
                </script>
                ";
    }
?>
</html>
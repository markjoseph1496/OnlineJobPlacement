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
                        <a class="show-signout" href="../login-company.php?id=1"><i class="fa fa-sign-out"></i></a>
                    </div>
                    <!-- End Sign-out -->
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="company.php">Home</a>
                        </li>
                        <li>
                            <a>Position</a>
                            <ul class="dropdown">
                                <li><a class="active" href="company-positionlist.php">Position List</a></li>
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
                    <a href="company.php">Home</a>
                </li>
                <li>
                    <a>Position</a>
                    <ul class="dropdown">
                        <li><a class="active" href="company-positionlist.php">Position List</a></li>
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
                <h2>List of Positions</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!--Content-->
<br><br><br>

<div class="container">
    <div class="col-md-12">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id == "2") {
                echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully updated.
                        </div>';
            } elseif ($id == "3") {
                echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully deleted.
                        </div>';
            } elseif ($id == "1") {
                echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully added.
                        </div>';
            }
        }
        ?>
        <table class="table segment table-hover" width="100%" cellpadding="0">
            <thead>
            <tr>

            </tr>
            <tr>
                <th width='30%' class='tabletitle'>Positions</th>
                <th width='20%' class='tabletitle'>From</th>
                <th width='20%' class='tabletitle'>To</th>
                <th width='20%' class='tabletitle'>Available Position</th>
                <th width='15%' class='tabletitle'>Action</th>
            <tr>
            </thead>
            <?php
            $compposition_tbl =
                GSecureSQL::query(
                    "SELECT
                        PositionID,
                        PositionLevel,
                        PostingDateFrom,
                        PostingDateTo,
                        AvPosition
                    FROM
                      comppositiontbl
                    WHERE CompanyID = ? ORDER BY PostingDateFrom ASC",
                    TRUE,
                    "s",
                    $CompanyID
                );
            foreach ($compposition_tbl as $value) {
                $PositionID = $value[0];
                $PositionLevel = $value[1];
                $PostingDateFrom = $value[2];
                $PostingDateTo = $value[3];
                $AvPosition = $value[4];
                ?>
                <tbody>
                <tr>
                    <td width=20% class='tabletitle'><?php echo $PositionLevel; ?></td>
                    <td width=20% class='tabletitle'><?php echo $PostingDateFrom; ?></td>
                    <td width=20% class='tabletitle'><?php echo $PostingDateTo; ?></td>
                    <td width=20% class='tabletitle'><?php echo $AvPosition; ?></td>
                    <td width=15% class='tabletitle'>
                        <a id='Edit' name="btnedit" href="company-editposition.php" class='btn btn-default'>
                            <i class='fa fa-pencil-square-o fa-1x'></i>
                        </a>
                        <button name='btndelete' href="" class='btn btn-danger'>
                            <i class='fa fa-trash fa-1x'></i>
                        </button>
                    </td>
                    </form>
                </tr>
                </tbody>
                <?php
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="../js/script.js"></script>
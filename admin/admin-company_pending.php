<?php
include('../connection.php');
session_start();
?>
<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js"> <![endif]-->
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


    <!-- Start Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Start Contact Info -->
                    <ul class="contact-details">
                        <li class="profile-name"><i class="fa fa-hashtag"></i> <b>008-2012-0805</b></li>
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
                            <i class="fa fa-user"></i> Hello, <b>Aira Jane Cruz</b>
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
                    <a href="../login-admin.php?id=1" class="show-signout"><i class="fa fa-sign-out"></i></a>
                </div>
                <!-- End Sign-out -->
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="admin.php">Home</a>
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
                        <a class="active">Company List</a>
                        <ul class="dropdown">
                            <li><a href="admin-companylist.php">Active</a></li>
                            <li><a class="active" href="admin-company_pending.php">Pending</a></li>
                        </ul>
                    </li>
                    <li><a href="admin-adviser.php" admin-maintenance.php"">Adviser List</a>
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
                    <a href="admin-requested.php">Requested</a>
                </li>
                <li>
                    <a class="active">Company List</a>
                        <ul class="dropdown">
                            <li><a href="admin-companylist.php">Active</a></li>
                            <li><a class="active" href="admin-company_pending.php">Pending</a></li>
                        </ul>
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
                    <h2>List of Company</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!--Content-->
    <br><br><br>

    <div class="container">
        <div class="col-md-12">
            <table class="table segment table-hover">
                <thead>
                <tr>

                </tr>
                <tr>
                    <th width='15%' class='tabletitle'>Company Name</th>
                    <th width='10%' class='tabletitle'>Location</th>
                    <th width='15%' class='tabletitle'>Industry</th>
                    <th width='10%' class='tabletitle'>Contact Number</th>
                    <th width='15%' class='tabletitle'>Email Address</th>
                    <th width='15%' class='tabletitle'>Website</th>
                    <th width='10%' class='tabletitle'></th>
                <tr>
                </thead>
                <tbody>
                <?php
                $companyinfo_tbl =
                    GSecureSQL::query(
                        "SELECT * FROM companyinfotbl",
                        TRUE
                    );
                foreach ($companyinfo_tbl as $value) {
                $CompanyID = $value[0];
                $CompanyName = $value[1];
                $Industry = $value[3];
                $City = $value[5];
                $PhoneNo = $value[7];
                $MobileNo = $value[8];
                $Email = $value[15];
                ?>
                <tr>
                    <td width=15% class=tabletitle>
                        <a href='#'><?php echo $CompanyName; ?></a>
                    </td>
                    <td width=10% class=tabletitle><?php echo $City; ?></td>
                    <td width='15%' class='tabletitle'><?php echo $Industry; ?></td>
                    <td width='10%' class='tabletitle'><?php echo $PhoneNo; ?></td>
                    <td width='15%' class='tabletitle'>WEBSITE</td>
                    <td width='15%' class='tabletitle'><?php echo $Email; ?></td>

                    <td class=tabletitle>
                        <button id='Edit' name='btnedit' href='' class='btn btn-default'>
                            <i class='fa fa-check-square-o'></i>
                        </button>
                        <button name='btndelete' href='' class='btn btn-danger'>
                            <i class='fa fa-trash fa-1x'></i>
                        </button>
                    </td>
                <tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
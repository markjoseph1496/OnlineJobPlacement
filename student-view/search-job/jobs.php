<!DOCTYPE html>
<?php
include('../../connection.php');
session_start();

if (isset($_SESSION['StudentID'])) {
    $StudentID = $_SESSION['StudentID'];
} else {
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../login-student.php?id=2';
        </script>
        ";
}
?>

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
    <link href="../../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../../css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

    <!-- BootstrapValidator -->
    <script src="../../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link href="../../fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../../css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- Pagination -->
    <link rel="stylesheet" href="../../css/simplePagination.css"/>

    <!-- JS  -->
    <script type="text/javascript" src="../../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../../js/modernizrr.js"></script>
    <script type="text/javascript" src="../../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../../js/count-to.js"></script>
    <script type="text/javascript" src="../../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../../js/jquery.slicknav.js"></script>

</head>

<body>
<div id="container">
    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">
        <!-- Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <!-- Start Contact Info -->
                        <ul class="profile-name">
                            <li><i class="fa fa-hashtag"></i> <b>008-2012-0805</b></li>
                        </ul>
                        <!-- End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-5">
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
    </header>

    <div class="page-banner no-subtitle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Find the job that suits your passion</h2>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="../myinfo/personal-info.php">Fill out your information</a></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <div class="middle-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <ul class="mid-list">
                        &nbsp;
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="hr1" style="margin-bottom:5px;"></div>
    <div class="container">
        <div>
            <label><i class="fa fa-bookmark"></i> Bookmarked Jobs <a href="bookmarked-jobs.php">(0)</a>&nbsp;</label>
            <label><i class="fa fa-sort"></i> Sort by:</label>
            <select id="" name="" class="" style="height:15%; width:15%;">
                <option value="">Location</option>
                <option value="">Years of Experience</option>
            </select>&nbsp;

            <label><i class="fa fa-filter"></i> Filter by:</label>
            <select id="" name="" class="" style="height:15%; width:15%;">
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
    </div>
    <div class="hr4" style="margin-top:5px;"></div>

    <!-- Start Content -->
    <div id="content">
        <div class="container">
            <div class="row blog-page">
                <!--Sidebar-->
                <div class="col-md-3 sidebar left-sidebar">
                    <!-- Search Widget -->
                    <div class="widget widget-search">
                        <form action="#">
                            <input type="search" placeholder="Search..."/>
                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <!-- Popular Posts widget -->
                    <div class="widget widget-popular-posts">
                        <h4>Popular Jobs <span class="head-line"></span></h4>
                        <ul>
                            <li>
                                <div class="widget-thumb">
                                    <a href="#"><img src="../../images/blog-mini-03.jpg" alt=""/></a>
                                </div>
                                <div class="widget-content">
                                    <h5><a href="#">Senior Accountant</a></h5>
                                    <span>Jul 29 2013</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End sidebar-->


                <!-- Start Blog Posts -->
                <div class="col-md-9 blog-box">
                    <h4 class="classic-title"><span>Jobs</span></h4>
                    <?php
                    $compposition_tbl =
                        GSecureSQL::query(
                            "SELECT * FROM comppositiontbl",
                            TRUE
                        );
                    foreach ($compposition_tbl as $value) {
                        $PositionID = $value[0];
                        $CompanyID = $value[1];
                        $PostingDateFrom = $value[3];
                        $PostingDateTo = $value[4];
                        $Position = $value[5];
                        $YearExperience = $value[10];

                        $company_tbl =
                            GSecureSQL::query(
                                "SELECT * FROM companyinfotbl WHERE CompanyID = ?",
                                TRUE,
                                "s",
                                $CompanyID
                            );
                        foreach ($company_tbl as $value1) {
                            $CompanyName = $value1[1];
                            $Description = $value1[2];
                            $Location = $value1[5];

                            $diff_from = date_diff(new DateTime(), new DateTime($PostingDateFrom));
                            $diff_to = date_diff(new DateTime(), new DateTime($PostingDateTo));

                            $a = $diff_from->y >= 0 &&
                                $diff_from->m >= 0 &&
                                $diff_from->d >= 0 &&
                                $diff_from->invert == 1;

                            $b = $diff_to->y >= 0 &&
                                $diff_to->m >= 0 &&
                                $diff_to->d >= 0 &&
                                $diff_to->invert == 0;

                            if ($a && $b) {
                                ?>
                                <div class='blog-post standard-post'>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Post Content -->
                                            <div class='post-content'>
                                                <div class='post-type'><i class='fa fa-picture-o'></i></div>
                                                <h2><a href='#'><?php echo $Position; ?></a></h2>
                                                <h1><p><?php echo $CompanyName; ?></p></h1>
                                                <ul class='icons-list'>
                                                    <?php
                                                    $requirements_tbl =
                                                        GSecureSQL::query(
                                                            "SELECT * FROM comprequirementtbl WHERE PositionID = ? AND CompanyID = ?",
                                                            TRUE,
                                                            "ss",
                                                            $PositionID,
                                                            $CompanyID
                                                        );
                                                    $count = 0;
                                                    foreach ($requirements_tbl as $value2) {
                                                        $RID = $value2[0];
                                                        $Requirement = $value2[3];
                                                        if ($count < 3) {
                                                            $count++;
                                                            ?>
                                                            <li>
                                                                <i class='fa fa-check-circle'></i> <?php echo $Requirement; ?>
                                                            </li>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <div class='hr1' style='margin-bottom:14px;'></div>
                                                <ul class='post-meta'>
                                                    <li><?php echo $YearExperience; ?> year(s) experience</li>
                                                    <li><?php echo $Location; ?></li>
                                                </ul>
                                                <a class='main-button' target="_blank"
                                                   href='view-details.php?id=<?php echo $PositionID; ?>'>View
                                                    Details <i class='fa fa-angle-right'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p> <?php echo $Description; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->
<script type="text/javascript" src="../../js/script.js"></script>


<!-- Start Footer Section -->
<footer>
    <div class="container">
        <!-- Start Copyright -->
        <div class="copyright-section">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2015 OJPMS - All Rights Reserved</p>
                </div>
                <!-- .col-md-6 -->
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="#">Sitemap</a>
                        </li>
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- .col-md-6 -->
            </div>
            <!-- .row -->
        </div>
        <!-- End Copyright -->
    </div>
</footer>
<!-- End Footer Section -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
</body>
</html>
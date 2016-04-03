<?php
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS | Latest News</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="OJPMS">
    <link rel="shortcut icon" href="../images/logo/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <!-- BootstrapValidator -->
    <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="../fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="../fonts/ffonts/open-sans.css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- Pagination -->
    <link rel="stylesheet" href="../css/simplePagination.css"/>

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
    <div id="container">
        <!-- Start Header Section -->
        <div class="hidden-header"></div>
        <header class="clearfix">
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a href="../index.php" class="navbar-brand">
                            <img src="../images/ojpms.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <div class="signout-side">
                            <a href='../login-student.php' class='btn-system btn-large btn-black'>Login</a>
                            <a href="../registration.php" class='btn-system btn-large btn-black'>Sign Up</a>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a href="../search-job/jobs.php">Jobs</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

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

        <?php
            $news_tbl =
                GSecureSQL::query(
                    "SELECT NewsID, NewsTitle, NewsDate, NewsCaption FROM adminnewstbl",
                    TRUE
                );
            foreach ($news_tbl as $value) {
                $NewsID = $value[0];
                $NewsTitle = $value[1];
                $NewsDate = $value[2];
                $NewsCaption = $value[3];
            
        ?>

        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <div class="row blog-post-page">
                    <div class="col-md-8 blog-box">

                        <!-- Start Single Post Area -->
                        <div class="blog-post gallery-post">

                            <h2><?php echo $NewsTitle; ?></h2>
                            <ul class="post-meta">
                              <li>By <a href="#">OJPMS</a></li>
                              <li><?php echo $NewsDate; ?></li>
                            </ul>

                            <div class="col-md-12 image-service-box">
                                <img class="img-thumbnail" src="admin/<?php echo $ProfileImages; ?>" alt="">
                                </div>


                            <!-- Start Single Post Content -->
                            <div class="post-content">
                            <p><?php echo $NewsCaption; ?></p>
                                <div class="post-bottom clearfix">
                                    <div class="post-tags-list">
                                        <a href="#">Professional</a>  
                                        <a href="#">Etiquette</a>
                                        <a href="#">STI</a>
                                        <a href="#">Caloocan</a>
                                        <a href="#">Seminar</a>
                                    </div>
                                    <div class="post-share">
                                        <span>Share This Post:</span>
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Post Content -->
                        </div>
                        <!-- End Single Post Area -->
                    </div>
                        <?php
                        }
                        ?>
                    <!-- Sidebar -->
                    <div class="col-md-4 sidebar right-sidebar">
                        <!-- Popular Posts widget -->
                        <div class="widget widget-popular-posts">
                            <h4>Latest News <span class="head-line"></span></h4>
                            <?php
                                $newss_tbl =
                                    GSecureSQL::query(
                                        "SELECT NewsID, NewsTitle, NewsDate, NewsCaption FROM adminnewstbl",
                                        TRUE
                                    );
                                foreach ($newss_tbl as $value) {
                                    $NewsID = $value[0];
                                    $NewsTitle = $value[1];
                                    $NewsDate = $value[2];
                                    $NewsCaption = $value[3];
                                
                            ?>
                            <ul>
                                <li>
                                    <div class="widget-content">
                                        <h5><a href="news.php"><?php echo $NewsTitle; ?></a></h5>
                                        <p></p>
                                        <span><?php echo $NewsDate; ?></span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                        <?php
                        }
                        ?>

                        <!-- Video Widget
                        <div class="widget">
                            <h4>Video <span class="head-line"></span></h4>
                            <div>
                                <iframe src="http://player.vimeo.com/video/63322694?byline=0&amp;portrait=0&amp;badge=0" width="800" height="450"></iframe>
                            </div>
                        </div> -->
                    </div>
                    <!--End sidebar-->
                </div>

                
            </div>
        </div>
    </div>
    <!-- End Content -->

    <script type="text/javascript" src="../js/script.js"></script>

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
</body>
</html>
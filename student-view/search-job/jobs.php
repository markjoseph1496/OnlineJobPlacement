<!DOCTYPE html>
<?php 
include('../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}
else{
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php?id=2';
        </script>
        ";
}
    

$AchievementID= 'AchievementID';
$Achievements = 'Achievements';

$qry = "SELECT * FROM achievementstbl WHERE StudentID ='$StudentID'";
$result = mysql_query($qry);
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

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../../css/flat-ui.css" type="text/css" media="screen">


    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../../css/slicknav.css" media="screen">

    <!-- CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/colors/jade.css" title="jade" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/green.css" title="green" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/blue.css" title="blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/beige.css" title="beige" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/cyan.css" title="cyan" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/orange.css" title="orange" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/peach.css" title="peach" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/pink.css" title="pink" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/purple.css" title="purple" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/sky-blue.css" title="sky-blue" media="screen" />
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen" />

    <!-- JS  -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/modernizrr.js"></script>
    <script type="text/javascript" src="../../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../../js/count-to.js"></script>
    <script type="text/javascript" src="../../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.slicknav.js"></script>

    <script type="text/javascript" src="../../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.textillate.js"></script>

    <script type="text/javascript" src="../../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../../js/mediaelement-and-player.js"></script>
</head>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>
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
                            <ul class="contact-details">
                                <li><a href="#"><i class="fa fa-hashtag"></i> 008-2012-0805</a></li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-5">
                        <!-- Start Social Links -->
                            <ul class="social-list">
                                <li class="profile-name">
                                    <a class="bell itl-tooltip" data-placement="bottom" title="" href="#" data-original-title="Notification"><i class="fa fa-bell"></i></a>                            
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
                            <li><a href="../myinfo/personal-info.php">Start filling out your information</a></li>
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
                            sample
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <div class="row blog-page">
                    <!--Sidebar-->
                    <div class="col-md-3 sidebar left-sidebar">
                        <!-- Search Widget -->
                        <div class="widget widget-search">
                            <form action="#">
                                <input type="search" placeholder="Search..." />
                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <!-- Categories Widget -->
                        <div class="widget widget-categories">
                            <h4>Categories <span class="head-line"></span></h4>
                            <li>
                                <i class="fa fa-bookmark"></i> Bookmarked Jobs<a href="#"> (0)</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sort"></i> Sort by: </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-filter"></i> Filter by:</a>
                            </li>
                        </div>


                        <!-- Popular Posts widget -->
                        <div class="widget widget-popular-posts">
                            <h4>Popular Jobs <span class="head-line"></span></h4>
                            <ul>
                                <li>
                                    <div class="widget-thumb">
                                        <a href="#"><img src="images/blog-mini-03.jpg" alt="" /></a>
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

                        <!-- Start Post -->
                        <div class="blog-post standard-post">
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                <h2><a href="#">Senior Accountant</a></h2>
                                <h1><p>Wallem Philippines Shipping Inc.</p></h1>
                                <ul class="icons-list">
                                    <li><i class="fa fa-check-circle"></i> Taxation and Audit</li>
                                    <li><i class="fa fa-check-circle"></i> Financial Planning</li>
                                    <li><i class="fa fa-check-circle"></i> Treasury and Budget</li>
                                </ul>
                                <div class="hr1" style="margin-bottom:14px;"></div>
                                <ul class="post-meta">
                                    <li>Posted 1 hour ago</li>
                                    <li>4 years experience</li>
                                    <li>Valenzuela City</li>
                                </ul>
                                <a class="main-button" href="#">View Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <!-- End Post -->


                        <!-- Start Post -->
                        <div class="blog-post standard-post">
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                <h2><a href="#">Senior Accountant</a></h2>
                                <h1><p>Wallem Philippines Shipping Inc.</p></h1>
                                <ul class="icons-list">
                                    <li><i class="fa fa-check-circle"></i> Taxation and Audit</li>
                                    <li><i class="fa fa-check-circle"></i> Financial Planning</li>
                                    <li><i class="fa fa-check-circle"></i> Treasury and Budget</li>
                                </ul>
                                <div class="hr1" style="margin-bottom:14px;"></div>
                                <ul class="post-meta">
                                    <li>Posted 1 hour ago</li>
                                    <li>4 years experience</li>
                                    <li>Valenzuela City</li>
                                </ul>
                                <a class="main-button" href="#">View Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <!-- End Post -->

                        <!-- Start Post -->
                        <div class="blog-post standard-post">
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                <h2><a href="#">Senior Accountant</a></h2>
                                <h1><p>Wallem Philippines Shipping Inc.</p></h1>
                                <ul class="icons-list">
                                    <li><i class="fa fa-check-circle"></i> Taxation and Audit</li>
                                    <li><i class="fa fa-check-circle"></i> Financial Planning</li>
                                    <li><i class="fa fa-check-circle"></i> Treasury and Budget</li>
                                </ul>
                                <div class="hr1" style="margin-bottom:14px;"></div>
                                <ul class="post-meta">
                                    <li>Posted 1 hour ago</li>
                                    <li>4 years experience</li>
                                    <li>Valenzuela City</li>
                                </ul>
                                <a class="main-button" href="#">View Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <!-- End Post -->

                        <!-- Start Post -->
                        <div class="blog-post standard-post">
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                <h2><a href="#">Senior Accountant</a></h2>
                                <h1><p>Wallem Philippines Shipping Inc.</p></h1>
                                <ul class="icons-list">
                                    <li><i class="fa fa-check-circle"></i> Taxation and Audit</li>
                                    <li><i class="fa fa-check-circle"></i> Financial Planning</li>
                                    <li><i class="fa fa-check-circle"></i> Treasury and Budget</li>
                                </ul>
                                <div class="hr1" style="margin-bottom:14px;"></div>
                                <ul class="post-meta">
                                    <li>Posted 1 hour ago</li>
                                    <li>4 years experience</li>
                                    <li>Valenzuela City</li>
                                </ul>
                                <a class="main-button" href="#">View Details <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <!-- End Post -->

                        <!-- Start Pagination -->
                        <div id="pagination">
                            <span class="all-pages">Page 1 of 3</span>
                            <span class="current page-num">1</span>
                            <a class="page-num" href="#">2</a>
                            <a class="page-num" href="#">3</a>
                            <a class="page-num" href="#">4</a>
                            <a class="page-num" href="#">5</a>
                            <a class="next-page" href="#">Next</a>
                        </div>
                        <!-- End Pagination -->
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
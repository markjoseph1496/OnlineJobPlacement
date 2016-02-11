<?php
include("connection.php");

$adminevent_tbl = 
    GSecureSQL::query(
        "SELECT 
            *
        FROM `admineventtbl`
        LIMIT 6",
        TRUE
        );
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
    <meta name="description" content="Responsive HTML5 Template">
    <meta name="author" content="">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/about-style.css" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/open-sans.css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

    <!-- CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/count-to.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.js"></script>
</head>

<body>
    <!-- Container -->
    <div id="container">

        <!-- Start Header -->
        <div class="hidden-header"></div>
        <header class="clearfix">
            <!-- Start Header ( Logo & Naviagtion ) -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <div class="navbar-brand" ><img alt="" src="images/ojpms.png"></div>
                    </div>
                    <div class="navbar-collapse collapse">
                        <div class="search-side">
                            <a href="#join" class="smoothScroll btn-system btn-large border-btn btn-yellow">Login</a>
                        </div>
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                        	<li><a href="#home" class="smoothScroll">Home</a></li>
                            <li><a href="#jobs" class="smoothScroll">Jobs</a></li>
                            <li><a href="#events" class="smoothScroll">Events</a></li>
                            <li><a href="#about" class="smoothScroll">E2E</a></li>
                            <li><a href="#contact" class="smoothScroll">Contact</a></li>
                        </ul>
                        <!-- End Navigation List -->
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                	<li><a href="#home" class="smoothScroll">Home</a></li>
                	<li><a href="#jobs" class="smoothScroll">Jobs</a></li>
                    <li><a href="#events" class="smoothScroll">Events</a></li>
                    <li><a href="#about" class="smoothScroll">E2E</a></li>
                    <li><a href="#join" class="smoothScroll">Join</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
            <!-- End Header ( Logo & Naviagtion ) -->
        </header>
        <!-- End Header -->

        <!-- Start HomePage Slider -->
        <div id="home">
            <!-- Carousel -->
            <div id="main-slide" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slide" data-slide-to="1"></li>
                    <li data-target="#main-slide" data-slide-to="2"></li>
                </ol>
                <!--/ Indicators end-->

                <!-- Carousel inner -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="img/slider/1.png" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h2 class="animated2">
                                    <span>Welcome to <strong>OJPMS</strong></span>
                                </h2>
                                <h3 class="animated3">
                                    <span>The ultimate aim of your business</span>
                                </h3>
                                <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a></p>
                            </div>
                        </div>
                    </div>
                    <!--/ Carousel item end -->
                    <div class="item">
                        <img class="img-responsive" src="img/slider/2.png" alt="slider">
                    </div>
                    <!--/ Carousel item end -->
                    <div class="item">
                        <img class="img-responsive" src="img/slider/3.jpg" alt="slider">
                        <!--<div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h2 class="animated7 white">
                                    <span>The way of <strong>Success</strong></span>
                                </h2>
                                <h3 class="animated8 white">
                                    <span>Why you are waiting</span>
                                </h3>
                                <div class="">
                                    <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a>
                                    <a class="animated4 slider btn btn-default btn-min-block" href="#">Click</a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <!--/ Carousel item end -->
                </div>
                <!-- Carousel inner end-->

                <!-- Controls -->
                <a class="left carousel-control" href="#main-slide" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="right carousel-control" href="#main-slide" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
            <!-- /carousel -->
        </div>
        <!-- End HomePage Slider -->


        <!-- Start Content -->
        <div id="content">
            <div id="jobs" class="section">
                <!-- Start News & Skill Section -->
                <div class="container">
                    <div class="row">
                    	<div class="big-title text-center animated fadeInDown delay-01" data-animation="fadeInDown" data-animation-delay="01">
		                   <h1>Search for Your <span class="accent-color">Jobs</span></h1>
		                   <p class="title-desc"></p>
		                </div>

                        <div class="col-md-9">
                            <!-- Nav Tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true"><i class="icon-award-1"></i>Industry</a></li>
                                <li><a href="#tab2" data-toggle="tab" aria-expanded="false"><i class="icon-beaker"></i>Specialization</a></li>
                                <li><a href="#tab3" data-toggle="tab"><i class="icon-droplet"></i>Location</a></li>
                            </ul>

                            <!-- Tab Panels -->
                            <div class="tab-content">
                                <!-- Tab Content 1 -->
                                <div class="tab-pane fade active in" id="tab1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="icons-list">
                                                <li><a href="student-view/search-job/search-result.php">BPO / Call Center</a></li>
                                                <li><a href="">Food / Beverage / RestaurantService</a></li>
                                                <li><a href="">Lorem Service</a></li>
                                                <li><a href="">Clerical / Administrative Support</a></li>
                                                <li><a href="">Human Resources</a></li>
                                                <li><a href="">Finance - General / Cost Accounting </a></li>
                                                <li><a href="">Healthcare - Nurse / Medical Support and Assistant</a></li>
                                                <li><a href="">IT / Computer - Network / System / Database Admin</a></li>
                                                <li><a href="">Sales - Retail / General</a></li>
                                                <li><a href="">IT / Computer - Software Development</a></li>
                                                <li><a href="">Engineering - Civil / Construction / Structural</a></li>
                                                <li><a href="">Finance - Audit/Taxation</a></li>                                        
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="icons-list">
                                                <li><a href="">Purchasing / Inventory/ Material and Warehouse Management</a></li>
                                                <li><a href="">Sales - Corporate / B2B</a></li>
                                                <li><a href="">Engineering - Electronics / Communication</a></li>
                                                <li><a href="">Others</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Content 2 -->
                                <div class="tab-pane fade" id="tab2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="icons-list">
                                                <li><a href="">Agricultural / Plantation / Poultry / Fisheries</a></li>
                                                <li><a href="">Banking / Financial Services</a></li>
                                                <li><a href="">Computer / Information Technology (Software)</a></li>
                                                <li><a href="">Construction / Building / Engineering</a></li>
                                                <li><a href="">Consulting (IT, Science, Engineering and Technical)</a></li>
                                                <li><a href="">Education</a></li>
                                                <li><a href="">Food and Beverage</a></li>
                                                <li><a href="">Grooming / Beauty / Fitness</a></li>
                                                <li><a href="">Healthcare / Medical</a></li>
                                                <li><a href="">Hotel / Hospitality</a></li>
                                                <li><a href="">Human Resources Management / Consulting</a></li>
                                                <li><a href="">Online / E-commerce Business</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="icons-list">
                                                <li><a href="">Outsourcing (Call Center / BPO)</a></li>
                                                <li><a href="">Retail / Merchandising</a></li>
                                                <li><a href="">Utilities / Power</a></li>
                                                <li><a href="">Others</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Content 3 -->
                                <div class="tab-pane fade" id="tab3">
                                    <ul>
                                        <li>Caloocan City <a href="">(25)</a></li>
                                        <li>Makati City <a href="">(22)</a></li>
                                        <li>Malabon City <a href="">(13)</a></li>
                                        <li>Mandaluyong <a href="">(5)</a></li>
                                        <li>Manila <a href="">(159)</a></li>
                                        <li>Marikina City <a href="">(5)</a></li>
                                        <li>Muntinlupa City <a href="">(109)</a></li>
                                        <li>Navotas City <a href="">(10)</a></li>
                                        <li>Ortigas <a href="">(34)</a></li>
                                        <li>Paranaque <a href="">(3737)</a></li>
                                        <li>Pasig City <a href="">(23)</a></li>
                                        <li>Quezon City <a href="">(92)</a></li>
                                        <li>Taguig City <a href="">(230)</a></li>
                                        <li>Valenzuela City <a href="">(5)</a></li>
                                        <li>Pasay City <a href="">(47)</a></li>
                                        <li>Others <a href="">(82)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 pricing-tables">
                            <div class="pricing-table highlight-plan">
                                <div class="plan-name">
                                    <h3>Latest Jobs</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button href="#" class="btn-system btn-mini border-btn btn-gray">Refresh</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button href="#" class="btn-system btn-mini border-btn">View More</button>                       
                                        </div>
                                    </div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong><div class="interval">Posted By: 51Talk</div></li>
                                        <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong><div class="interval">Posted By: 51Talk</div></li>
                                        <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong><div class="interval">Posted By: 51Talk</div></li>
                                        <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong><div class="interval">Posted By: 51Talk</div></li>
                                        <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong><div class="interval">Posted By: 51Talk</div></li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>

            
            <!-- Start Recent Projects Carousel -->
            <div id="events" class="section" style="background-color:#00599D;">
                <div class="container">
                    <div class="recent-projects">
                        <h4 class="title wite-text">Events</h4>
                        <div class="projects-carousel touch-carousel">

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a class="lightbox" data-lightbox-type="ajax" href="https://www.youtube.com/watch?v=Bjryfs_JwLU">
                                            <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                                            <img alt="" src="images/portfolio-1/1.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a class="lightbox" title="This is an image title" href="images/portfolio-big-01.jpg">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/2.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="view-event.php">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/3.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/4.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a class="lightbox" title="This is an image title"
                                           href="images/portfolio-big-02.jpg">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/5.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/6.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a class="lightbox" title="This is an image title"
                                           href="images/portfolio-big-03.jpg">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/7.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/8.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/9.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/10.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/11.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-item item">
                                <div class="portfolio-border">
                                    <div class="portfolio-thumb">
                                        <a href="#">
                                            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                            <img alt="" src="images/portfolio-1/12.png"/>
                                        </a>
                                    </div>
                                    <div class="portfolio-details">
                                        <a href="#">
                                            <h4>STI</h4>
                                            <span>Events</span>
                                            <span>Events</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Projects Carousel -->

                    <!-- Divider -->
                    <div class="hr1 margin-60"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Start Recent Posts Carousel -->
                            <div class="latest-posts">
                                <h4 class="classic-title wite-text"><strong>Latest News</strong></h4>
                                <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">
                                    <?php 
                                        foreach($adminevent_tbl as $adminevent)
                                        { 
                                            $EventTitle = $adminevent_tbl[0][2];
                                            $EventDateF = $adminevent_tbl[0][3];
                                            $EventDateT = $adminevent_tbl[0][4];
                                            $Description = $adminevent_tbl[0][6];
                                            $ProfileImage = $adminevent_tbl[0][8];
                                    ?>

                                        <div class="post-row item">
                                        <div class="left-meta-post">
                                            <div class="post-date"><span class="day">28</span><span class="month">Dec</span>
                                            </div>
                                            <div class="post-type"><i class="fa fa-picture-o"></i></div>
                                        </div>
                                        <h3 class="post-title"><a href="#"><?php echo $EventTitle?></a></h3>
                                        <div class="post-content">
                                            <p>
                                                <?php echo $Description?>
                                                <a class="read-more" href="#">Read More...</a>
                                            </p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- End Recent Posts Carousel -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider
            <div class="hr1 margin-60"></div> -->

            <!-- ABOUT Section -->
            <div id="about" class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="big-title text-center animated fadeInDown delay-01" data-animation="fadeInDown" data-animation-delay="01">
                                <h1>Enrollment to Employment (E2E) System</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start Service Icon 1 -->
                        <div class="col-md-2 col-sm-2">
                            &nbsp;
                        </div>
                        <!-- End Service Icon 1 -->

                        <!-- Start Service Icon 1 -->
                        <div class="col-md-8 col-sm-8 service-box service-center">
                            <div class="service-boxed">
                                <div class="service-icon" style="margin-top:-25px;">
                                    <img src="img/about/e2e-logo.gif">
                                </div>
                                <div class="service-content">
                                    <h4>The E2E System is a complete approach to human resource 
                                        development, which aims to develop ICT-enabled professionals 
                                        through innovative learning and career planning methodologies.
                                    </h4>
                                    <div class="hr5" style="margin-top:5px;margin-top:5px;"></div>
                                    <p>Establishing one's career in today's competitive industries has become a 
                                        challenging pursuit to most job seekers. Employers too are increasingly 
                                        having difficulty finding the right person for the job. Too often, there 
                                        remains a huge gap between the skills required by the industry and what a graduate has to offer.
                                    </p>
                                    <div class="hr1" style="margin-top:5px;"></div>
                                    <p>STI steps up to bridge this gap by introducing the Enrollment to Employment 
                                        or E2E System. The E2E System is a complete approach to human resource development, 
                                        which aims to develop ICT-enabled professionals through innovative learning and career 
                                        planning methodologies. Through the E2E System, STI students get applicable education, 
                                        job market skills, job preparedness, and job placement assistance.
                                    </p>
                                    <div class="hr1" style="margin-top:5px;"></div>
                                    <p>To learn more, <a href="e2e.php"><u>click here</u></a>.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Icon 1 -->

                        <div class="col-md-2 col-sm-2">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>

            
            <div id="join" class="parallax" style="background-image:url(img/join-us.jpg);">
                <div class="overlay">
                    <div class="parallax-text-container-1">
                        <div class="parallax-text-item">
                            <div class="container">
                                <div class="row">
                                    <div class="big-title text-center animated fadeInDown delay-01" data-animation="fadeInDown" data-animation-delay="01">
                                        <h1 class="wite-text">Be Part of Us</h1>
                                    </div>
                                    <!--<p class="text-center wite-text">Choose between <b>Student</b> and <b>Company</b>.</p>-->
                                        
                                    <!-- Start Service Icon 1 -->
                                    <div class="col-md-6 col-sm-6 service-box service-center">
                                        <div class="service-boxed">
                                            <div class="service-icon" style="margin-top:-25px;">
                                                <a href="login-student.php"><i class="fa fa-users icon-large-effect icon-effect-2"></i></a>
                                            </div>
                                            <div class="service-content">
                                                <h4 class="wite-text">Student</h4>
                                                <p class="accent-color">This section is exclusively made for STI Caloocan's current and former students.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Service Icon 1 -->

                                    <!-- Start Service Icon 2 -->
                                    <div class="col-md-6 col-sm-6 service-box service-center">
                                        <div class="service-boxed">
                                            <div class="service-icon" style="margin-top:-25px;">
                                                <a href="login-company.php"><i class="fa fa-building icon-large-effect icon-effect-2"></i></a>
                                            </div>
                                            <div class="service-content">
                                                <h4 class="wite-text">Company</h4>
                                                <p class="accent-color">This section is designed for STI partner companies.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Service Icon 2 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider 
            <div class="hr1 margin-60"></div>-->

            <!-- Start Partner Company -->
            <div class="section" style="padding-top:35px; padding-bottom:20px; border-top:0; border-bottom:0; background:#fff;">
                <div class="container">

                    <!-- Start Big Heading -->
                    <div class="big-title text-center">
                        <h1>Our Happy <span class="accent-color">Partners</span></h1>
                        <p class="title-desc">Featured Companies</p>
                    </div>
                    <!-- End Big Heading -->

                    <!-- Start Clients Carousel -->
                    <div class="our-clients">
                        <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5" data-navigation="false">

                            <!-- Company 1 -->
                            <div class="client-item item">
                                <a href="#"><img src="images/partner-company/accenture.png" alt="" /></a>
                            </div>

                            <!-- Company 2 -->
                            <div class="client-item item">
                                <a href="#"><img src="images/partner-company/sykes.png" alt="" /></a>
                            </div>

                            <!-- Company 3 -->
                            <div class="client-item item">
                                <a href="#"><img src="images/partner-company/cicc.png" alt="" /></a>
                            </div>

                            <!-- Company 4 -->
                            <div class="client-item item">
                                <a href="#"><img src="images/partner-company/concentrix.png" alt="" /></a>
                            </div>

                            <!-- Company 5 -->
                            <div class="client-item item">
                                <a href="#"><img src="images/partner-company/globe.png" alt="" /></a>
                            </div>

                            <!-- Company 6 -->
                            <div class="client-item item">
                                <a href="#"><img src="images/partner-company/collabera.png" alt="" /></a>
                            </div>

                            <!-- Company 7 -->
                            <div class="client-item item">
                                <a href="#"><img src="images/partner-company/business-tends.png" alt="" /></a>
                            </div>

                            <!-- Company 8 -->
                            <div class="client-item item">
                                <a href="#"><img src="images/partner-company/aickman.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Clients Carousel -->
                    <div class="row">
                        <div class="col-md-6">&nbsp;</div>
                        <div class="col-md-6">
                            <label style="float:right;"><a href="for-index/other-companies.php">See Other Companies <i class="fa fa-caret-right"></i></a></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Partner Company -->   
        </div>
        <!-- End content -->

        <!-- Start Footer -->
        <footer id="contact">
            <div class="container">
                <div class="row footer-widgets">

                    <!-- Start Subscribe & Social Links Widget -->
                    <div class="col-md-3">
                        <div class="footer-widget social-widget">
                            <h4>Follow Us<span class="head-line"></span></h4>
                            <ul class="social-icons">
                                <li><a class="facebook"
                                       href="https://www.facebook.com/pages/STI-College-Caloocan-Official-Fanpage/133289683408899?pnref=lhc"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/sticollege"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .col-md-3 -->
                    <!-- End Subscribe & Social Links Widget -->

                    <!-- Start Twitter Widget -->
                    <div class="col-md-3">
                        <div class="footer-widget twitter-widget">
                            <h4>Contact Us<span class="head-line"></span></h4>
                            <b>Tel. no. (+632) 294-4001 / 361-6070</b>
                            <label>109 Samson Road corner Caimito Street Caloocan City, Philippines 1400</label>
                        </div>
                    </div>
                    <!-- .col-md-3 -->
                    <!-- End Twitter Widget -->


                    <!-- Start Flickr Widget -->
                    <div class="col-md-3">
                        <div class="footer-widget flickr-widget">

                        </div>
                    </div>
                    <!-- .col-md-3 -->
                    <!-- End Flickr Widget -->

                    <!-- Start Contact Widget -->
                    <div class="col-md-3">
                        <div class="footer-widget contact-widget">
                            <h4><img src="images/ojpms.png" class="img-responsive" alt="Footer Logo"/></h4>
                            <!--<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>-->
                            <ul>
                                <li><span>Phone Number:</span> +01 234 567 890</li>
                                <li><span>Email:</span> company@company.com</li>
                                <li><span>Website:</span> www.sticaloocan-jobplacement.com</li>
                            </ul>
                        </div>
                    </div>
                    <!-- .col-md-3 -->
                    <!-- End Contact Widget -->
                </div>
                <!-- .row -->

                <!-- Start Copyright -->
                <div class="copyright-section">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2015 OJPMS - All Rights Reserved</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-nav">
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Copyright -->
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- End Full Body Container -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    <!-- important-->
    <script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
</body>
</html>
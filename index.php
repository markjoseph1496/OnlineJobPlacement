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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Page Description and Author -->
    <meta name="description" content="OJPMS">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/logo/favicon.ico">


    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/home.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="css/about-style.css" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/open-sans.css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

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


<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="images/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#jobs">Jobs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#events">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#e2e">E2E</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#partners">Partners</a>
                    </li>
                    <li>
                        <a href="#sign-in" class="page-scroll page-promo-header-element"><b style="line-height:20px;">Sign In</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Services Section -->
    <section id="home" class="bg-light-gray">
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
                    <img class="img-responsive" src="images/slider/1.png" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated2">
                                <span>Welcome to <strong>OJPMS</strong></span>
                            </h2>
                            <h3 class="animated3">
                                <span>The ultimate aim of your education</span>
                            </h3>
                            <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a></p>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="images/slider/2.png" alt="slider">
                </div>
                <!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="images/slider/3.jpg" alt="slider">
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
    </section>

    <!-- Start Content -->
    
    <section id="jobs">
        <!-- Start News & Skill Section -->
        <div class="container">
            <div class="row">
                <div class="big-title text-center animated fadeInDown delay-01" data-animation="fadeInDown"
                     data-animation-delay="01">
                    <h1>Search for Your <strong><span class="accent-color">Jobs</span></strong></h1>
                    <p class="title-desc"></p>
                </div>

                <div class="col-md-9">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true"><i
                                    class="icon-award-1"></i>Industry</a></li>
                        <li><a href="#tab2" data-toggle="tab" aria-expanded="false"><i class="icon-beaker"></i>Specialization</a>
                        </li>
                        <li><a href="#tab3" data-toggle="tab"><i class="icon-droplet"></i>Location</a></li>
                    </ul>

                    <!-- Tab Panels -->
                    <div class="tab-content">
                        <!-- Tab Content 1 -->
                        <div class="tab-pane fade active in" id="tab1">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="icons-list">
                                        <li><a href="student-view/search-job/search-result.php">BPO / Call Center</a>
                                        </li>
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
                                        <li><a href="">Purchasing / Inventory/ Material and Warehouse Management</a>
                                        </li>
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
                                <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong>
                                    <div class="interval">Posted By: 51Talk</div>
                                </li>
                                <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong>
                                    <div class="interval">Posted By: 51Talk</div>
                                </li>
                                <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong>
                                    <div class="interval">Posted By: 51Talk</div>
                                </li>
                                <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong>
                                    <div class="interval">Posted By: 51Talk</div>
                                </li>
                                <li><strong><a href="">ONLINE English Educator (Part-time Home-based)</a></strong>
                                    <div class="interval">Posted By: 51Talk</div>
                                </li>
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
    </section>


    <section id="events" class="section" style="background-color:#00599D;">
        <div class="container">
            <div class="recent-projects">
                <h4 class="title-yellow wite-text">Events</h4>
                <div class="projects-carousel touch-carousel">
                    <?php
                    $events_tbl =
                        GSecureSQL::query(
                            "SELECT EventTitle, ProfileImage FROM admineventtbl",
                            TRUE
                        );
                    foreach ($events_tbl as $value) {
                        $EventTitle = $value[0];
                        $ProfileImage = $value[1];
                        ?>
                        <div class="portfolio-item item">
                            <div class="portfolio-border">
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="<?php echo $EventTitle; ?>"
                                       href="images/event/gen-ass-2016.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="admin/<?php echo $ProfileImage; ?>"/>
                                    </a>
                                </div>
                                <div class="portfolio-details">
                                    <a href="for-index/view-event.php">
                                        <h4><?php echo $EventTitle; ?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

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
                        <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="3">

                            <!-- Posts 1 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">1</span><span class="month"></span></div>
                                    <div class="post-type"><i class="fa fa-newspaper-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="for-index/news.php">Professional Etiquette Seminar</a>
                                </h3>
                                <div class="post-contents">
                                    <p>
                                        STI College Caloocan is ready to conduct their Professional Etiquette Seminar
                                        <a class="read-more" href="for-index/news.php">Read More...</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Posts 1 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">2</span><span class="month"></span></div>
                                    <div class="post-type"><i class="fa fa-newspaper-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="for-index/news.php">Are you ready for the PEP Talk
                                        2016?</a></h3>
                                <div class="post-contents">
                                    <p>
                                        STI College Caloocan is ready to conduct their PEP Talk 2016 Seminar
                                        <a class="read-more" href="for-index/news.php">Read More...</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Posts 1 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">3</span><span class="month"></span></div>
                                    <div class="post-type"><i class="fa fa-newspaper-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="for-index/news.php">JOB FAIR 2016</a></h3>
                                <div class="post-contents">
                                    <p>
                                        STI College Caloocan is ready to conduct their JOB FAIR 2016
                                        <a class="read-more" href="for-index/news.php">Read More...</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Posts 1 -->
                            <div class="post-row item">
                                <div class="left-meta-post">
                                    <div class="post-date"><span class="day">4</span><span class="month"></span></div>
                                    <div class="post-type"><i class="fa fa-newspaper-o"></i></div>
                                </div>
                                <h3 class="post-title"><a href="for-index/news.php">Mock Interview</a></h3>
                                <div class="post-contents">
                                    <p>
                                        STI College Caloocan's students are ready to conduct their mock interiew
                                        <a class="read-more" href="for-index/news.php">Read More...</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Recent Posts Carousel -->
                </div>
            </div>
        </div>
    </section>

    <section id="e2e">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="big-title text-center animated fadeInDown delay-01" data-animation="fadeInDown"
                         data-animation-delay="01">
                        <h1>Enrollment to Employment <strong><span style="color:#337ab7;">(E2E)</span></strong> System
                        </h1>
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
                            <img src="images/home/e2e-logo.gif">
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
                                remains a huge gap between the skills required by the industry and what a graduate has
                                to offer.
                            </p>
                            <div class="hr1" style="margin-top:5px;"></div>
                            <p>STI steps up to bridge this gap by introducing the Enrollment to Employment
                                or E2E System. The E2E System is a complete approach to human resource development,
                                which aims to develop ICT-enabled professionals through innovative learning and career
                                planning methodologies. Through the E2E System, STI students get applicable education,
                                job market skills, job preparedness, and job placement assistance.
                            </p>
                            <div class="hr1" style="margin-top:5px;"></div>
                            <p>To learn more, <a href="for-index/e2e.php"><u>click here</u></a>.</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Icon 1 -->

                <div class="col-md-2 col-sm-2">
                    &nbsp;
                </div>
            </div>
        </div>
    </section>

    <section id="partners" >
        <div class="container">
            <!-- Start Big Heading -->
            <div class="big-title text-center">
                <h1>Our Happy <span class="accent-color">Partners</span></h1>
                <p class="title-desc">Featured Companies</p>
            </div>
            <!-- End Big Heading -->

            <!-- Start Clients Carousel -->
            <div class="our-clients">
                <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5"
                     data-navigation="false">

                    <!-- Company 1 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/accenture.png" alt=""/></a>
                    </div>

                    <!-- Company 2 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/sykes.png" alt=""/></a>
                    </div>

                    <!-- Company 3 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/cicc.png" alt=""/></a>
                    </div>

                    <!-- Company 4 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/concentrix.png" alt=""/></a>
                    </div>

                    <!-- Company 5 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/globe.png" alt=""/></a>
                    </div>

                    <!-- Company 6 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/collabera.png" alt=""/></a>
                    </div>

                    <!-- Company 7 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/business-trends.png" alt=""/></a>
                    </div>

                    <!-- Company 8 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/aickman.png" alt=""/></a>
                    </div>
                </div>
            </div>
            <!-- End Clients Carousel -->


            <!-- Start Clients Carousel -->
            <div class="our-clients">
                <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5" data-navigation="false">

                    <div class="client-item item">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Evotech"><img src="images/partner-company/evotech.jpg" alt="" /></a>
                    </div>

                    <div class="client-item item">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Food Asia Corp."><img src="images/partner-company/food-asia.jpe" alt="" /></a>
                    </div>

                    <div class="client-item item">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Gerry's Grill"><img src="images/partner-company/gerrys-grill.jpg" alt="" /></a>
                    </div>

                    <div class="client-item item">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Global Staff Recruitment Search Inc."><img src="images/partner-company/global-staff.jpg" alt="" /></a>
                    </div>

                    <div class="client-item item">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Globe Telecom"><img src="images/partner-company/globe.png" alt="" /></a>
                    </div>
                </div>
            </div>
            <!-- End Clients Carousel -->
            <div class="row">
                <div class="col-md-6">&nbsp;</div>
                <div class="col-md-6">
                    <label style="float:right;"><a href="for-index/other-companies.php">See Other Companies <i
                                class="fa fa-caret-right"></i></a></label>
                </div>
            </div>
        </div>
    </section>

    <section id="sign-in" class="parallax" style="background-image:url(images/sti-bldg.jpg);">
        <div class="overlay">
            <div class="parallax-text-container-1">
                <div class="parallax-text-item">
                    <div class="container">
                        <div class="row">
                            <div class="big-title text-center animated fadeInDown delay-01" data-animation="fadeInDown"
                                 data-animation-delay="01">
                                <strong><h1 class="wite-text">Sign In</h1></strong>
                            </div>

                            <ul class="timeline">
                                <li>
                                    <div class="timeline-image">
                                        <a href="login-student.php"><img class="img-circle img-responsive"
                                                                         src="images/home/student.png" alt=""></a>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <strong><h1 style="color:#337ab7;">Student</h1></strong>
                                            <h4 class="subheading">This section is exclusively made for STI Caloocan's
                                                current and former students.</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image">
                                        <a href="login-company.php"><img class="img-circle img-responsive"
                                                                         src="images/home/company.png" alt=""></a>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <strong><h1 style="color:#f8ba01;">Company</h1></strong>
                                            <h4 class="subheading">This section is designed for STI partner
                                                companies.</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer id="contact">
        <div class="container">
            <div class="row footer-widgets">

                <!-- Start Subscribe & Social Links Widget -->
                <div class="col-md-4">
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
                        <h4>Contact Us<span class="head-line"></span></h4>
                        <div><b>Tel. no. (+632) 294-4001 / 361-6070</b></div>
                        <label>109 Samson Road corner Caimito Street Caloocan City, Philippines 1400</label>
                    </div>
                </div>
                <!-- .col-md-3 -->
                <!-- End Subscribe & Social Links Widget -->


                <!-- Start Contact Widget -->
                <div class="col-md-4">
                    <div class="footer-widget contact-widget">
                        <!--<h4><img src="images/ojpms.png" class="img-responsive" alt="Footer Logo"/></h4>-->
                        <!--<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>-->
                        <ul>
                            <li><span>Phone Number:</span> +63 (917) 4638460</li>
                            <li><span>Email:</span> jobplacement@caloocan.sti.edu</li>
                            <li><span>Website:</span> www.sti.edu</li>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/home/ease.js"></script>
    <script src="js/home/classie.js"></script>
    <script src="js/home/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/home/agency.js"></script>
</body>
</html>

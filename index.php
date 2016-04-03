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

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/home-color.css" media="screen"/>

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
                        <a class="page-scroll" href="#ojt">OJT</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#partners">Partners</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#links">Links</a>
                    </li>
                    <li><!-- page-promo-header-element-->
                        <a class="page-scroll" href="#sign-in">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- SLIDER Section -->
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

    <!-- JOBS Section -->
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
                                        <?php
                                        $listofindustry =
                                            GSecureSQL::query(
                                                "SELECT DISTINCT Industry FROM companyinfotbl ORDER BY Industry ASC LIMIT 0,20",
                                                TRUE
                                            );
                                        foreach ($listofindustry as $value) {
                                            $Industry = $value[0];
                                            ?>
                                            <li><a href=""><?php echo $Industry; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="icons-list">

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content 2 -->
                        <div class="tab-pane fade" id="tab2">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="icons-list">
                                        <?php
                                        $listofspecialization =
                                            GSecureSQL::query(
                                                "SELECT * FROM listofspecializationtbl LIMIT 0,20",
                                                TRUE
                                            );
                                        foreach ($listofspecialization as $value) {
                                            $Specialization = $value[1];
                                            ?>
                                            <li><a href=""><?php echo $Specialization; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="icons-list">
                                        <?php
                                        $listofspecialization =
                                            GSecureSQL::query(
                                                "SELECT * FROM listofspecializationtbl LIMIT 20,20",
                                                TRUE
                                            );
                                        foreach ($listofspecialization as $value) {
                                            $Specialization = $value[1];
                                            ?>
                                            <li><a href=""><?php echo $Specialization; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content 3 -->
                        <div class="tab-pane fade" id="tab3">
                            <ul>
                                <?php
                                $listofcompanybylocation =
                                    GSecureSQL::query(
                                        "SELECT DISTINCT City FROM companyinfotbl ORDER BY City ASC LIMIT 0,20",
                                        TRUE
                                    );
                                foreach ($listofcompanybylocation as $value) {
                                    $City = $value[0];
                                    $CountCompany =
                                        GSecureSQL::query(
                                            "SELECT COUNT(City) FROM companyinfotbl WHERE City = ?",
                                            TRUE,
                                            "s",
                                            $City
                                        );
                                    foreach ($CountCompany as $value1) {
                                        $Count = $value1[0];
                                        ?>
                                        <li><?php echo $City; ?> <a href="">(<?php echo $Count; ?>)</a></li>
                                        <?php
                                    }
                                }
                                ?>
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
                                    <button id="btnRefresh" class="btn-system btn-mini border-btn btn-gray">Refresh</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn-system btn-mini border-btn">View More</button>
                                </div>
                            </div>
                        </div>
                        <div class="plan-list" id="Jobs">
                            <ul>
                                <?php
                                $JCount = 0;
                                $compposition_tbl =
                                    GSecureSQL::query(
                                        "SELECT
                                                PositionID,
                                                CompanyID,
                                                PostingDateFrom,
                                                PostingDateTo,
                                                PositionTitle
                                                FROM comppositiontbl
                                                ORDER BY PostingDateFrom DESC",
                                        TRUE
                                    );
                                foreach ($compposition_tbl as $value) {
                                    $PositionID = $value[0];
                                    $CompanyID = $value[1];
                                    $PostingDateFrom = $value[2];
                                    $PostingDateTo = $value[3];
                                    $PositionTitle = $value[4];

                                    $company_tbl =
                                        GSecureSQL::query(
                                            "SELECT CompanyName FROM companyinfotbl WHERE CompanyID = ?",
                                            TRUE,
                                            "s",
                                            $CompanyID
                                        );
                                    foreach ($company_tbl as $value1) {
                                        $CompanyName = $value1[0];

                                        $diff_from = date_diff(new DateTime(), new DateTime($PostingDateFrom));
                                        $diff_to = date_diff(new DateTime(), new DateTime($PostingDateTo));

                                        if ($diff_to->d == 0) {
                                            $diff_to->invert = 0;
                                        }

                                        $a = $diff_from->y >= 0 &&
                                            $diff_from->m >= 0 &&
                                            $diff_from->d >= 0 &&
                                            $diff_from->invert == 1;

                                        $b = $diff_to->y >= 0 &&
                                            $diff_to->m >= 0 &&
                                            $diff_to->d >= 0 &&
                                            $diff_to->invert == 0;

                                        if ($a && $b) {
                                            $JCount++;
                                            if ($JCount <= 5) {
                                                ?>
                                                <li><strong><a href=""><?php echo $PositionTitle; ?></a></strong>
                                                    <div class="interval">Posted By: <?php echo $CompanyName; ?></div>
                                                </li>
                                                <?php
                                            }
                                        }
                                    }
                                }
                                ?>

                            </ul>
                        </div>
                        <script>
                            $(document).ready(function () {

                                function RefreshTable() {
                                    $("#Jobs").load("index.php #Jobs");
                                }

                                $("#btnRefresh").on("click", RefreshTable);
                            });
                        </script>
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

    <!-- EVENTS & LATEST NEWS Section -->
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

    <!-- E2E Section -->
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

    <!-- OJT PROCESS Section -->
    <section id="ojt" class="bg-light-gray">
        <div class="container">
            <div class="col-md-3">
                &nbsp;
            </div>
            <div class="col-md-6">
                <div class="big-title text-center animated fadeInDown delay-01" data-animation="fadeInDown"
                         data-animation-delay="01">
                    <h1><strong>OJT</strong> Process</h1>
                </div>
                <!-- Start Touch Slider -->
                <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="false">
                    <div class="item"><img alt="" src="images/ojt-slider/01.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/02.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/03.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/04.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/05.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/06.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/07.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/08.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/09.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/10.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/11.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/12.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/13.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/14.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/15.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/16.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/17.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/18.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/19.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/20.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/21.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/22.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/23.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/24.jpg"></div>
                    <div class="item"><img alt="" src="images/ojt-slider/25.jpg"></div>
                </div>
                <!-- End Touch Slider -->
            </div>
            <div class="col-md-3">
                &nbsp;
            </div>
        </div>
    </section>

    <!-- PARTNERS Section -->
    <section id="partners">
        <div class="container">
            <!-- Start Big Heading -->
            <div class="big-title text-center">
                <h1>Our Happy <strong><span class="accent-color">Partners</span></strong></h1>
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

            <div class="hr3" style="margin-top:25px;margin-bottom:25px;"></div>

            <!-- Start Clients Carousel -->
            <div class="our-clients">
                <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5"
                     data-navigation="false">

                    <!-- Company 1 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/gerrys-grill.jpg" alt=""/></a>
                    </div>

                    <!-- Company 2 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/netineers.gif" alt=""/></a>
                    </div>

                    <!-- Company 3 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/people-depot.png" alt=""/></a>
                    </div>

                    <!-- Company 4 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/shakeys.jpg" alt=""/></a>
                    </div>

                    <!-- Company 5 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/rbx.jpg" alt=""/></a>
                    </div>

                    <!-- Company 6 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/servflex.jpg" alt=""/></a>
                    </div>

                    <!-- Company 7 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/staff-finders.jpeg" alt=""/></a>
                    </div>

                    <!-- Company 8 -->
                    <div class="client-item item">
                        <a href="#"><img src="images/partner-company/rg-meditron.gif" alt=""/></a>
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

    <!-- LINKS Section -->
    <section id="links">
        <div id="content">
            <div class="container">
                <!-- Start Big Heading -->
                <div class="big-title text-center">
                    <h1>For <strong><span class="accent-color">OJT</span></strong> Students</h1>
                </div>
                <!-- End Big Heading -->

                <div class="hr5" style="margin-top:20px;margin-bottom:50px;"></div>
                <div class="row">
                    <!-- Start Service Icon 1 -->
                    <div class="col-md-12 col-sm-6 service-box service-center">
                        <div class="service-icon">
                            <i style="font-size: 3em;" class="fa fa-sun-o icon-large"></i>
                        </div>
                        <div class="service-content">
                            <h2>OJT Summer 2015-2016 Registration</h2>
                        </div>
                    </div>
                    <!-- End Service Icon 1 -->
                </div>
                <div class="row">
                    <!-- Start Service Icon 2 -->
                    <div class="col-md-6 col-sm-6 service-box service-center">
                        <div class="service-icon">
                            <i style="font-size: 3em;" class="fa fa-pencil icon-large"></i>
                        </div>
                        <div class="service-content">
                            <h2>Update your information sheet</h2>
                        </div>
                    </div>
                    <!-- End Service Icon 2 -->

                    <!-- Start Service Icon 3 -->
                    <div class="col-md-6 col-sm-6 service-box service-center">
                        <div class="service-icon">
                            <i style="font-size: 3em;" class="fa fa-link icon-large"></i>
                        </div>
                        <div class="service-content">
                            <h2>Link for your OJT files</h2>
                        </div>
                    </div>
                    <!-- End Service Icon 3 -->
                </div>
                <div style="padding:22px 24px;" class="call-action call-action-boxed call-action-style3 clearfix">
                    <div class="button-side" style="margin-top:10px;"> <a href="https://docs.google.com/forms/d/14dfaF6WIC5PM2ylfL02B3XEzBlO1fLYvLamuN57QvAM/viewform" class="btn-system border-btn btn-medium"><i class="icon-basket"></i> Register Now!</a></div>
                    <h2 class="primary"><strong>JOB FAIR</strong> participation</h2>
                    <p>For Company</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SIGN IN Section -->
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

    <!-- TEAM Section -->
    <section>
        <div class="container">

            <!-- Start Big Heading -->
            <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
                <h1>Our Great <strong>Team</strong></h1>
            </div>
            <!-- End Big Heading -->

            <!-- Some Text -->
            <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <span class="accent-color sh-tooltip" data-placement="right" title="Simple Tooltip">doloremque laudantium</span>, totam rem aperiam, eaque ipsa quae ab illo inventore
            <br/>veritatis et quasi <span class="accent-color sh-tooltip" data-placement="bottom" title="Simple Tooltip">architecto</span> beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>


            <!-- Start Team Members -->
            <div class="row">

                <!-- Start Member 1 -->
                <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="03">
                    <div class="team-member modern">
                        <!-- Member Photo, Name & Position -->
                        <div class="member-photo">
                            <img alt="" src="images/team/face_1.png" />
                            <div class="member-name">Mark Joseh Cinco <span>Developer</span>
                            </div>
                        </div>
                        <!-- Member Words -->
                        <div class="member-info">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                        </div>
                        
                        <!-- Start Progress Bar 3 -->
                        <div class="progress-label">Vectors Design</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                                <span class="percentage">100%</span>
                            </div>
                        </div>
                        <!-- Member Social Links -->
                        <div class="member-socail">
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                            <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Start Member 2 -->
                <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="03">
                    <div class="team-member modern">
                        <!-- Member Photo, Name & Position -->
                        <div class="member-photo">
                            <img alt="" src="images/team/.jpg" />
                            <div class="member-name">Aira Jane Cruz <span>Developer</span>
                            </div>
                        </div>
                        <!-- Member Words -->
                        <div class="member-info">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                        </div>
                        <!-- Start Progress Bar 3 -->
                        <div class="progress-label">Vectors Design</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                                <span class="percentage">100%</span>
                            </div>
                        </div>
                        <!-- Member Social Links -->
                        <div class="member-socail">
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                            <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Start Member 3 -->
                <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="03">
                    <div class="team-member modern">
                        <!-- Member Photo, Name & Position -->
                        <div class="member-photo">
                            <img alt="" src="images/team/jpg" />
                            <div class="member-name">Cherry Ramirez <span>Developer</span>
                            </div>
                        </div>
                        <!-- Member Words -->
                        <div class="member-info">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                        </div>
                        <!-- Start Progress Bar 3 -->
                        <div class="progress-label">Vectors Design</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                                <span class="percentage">100%</span>
                            </div>
                        </div>
                        <!-- Member Social Links -->
                        <div class="member-socail">
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                            <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Start Member 4 -->
                <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="03">
                    <div class="team-member modern">
                        <!-- Member Photo, Name & Position -->
                        <div class="member-photo">
                            <img alt="" src="images/team/face_1.png" />
                            <div class="member-name">Tim Joseph Rojas <span>Developer</span>
                            </div>
                        </div>
                        <!-- Member Words -->
                        <div class="member-info">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                        </div>
                        <!-- Start Progress Bar 3 -->
                        <div class="progress-label">Vectors Design</div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                                <span class="percentage">100%</span>
                            </div>
                        </div>
                        <!-- Member Social Links -->
                        <div class="member-socail">
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                            <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Members -->
        </div>
        <!-- .container -->
    </section>


    <footer id="contact">
        <div class="container">
            <div class="footer-widget contact-widget">
                <div class="row text-center">
                    <h4>Contact Us</h4>
                    <div><b>Tel. no. (+632) 294-4001 / 361-6070</b></div>
                    <label>109 Samson Road corner Caimito Street Caloocan City, Philippines 1400</label>
                </div>
                <div class="row text-center">
                    <ul>
                        <li><span>Phone Number:</span> +63 (917) 4638460</li>
                        <li><span>Email:</span> jobplacement@caloocan.sti.edu</li>
                        <li><span>Website:</span> www.sti.edu</li>
                    </ul>
                </div>
            </div>
            <div class="row text-center">
                <div class="footer-widget social-widget">
                    <h4>Follow Us</h4>
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
                            <li><a href="contact.php">Contact</a></li>
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

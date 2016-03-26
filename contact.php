<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS | Contact</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content=" - Responsive HTML5 Template">
    <link rel="shortcut icon" href="images/logo/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- BootstrapValidator -->
    <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>

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

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
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
    <script type="text/javascript" src="js/jquery.slicknav.js"></script>

    <style type="text/css">.popover {
    z-index: 1010; /* A value higher than 1010 that solves the problem */
}</style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();   
        });
    </script>
</head>

<body style="overflow:hidden;">
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
                        <a href="index.php" class="navbar-brand">
                            <img src="images/ojpms.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a href="search-job/jobs.php">Jobs</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

        <!-- Map-->
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:349px;width:100%;'><div id='gmap_canvas' style='height:349px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">                                 embed google maps                           </a></small></div><div><small><a href="http://www.autohuren.world/">auto huren</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(14.65784645549572,120.97693024774401),mapTypeId: google.maps.MapTypeId.TERRAIN};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.65784645549572,120.97693024774401)});infowindow = new google.maps.InfoWindow({content:'<strong>STI College Caloocan</strong><br>Caloocan, STI Academic Center<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>        <!-- Start Content -->
        

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Contact Us</span></h4>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                        </div>

                        <div class="form-group">
                            <textarea rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                        </div>
                        <button type="submit" id="submit" class="btn-system btn-large">Send</button>
                        <div id="success" style="color:#34495e;"></div>
                    
                    </div>

                    <div class="col-md-4">

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Information</span></h4>

                        <!-- Some Info -->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>

                        <!-- Divider -->
                        <div class="hr1" style="margin-bottom:10px;"></div>

                        <!-- Info - Icons List -->
                        <ul class="icons-list">
                            <li><i class="fa fa-globe"></i><strong>Address:</strong> 109 Samson Road corner Caimito Road Caloocan City, Philippines 1400</li>
                            <li><i class="fa fa-envelope-o"></i><strong>Email:</strong> jobplacement@caloocan.sti.edu</li>
                            <li><i class="fa fa-telephone"></i><strong>Loc:</strong> 110-111</li>
                            <li><i class="fa fa-mobile"></i><strong>Phone:</strong> +63 (917) 4638460</li>
                            <li><i class="fa fa-fax"></i><strong>Fax:</strong> +63 (2) 294-4001</li>
                        </ul>

                        <!-- Divider -->
                        <div class="hr1" style="margin-bottom:15px;"></div>

                        <!-- Classic Heading -->
                        <h4 class="classic-title"><span>Available Schedules</span></h4>

                        <!-- Info - List -->
                        <ul class="list-unstyled">
                          <li><strong>Monday - Friday</strong> - 9am to 5pm</li>
                          <li><strong>Saturday</strong> - 9am to 2pm</li>
                          <li><strong>Sunday</strong> - Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <script type="text/javascript" src="js/script.js"></script>

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
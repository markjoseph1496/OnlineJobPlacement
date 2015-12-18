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


$ReferenceID = 'ReferenceID';
$Name = 'Name';
$Relationship = 'Relationship';
$Company = 'Company';
$Position = 'Position';
$Phone = 'Phone';
$Email = 'Email';

$qry = "SELECT * FROM referencetbl WHERE StudentID ='$StudentID'";
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
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" href="../../css/slicknav.css" type="text/css" media="screen">

    <!-- CSS Styles  -->
    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" href="../../css/responsive.css" type="text/css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" href="../../css/animate.css" type="text/css"  media="screen">

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
    <script type="text/javascript" src="../../js/script.js"></script>

    <script type="text/javascript" src="../../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../../asset/js/bootstrap.min.js"></script>
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

<body>
    <div id="container">
        <script>
            $(document).on("click", ".deleteCertification", function(result) {
                bootbox.confirm({
                  title: 'Delete',
                  message: 'Are you sure you want to delete this Information?',
                  buttons: {
                      'cancel': {
                          label: 'Cancel',
                          
                      },
                      'confirm': {
                          label: 'Delete',
                          className: 'btn-danger pull-right'
                      }
                  },
                  callback: function(result) {
                      if (result) {
                           window.location = $("a[data-bb='confirmDeleteCertification']").attr('href');
                      }
                  }
              });
            });
        </script>
        <!-- Start Header Section -->
        <div class="hidden-header"></div>
        <header class="clearfix">
        <!-- Start Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Start Contact Info 
                            <ul class="contact-details">
                                <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                                </li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                                </li>
                                <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                                </li>
                            </ul>
                            <!-- End Contact Info -->
                        </div>
                        <!-- .col-md-6 -->
                        <div class="col-md-5">
                        <!-- Start Social Links 
                            <ul class="social-list">
                                <li>
                                <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li>
                                    <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                </li>
                                <li>
                                    <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                </li>
                                <li>
                                    <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
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
                        <a class="navbar-brand" href="">Online JPMS</a>
                    </div>
                    <div class="navbar-collapse collapse">
                    <!-- Stat Search -->
                        <div class="search-side">
                            <a class="show-search"><i class="fa fa-search"></i></a>
                            <div class="search-form">
                                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                                    <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                                </form>
                            </div>
                        </div>
                        <!-- End Search -->
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="../myinfo/personal-info.php">My Info</a>
                                <ul class="dropdown">
                                    <li><a href="../myinfo/personal-info.php">Personal Info</a></li>
                                    <li><a href="../myinfo/contacts-info.php">Contacts Info</a></li>
                                    <li><a href="../myinfo/work.php">Work</a></li>
                                    <li><a href="../myinfo/education.php">Education</a></li>
                                    <li><a href="../myinfo/certifications.php">Certifications</a></li>
                                    <li><a href="../myinfo/achievements.php">Achievements</a></li>
                                    <li><a href="../myinfo/skills-and-languages.php">Skills & Languages</a></li>
                                    <li><a href="../myinfo/references.php">References</a></li>
                                    <li><a href="../myinfo/portfolio.php">Portfolio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../resumelink/resume-link.php">Resume Link</a>
                                <ul class="dropdown">
                                    <li><a href="../resumelink/resume-link.php">Resume Link</a></li>
                                    <li><a href="../resumelink/background.php">Background</a></li>
                                    <li><a href="../resumelink/print-share.php">Print/Share</a></li>
                                </ul>
                             </li>
                            <li>
                                <a href="../applications/applications.php">Applications</a>
                            </li>
                            <li>
                                <a class="active" href="search-job.php">Jobs</a>
                            </li>
                            <li>
                                <a href="../settings/privacy-settings.php">Settings</a>
                                <ul class="dropdown">
                                    <li><a href="../settings/privacy-settings.php">Privacy Settings</a></li>
                                    <li><a href="../settings/pass-settings.php">Password Settings</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="wpb-mobile-menu">
                    <li>
                        <a class="active" href="personal-info.php">My Info</a>
                        <ul class="dropdown">
                            <li><a class="active" href="personal-info.php">Personal Info</a></li>
                            <li><a href="contacts-info.php">Contacts Info</a></li>
                            <li><a href="work.php">Work</a></li>
                            <li><a href="education.php">Education</a></li>
                            <li><a href="certifications.php">Certifications</a></li>
                            <li><a href="achievements.php">Achievements</a></li>
                            <li><a href="skills-and-languages.php">Skills & Languages</a></li>
                            <li><a href="references.php">References</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../resumelinkresume-link.php">Resume Link</a>
                        <ul class="dropdown">
                            <li><a href="../resumelinkresume-link.php">Resume Link</a></li>
                            <li><a href="../resumelinkbackground.php">Background</a></li>
                            <li><a href="../resumelinkprint-share.php">Print/Share</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../applications/applications.php">Applications</a>
                    </li>
                    <li>
                        <a href="search-job.php">Jobs</a>
                    </li>
                    <li>
                        <a href="../settings/privacy-settings.php">Settings</a>
                        <ul class="dropdown">
                            <li><a href="../settings/privacy-settings.php">Privacy Settings</a></li>
                            <li><a href="../settings/pass-settings.php">Password Settings</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../login-student.php?id=1"><i class="fa fa-sign-out"></i> Sign Out</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

        <div class="page-banner no-subtitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Job Lists</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li>Job Lists</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- Page Content -->
                    <div class="col-md-12 page-content">
                        <div class="row">
                            <div class="classic-testimonials">
                                <div class="row field">
                                    <div class="col-md-4">
                                        <div class="form-group text-center">
                                            <label>Position</label>
                                            <select id="" name="" class="form-control">
                                                <option value="" selected="selected">- Please select one -</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group text-center">
                                            <label>Company</label>
                                            <select id="" name="" class="form-control">
                                                <option value="" selected="selected">- Please select one -</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group text-center">
                                        <label>Location</label>
                                        <select id="" name="" class="form-control">
                                            <option value="" selected="selected">- Please select one -</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div style="float:center;">
                                        <div class="btn btn-hg btn-primary">Filter Search</div>
                                        <div class="btn btn-hg btn-primary">Clear</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr class="table-color">
                                    <th>Position</th>
                                    <th>Company</th>
                                    <th>Location</th>
                                    <th width="20%">&nbsp;</th>
                                </tr>
                            </thead>
                            <?php 
                            
                                $qry = 
                                "SELECT
                                    `comppositiontbl`.`PositionID`,
                                    `comppositiontbl`.`PositionLevel`,
                                    `comppositiontbl`.`CompanyID`,
                                    `companyinfotbl`.`CompanyName`,
                                    `comppositiontbl`.`PostingDateFrom`,
                                    `comppositiontbl`.`PostingDateTo`,
                                    `companyinfotbl`.`City`
                                FROM
                                    `comppositiontbl`
                                INNER JOIN `companyinfotbl` ON `comppositiontbl`.`CompanyID` = `companyinfotbl`.`CompanyID`";

                                $result = mysql_query($qry);
                                while($qry = mysql_fetch_array($result))
                                {
                                    $PositionID = $qry['PositionID'];
                                    $position = $qry['PositionLevel'];
                                    $company = $qry['CompanyID'];
                                    $company_name = $qry['CompanyName'];
                                    $location = $qry['City'];

                                    $diff_from = date_diff(new DateTime(), new DateTime($qry['PostingDateFrom']));
                                    $diff_to = date_diff(new DateTime(), new DateTime($qry['PostingDateTo']));

                                    $a =    $diff_from->y >= 0 &&
                                            $diff_from->m >= 0 &&
                                            $diff_from->d >= 0 &&
                                            $diff_from->invert == 1;

                                    $b =    $diff_to->y >= 0 &&
                                            $diff_to->m >= 0 &&
                                            $diff_to->d >= 0 &&
                                            $diff_to->invert == 0;

                                    if($a && $b){
                                        echo 
                                            "
                                            <tbody>
                                            <tr>
                                                <td>$position</td>
                                                <td>$company_name</td>
                                                <td>$location</td>
                                                <td>
                                                    <a href='job.php?PID=$PositionID' class='btn btn-primary btnfor-search-job'>
                                                        <i class='fa fa-paper-plane-o fa-1x'></i>
                                                    </a>
                                               </td>
                                            </tr>
                                            </tbody>
                                            ";
                                    }
                                }
                            ?>
                        </table>
                    </div>
                    <!-- End Page Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>
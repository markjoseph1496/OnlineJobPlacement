<!DOCTYPE html>
<?php 
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
    <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>
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
                                <a class="active" href="resume-link.php">Resume Link</a>
                                <ul class="dropdown">
                                    <li><a href="resume-link.php">Resume Link</a></li>
                                    <li><a class="active" href="background.php">Background</a></li>
                                    <li><a href="print-share.php">Print/Share</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../applications/applications.php">Applications</a>
                            </li>
                            <li>
                                <a href="../search-job/search-job.php">Jobs</a>
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
                        <a class="active" href="resume-link.php">Resume Link</a>
                        <ul class="dropdown">
                            <li><a href="resume-link.php">Resume Link</a></li>
                            <li><a class="active" href="background.php">Background</a></li>
                            <li><a href="print-share.php">Print/Share</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../applications/applications.php">Applications</a>
                    </li>
                    <li>
                        <a href="../search-job/search-job.php">Jobs</a>
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
                        <h2>Background</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li>Background</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                                <p><b>Resumé Link URL:</b><a href="../../../resumelinkprofile.php" target="_blank">
                                    http://markjoseph1496.ojpms.com <i class="fa fa-external-link-square"></i></a>
                                </p><br>
                                        <div class="col-md-12 fieldcol">
                                            <label>Use Background</label><br>
                                            <input type="radio" name="" id="" value="">Solid Color &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="" id="" checked="checked" value="I">Uploaded Image &nbsp;&nbsp;&nbsp;                                    
                                            <br><br>
                                            <div id="color" style="display: none;">
                                                <label>Solid Color</label><br>
                                                <select id="colorselector_1" style="display: none;">
                                                    <option value="106" data-color="#A0522D" selected="selected">sienna</option>
                                                    <option value="47" data-color="#CD5C5C">indianred</option>
                                                    <option value="87" data-color="#FF4500">orangered</option>
                                                    <option value="17" data-color="#008B8B">darkcyan</option>
                                                    <option value="18" data-color="#B8860B">darkgoldenrod</option>
                                                    <option value="68" data-color="#32CD32">limegreen</option>
                                                    <option value="42" data-color="#FFD700">gold</option>
                                                    <option value="77" data-color="#48D1CC">mediumturquoise</option>
                                                    <option value="107" data-color="#87CEEB">skyblue</option>
                                                    <option value="46" data-color="#FF69B4">hotpink</option>
                                                    <option value="64" data-color="#87CEFA">lightskyblue</option>
                                                    <option value="13" data-color="#6495ED">cornflowerblue</option>
                                                    <option value="15" data-color="#DC143C">crimson</option>
                                                    <option value="24" data-color="#FF8C00">darkorange</option>
                                                    <option value="78" data-color="#C71585">mediumvioletred</option>
                                                    <option value="123" data-color="#000000">black</option>
                                                </select>
                                                <script>
                                                    $('#colorselector').colorselector();
                                                </script>
                                            </div>
                                            <div id="uploaded" style="display:block;">
                                                <label>Uploaded Image</label>
                                                <input id="uploadFile" type="file" name="fileToUpload" class="img"><br>
                                                <div class="col-md-1 col-sm-6 fieldcol">
                                                    <div id="imagePreview">
                                                    <img src="<?php echo $ProfileImage; ?>" id="Image1" alt="" style="width:250px;height:250px;">
                                                    <div class="space-1"></div>            
                                                    <button name="" type="" id="" class="btn btn-hg btn-primary" name="btnDelete">Delete Image</button>
                                                </div>          
                                                <div id="preset" style="display: none;">
                                                    <label>Preset Image</label>
                                                    <select name="preset_id" id="preset_id" class="image-picker show-html" style="display: none;">
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/4seasons_wallpaper_tn.jpg" value="1" selected="selected">4seasons_wallpaper</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/190593_4590_tn.jpg" value="2">190593_4590</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/art_flow_tn.jpg" value="3">art_flow</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/art_wallpaper_tn.jpg" value="4">art_wallpaper</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/balloons_tn.jpg" value="5">balloons</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/be_wallpaper_tn.jpg" value="6">be_wallpaper</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/beats_tn.jpg" value="7">beats</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/colorful_tn.jpg" value="8">colorful</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/corporate_tn.jpg" value="9">corporate</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/flares_tn.jpg" value="10">flares</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/gradient_tn.jpg" value="11">gradient</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/graduate_tn.jpg" value="12">graduate</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/group_tn.jpg" value="13">group</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/hand_heart_tn.jpg" value="14">hand_heart</option>
                                                        <option data-img-src="http://cdn.jobs180.com/presets/coverpresets/thumb/hey_you_little_men_tn.jpg" value="15">hey_you_little_men</option>
                                                    </select>
                                                    <ul class="thumbnails image_picker_selector">
                                                        <li><div class="thumbnail selected"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/4seasons_wallpaper_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/190593_4590_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/art_flow_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/art_wallpaper_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/balloons_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/be_wallpaper_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/beats_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/colorful_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/corporate_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/flares_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/gradient_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/graduate_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/group_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/hand_heart_tn.jpg"></div></li>
                                                        <li><div class="thumbnail"><img class="image_picker_image" src="http://cdn.jobs180.com/presets/coverpresets/thumb/hey_you_little_men_tn.jpg"></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script>

    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/bootstrap-colorselector.js"></script>
    <script src="../../js/prettify.js"></script>

    <script>
    
      $(function() {

        window.prettyPrint && prettyPrint();

        $('#colorselector_1').colorselector();
        $('#colorselector_2').colorselector({
          callback : function(value, color, title) {
            $("#colorValue").val(value);
            $("#colorColor").val(color);
            $("#colorTitle").val(title);
          }
        });

        $("#setColor").click(function(e) {
          $("#colorselector_2").colorselector("setColor", "#008B8B");
        })

        $("#setValue").click(function(e) {
          $("#colorselector_2").colorselector("setValue", 18);
        })

      });
    </script>
</body>
</html>
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

    <!-- Bootstrap CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../../css/color-selector.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../../css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js" ></script>

    <!-- BootstrapValidator -->
    <script src="../../js/bootstrapValidator.min.js" type="text/javascript"></script>

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
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen"/>

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

    <!-- fileupload -->
    <link href="../../css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="../../js/fileinput.min.js" type="text/javascript"></script>
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
                            <!-- Start Contact Info -->
                            <ul class="contact-details">
                                <li class="profile-name"><i class="fa fa-hashtag"></i><b> 008-2012-0805</b></li>
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
                    <!-- Sign-out -->
                        <div class="signout-side">
                               <a class="show-signout"><i class="fa fa-sign-out"></i></a>
                        </div>
                     <!-- End Sign-out -->
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
                                    <li><a href="../myinfo/specialization-and-languages.php">Specialization & Languages</a></li>
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
                                <a href="../search-job/jobs.php">Jobs</a>
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
                            <li><a href="../myinfo/specialization-and-languages.php">Specialization & Languages</a></li>
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
                        <a href="../search-job/jobs.php">Jobs</a>
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
                <div class="row sidebar-page">
                    <!-- Page Content -->
                    <div class="col-md-12 page-content">
                        <div class="row">
                            <div class="col-md-12">
                                <p><b>Resumé Link URL:</b><a href="../../../resumelinkprofile.php" target="_blank">
                                http://markjoseph1496.ojpms.com <i class="fa fa-external-link-square"></i></a>
                                </p><br>
                            </div>
                        </div>
                        <div class "row">
                            <div class="col-md-12">
                                <label>Use Background</label><br>
                                <input type="radio" name="" id="">Solid Color &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="" id="">Uploaded Image &nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class "row">
                            <div class="col-md-6">
                                <div id="color" style="display: block;">
                                    <label class="accent-color">Solid Color</label><br>
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
                            </div>
                            <div class="col-md-6">
                                <div id="uploaded" style="display:block;">
                                    <label class="accent-color">Uploaded Image</label>
                                    <div class="classic-testimonials">
                                        <input id="ProfilePicture" name="" multiple type="file" class="file file-loading" data-allowed-file-extensions='["png", "jpg", "bmp", "gif"]'>
                                        <br>
                                        <button id="" class="btn-system btn-mini border-btn" name="btnDelete">Delete Image</button>
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
                    <!-- End Page Content -->
                </div>
                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                <div class="field">
                    <div class="text-center">
                        <button type="submit" class="btn-system btn-large" name="btnSave">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script><script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/bootstrap-colorselector.js"></script>
    <script src="../../js/prettify.js"></script>
</body>
    

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
</html>
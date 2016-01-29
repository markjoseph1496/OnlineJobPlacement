<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION['StudentID'])) {
    $StudentID = $_SESSION['StudentID'];
} else {
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

    <!-- CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- Checkbox -->
    <link rel="stylesheet" type="text/css" href="../../css/checkbox.css" media="screen" />

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

    <link rel="stylesheet" type="text/css" href="../../css/color-selector/prettify.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/color-selector/bootstrap-colorselector.css"/>

    <!-- fileupload -->
    <link href="../../css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="../../js/fileinput.min.js" type="text/javascript"></script>

    <!-- Notification -->
    <link rel="stylesheet" href="../../css/notif.css"/>

    <script type="text/javascript" >
        $(document).ready(function()
        {
        $("#notificationLink").click(function()
        {
        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;
        });

        //Document Click
        $(document).click(function()
        {
        $("#notificationContainer").hide();
        });
        //Popup Click
        $("#notificationContainer").click(function()
        {
        return false
        });

        });
    </script>
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
                            <li><i class="fa fa-hashtag"></i><b> 008-2012-0805</b></li>
                        </ul>
                        <!-- End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-5">
                        <!-- Start Social Links -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown icon-border" id="notificationLink">
                                <span id="notification_count">3</span>
                                <a href="#" class="bell itl-tooltip" data-placement="bottom" data-toggle="dropdown"><i class="fa fa-bell"></i></a>
                                <ul id="notificationContainer" class="dropdown-menu dropdown-menu-inverse">
                                    <li class="dropdown-header"><label>Notification</label></li>
                                    <li class="disabled"><a href="#" tabindex="-1">No new notification.</a></li>
                                    <li><a href="#" tabindex="-1">The administrator accepted your request.</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../notification/notification.php" tabindex="-1">See All</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-user"></b> Welcome, <b><?php echo $StudentName; ?> </b><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile <b class="fa fa-user" style="float:right;"></b></a></li>
                                    <li><a href="../settings/privacy-settings.php">Settings <b class="fa fa-cog" style="float:right;"></b></a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" data-target='#Logout' data-toggle='modal'>Sign Out <b class="fa fa-sign-out" style="float:right;"></b></a></li>
                                </ul>
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
                    <a class="navbar-brand" href="">
                        <img src="../../images/ojpms.png">
                    </a>
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
                                <li><a href="../myinfo/specialization-and-languages.php">Specialization & Languages</a>
                                </li>
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
                    <div class
                    "row">
                    <div class="col-md-12">
                        <label>Use Background</label><br>

                        <div class="radio radio-inline">
                            <input type="radio" id="Color" value="Color" name="selection" checked="checked">
                            <label for="inlineRadio1"> Solid Color </label>
                        </div>

                        <div class="radio radio-inline">
                            <input type="radio" id="Image" value="Image" name="selection">
                            <label for="inlineRadio2"> Uploaded Image </label>
                        </div>

                       

                        
                    </div>
                </div>
                <div class
                "row">
                <div class="col-md-6" id="ToColor">
                    <div id="Colors">
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
                            $('#colorselector_1').colorselector();
                        </script>
                    </div>
                </div>
                <div class="col-md-6" id="ToImage">
                    <div id="UploadImages">
                        <label class="accent-color">Uploaded Image</label>
                        <div class="classic-testimonials">
                            <input id="ProfilePicture" name="" multiple type="file" class="file file-loading"
                                   data-allowed-file-extensions='["png", "jpg", "bmp", "gif"]'>
                            <br>
                            <button id="" class="btn-system btn-mini border-btn" name="btnDelete">Delete Image</button>
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
<script type="text/javascript" src="../../js/script.js"></script>


</body>
<script src="../../css/color-selector/jquery-1.10.2.min.js"></script>
<script src="../../css/color-selector/bootstrap-colorselector.js"></script>
<script src="../../css/color-selector/prettify.js"></script>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="Color"){
                $("#UploadImages").hide();
                $("#Colors").show();
            }
            if($(this).attr("value")=="Image"){
                $("#Colors").hide();
                $("#UploadImages").show();
            }
        });
        if ($('#Color').is(':checked')) {
            $('#UploadImages').hide();
        } else {
            $('#Colors').show();
        }
    });


    $(function () {

        window.prettyPrint && prettyPrint();

        $('#colorselector_1').colorselector();
        $('#colorselector_2').colorselector({
            callback: function (value, color, title) {
                $("#colorValue").val(value);
                $("#colorColor").val(color);
                $("#colorTitle").val(title);
            }
        });

        $("#setColor").click(function (e) {
            $("#colorselector_2").colorselector("setColor", "#008B8B");
        })

        $("#setValue").click(function (e) {
            $("#colorselector_2").colorselector("setValue", 18);
        })

    });
</script>
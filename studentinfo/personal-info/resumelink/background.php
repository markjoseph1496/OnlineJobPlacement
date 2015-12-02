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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online JPMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top" class="index bg">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="#page-top">Online Job Placement Management</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="../../../login-student.php?id=1">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div id="yellow-text-fields">
        <div class="white-holder">
            <div class="row field">
                <div class="col-md-10">
                    <ul class="nav nav-tabs">
                        <li role="presentation" id="my_info" class="item"><a href="../myinfo/personal_info.php">My Info</a></li>
                        <li role="presentation" id="resume_link" class="item active"><a href="resumelink.php"><B>Resumé Link</B></a></li>
                        <li role="presentation" id="applications" class="item"><a href="../applications/applications.php">Applications</a></li>
                        <li role="presentation" id="search-job" class="item"><a href="../search-job/search-job.php">Jobs</a></li>
                        <li role="presentation" id="settings" class="item"><a href="../settings/settings.php">Settings</a></li>
                    </ul>
                </div>
                <div class="col-md-2 text-center">
                    <label>Your Student ID<h4>008-2012-0805</h4></label>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow"><a href="resumelink.php">Resume Link</a></li>
                <li class="yellow active"><a href="background.php">Background</a></li>
                <li class="yellow"><a href="privacy_settings.php">Privacy Settings</a></li>
                <li class="yellow"><a href="print.php">Print/Share</a></li>
            </ul>
            <div class="space-1"></div>

            <div class"row">
                <div class="col-md-10">
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Resumé Link URL</label>
                        </div>
                        <div class="field">
                            <div class="col-md-4">
                                <a href="../../../ResumelinkProfile.php" target="_blank">
                                    http://markjoseph1496.ojpms.com <i class="fa fa-external-link-square"></i>
                                </a>  
                            </div>           
                        </div>
                        <div class="row">
                            <div class="space">
                                &nbsp;
                            </div>
                        </div>
                    </div>
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
            <div class="field">
                <div class="profile_divider"></div>
                <div class"row field">
                    <div class="col-md-12">
                        <form method="post">
                            <button class="btn btn-lg btn-hg btn-primary" style="float:right;">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

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
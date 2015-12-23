<?php 
session_start();
include('../../connection.php');

$StudentID = $_SESSION['StudentID'];

$query = "SELECT * FROM studentinfotbl WHERE StudentID = '$StudentID'";
$result = mysql_query($query);

while($query = mysql_fetch_array($result)){
    $FirstName = $query['FirstName'];
    $MiddleName = $query['MiddleName'];
    $LastName = $query['LastName'];
    $Gender = $query['Gender'];
    $Birthdate = $query['Birthdate'];
    $Nationality = $query['Nationality'];
    $CivilStatus = $query['CivilStatus'];
    $FBLink = $query['FBLink'];
    $TwitterLink = $query['TwitterLink'];
    $FBLink = substr($FBLink, 24);
}
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
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    <!-- Bootstrap CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet"/>

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

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../../css/ojpms-style.css" media="screen">

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
                        <!-- Start Social Links -->
                            <ul class="social-list">
                               <li class="profile-name">
                                    <i class="fa fa-user"></i> Hello, <b><?php echo $FirstName ." ".$LastName; ?></b>                               
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
                                <a class="active" href="personal-info.php">My Info</a>
                                <ul class="dropdown">
                                    <li><a class="active" href="personal-info.php">Personal Info</a></li>
                                    <li><a href="contacts-info.php">Contacts Info</a></li>
                                    <li><a href="work.php">Work</a></li>
                                    <li><a href="education.php">Education</a></li>
                                    <li><a href="certifications.php">Certifications</a></li>
                                    <li><a href="achievements.php">Achievements</a></li>
                                    <li><a href="specialization-and-languages.php">Specialization & Languages</a></li>
                                    <li><a href="references.php">References</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
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
                        <a class="active" href="personal-info.php">My Info</a>
                        <ul class="dropdown">
                            <li><a class="active" href="personal-info.php">Personal Info</a></li>
                            <li><a href="contacts-info.php">Contacts Info</a></li>
                            <li><a href="work.php">Work</a></li>
                            <li><a href="education.php">Education</a></li>
                            <li><a href="certifications.php">Certifications</a></li>
                            <li><a href="achievements.php">Achievements</a></li>
                            <li><a href="specialization-and-languages.php">Specialization & Languages</a></li>
                            <li><a href="references.php">References</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
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
                        <a href="../login-student.php?id=1"><i class="fa fa-sign-out"></i> Sign Out</a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </div>
        </header>

        <div class="page-banner no-subtitle">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Personal Information</h2>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="#">Home</a></li>
                            <li>Personal Information</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Content -->
    <form id="Save" name="Save" autocomplete="off" action="addfunction.php">
        <div id="content">
            <div class="container">
                <?php
                if(isset($_GET['id'])){
                    $id=$_GET['id'];

                    if($id==1){
                        echo'
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-info-sign"></span> 
                                Personal Information successfully updated.
                            </div>
                            ';
                    }
                }
                ?>
                <div class="row sidebar-page">
                    <!-- Page Content -->
                    <div class="col-md-9 page-content">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- Single Testimonial -->
                                <div class="classic-testimonials">
                                    <div class="testimonial-content">
                                        <div class="form-group">
                                            <label>First Name <span>(*)</span></label>
                                            <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?php echo $FirstName; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" id="MiddleName" name="MiddleName" value="<?php echo $MiddleName; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name <span>(*)</span></label>
                                            <input type="text" class="form-control" id="LastName" name="LastName" value="<?php echo $LastName; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender <span>(*)</span></label>
                                            <select id="Gender" name="Gender" class="form-control" style="width:100%; height:34px;">
                                                <option value="" <?php if($Gender=="") echo 'selected="selected"'; ?>>- Please Select Gender -</option>
                                                <option value="Female" <?php if($Gender=="Female") echo 'selected="selected"'; ?>>Female</option>
                                                <option value="Male" <?php if($Gender=="Male") echo 'selected="selected"'; ?>>Male</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Birthdate <span>(*)</span></label><br>
                                            <input type="date" class="form-control" name="Birthdate" id="Birthdate" value="<?php echo $Birthdate ;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality <span>(*)</span></label>
                                            <select id="Nationality" name="Nationality" class="form-control" style="width:100%; height:34px;">
                                                <option value="" <?php if($Nationality=="") echo 'selected="selected"'; ?>>- Please select one -</option>
                                                <option value="American" <?php if($Nationality=="American") echo 'selected="selected"'; ?>>American</option>
                                                <option value="Filipino" <?php if($Nationality=="Filipino") echo 'selected="selected"'; ?>>Filipino</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Civil Status <span>(*)</span></label>
                                            <select id="CivilStatus" name="CivilStatus" class="form-control" style="width:100%; height:34px;">
                                                <option value ="" <?php if($CivilStatus=="") echo 'selected="selected"'; ?>>- Please select one -</option>
                                                <option value="Single" <?php if($CivilStatus=="Single") echo 'selected="selected"'; ?>>Single</option>
                                                <option value="Married" <?php if($CivilStatus=="Married") echo 'selected="selected"'; ?>>Married</option>
                                            </select>
                                        </div>
                                        <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                                        <label class="control-label">Facebook <span>(*)</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon">http://www.facebook.com/</span>
                                            <div class="form-group">
                                                <input name="FBLink" id="FBLink" type="text" maxlength="20" class="form-control" value="<?php echo $FBLink; ?>">
                                            </div>
                                        </div> 
                                        <label class="control-label">Twitter</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <div class="form-group">
                                                <input name="TwitterLink" id="TwitterLink" type="text" pattern="^[_A-z0-9.]{1,}$" maxlength="20" class="form-control" value="<?php echo $TwitterLink; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                            <div class="col-md-5">
                                <!-- Single Testimonial -->
                                <div class="classic-testimonials">
                                    <label class="control-label">Select Image</label>
                                    <input id="ProfilePicture" name="ProfilePicture" multiple type="file" class="file file-loading" data-allowed-file-extensions='["png", "jpg", "bmp", "gif"]'>
                                    <br>
                                    <button id="" class="btn btn-hg btn-primary" name="btnDelete">Delete Image</button>
                                </div>
                                <!-- End Single Testimonial -->
                            </div>
                        </div>
                    </div>
                    <!-- End Page Content -->

                    <!--Sidebar-->
                    <div class="col-md-3 sidebar right-sidebar">
                        <!-- Search Widget -->
                        <div class="call-action call-action-boxed call-action-style2 clearfix">
                            (*) Note: Required fields.
                        </div>
                    </div>
                    <!--End sidebar-->
                </div>
                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                <div class="field">
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-hg btn-primary" name ="btnSaveInfo">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script>
</body>

<?php 
/*
if(isset($_POST['btnSave'])){

    $fileToUpload = basename($_FILES["fileToUpload"]["name"]);
    $target_dir = "ProfileImages/";   //eto yung folder or directory kung saan mo ma-sasave yung picture mo
    $target_file = $target_dir . $StudentID.".jpg";
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    //eto chcheck nya yung format ng file kung GIF ba sya or JPEG or PNG in short Check ng FILE TYPE
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    } 
    else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){

        $query = "UPDATE studentinfotbl SET ProfileImage = '$target_file' WHERE StudentID = '$StudentID'";
        $Result = mysql_query($query);
        echo "
         <script type='text/javascript'>
         </script>
         ";
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
*/
?>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $("#Save").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                FirstName: {
                    validators: {
                        notEmpty: {
                            message: "First Name is required."
                        },
                        regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "First Name can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                MiddleName: {
                    validators: {
                            regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "Middle Name can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                LastName: {
                    validators: {
                        notEmpty: {
                            message: "Last Name is required."
                        },
                        regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "The full name can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                Gender: {
                    validators: {
                        notEmpty: {
                            message: "Gender is required."
                        }
                    }
                },
                Birthdate: {
                    validators: {
                        notEmpty: {
                            message: "Birthdate is required."
                        }
                    }
                },
                Nationality: {
                    validators: {
                        notEmpty: {
                            message: "Nationality is required."
                        }
                    }
                },
                CivilStatus: {
                    validators: {
                        notEmpty: {
                            message: "CivilStatus is required."
                        }
                    }
                },
                FBLink: {
                    validators: {
                        notEmpty: {
                            message: "FBLink is required."
                        }
                    }
                },
                TwitterLink: {
                    validators: {
                        regexp: {
                                regexp: /^[a-z_0-9\s]+$/i,
                                message: "Invalid Twitter Link"
                        }
                    }
                }
            }
        });
    });
</script>
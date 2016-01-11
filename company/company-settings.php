<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];

$qry = "SELECT * FROM companyinfotbl WHERE CompanyID ='$CompanyID'";
$Result = mysql_query($qry);
while ($qry = mysql_fetch_Array($Result)) {

    $CName = $qry['CompanyName'];
    $Description = $qry['Description'];
    $Industry = $qry['Industry'];
    $classification = $qry['Classification'];
    $address = $qry['Address'];
    $City = $qry['City'];
    $Postal = $qry['PostalCode'];
    $Phone = $qry['PhoneNum'];
    $Mobile = $qry['MobileNum'];
    $Fax = $qry['Fax'];
}
?>
<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS</title>

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>
    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <!-- BootstrapValidator -->
    <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen"/>


    <!-- Margo JS  -->
    <script type="text/javascript" src="../js/jquery.migrate.js"></script>
    <script type="text/javascript" src="../js/modernizrr.js"></script>
    <script type="text/javascript" src="../js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="../js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../js/jquery.appear.js"></script>
    <script type="text/javascript" src="../js/count-to.js"></script>
    <script type="text/javascript" src="../js/jquery.textillate.js"></script>
    <script type="text/javascript" src="../js/jquery.lettering.js"></script>
    <script type="text/javascript" src="../js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="../js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../js/jquery.slicknav.js"></script>

    <!-- fileupload -->
    <link href="../css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="../js/fileinput.min.js" type="text/javascript"></script>

</head>

<body>

<!-- Full Body Container -->
<div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

        <!-- Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Start Contact Info
                        <ul class="contact-details">
                          <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                          </li>
                          <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                          </li>
                          <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                          </li>
                        </ul>
                      End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6">
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
                         End Social Links -->
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
                    <a class="navbar-brand" href="index.html">
                        OJPMS
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Sign-out -->
                    <div class="signout-side">
                        <a class="show-signout" href="../login-company.php?id=1"><i class="fa fa-sign-out"></i></a>
                    </div>
                    <!-- End Sign-out -->
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="company.php">Home</a>
                        </li>
                        <li>
                            <a>Position</a>
                            <ul class="dropdown">
                                <li><a href="company-positionlist.php">Position List</a></li>
                                <li><a href="company-createposition.php">Create Position</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="company-calendar.php">Calendar</a>
                        </li>
                        <li>
                            <a class="active" href="company-settings.php">Settings</a>
                        </li>
                        <li>
                            <a href="company-applicants.php">Applicant List</a>
                            <ul class="dropdown">
                                <li><a href="company-pendingapplicants.php">Pending</a></li>
                                <li><a href="company-acceptedapplicants.php">Accepted</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
                <li>
                    <a class="active" href="company.php">Home</a>
                </li>
                <li>
                    <a>Position</a>
                    <ul class="dropdown">
                        <li><a href="company-positionlist.php">Position List</a></li>
                        <li><a href="company-createposition.php">Create Position</a></li>
                    </ul>
                </li>
                <li>
                    <a href="company-calendar.php">Calendar</a>
                </li>
                <li>
                    <a class="active" href="company-settings.php">Settings</a>
                </li>
                <li>
                    <a href="company-applicants.php">Applicant List</a>
                    <ul class="dropdown">
                        <li><a href="company-pendingapplicants.php">Pending</a></li>
                        <li><a href="company-acceptedapplicants.php">Accepted</a></li>
                    </ul>
                </li>
            </ul>
    </header>
    <!-- Mobile Menu End -->

</div>
<!-- End Header Logo & Naviagtion -->

</header>
<!-- End Header Section -->

<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; center #f9f9f9;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Company Details</h2>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumbs">
                    <li><a href="company-settingsaccount.php">My Account</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Content -->
<br><br><br>
<div class="container">
    <div class="col-md-6">
        <form method="POST" name="CompanySetting" id="CompanySetting" autocomplete="off">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if ($id == "SettingEdit") {
                    echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully updated.
                        </div>';
                }
            }
            ?>
            <div class="row field">
                <div class="col-md-3 fieldcol">
                    <label>Company Name<span>(*)</span></label><br>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <input type="text" name="cname" id="cname" class="form-control" style="width: 300px;"
                               value="<?php echo $CName; ?>">
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-3 fieldcol">
                    <label = "usr" class = "control-label"> Companysite URL: </label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        http://www.sample.com/RojasCorpInc
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-3 fieldcol">
                    <label = "usr" class = "control-label"> Company Description: </label>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group">
                        <textarea type="text" name="description" id="usr" class="form-control" style="width: 300px;"><?php echo $Description; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-3 fieldcol">
                    <label>Industry<span>(*)</span></label><br>
                </div>
                <div class="col-md-4 fieldcol">
                    <div class="form-group" style="width: 300px;"
                    ">
                    <select id="industry" name="industry" class="industry" style="width:100%; height:30px;" ?>">
                        <option value="ind" <?php if ($Industry == "ind") echo 'selected="selected"'; ?> ></option>
                        <option
                            value="AccountingAudit" <?php if ($Industry == "AccountingAudit") echo 'selected="selected"'; ?> >
                            Accounting / Audit
                        </option>
                        <option
                            value="AdvertisingMarketing Promotion" <?php if ($Industry == "AdvertisingMarketing Promotion") echo 'selected="selected"'; ?> >
                            Advertising / Marketing Promotion
                        </option>
                        <option
                            value="AerospaceAviationAirline" <?php if ($Industry == "AerospaceAviationAirline") echo 'selected="selected"'; ?> >
                            Aerospace/Aviation/Airline
                        </option>
                        <option
                            value="AgriculturalPlantationPoultryFisheries" <?php if ($Industry == "AgriculturalPlantationPoultryFisheries") echo 'selected="selected"'; ?> >
                            Agricultural/Plantation/Poultry/Fisheries
                        </option>
                        <option
                            value="ApparelFashion" <?php if ($Industry == "ApparelFashion") echo 'selected="selected"'; ?> >
                            Apparel/Fashion
                        </option>
                        <option value="ArtsDesign" <?php if ($Industry == "ArtsDesign") echo 'selected="selected"'; ?> >
                            Arts/Design
                        </option>
                        <option
                            value="AutomobileAutomotive" <?php if ($Industry == "AutomobileAutomotive") echo 'selected="selected"'; ?> >
                            Automobile/Automotive Ancillary/Vehicle
                        </option>
                    </select>
                </div>
            </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label>Classification<span>(*)</span></label><br>
        </div>
        <div class="col-md-4 fieldcol">
            <div class="form-group">
                <select id="classification" name="classification" class="classification"
                        style="width: 300px; height: 30px;" ?>">
                    <option value=""></option>
                    <option value="csme" <?php if ($classification == "csme") echo 'selected="selected"'; ?> >
                        Corporate/SME
                    </option>
                    <option value="iag" <?php if ($classification == "iag") echo 'selected="selected"'; ?> >
                        Institutions/ (Associations,Government)
                    </option>
                    <option value="obpo" <?php if ($classification == "obpo") echo 'selected="selected"'; ?> >
                        Outsourcing/BPO
                    </option>
                    <option value="appf" <?php if ($classification == "appf") echo 'selected="selected"'; ?> >
                        Recruitment Firm/Consultancy
                    </option>
                </select>
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label>Address<span>(*)</span></label><br>
        </div>
        <div class="col-md-4 fieldcol">
            <div class="form-group">
                <input type="text" name="address" id="address" class="form-control" style="width: 300px;"
                       value="<?php echo $address; ?>">
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label = "usr" class = "control-label"> City: </label>
        </div>
        <div class="col-md-4 fieldcol">
            <div class="form-group">
                <select id="City" name="City" class="form-control" style="width: 300px;">
                    <option value="">- Please select one -</option>
                    <option value="Caloocan City" <?php if ($City == "Caloocan City") echo 'selected="selected"'; ?>>
                        Caloocan City
                    </option>
                    <option value="Las Pińas City" <?php if ($City == "Las Pińas City") echo 'selected="selected"'; ?>>
                        Las Pińas City
                    </option>
                    <option value="Makati City" <?php if ($City == "Makati City") echo 'selected="selected"'; ?>>Makati
                        City
                    </option>
                    <option value="Malabon City" <?php if ($City == "Malabon City") echo 'selected="selected"'; ?>>
                        Malabon City
                    </option>
                    <option
                        value="Mandaluyong City" <?php if ($City == "Mandaluyong City") echo 'selected="selected"'; ?>>
                        Mandaluyong City
                    </option>
                    <option value="Manila" <?php if ($City == "Manila") echo 'selected="selected"'; ?>>Manila</option>
                    <option value="Marikina City" <?php if ($City == "Marikina City") echo 'selected="selected"'; ?>>
                        Marikina City
                    </option>
                    <option
                        value="Muntinlupa City" <?php if ($City == "Muntinlupa City") echo 'selected="selected"'; ?>>
                        Muntinlupa City
                    </option>
                    <option value="Navotas City" <?php if ($City == "Navotas City") echo 'selected="selected"'; ?>>
                        Navotas City
                    </option>
                    <option value="Parańaque City" <?php if ($City == "Parańaque City") echo 'selected="selected"'; ?>>
                        Parańaque City
                    </option>
                    <option value="Pasay City" <?php if ($City == "Pasay City") echo 'selected="selected"'; ?>>Pasay
                        City
                    </option>
                    <option value="Pasig City" <?php if ($City == "Pasig City") echo 'selected="selected"'; ?>>Pasig
                        City
                    </option>
                    <option value="Pateros City" <?php if ($City == "Pateros City") echo 'selected="selected"'; ?>>
                        Pateros City
                    </option>
                    <option value="Quezon City" <?php if ($City == "Quezon City") echo 'selected="selected"'; ?>>Quezon
                        City
                    </option>
                    <option value="San Juan City" <?php if ($City == "San Juan City") echo 'selected="selected"'; ?>>San
                        Juan City
                    </option>
                    <option value="Taguig City" <?php if ($City == "Taguig City") echo 'selected="selected"'; ?>>Taguig
                        City
                    </option>
                    <option
                        value="Valenzuela City" <?php if ($City == "Valenzuela City") echo 'selected="selected"'; ?>>
                        Valenzuela City
                    </option>
                </select>
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label = "usr" class = "control-label"> Postal Code: </label>
        </div>
        <div class="col-md-4 fieldcol">
            <div class="form-group">
                <input type="text" name="postal" id="postal" class="form-control" style="width: 300px; height: 34px;"
                       value="<?php echo $Postal; ?>">
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label>Telephone Number<span>(*)</span></label><br>
        </div>
        <div class="col-md-8 fieldcol">
            <div class="form-group">
                <input type="text" name="telnum" id="usr" class="form-control" style="width: 300px;"
                       value="<?php echo $Phone; ?>">
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label>Mobile Number<span>(*)</span></label><br>
        </div>
        <div class="col-md-4 fieldcol">
            <div class="form-group">
                <input type="text" name="mobilenum" id="usr" class="form-control" style="width: 300px;"
                       value="<?php echo $Mobile; ?>">
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label = "usr" class = "control-label"> Fax: </label>
        </div>
        <div class="col-md-4 fieldcol">
            <div class="form-group">
                <input type="text" name="fax" id="usr" class="form-control" style="width: 300px;"
                       value="<?php echo $Fax; ?>">
            </div>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary " name="btnSave" id="save" href="#"><b> Save </b></button>
    &nbsp;
    <button type="submit" class="btn btn-primary " name="btnSave" id="save" href="#"><b> Cancel </b></button>
    </form>
</div>

<div class="col-md-5">
    <!-- Single Testimonial -->
    <div class="classic-testimonials">
        <label class="control-label">Select Image</label>
        <input id="ProfilePicture" name="ProfilePicture" multiple type="file" class="file file-loading" data-allowed-file-extensions='["png", "jpg", "bmp", "gif"]'>
        <br>
        <button id="" class="btn-system btn-mini border-btn" name="btnDelete">Delete Image</button>
    </div>
    <!-- End Single Testimonial -->
</div>


<!-- End Page Content -->
<script type="text/javascript" src="../js/script.js"></script>

</body>
<?php
if (isset($_POST['btnSave'])) {

    $cname = $_POST['cname'];
    $description = $_POST['description'];
    $industry = $_POST['industry'];
    $classification = $_POST['classification'];
    $address = $_POST['address'];
    $city = $_POST['City'];
    $postal = $_POST['postal'];
    $telnum = $_POST['telnum'];
    $mobilenum = $_POST['mobilenum'];
    $fax = $_POST['fax'];


    $query = "UPDATE companyinfotbl SET CompanyName = '$cname', Description = '$description', Industry = '$industry', Classification = '$classification', Address = '$address', City = '$city', PostalCode = '$postal', PhoneNum = '$telnum', MobileNum = '$mobilenum', Fax = '$fax' WHERE CompanyID = '$CompanyID'";
    $Result = mysql_query($query);
    echo "
            <script type='text/javascript'>
            location.href = 'company-settings.php?id=SettingEdit';
            </script>
             ";
}
/*
if(isset($_POST['btnIpasa'])){

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
<script type="text/javascript">
    $(document).ready(function () {
        var validator = $("#CompanySetting").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                cname: {
                    validators: {
                        notEmpty: {
                            message: "Compamy Name is required."
                        },
                        stringLength: {
                            min: 5,
                            max: 15,
                            message: "Company Name is invalid."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "Company Name can consist of alphabetical characters and spaces only"
                        },
                        remote: {
                            message: 'The Company Name already exists',
                            url: '../addcompany.php',
                            data: {
                                type: 'cname'
                            },
                            type: 'POST'
                        }
                    }
                }
            }
        });
    });
</script>

</html>
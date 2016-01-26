<?php
include('../connection.php');
session_start();


if(isset($_SESSION['CompanyID'])){
    $CompanyID = $_SESSION['CompanyID'];
}
else{
    header("location: ../login-company.php");
}

$companyinfo_tbl =
    GSecureSQL::query(
        "SELECT
            CompanyName,
            Description,
            Industry,
            Classification,
            Address,
            City,
            PostalCode,
            PhoneNum,
            MobileNum,
            Fax,
            FirstName,
            LastName
        FROM
            companyinfotbl
        WHERE
            CompanyID = ?",
        TRUE,
        "s",
        $CompanyID
    );

$CompanyName = $companyinfo_tbl[0][0];
$Description = $companyinfo_tbl[0][1];
$Industry = $companyinfo_tbl[0][2];
$Classification = $companyinfo_tbl[0][3];
$Address = $companyinfo_tbl[0][4];
$City = $companyinfo_tbl[0][5];
$PostalCode = $companyinfo_tbl[0][6];
$PhoneNum = $companyinfo_tbl[0][7];
$MobileNumber = $companyinfo_tbl[0][8];
$Fax = $companyinfo_tbl[0][9];
$cFirstName = $companyinfo_tbl[0][10];
$cLastName= $companyinfo_tbl[0][11];

?>
<!doctype html>
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

    <!-- Fonts -->
    <link href="../fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

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
    <link href="../css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
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
                        <!-- Start Contact Info -->
                        <ul class="contact-details">
                            <li class="profile-name"><b><?php echo $CompanyName; ?></b></li>
                        </ul>
                        <!-- End Contact Info -->
                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6">
                        <!-- Start Social Links -->
                        <ul class="social-list">
                            <li class="profile-name">
                                <a class="bell itl-tooltip" data-placement="bottom" title="" href="#"
                                   data-original-title="Notification"><i class="fa fa-bell"></i></a>
                            </li>
                            <li class="profile-name">
                                &nbsp;
                            </li>
                            <li class="profile-name">
                                <i class="fa fa-user"></i> Hello, <b><?php echo $cFirstName . " " . $cLastName; ?></b>
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
                    <a class="navbar-brand" href="index.html">
                        <img src="../images/ojpms.png">
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Sign-out -->
                    <div class="signout-side">
                        <a class="show-signout" data-toggle='modal' data-target='#Logout'><i class="fa fa-sign-out"></i></a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Logout"
                         role="dialog">
                        <div class="modal-dialog" style="padding:100px">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Log out?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-15 fieldcol">
                                        <label = "usr" class = "control-label">Do you want to log out?</label>
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="../logout.php"
                                           class="btn btn-primary">Log out</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Content -->
<br><br><br>
<div class="container">
    <div class="col-md-12 fieldcol">
        <a href="company-settingsaccount.php" class="btnforadding" style="float:right;">
            <span class="fa fa-user"> My Account </span>
        </a>
    </div>
    <div class="col-md-6">
        <form method="POST" name="CompanySetting" id="CompanySetting" autocomplete="off" action="company-setting.php">
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
                <div class="col-md-7 fieldcol">
                    <div class="form-group">
                        <input type="text" name="cname" id="cname" class="form-control" style="width: 300px;"
                               value="<?php echo $CompanyName; ?>">
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-3 fieldcol">
                    <label = "usr" class = "control-label"> Companysite URL: </label>
                </div>
                <div class="col-md-7 fieldcol">
                    <div class="form-group">
                        http://www.sample.com/RojasCorpInc
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-3 fieldcol">
                    <label = "usr" class = "control-label"> Company Description: </label>
                </div>
                <div class="col-md-7 fieldcol">
                    <div class="form-group">
                        <textarea type="text" name="description" id="usr" class="form-control"
                                  style="width: 300px;"><?php echo $Description; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row field">
                <div class="col-md-3 fieldcol">
                    <label>Industry<span>(*)</span></label><br>
                </div>
                <div class="col-md-7 fieldcol">
                    <div class="form-group" style="width: 300px;"
                    ">
                    <select id="industry" name="industry" class="industry" style="width:100%; height:30px;" ?>">
                        <option value="">- Select one -</option>
                        <?php
                        $industrytbl =
                            GSecureSQL::query(
                                "SELECT Industry FROM listofindustrytbl",
                                TRUE
                            );
                        foreach ($industrytbl as $value) {
                            $Industry = $value[0];
                            ?>
                            <option value="<?php echo $Industry; ?>"><?php echo $Industry; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label>Classification<span>(*)</span></label><br>
        </div>
        <div class="col-md-7 fieldcol">
            <div class="form-group">
                <select id="classification" name="classification" class="classification"
                        style="width: 300px; height: 30px;" ?>">
                    <option value=""></option>
                </select>
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label>Address<span>(*)</span></label><br>
        </div>
        <div class="col-md-7 fieldcol">
            <div class="form-group">
                <input type="text" name="address" id="address" class="form-control" style="width: 300px;"
                       value="<?php echo $Address; ?>">
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label = "usr" class = "control-label"> City: </label>
        </div>
        <div class="col-md-7 fieldcol">
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
        <div class="col-md-7 fieldcol">
            <div class="form-group">
                <input type="text" name="postal" id="postal" class="form-control" style="width: 300px; height: 34px;"
                       value="<?php echo $PostalCode; ?>">
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label>Mobile Number<span>(*)</span></label><br>
        </div>
        <div class="col-md-7 fieldcol">
            <div class="form-group">
                <input type="text" name="mobilenum" id="usr" class="form-control" style="width: 300px;"
                       value="<?php echo $PhoneNum; ?>">
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label>TelPhone Number<span>(*)</span></label><br>
        </div>
        <div class="col-md-7 fieldcol">
            <div class="form-group">
                <input type="text" name="telnum" id="usr" class="form-control" style="width: 300px;"
                       value="<?php echo $MobileNumber; ?>">
            </div>
        </div>
    </div>
    <div class="row field">
        <div class="col-md-3 fieldcol">
            <label = "usr" class = "control-label"> Fax: </label>
        </div>
        <div class="col-md-7 fieldcol">
            <div class="form-group">
                <input type="text" name="fax" id="usr" class="form-control" style="width: 300px;"
                       value="<?php echo $Fax; ?>">
            </div>
        </div>
    </div>
    &nbsp;
    <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
    <div class="field">
        <div class="text-center">
            <button type="submit" class="btn-system btn-large" name="btnSave" id="save">Save</button>
            <button type="submit" class="btn-system btn-large">Cancel</button>
        </div>
    </div>
    </form>
</div>

<div class="col-md-5">
    <!-- Single Testimonial -->
    <div class="classic-testimonials">
        <label class="control-label">Select Image</label>
        <input id="ProfilePicture" name="ProfilePicture" multiple type="file" class="file file-loading"
               data-allowed-file-extensions='["png", "jpg", "bmp", "gif"]'>
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
                            url: 'company-settings.php',
                            data: {
                                type: 'cname'
                            },
                            type: 'POST'
                        }
                    }
                },
                description: {
                    validators: {
                        notEmpty: {
                            message: "Company Description is required."
                        },
                        stringLength: {
                            min: 5,
                            max: 70,
                            message: "Company Description must be 5-70 characters long."
                        },
                        regexp: {
                            regexp: /^[a-z\s]+$/i,
                            message: "Company Description can consist of alphabetical characters and spaces only"
                        }
                    }
                },
                industry: {
                    validators: {
                        notEmpty: {
                            message: "Industry is required."
                        }
                    }
                },
                classification: {
                    validators: {
                        notEmpty: {
                            message: "Classification is required."
                        }
                    }
                },
                address: {
                    validators: {
                        notEmpty: {
                            message: "Address is required."
                        },
                        stringLength: {
                            min: 5,
                            max: 50,
                            message: "Address must be 5-50 characters long."
                        }
                    }
                },
                City: {
                    validators: {
                        notEmpty: {
                            message: "City is required."
                        }
                    }
                },
                postal: {
                    validators: {
                        notEmpty: {
                            message: "Postal Code is required."
                        },
                        stringLength: {
                            min: 1,
                            max: 4,
                            message: "Postal Code must be 4 Number long."
                        },
                        regexp: {
                            regexp: /^[0-9\s]+$/i,
                            message: "Postal Code can consist of Positive Numbers only"
                        }
                    }
                },
                mobilenum: {
                    validators: {
                        notEmpty: {
                            message: "Mobile Number is required."
                        },
                        stringLength: {
                            min: 3,
                            max: 13,
                            message: "Mobile Number must be 13 Number long."
                        },
                        regexp: {
                            regexp: /^[0-9\s]+$/i,
                            message: "Mobile Number can consist of Positive Numbers only"
                        }
                    }
                },
                telnum: {
                    validators: {
                        notEmpty: {
                            message: "TelPhone Number is required."
                        },
                        stringLength: {
                            min: 3,
                            max: 8,
                            message: "TelPhone Number must be 8 Number long."
                        },
                        regexp: {
                            regexp: /^[0-9\s]+$/i,
                            message: "TelPhone Number can consist of Positive Numbers only"
                        }
                    }
                },
                fax: {
                    validators: {
                        notEmpty: {
                            message: "Fax Number is required."
                        },
                        stringLength: {
                            min: 3,
                            max: 12,
                            message: "Fax Number must be 12 Number long."
                        },
                        regexp: {
                            regexp: /^[0-9\s]+$/i,
                            message: "Fax Number can consist of Positive Numbers only"
                        }
                    }
                },
            }
        });
    });
</script>
</html>
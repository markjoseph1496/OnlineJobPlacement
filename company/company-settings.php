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
$cIndustry = $companyinfo_tbl[0][2];
$Address = $companyinfo_tbl[0][3];
$City = $companyinfo_tbl[0][4];
$PostalCode = $companyinfo_tbl[0][5];
$PhoneNum = $companyinfo_tbl[0][6];
$MobileNumber = $companyinfo_tbl[0][7];
$Fax = $companyinfo_tbl[0][8];
$cFirstName = $companyinfo_tbl[0][9];
$cLastName= $companyinfo_tbl[0][10];

?>
<!doctype html>
<html lang="en">

<head>

    <!-- Basic -->
    <title>OJPMS | Company Details</title>

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

    <!-- Notification -->
    <link rel="stylesheet" href="../css/notif.css"/>

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
    <!-- Full Body Container -->
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
                            <ul class="contact-details">
                                <li class="profile-name"><b><?php echo $CompanyName; ?></b></li>
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-user"></b> Welcome, <b><?php echo $cFirstName . " " . $cLastName; ?> </b><b class="caret"></b></a>
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
                                        <div class="col-md-15">
                                            <label = "usr" class = "control-label">Do you want to log out?</label>
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="logout.php"
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
                                <a> Applicant List</a>
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
                        <a>Applicant List</a>
                        <ul class="dropdown">
                            <li><a href="company-pendingapplicants.php">Pending</a></li>
                            <li><a href="company-acceptedapplicants.php">Accepted</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <!-- End Header Logo & Naviagtion -->

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
        <form  name="CompanySetting" id="CompanySetting" autocomplete="off" action="add-company.php">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    &nbsp;
                </div>
                <div class="col-md-6">
                    <a href="company-settingsaccount.php" class="main-button" style="float:right;">
                        <span class="fa fa-user"></span> My Account 
                    </a>
                </div>
            </div>
            <div class="hr4" style="margin-top:10px;margin-bottom:35px;"></div>
            <div class="row">
                    <div class="col-md-7">
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
                        <div class="row">
                            <div class="col-md-4">
                                <label>Company Name <span>(*)</span>:</label><br>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="CompanyName" id="CompanyName" class="form-control" value="<?php echo $CompanyName; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label> Companysite URL: </label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    http://www.sample.com/RojasCorpInc
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label> Company Description: </label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <textarea type="text" name="Description" id="usr" class="form-control"><?php echo $Description; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Industry <span>(*)</span>:</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select id="industry" name="industry" class="industry form-control" ?>">
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
                                            <option value="<?php echo $Industry; ?>" <?php if($cIndustry == $Industry){ echo "selected='selected'"; } ?> ><?php echo $Industry; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Address <span>(*)</span>:</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Address" id="Address" class="form-control" value="<?php echo $Address; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>City:</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select id="City" name="City" class="form-control">
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

                        <div class="row">
                            <div class="col-md-4">
                                <label>Postal Code:</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Postal" id="Postal" class="form-control" value="<?php echo $PostalCode; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Mobile Number <span>(*)</span>:</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="MobileNum" id="usr" class="form-control" value="<?php echo $MobileNumber; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>TelPhone Number <span>(*)</span>:</label><br>
                            </div> 
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="TelNum" id="usr" class="form-control" value="<?php echo $PhoneNum; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Fax:</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" name="Fax" id="usr" class="form-control" value="<?php echo $Fax; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
                <form id="UploadPicture" name="UploadPicture" method="POST" action="upload.php" enctype="multipart/form-data">
                    <div class="col-md-5">
                        <div class="image-border">
                            <img src="<?php echo $ProfileImage; ?>" class="img-responsive" style="width:100%; height:100%;">
                        </div>
                        <br><br>
                        <label class="control-label">Select Image</label>
                        <input id="ProfilePicture" name="ProfilePicture" type="file"
                               class="file file-loading"
                               data-allowed-file-extensions='["png", "jpg", "bmp", "gif"]'>
                        <br>
                        <button id="" class="btn-system btn-mini border-btn" name="btnDelete">Delete Image</button>
                    </div>
                </form>
        </div>
            <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
            <div class="text-center">
                <button type="submit" class="btn-system btn-large" name="btnSaveSetting" id="save">Save</button>
            </div>
        </div>
    </div>
    <!-- End Page Content -->
    <script type="text/javascript" src="../js/script.js"></script>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        var validator = $("#CompanySetting").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
           s: {
                CompanyName: {
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
                                type: 'CompanyName'
                            },
                            type: 'POST'
                        }
                    }
                },
                Description: {
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
                Address: {
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
                Postal: {
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
                MobileNum: {
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
                TelNum: {
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
                Fax: {
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
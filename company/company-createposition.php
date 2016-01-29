<?php
include('../connection.php');
session_start();

if (isset($_SESSION['CompanyID'])) {
    $CompanyID = $_SESSION['CompanyID'];
} else {
    header("location: ../login-company.php");
}

$companyinfo_tbl =
    GSecureSQL::query(
        "SELECT CompanyName, FirstName, LastName FROM companyinfotbl WHERE CompanyID = ?",
        TRUE,
        "s",
        $CompanyID
    );
$CompanyName = $companyinfo_tbl[0][0];
$cFirstName = $companyinfo_tbl[0][1];
$cLastName = $companyinfo_tbl[0][2];

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

    <!-- Fonts -->
    <link href="../fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="../css/ojpms-style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="../css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
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

    <!-- Checkbox -->
    <link rel="stylesheet" type="text/css" href="../css/checkbox.css" media="screen" />
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
                    <a class="navbar-brand" href="">
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
                                <li><a class="active" href="company-createposition.php" class="active">Create
                                        Position</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="company-calendar.php">Calendar</a>
                        </li>
                        <li>
                            <a href="company-settings.php">Settings</a>
                        </li>
                        <li>
                            <a>Applicant List</a>
                            <ul class="dropdown">
                                <li><a href="company-pendingapplicants.php" class="active">Pending</a></li>
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
                        <li><a href="company-createposition.php" class="active">Create Position</a></li>
                    </ul>
                </li>
                <li>
                    <a href="company-calendar.php">Calendar</a>
                </li>
                <li>
                    <a href="company-settings.php">Settings</a>
                </li>
                <li>
                    <a>Applicant List</a>
                    <ul class="dropdown">
                        <li><a href="company-pendingapplicants.php" class="active">Pending</a></li>
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
                <h2>Create Position</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Content -->

<br><br><br>
<form action="add-company.php" name="AddPosition" id="AddPosition" autocomplete="off">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <h3>Post Position </h3>
                &nbsp;
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Posting Date: </label>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>From:</label><input type="date" name="DateFrom" id="date_from" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>To:</label><input type="date" name="DateTo" id="date_to" class="form-control">
                        </div>
                    </div>
                </div>
                <h3> Position Information </h3>
                &nbsp;
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Position Level: </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" id="PLevel" name="PLevel" class="form-control" style=" width: 100%; height:30px;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Job Description: </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="JobDesc" id="JobDesc" class="form-control" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Job Specialization: </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select id="Specialization" name="Specialization" class="specialization"
                                    style="width: 100%; height:30px;">
                                <option value="" selected="selected">- Select Specialization -</option>
                                <?php
                                $specialization_tbl =
                                    GSecureSQL::query(
                                        "SELECT * FROM listofspecializationtbl",
                                        TRUE
                                    );
                                foreach ($specialization_tbl as $value) {
                                    $Specialization = $value[1];
                                    ?>
                                    <option
                                        value="<?php echo $Specialization; ?>"><?php echo $Specialization; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Employment Type: </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select id="EType" name="EType" class="state" style="width: 100%; height:30px;">
                                <option value="">- Please select One -</option>
                                <option value="full">Full Time</option>
                                <option value="parttime">Part Time</option>
                                <option value="contract">Contract</option>
                                <option value="temporary">Temporary</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Available Position: </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="number" name="AvPosition" id="AvPosition" class="form-control"
                                   style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Related Courses: </label>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <ul>
                                <?php
                                $course_tbl =
                                    GSecureSQL::query(
                                        "SELECT CourseCode,CourseTitle FROM coursetbl",
                                        TRUE
                                    );
                                foreach ($course_tbl as $value) {
                                    $CourseCode = $value[0];
                                    $CourseTitle = $value[1];
                                    ?>
                                    <li>
                                        <div class="checkbox checkbox-success">
                                            <input class="styled" type="checkbox" name="RelatedCourses[]" id="RelatedCourses" value="<?php echo $CourseCode; ?>">
                                            <label for="checkbox3"><b><?php echo $CourseTitle; ?> (<?php echo $CourseCode; ?>) </b></label>
                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <h3> Salary Range </h3>
                &nbsp;
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Range of Salary: </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select id="Salary" name="Salary" class="salaryrange" style="width: 100%; height:30px;">
                                <option value="" selected="selected">- Select Salary Range -</option>
                                <?php
                                $salaryrange_tbl =
                                    GSecureSQL::query(
                                        "SELECT * FROM listofsalaryrangetbl",
                                        TRUE
                                    );
                                foreach ($salaryrange_tbl as $value) {
                                    $SalaryRange = $value[1];
                                    ?>
                                    <option value="<?php echo $SalaryRange; ?>"><?php echo $SalaryRange; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <h3> General Requirements </h3>
                &nbsp;
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Years of Experience: </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select id="Salary" name="YExperience" style="width: 100%; height:30px;">
                                <option value="" selected="selected">- Select Year of experience -</option>
                                <?php
                                for ($count = 1; $count <= 20; $count++) {
                                    ?>
                                    <option value="<?php echo $count; ?>"><?php echo $count; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Degree Level: </label>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="input-group" style="margin-bottom: 5px">
                                <ul>
                                    <li>
                                        <div class="checkbox checkbox-success">
                                        <input id="DegreeLevel" class="styled" type="checkbox" name="DegreeLevel[]" value="Bachelor Degree">
                                        <label for="checkbox3"><b>Bachelor Degree</b></label>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-success">
                                        <input id="DegreeLevel" class="styled" type="checkbox" name="DegreeLevel[]" value="Masteral Degree">
                                        <label for="checkbox3"><b>Masteral Degree</b></label>
                                    </li>
                                    <li>
                                        <div class="checkbox checkbox-success">
                                        <input id="DegreeLevel3" class="styled" type="checkbox" name="DegreeLevel[]" value="Doctorate Degree">
                                        <label for="checkbox3"><b>Doctorate Degree</b></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Required Skills: </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group" style="width: 300px; margin-bottom: 15px">
                                <input type="text" class="form-control" id="txt-knowledge" name="Knowledge">
                                <script>
                                    var kl_index = -1;
                                    function delete_knowledge(index) {
                                        $('#kl-span-' + index).remove();
                                        $('#kl-a-' + index).remove();
                                        $('#kl-input-' + index).remove();
                                    }
                                </script>
                              <span class="input-group-btn">
                                <a class="btn btn-primary" onclick="(function(){
                                  var _requirements = $('#txt-knowledge').val();
                                  if(_requirements==''){
                                      alert('Cannot add empty value.');
                                  }
                                  else{
                                      kl_index++;
                                      var kk = $('#knowledge-template');
                                      var kk_span = kk.find('span');
                                      var kk_a = kk.find('a');
                                      var kk_input = kk.find('input');

                                      kk_span.text($('#txt-knowledge').val());
                                      kk_span.attr('id', 'kl-span-' + kl_index);
                                      kk_a.attr('id', 'kl-a-' + kl_index);
                                      kk_a.attr('onclick', 'delete_knowledge(' + kl_index + ')');
                                      kk_input.attr('id', 'kl-input-' + kl_index);
                                      kk_input.attr('name', 'knowledge[' + kl_index +']');
                                      kk_input.val(kk_span.text());
                                      $('#knowledge-list').append($('#knowledge-template').html());
                                      $('#txt-knowledge').val('');

                                      //disposal of used resource in #knowledge-template
                                      kk_span.removeAttr('id');
                                      kk_a.removeAttr('id');
                                      kk_a.removeAttr('onclick');
                                      kk_input.removeAttr('id');
                                      kk_input.removeAttr('name');
                                      kk_input.removeAttr('value');
                                  }
                                })()">Add</a>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px">
                    <div id="knowledge-template" class="hidden">
                        <b><span>dito_yung_text</span></b>
                        <a href="javascript:void(0)">[remove]<br></a>
                        <input type="hidden"/>
                    </div>
                    <div id="knowledge-list" class="col-md-offset-3 col-md-4"
                         style="width: 300px; word-wrap: break-word">
                    </div>
                </div>
                <h3> Optional Requirements </h3>
                &nbsp;
                <div class="row">
                    <div class="col-md-3">
                        <label = "usr" class = "control-label"> Language: </label>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group" style="width: 100%; margin-bottom: 15px">
                                <input type="text" class="form-control" id="txt-language" name="Language">
                                <script>
                                    var lll_index = -1;
                                    function delete_language(index) {
                                        $('#lll-span-' + index).remove();
                                        $('#lll-a-' + index).remove();
                                        $('#lll-input-' + index).remove();
                                    }
                                </script>
                              <span class="input-group-btn">
                                <a class="btn btn-primary" onclick="(function(){
                                  var _languages = $('#txt-language').val();
                                  if(_languages==''){
                                    alert('Cannot add empty value.');
                                  }else{
                                  lll_index++;
                                  var ll = $('#language-template');
                                  var ll_span = ll.find('span');
                                  var ll_a = ll.find('a');
                                  var ll_input = ll.find('input');

                                  ll_span.text($('#txt-language').val());
                                  ll_span.attr('id', 'lll-span-' + lll_index);
                                  ll_a.attr('id', 'lll-a-' + lll_index);
                                  ll_a.attr('onclick', 'delete_language(' + lll_index + ')');
                                  ll_input.attr('id', 'lll-input-' + lll_index);
                                  ll_input.attr('name', 'language[' + lll_index +']');
                                  ll_input.val(ll_span.text());
                                  $('#language-list').append($('#language-template').html());
                                  $('#txt-language').val('');

                                  //disposal of used resource in #language-template
                                  ll_span.removeAttr('id');
                                  ll_a.removeAttr('id');
                                  ll_a.removeAttr('onclick');
                                  ll_input.removeAttr('id');
                                  ll_input.removeAttr('name');
                                  ll_input.removeAttr('value');
                                  }
                                })()">Add</a>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px">
                    <div id="language-template" class="hidden">
                        <b><span>dito_yung_text</span></b>
                        <a href="javascript:void(0)">[remove]<br></a>
                        <input type="hidden"/>
                    </div>
                    <div id="language-list" class="col-md-offset-3 col-md-8"
                         style="width: 300px; word-wrap: break-word">

                    </div>
                </div>
                &nbsp;
                <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
                <div class="field">
                    <div class="text-center">
                        <button type="submit" class="btn-system btn-large" id="btnsave" name="btnsave">Save</button>
                        <button type="submit" class="btn-system btn-large btn-black" id="cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!--End of Content-->
<script type="text/javascript" src="../js/script.js"></script>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        var validator = $("#AddPosition").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
           fields: {
                DateFrom: {
                    validators: {
                        notEmpty: {
                            message: "Date From is required."
                        }
                    }
                },
                DateTo: {
                    validators: {
                        notEmpty: {
                            message: "Date To is required."
                        }
                    }
                },
                PLevel: {
                    validators: {
                        notEmpty: {
                            message: "Position Level is required."
                        }
                    }
                },
                JobDesc: {
                    validators: {
                        notEmpty: {
                            message: "Job Description is required."
                        },
                        stringLength: {
                            min: 5,
                            max: 70,
                            message: "Job Description must be 5-70 characters long."
                        }
                    }
                },
                Specialization: {
                    validators: {
                        notEmpty: {
                            message: "Specialization is required."
                        }
                    }
                },
                EType: {
                    validators: {
                        notEmpty: {
                            message: "EType is required."
                        }
                    }
                },
                AvPosition: {
                    validators: {
                        notEmpty: {
                            message: "Available Position is required."
                        },
                        stringLength: {
                            min: 1,
                            max: 2,
                            message: "Available Position must be 2 digit long."
                        },
                        regexp: {
                            regexp: /^[0-9\s]+$/i,
                            message: "Available Position can consist of Positive Numbers only"
                        }
                    }
                },
                Salary: {
                    validators: {
                        notEmpty: {
                            message: "Salary is required."
                        }
                    }
                },
                YExperience: {
                    validators: {
                        notEmpty: {
                            message: "Years of Experience is required."
                        },
                        stringLength: {
                            min: 1,
                            max: 3,
                            message: "Years of Experience must be 3 digit long."
                        },
                        regexp: {
                            regexp: /^[0-9\s]+$/i,
                            message: "Location can consist of Positive Numbers only"
                        }
                    }
                },
                'DegreeLevel[]': {
                    validators: {
                        choice: {
                            min: 1,
                            message: "Please check atleast one."
                        }
                    }
                },
                'RelatedCourses[]': {
                    validators: {
                        choice: {
                            min: 1,
                            message: "Please check atleast one."
                        }
                    }
                }

            }
        });
    });
</script>
</html>
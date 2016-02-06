<?php
include('../connection.php');
session_start();

if (isset($_SESSION['AdviserID'])) {
    $AdviserID = $_SESSION['AdviserID'];
} else {
    header("location: ../login-adviser.php");
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
    <link rel="stylesheet" type="text/css" href="../css/checkbox.css" media="screen"/>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-60962033-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body>

<!-- Full Body Container -->
<div id="container">


    <!-- Start Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Start Contact Info -->
                    <ul class="contact-details">
                        <li class="profile-name"><i class="fa fa-hashtag"></i> <b>008-2012-0805</b></li>
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
                                <button style=type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Log out?</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-15 fieldcol">
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
                        <a href="../adviser/ojt-adviser.php">Home</a>
                    </li>
                    <li>
                        <a href="../adviser/ojt-account.php">Account</a>
                    </li>
                </ul>
                <!-- End Navigation List -->
            </div>
        </div>
        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../adviser/ojt-adviser.php">Home</a>
                </li>
                <li>
                    <a href="../adviser/ojt-account.php">Account</a>
                </li>
            </ul>
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
                    <h2>Adviser</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!--Content-->
    <br><br><br>

    <div class="container">
        <div class="header2_advertising">
            <div class="container">
                <div class="col-sm-4">
                    <h4 style="margin-top:20px;">TOTAL NUMBER OF STUDENTS: </b></h4>
                </div>
                <div class="col-sm-3">
                    <label>
                        <center><b>Filter by: </b>
                    </label></center>
                    <select class="form-control" style="width:250px;">
                        <option value="00">- Status</option>
                        <option value="asd">Active</option>
                        <option value="ada">Inactive</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label>
                        <center><b>Search by: </b>
                    </label></center>
                    <select class="form-control" style="width:250px;">
                        <option value="00">- Status</option>
                        <option value="asd">adsa</option>
                        <option value="ada">ada</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn-system btn-large border-btn"
                            style="margin-top: 20px;">Search
                    </button>
                </div>
            </div>
        </div>
        <div style="border:1px dashed #333333; width:300px; margin:0 auto; padding:10px;">

            <form name="import" method="post" enctype="multipart/form-data">
                <input type="file" name="file"/><br/>
                <input type="submit" name="submit" value="Submit"/>
            </form>
            <?php

            if (isset($_POST["submit"])) {
                $file = $_FILES['file']['tmp_name'];
                $handle = fopen($file, "r");
                $c = 0;
                while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
                    $StudentID = $filesop[0];
                    $LastName = $filesop[1];
                    $FirstName = $filesop[2];
                    $MiddleName = $filesop[3];
                    $Course = $filesop[4];
                    $CompanyName = $filesop[5];
                    $CompanyAddress = $filesop[6];
                    $Supervisor = $filesop[7];
                    $Position = $filesop[8];
                    $ContactNumber = $filesop[9];

                    $sql =
                        GSecureSQL::query(
                            "INSERT INTO ojttbl (
                            StudentID,
                            LastName,
                            FirstName,
                            MiddleName,
                            Course,
                            CompanyName,
                            CompanyAddress,
                            Supervisor,
                            Position,
                            ContactNumber)
                            VALUES (?,?,?,?,?,?,?,?,?,?)",
                            FALSE,
                            "ssssssssss",
                            $StudentID,
                            $LastName,
                            $FirstName,
                            $MiddleName,
                            $Course,
                            $CompanyName,
                            $CompanyAddress,
                            $Supervisor,
                            $Position,
                            $ContactNumber
                        );
                    $c++;
                }
                echo "You database has imported successfully. You have inserted " . $c . " records";
            }
            ?>

        </div>
        <br><br>
        <table class="Applicants table" width="100%" cellpadding="0">
            <thead>
            <tr></tr>
            <tr>
                <th width="10%" class="tabletitle">Student ID</th>
                <th width="15%" class="tabletitle">Student Name</th>
                <th width="15%" class="tabletitle">Course</th>
                <th width="15%" class="tabletitle">Company</th>
                <th width="20%" class="tabletitle">Company Address</th>
                <th width="15%" class="tabletitle">Contact Number</th>
                <th width="10%" class="tabletitle">Supervisor</th>
                <th width="10%" class="tabletitle">Status</th>
                <th width="5%" class="tabletitle">Edit</th>
            </tr
            </thead>
            <tbody>
            <?php
            $ojt_tbl =
                GSecureSQL::query(
                    "SELECT * FROM ojttbl",
                    TRUE
                );
            foreach ($ojt_tbl as $value) {
                $StudentID = $value[1];
                $FirstName = $value[3];
                $LastName = $value[2];
                $Course = $value[5];
                $CompanyName = $value[6];
                $CompanyAddress = $value[7];
                $Contact = $value[10];
                $Supervisor = $value[8];
                $Status = $value[12];
                $DTR = $value[13];
                $iPaper = $value[14];
                $PracJournal = $value[15];
                $TrainingPlan = $value[16];
                $Resume = $value[17];
                $MOA = $value[18];
                $ApplicationLetter = $value[19];
                $Waiver = $value[20]

                ?>
                <tr>
                    <td width="10%"><?php echo $StudentID; ?></td>
                    <td width="15%"><a href=".php"><?php echo $LastName . ", " . $FirstName; ?></td>
                    <td width="15%"><?php echo $Course; ?></td>
                    <td width="15%"><?php echo $CompanyName; ?></td>
                    <td width="20%"><?php echo $CompanyAddress; ?></td>
                    <td width="15%"><?php echo $Contact; ?></td>
                    <td width="10%"><?php echo $Supervisor; ?></td>
                    <td width="10%"><?php echo $Status; ?></td>
                    <td width="10%">
                        <button class="btn btn-default" data-toggle="modal"
                                data-target="#Update<?php echo $StudentID; ?>">
                            <i class="fa fa-edit"></i>
                        </button>
                    </td>
                </tr>
                <!-- Modal -->
                <form method="POST" action="functions.php" autocomplete="off">
                    <div class="modal fade" id="Update<?php echo $StudentID; ?>"
                         role="dialog">
                        <div class="modal-dialog" style="padding:100px">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Update Information</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-15">
                                        <input type="hidden" name="StudentID" value="<?php echo $StudentID; ?>">
                                        <label>Student ID:
                                            <?php echo $StudentID; ?></label>
                                        <br>
                                        <label = "usr" class = "control-label">Student Name:
                                        <?php echo $LastName . ", " . $FirstName; ?></label>
                                        <br>
                                        <label = "usr" class = "control-label">Course:
                                        <?php echo $Course; ?></label>
                                        <br>
                                        <div class="form-group">
                                            <div class="hr2" style="margin-top:10px;margin-bottom:10px;"></div>
                                            <label>OJT Student Information:</label>
                                            <ul>
                                                <li>
                                                    <div class="form-group">
                                                        Company
                                                        <input type="text" class="form-control" id="txtCompany"
                                                               name="txtCompany" value="<?php echo $CompanyName; ?>">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        Company Address
                                                        <input type="text" class="form-control" id="txtCompanyAddress"
                                                               name="txtCompanyAddress"
                                                               value="<?php echo $CompanyAddress; ?>">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        Contact Number
                                                        <input type="text" class="form-control" id="txtContactNumber"
                                                               name="txtContactNumber"
                                                               value="<?php echo $Contact; ?>">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        Supervisor
                                                        <input type="text" class="form-control" id="txtSupervisor"
                                                               name="txtSupervisor"
                                                               value="<?php echo $Supervisor; ?>">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                       <select class="form-control" name="Status">
                                                           <option value="">- Status -</option>
                                                           <option value="On Going">On Going</option>
                                                           <option value="Incomplete">Incomplete</option>
                                                           <option value="Finished">Finished</option>
                                                       </select>
                                                    </div>
                                                </li>
                                                <div class="hr2" style="margin-top:10px;margin-bottom:10px;"></div>
                                                <label>Requirements checklist:</label>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="DTRhidden" name="DTR" class="styled" type="hidden"
                                                               value="off">
                                                        <input id="DTR" name="DTR" class="styled" type="checkbox"
                                                               value="ok" <?php if ($DTR == "ok") echo "checked"; ?>>
                                                        <label for="checkbox3"><b>Daily Time Record</b></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="iPaperhidden" name="iPaper" class="styled"
                                                               type="hidden" value="off">
                                                        <input id="iPaper" name="iPaper" class="styled" type="checkbox"
                                                               value="ok" <?php if ($iPaper == "ok") echo "checked"; ?>>
                                                        <label for="checkbox3"><b>Integration Paper</b></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="PracJournalhidden" name="PracJournal" class="styled"
                                                               type="hidden" value="off">
                                                        <input id="PracJournal" name="PracJournal" class="styled"
                                                               type="checkbox"
                                                               value="ok" <?php if ($PracJournal == "ok") echo "checked"; ?>>
                                                        <label for="checkbox3"><b>OJT Practicum Journal</b></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="TrainingPlanhidden" name="TrainingPlan"
                                                               class="styled" type="hidden" value="off">
                                                        <input id="TrainingPlan" name="TrainingPlan" class="styled"
                                                               type="checkbox"
                                                               value="ok" <?php if ($TrainingPlan == "ok") echo "checked"; ?>>
                                                        <label for="checkbox3"><b>Training Plan</b></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="Resumehidden" name="Resume" class="styled"
                                                               type="hidden" value="off">
                                                        <input id="Resume" name="Resume" class="styled" type="checkbox"
                                                               value="ok" <?php if ($Resume == "ok") echo "checked"; ?>>
                                                        <label for="checkbox3"><b>Resume</b></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="MOAhidden" name="MOA" class="styled" type="hidden"
                                                               value="off">
                                                        <input id="MOA" name="MOA" class="styled" type="checkbox"
                                                               value="ok" <?php if ($MOA == "ok") echo "checked"; ?>>
                                                        <label for="checkbox3"><b>Memorandum of Agreement</b></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="AppLetterhidden" name="AppLetter" class="styled"
                                                               type="hidden" value="off">
                                                        <input id="AppLetter" name="AppLetter" class="styled"
                                                               type="checkbox"
                                                               value="ok" <?php if ($ApplicationLetter == "ok") echo "checked"; ?>>
                                                        <label for="checkbox3"><b>Application Letter</b></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="Waiverhidden" name="Waiver" class="styled"
                                                               type="hidden" value="off">
                                                        <input id="Waiver" name="Waiver" class="styled" type="checkbox"
                                                               value="ok" <?php if ($Waiver == "ok") echo "checked"; ?>>
                                                        <label for="checkbox3"><b>Waiver</b></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type=submit class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
<script type="text/javascript" src="../js/script.js"></script>
</html>
<script type="text/javascript">
    if (document.getElementById("DTR").checked) {
        document.getElementById('DTRhidden').disabled = true;
    }
    if (document.getElementById("iPaper").checked) {
        document.getElementById('iPaperhidden').disabled = true;
    }
    if (document.getElementById("PracJournal").checked) {
        document.getElementById('PracJournalhidden').disabled = true;
    }
    if (document.getElementById("TrainingPlan").checked) {
        document.getElementById('TrainingPlanhidden').disabled = true;
    }
    if (document.getElementById("Resume").checked) {
        document.getElementById('Resumehidden').disabled = true;
    }
    if (document.getElementById("MOA").checked) {
        document.getElementById('MOAhidden').disabled = true;
    }
    if (document.getElementById("AppLetter").checked) {
        document.getElementById('AppLetterhidden').disabled = true;
    }
    if (document.getElementById("Waiver").checked) {
        document.getElementById('Waiverhidden').disabled = true;
    }
</script>
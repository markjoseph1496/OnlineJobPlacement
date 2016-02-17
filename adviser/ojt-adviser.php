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

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="description" content="This tutorial will learn how to import excel sheet data in mysql database using php. Here, first upload an excel sheet into your server and then click to import it into database. All column of excel sheet will store into your corrosponding database table."/>
    <meta name="keywords" content="import excel file data in mysql, upload ecxel file in mysql, upload data, code to import excel data in mysql database, php, Mysql, Ajax, Jquery, Javascript, download, upload, upload excel file,mysql"/>

    <!-- fileupload -->
    <link href="../css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="../js/fileinput.min.js" type="text/javascript"></script>

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

    <!-- Notification -->
    <link rel="stylesheet" href="../css/notif.css"/>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#notificationLink").click(function () {
                $("#notificationContainer").fadeToggle(300);
                $("#notification_count").fadeOut("slow");
                return false;
            });

            //Document Click
            $(document).click(function () {
                $("#notificationContainer").hide();
            });
            //Popup Click
            $("#notificationContainer").click(function () {
                return false
            });

        });
    </script>
</head>

<body>
    <!-- Full Body Container -->
    <div id="container">
        <!-- Start Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">&nbsp;</div>
                    <div class="col-md-5">
                        <!-- Notification -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown icon-border" id="notificationLink">
                                <span id="notification_count">3</span>
                                <a href="#" class="bell itl-tooltip" data-placement="bottom" data-toggle="dropdown"><i
                                        class="fa fa-bell"></i></a>
                                <ul id="notificationContainer" class="dropdown-menu dropdown-menu-inverse">
                                    <li class="dropdown-header"><label>Notification</label></li>
                                    <li class="disabled"><a href="#" tabindex="-1">No new notification.</a></li>
                                    <li><a href="#" tabindex="-1">The administrator accepted your request.</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../notification/notification.php" tabindex="-1">See All</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-user"></b>
                                    Welcome,  </b><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile <b class="fa fa-user" style="float:right;"></b></a></li>
                                    <li><a href="company-settings.php">Settings <b class="fa fa-cog"
                                                                                               style="float:right;"></b></a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#" data-target='#Logout' data-toggle='modal'>Sign Out <b
                                                class="fa fa-sign-out" style="float:right;"></b></a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Notification -->
                    </div>
                    <!-- .col-md-5 -->
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
                    <!-- Modal -->
                        <div class="modal fade" id="Logout"
                             role="dialog">
                            <div class="modal-dialog" style="padding:100px">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button style=type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Sign out?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-15">
                                            <label>Do you want to Sign Out?</label>
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="index.php"
                                               class="btn btn-primary">Sign Out</a>
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
                                <a class = "active" href="../adviser/ojt-adviser.php">Home</a>
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
                            <a class = "active" href="../adviser/ojt-adviser.php">Home</a>
                        </li>
                        <li>
                            <a href="../adviser/ojt-account.php">Account</a>
                        </li>
                    </ul>
                </ul>
            </div>
            <!-- End Header Logo & Naviagtion -->

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
                <div class="col-sm-4">
                    <h4 style="margin-top:20px;">TOTAL NUMBER OF STUDENTS: </b></h4>
                </div>
                <div class="col-sm-3">
                    <label>
                        <center><b>Filter by: </b></center>
                    </label>
                    <select class="form-control" style="width:250px;">
                        <option value="00">- Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label>
                        <center><b>Search by: </b></center>
                    </label>
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
                &nbsp;
                <div class="hr1" style="margin-bottom:10px;margin-top:10px;"></div>

                
                <form name="import" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" /><br />
                    <input type="submit" name="submit" value="Submit" />
                </form>

                <?php

                    if (isset($_POST["submit"])) {
                    

                        set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
                        include 'PHPExcel/IOFactory.php';

                        // This is the file path to be uploaded.
                        $inputFileName = $_FILES['file']['tmp_name']; 

                        try {
                            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
                        } catch(Exception $e) {
                            die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
                        }


                        $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                        $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


                        for($i=10;$i<=$arrayCount;$i++){
                        $StudentID = trim($allDataInSheet[$i]["A"]);
                        $LastName = trim($allDataInSheet[$i]["B"]);
                        $FirstName = trim($allDataInSheet[$i]["C"]);
                        $MiddleName = trim($allDataInSheet[$i]["D"]);
                        $Course = trim($allDataInSheet[$i]["E"]);
                        $CompanyName = trim($allDataInSheet[$i]["F"]);
                        $CompanyAddress = trim($allDataInSheet[$i]["G"]);
                        $Supervisor = trim($allDataInSheet[$i]["H"]);
                        $Position = trim($allDataInSheet[$i]["I"]);
                        $ContactNumber = trim($allDataInSheet[$i]["J"]);


                        $query = 
                            "SELECT 
                                StudentID 
                            FROM 
                                ojttbl 
                            WHERE 
                                StudentID = '".$StudentID."' 
                                and 
                                LastName = '".$LastName."' 
                                and 
                                FirstName = '".$FirstName."'
                                and 
                                MiddleName = '".$MiddleName."'
                                and 
                                Course = '".$Course."'
                                and 
                                CompanyName = '".$CompanyName."'
                                and 
                                CompanyAddress = '".$CompanyAddress."'
                                and 
                                Supervisor = '".$Supervisor."'
                                and 
                                Position = '".$Position."'
                                and 
                                ContactNumber = '".$ContactNumber."'
                                ";


                        $sql = mysql_query($query);
                        $recResult = mysql_fetch_array($sql);
                        $existName = $recResult["StudentID"];
                        
                        if($existName=="") {
                        $insertTable= mysql_query("insert 
                                                    into 
                                                    ojttbl 
                                                        (StudentID, 
                                                        LastName, 
                                                        FirstName,
                                                        MiddleName,
                                                        Course,
                                                        CompanyName,
                                                        CompanyAddress,
                                                        Supervisor,
                                                        Position,
                                                        ContactNumber) 
                                                    values
                                                        ('".$StudentID."', 
                                                        '".$LastName."', 
                                                        '".$FirstName."',
                                                        '".$MiddleName."',
                                                        '".$Course."',
                                                        '".$CompanyName."',
                                                        '".$CompanyAddress."',
                                                        '".$Supervisor."',
                                                        '".$Position."',
                                                        '".$ContactNumber."');");


                        $msg = 'Record has been added. <div style="Padding:20px 0 0 0;"></div>';
                        } else {
                        $msg = 'Record already exist. <div style="Padding:20px 0 0 0;"></div>';
                        }
                        }
                        echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
                    } 

                ?>

                <br><br>
                <div class="hr3"></div>
                <table class="dataTable table" width="100%" cellpadding="0">
                    <thead>
                        <tr>
                            <th width="15%">Student No.</th>
                            <th width="20%">Name</th>
                            <th width="20%">Company</th>
                            <th width="20%">Address</th>
                            <th width="10%">Remark</th>
                            <th width="1%"class="rotate">Hours</th>
                            <th width="1%"class="rotate">Endorsement</th>
                            <th width="1%"class="rotate">DTR</th>
                            <th width="1%"class="rotate">Waiver</th>
                            <th width="1%"class="rotate">Training Plan</th>
                            <th width="1%"class="rotate">MOA</th>
                            <th width="1%"class="rotate">Journal</th>
                            <th width="1%"class="rotate">Integration</th>
                            <th width="1%"class="rotate">PAF</th>
                            <th width="1%"class="rotate">Certificate</th>
                        </tr>
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
                            <td width="15%"></td>
                            <td width="20%"></td>
                            <td width="20%"></td>
                            <td width="20%"></td>
                            <td width="10%"></td>
                            <td width="1%"></td>
                            <td width="1%"></td>
                            <td width="1%"></td>                   
                            <td width="1%"></td>
                            <td width="1%"></td>
                            <td width="1%"></td>
                            <td width="1%"></td>
                            <td width="1%"></td>
                            <td width="1%"></td>
                            <td width="1%"></td>
                        </tr>
                    </tbody>
                </table>
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
                                        <label>Student Name:
                                        <?php echo $LastName . ", " . $FirstName; ?></label>
                                        <br>
                                        <label>Course:
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
            </div>
        </div>
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
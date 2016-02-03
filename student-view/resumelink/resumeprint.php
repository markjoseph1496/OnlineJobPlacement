<?php
include('../../connection.php');
session_start();

if (isset($_SESSION['StudentID'])) {
    $StudentID = $_SESSION['StudentID'];
} else {
    header("location: ../../login-student.php");
}

$studentinfo_tbl =
    GSecureSQL::query(
        "SELECT
        FirstName,
        MiddleName,
        LastName,
        ProfileImage
        FROM studentinfotbl WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );
$FirstName = $studentinfo_tbl[0][0];
$MiddleName = $studentinfo_tbl[0][1];
$LastName = $studentinfo_tbl[0][2];
$ProfileImage = $studentinfo_tbl[0][3];

$studcontacts_tbl =
    GSecureSQL::query(
        "SELECT Address, MobileNumber, HomeNumber, Email  FROM studcontactstbl WHERE StudentID = ?",
        TRUE,
        "s",
        $StudentID
    );
$Address = $studcontacts_tbl[0][0];
$MobileNumber = $studcontacts_tbl[0][1];
$HomeNumber = $studcontacts_tbl[0][2];
$Email = $studcontacts_tbl[0][3];

if(empty($HomeNumber)){
    $ContactNumber = $MobileNumber;
}elseif(empty($MobileNumber)){
    $ContactNumber = $HomeNumber;
}else{
    $ContactNumber = $MobileNumber . ", " . $HomeNumber;
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
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

    <!-- BootstrapValidator -->
    <script src="../../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="../../fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/ffonts/open-sans.css">

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
</head>
<style = "text/css">
.padding {
    border: 1px solid black;
    background-color: fff;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 600px;
    padding-left: 80px;
}
</style>

<body>
    <div class="container">
        <br><br>
        <button name="b_print" type="button" class="fa fa-print btn-system btn-mini border-btn"
                onClick="printdiv('div_print');" value=" Print " style="height:50px; margin-left:430px;">
                Print this Resume
        </button>
        <br><br>
        <div class="padding">
            <div id="div_print">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8">
                            <BR><BR><BR>
                            <label> Name: <?php echo $FirstName . " " . $LastName; ?></label><BR>
                            <label> Address: <?php echo $Address; ?> </label><BR>
                            <label> Contact No: <?php echo $ContactNumber; ?></label><BR>
                            <label>Email Address: <?php echo $Email; ?></label><BR>
                        </div>
                        <div class="col-xs-4">
                            <div class="image-border" style="width:192px; height: 192px;">
                                <img src="../myinfo/<?php echo $ProfileImage; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <label>Objective:</label>
                    <p>One to two sentences long that describes the type of job you want, the type of organization you
                        prefer and how you can contribute to the position/organization.
                    <p>
                </div>
                <BR>
                <div class="col-xs-12">
                    <label>Education:</label>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4">
                            <label style="text-indent:100px;"> (Year Covered) </label>
                            <p style="text-indent:100px;"> 20__ - 20__ </p><BR>
                            <p style="text-indent:100px;"> 20__ - 20__ </p><BR>

                        </div>
                        <div class="col-xs-8">
                            <label> STI College – (Campus) (for College) / STI (Campus) (for EC) </label>
                            <p> Degree / Diploma</p><BR>
                            <p> __________High School </p>
                            <p>High School Diploma </p>
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="col-xs-12">
                    <label>Work Experience:</label>
                    <ul style="list-style-type:disc">
                        <?php
                            $workexperience_tbl =
                                GSecureSQL::query(
                                    "SELECT
                                    CompanyName,
                                    DateFromMonth,
                                    DateFromYear,
                                    DateToMonth,
                                    DateToYear,
                                    PositionTitle,
                                    CompanyAddress
                                    FROM workexperiencetbl
                                    WHERE StudentID = ?
                                    ORDER BY DateToYear DESC
                                    LIMIT 2",
                                    TRUE,
                                    "s",
                                    $StudentID
                                );
                        foreach($workexperience_tbl as $value){
                            $CompanyName = $value[0];
                            $DateFromMonth = $value[1];
                            $DateFromYear = $value[2];
                            $DateToMonth = $value[3];
                            $DateToYear = $value[4];
                            $PositionTitle = $value[5];
                            $CompanyAddress = $value[6];

                            if ($DateFromMonth == 1) {
                                $DateFromMonth = 'January';
                            }
                            if ($DateFromMonth == 2) {
                                $DateFromMonth = 'February';
                            }
                            if ($DateFromMonth == 3) {
                                $DateFromMonth = 'March';
                            }
                            if ($DateFromMonth == 4) {
                                $DateFromMonth = 'April';
                            }
                            if ($DateFromMonth == 5) {
                                $DateFromMonth = 'May';
                            }
                            if ($DateFromMonth == 6) {
                                $DateFromMonth = 'June';
                            }
                            if ($DateFromMonth == 7) {
                                $DateFromMonth = 'July';
                            }
                            if ($DateFromMonth == 8) {
                                $DateFromMonth = 'August';
                            }
                            if ($DateFromMonth == 9) {
                                $DateFromMonth = 'September';
                            }
                            if ($DateFromMonth == 10) {
                                $DateFromMonth = 'October';
                            }
                            if ($DateFromMonth == 11) {
                                $DateFromMonth = 'November';
                            }
                            if ($DateFromMonth == 12) {
                                $DateFromMonth = 'December';
                            }

                            /* Year */
                            if ($DateToMonth == 1) {
                                $DateToMonth = 'January';
                            }
                            if ($DateToMonth == 2) {
                                $DateToMonth = 'February';
                            }
                            if ($DateToMonth == 3) {
                                $DateToMonth = 'March';
                            }
                            if ($DateToMonth == 4) {
                                $DateToMonth = 'April';
                            }
                            if ($DateToMonth == 5) {
                                $DateToMonth = 'May';
                            }
                            if ($DateToMonth == 6) {
                                $DateToMonth = 'June';
                            }
                            if ($DateToMonth == 7) {
                                $DateToMonth = 'July';
                            }
                            if ($DateToMonth == 8) {
                                $DateToMonth = 'August';
                            }
                            if ($DateToMonth == 9) {
                                $DateToMonth = 'September';
                            }
                            if ($DateToMonth == 10) {
                                $DateToMonth = 'October';
                            }
                            if ($DateToMonth == 11) {
                                $DateToMonth = 'November';
                            }
                            if ($DateToMonth == 12) {
                                $DateToMonth = 'December';
                            }
                            $Date = $DateFromMonth . " " . $DateFromYear . " - " . $DateToMonth . " " . $DateToYear;

                            ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <label><?php echo $Date; ?></label>
                                    </div>
                                    <div class="col-xs-2">
                                        <label><?php echo $PositionTitle; ?></label>
                                    </div>
                                    <div class="col-xs-2">
                                        <label><?php echo $CompanyName; ?></label>
                                    </div>
                                    <div class="col-xs-5">
                                        <label><?php echo $CompanyAddress; ?></label>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </ul>
                    <label>Skills:</label>
                    <ul style="list-style-type:disc">
                        <li>AASDSJFBJDFJ</li>
                        <li>JSDGFHJDGFJ</li>
                        <li>JSGFHJSDGFHJ</li>
                    </ul>
                    <label>Extra Curricular Activities</label>
                    <ul style="list-style-type:disc">
                        <li>AASDSJFBJDFJ</li>
                        <li>JSDGFHJDGFJ</li>
                        <li>JSGFHJSDGFHJ</li>
                    </ul>
                    <label>References:</label>
                    <p>STI College – Caloocan </p>
                </div>

            </div>
        </div>
    </div>
    <!-- End Content -->
    <script type="text/javascript" src="../../js/script.js"></script>
    <script language="javascript">
        function printdiv(printpage) {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr + newstr + footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
    </script>
</body>
</html>

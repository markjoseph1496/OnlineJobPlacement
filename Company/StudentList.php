<!DOCTYPE html>
<?php
include('CONNECTION.php');

$Course = 'MajorCourse';

$qry = mysql_query("SELECT DISTINCT MajorCourse FROM studentinfotbl");
$TotalofStudent = mysql_query("SELECT count(*) FROM studentinfotbl");
$q1 = mysql_fetch_array($TotalofStudent);
$Total = $q1[0];

$BSTM = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Tourism Management'");
$qryBSTM = mysql_fetch_array($BSTM);
$TotalBSTM = $qryBSTM[0];

$BSBM = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Business Management Major in Operations'");
$qryBSBM = mysql_fetch_array($BSBM);
$TotalBSBM = $qryBSBM[0];

$ABCOMM = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Arts in Communication'");
$qryABCOMM = mysql_fetch_array($ABCOMM);
$TotalABCOMM = $qryABCOMM[0];

$BSITDMA = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Information Technology Major in Digital Arts'");
$qryBSITDMA = mysql_fetch_array($BSITDMA);
$TotalBSITDMA = $qryBSITDMA[0];

$BSHRM = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Hotel and Restaurant Management'");
$qryBSHRM = mysql_fetch_array($BSHRM);
$TotalBSHRM = $qryBSHRM[0];

$BSCS = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Computer Science'");
$qryBSCS = mysql_fetch_array($BSCS);
$TotalBSCS = $qryBSCS[0];

$BSIT = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Information Technology'");
$qryBSIT = mysql_fetch_array($BSIT);
$TotalBSIT = $qryBSIT[0];

$BSCPE = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Computer Engineering'");
$qryBSCPE = mysql_fetch_array($BSCPE);
$TotalBSCPE = $qryBSCPE[0];

$BSAT = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Accounting Technology'");
$qryBSAT = mysql_fetch_array($BSAT);
$TotalBSAT = $qryBSAT[0];

$BSITDA = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Information Technology with Specialization Digital Arts'");
$qryBSITDA = mysql_fetch_array($BSITDA);
$TotalBSITDA = $qryBSITDA[0];

$ASCT = mysql_query("SELECT count(*) FROM studentinfotbl WHERE MajorCourse = '2-yr. Associate in Computer Technology'");
$qryASCT = mysql_fetch_array($ASCT);
$TotalASCT = $qryASCT[0];
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>
<style = "text">
.tabletitle {
    color: #000000;
    padding: 7px;
    border: 1px solid  #E5E4E2;
}

table {
    width: 100%;
    border-collapse: collapse;
}


thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
    height:20px;
}

.Applicants tr:nth-of-type(2n+1), .tablelist tr:nth-of-type(2n+1) {
    background: none repeat scroll 0 0 #f3eeee;
}
tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
td, th {
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #E5E4E2;
    text-align: left;
    padding: 7px 10px;
}

td, th {
    display: table-cell;
    vertical-align: inherit;
}

.tcenter {
    text-align: center;
}

a {
    color: #5f3333;
}
a {
    text-decoration: none;
}
a:-webkit-any-link {
    cursor: auto;
}
.space-report {
    margin: 1rem 0rem;
    border-bottom: 0em;
    line-height: 3;
    height: 3em;
}
</style>


<body id="page-top" class="index bg">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Online Job Placement Management</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    
    <div class="white-holder">
        <ul class="nav nav-tabs">
            <li role="presentation" id="company" class="item"><a href="Company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Positions.php">Positions</a></li>
            <li role="presentation" id="calendar" class="item " ><a href="Calendar.php">Calendar</a></li>
            <li role="presentation" id="report" class="item "><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item " ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item "><a href="Resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item active"><a href="StudentList.php">Student List</a></li>
            <li role="presentation" id="applicantlist" class="item "><a href="ApplicantList.php">Applicant List</a></li>
        </ul>
        <div class="space-report"></div>


        <div class="container">
            <div class="col-md-12 box">
                <div class="col-md-6">
                    <h3>List of Students</h3>
                    <label>TOTAL NUMBER OF STUDENTS: 10</label>
                </div>
            </div>
                    <table class = "Applicants" width = "100%" cellpadding = "0">
           <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width = "50%" class = "tabletitle"> Field of Study </th>
                    <th width = "50%" class = "tabletitle">Number of Students</th>
                    
                <tr>
            </thead>

            <tbody>
                
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSTM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Science in Business Management Major in Operations">Bachelor of Science in Business Management Major in Operations</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSBM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Arts in Communication">Bachelor of Arts in Communication</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalABCOMM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Science in Information Technology Major in Digital Arts">Bachelor of Science in Information Technology Major in Digital Arts</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSITDMA; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Science in Hotel and Restaurant Management">Bachelor of Science in Hotel and Restaurant Management</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSHRM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Science in Computer Science">Bachelor in Science in Computer Science</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCS; ?></td>
                </tr>
                                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Science in Information Technology">Bachelor in Science in Information Technology</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSIT; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Science in Computer Engineering">Bachelor in Science in Computer Engineering</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCPE; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Science in Accounting Technology">Bachelor of Science in Accounting Technology</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSAT; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=Bachelor of Science in Information Technology with Specialization Digital Arts">Bachelor of Science in Information Technology with Specialization Digital Arts</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSITDA; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "FieldofStudy.php?CourseID=2-yr. Associate in Computer Technology">2-yr. Associate in Computer Technology</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalASCT; ?></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</body>

<!DOCTYPE html>

<?php
include('connection.php');

$FieldOfStudy = 'FieldofStudy';

$qry = mysql_query("SELECT DISTINCT FieldOfStudy FROM studentinfotbl");
$TotalStudents = mysql_query("SELECT COUNT(*) FROM studentinfotbl");
$Q1 = mysql_fetch_array($TotalStudents);
$Total = $Q1[0];

/////////////////////////////////////////////////////
$BSTM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Tourism Management'");
$qryBSTM = mysql_fetch_array($BSTM);
$TotalBSTM = $qryBSTM[0];

$EmployedBSTM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Tourism Management' AND EmploymentStatus = 'Employed'");
$qryEmployedBSTM = mysql_fetch_array($EmployedBSTM);
$TotalEmployedBSTM = $qryEmployedBSTM[0];

$UnemployedBSTM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Tourism Management' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSTM = mysql_fetch_array($UnemployedBSTM);
$TotalUnemployedBSTM = $qryUnemployedBSTM[0];

/////////////////////////////////////////////////////
$BSBM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Business Management Major in Operations'");
$qryBSBM = mysql_fetch_array($BSBM);
$TotalBSBM = $qryBSBM[0];

$EmployedBSBM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Business Management Major in Operations' AND EmploymentStatus = 'Employed'");
$qryEmployedBSBM = mysql_fetch_array($EmployedBSBM);
$TotalEmployedBSBM = $qryEmployedBSBM[0];

$UnemployedBSBM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Business Management Major in Operations' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSBM = mysql_fetch_array($UnemployedBSBM);
$TotalUnemployedBSBM = $qryUnemployedBSBM[0];

/////////////////////////////////////////////////////
$ABCOMM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Arts in Communication'");
$qryABCOMM = mysql_fetch_array($ABCOMM);
$TotalABCOMM = $qryABCOMM[0];

$EmployedABCOMM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Arts in Communication' AND EmploymentStatus = 'Employed'");
$qryEmployedABCOMM = mysql_fetch_array($EmployedABCOMM);
$TotalEmployedABCOMM = $qryEmployedABCOMM[0];

$UnemployedABCOMM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Arts in Communication' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedABCOMM = mysql_fetch_array($UnemployedABCOMM);
$TotalUnemployedABCOMM = $qryUnemployedABCOMM[0];

/////////////////////////////////////////////////////
$BSITDA = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology Major in Digital Arts'");
$qryBSITDA = mysql_fetch_array($BSITDA);
$TotalBSITDA = $qryBSITDA[0];

$EmployedBSITDA = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology Major in Digital Arts' AND EmploymentStatus = 'Employed'");
$qryEmployedBSITDA = mysql_fetch_array($EmployedBSITDA);
$TotalEmployedBSITDA = $qryEmployedBSITDA[0];

$UnemployedBSITDA = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology Major in Digital Arts' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSITDA = mysql_fetch_array($UnemployedBSITDA);
$TotalUnemployedBSITDA = $qryUnemployedBSITDA[0];

/////////////////////////////////////////////////////
$BSHRM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Hotel &amp; Restaurant Management'");
$qryBSHRM = mysql_fetch_array($BSHRM);
$TotalBSHRM = $qryBSHRM[0];

$EmployedBSHRM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Hotel &amp; Restaurant Management' AND EmploymentStatus = 'Employed'");
$qryEmployedBSHRM = mysql_fetch_array($EmployedBSHRM);
$TotalEmployedBSHRM = $qryEmployedBSHRM[0];

$UnemployedBSHRM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Hotel &amp; Restaurant Management' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSHRM = mysql_fetch_array($UnemployedBSHRM);
$TotalUnemployedBSHRM = $qryUnemployedBSHRM[0];

/////////////////////////////////////////////////////
$BSCS = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Science'");
$qryBSCS = mysql_fetch_array($BSCS);
$TotalBSCS = $qryBSCS[0];

$EmployedBSCS = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Science' AND EmploymentStatus = 'Employed'");
$qryEmployedBSCS = mysql_fetch_array($EmployedBSCS);
$TotalEmployedBSCS = $qryEmployedBSCS[0];

$UnemployedBSCS = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Science' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSCS = mysql_fetch_array($UnemployedBSCS);
$TotalUnemployedBSCS = $qryUnemployedBSCS[0];

/////////////////////////////////////////////////////
$BSIT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology'");
$qryBSIT = mysql_fetch_array($BSIT);
$TotalBSIT = $qryBSIT[0];

$EmployedBSIT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology' AND EmploymentStatus = 'Employed'");
$qryEmployedBSIT = mysql_fetch_array($EmployedBSIT);
$TotalEmployedBSIT = $qryEmployedBSIT[0];

$UnemployedBSIT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Information Technology' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSIT = mysql_fetch_array($UnemployedBSIT);
$TotalUnemployedBSIT = $qryUnemployedBSIT[0];

/////////////////////////////////////////////////////
$BSCPE = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Engineering'");
$qryBSCPE = mysql_fetch_array($BSCPE);
$TotalBSCPE = $qryBSCPE[0];

$EmployedBSCPE = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Engineering' AND EmploymentStatus = 'Employed'");
$qryEmployedBSCPE = mysql_fetch_array($EmployedBSCPE);
$TotalEmployedBSCPE = $qryEmployedBSCPE[0];

$UnemployedBSCPE = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Computer Engineering' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSCPE = mysql_fetch_array($UnemployedBSCPE);
$TotalUnemployedBSCPE = $qryUnemployedBSCPE[0];

/////////////////////////////////////////////////////
$BSAT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='BBachelor of Science in Accounting Technology'");
$qryBSAT = mysql_fetch_array($BSAT);
$TotalBSAT = $qryBSAT[0];

$EmployedBSAT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Accounting Technology' AND EmploymentStatus = 'Employed'");
$qryEmployedBSAT = mysql_fetch_array($EmployedBSAT);
$TotalEmployedBSAT = $qryEmployedBSAT[0];

$UnemployedBSAT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='Bachelor of Science in Accounting Technology' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedBSAT = mysql_fetch_array($UnemployedBSAT);
$TotalUnemployedBSAT = $qryUnemployedBSAT[0];

/////////////////////////////////////////////////////

$ASCT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='2-Year Associate in Computer Technology'");
$qryASCT = mysql_fetch_array($ASCT);
$TotalASCT = $qryASCT[0];

$EmployedASCT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='2-Year Associate in Computer Technology' AND EmploymentStatus = 'Employed'");
$qryEmployedASCT = mysql_fetch_array($EmployedASCT);
$TotalEmployedASCT = $qryEmployedASCT[0];

$UnemployedASCT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse ='2-Year Associate in Computer Technology' AND EmploymentStatus = 'Unemployed'");
$qryUnemployedASCT = mysql_fetch_array($UnemployedASCT);
$TotalUnemployedASCT = $qryUnemployedASCT[0];

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
                        <a class="btn bordered" href="../../../index.php?id=SignOut">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div class="yellow-text-fields">
    <div class="white-holder-3">
        <ul class="nav nav-tabs">
             <li role="presentation" id="myinfo" class="item "><a href="Admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item active "><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item "><a href="Account.php">Account</a></li>
            <li role="presentation" id="applications" class="item"><a href="Requested.php">Requested</a></li>
            <li role="presentation" id="applications" class="item"><a href="CompanyList.php">Company List</a></li>
            <li role="presentation" id="applications" class="item"><a href="AdviserList.php">Adviser List</a></li>
            <li role="presentation" id="applications" class="item"><a href="Maintenance.php">Maintenance </a></li>
        </ul>
        <div class="space-1"></div>
        <ul class="nav nav-pills" id="nav-submenu">
            <li class="yellow  active"><a href="reports.php">Reports</a></li>
            <li class="yellow"><a href="OJT-reports.php">OJT Reports</a></li>
        </ul>
        <div class="space-1"></div>

        <div class = "container">
            <div class = "col-md-12 box">
                <div class = "col-md-6">
                    <h3>REPORTS</h3>
                    <label>TOTAL NUMBER OF STUDENTS: <?php echo $Total; ?></label>
                </div>
                <div class = "container">
                    <div class = "col-md-6"><br>
                        <span class="combodate">
                            <select id="grad_month" name="grad_month" class="month" style="width:25%; height:34px;">
                                <option value="00">- Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option> 
                                <option value="03">March</option> 
                                <option value="04">April</option> 
                                <option value="05">May</option> 
                                <option value="06">June</option> 
                                <option value="07">July</option> 
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <select id="grad_year" name="grad_year" class="year" style="width:30%; height:34px;">
                                <option value="00">- Year Graduated</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                            </select>
                        </span> 
                    </div> 
                </div>
            </div>
            <table class = "Applicants table" width = "100%" cellpadding = "0">
                <thead>
                    <tr></tr>  
                    <tr>
                        <th width = "40%" class = "tabletitle">Course</th>
                        <th width = "20%" class = "tabletitle">Number of Students </th>
                        <th width = "20%" class = "tabletitle"> Number of Employed </th>
                        <th width = "20%" class = "tabletitle">Number of Unemployed</th>
                    <tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSTM">BSTM</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSTM; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSTM; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSTM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSBM">BSBM</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSBM; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSBM; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSBM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=ABCOMM">ABCOMM</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalABCOMM; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedABCOMM; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedABCOMM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSITDA">BSITDA</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSITDA; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSITDA; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSITDA; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSHRM">BSHRM</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSHRM; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSHRM; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSHRM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSCS">BSCS</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCS; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSCS; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSCS; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSIT">BSIT</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSIT; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSIT; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSIT; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSCPE">BSAT</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCPE; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSCPE; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSCPE; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSCPE">BSCPE</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCPE; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedBSCPE; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedBSCPE; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=ACT">ACT</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalASCT; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployedASCT; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployedASCT; ?></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
 
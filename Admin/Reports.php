<!DOCTYPE html>

<?php
include('connection.php');

$FieldOfStudy = 'FieldofStudy';

$qry = mysql_query("SELECT DISTINCT FieldOfStudy FROM studentinfotbl");
$TotalStudents = mysql_query("SELECT COUNT(*) FROM studentinfotbl");
$Q1 = mysql_fetch_array($TotalStudents);
$Total = $Q1[0];


$CSStudent = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE FieldofStudy = 'Computer Science'");
$Q4 = mysql_fetch_array($CSStudent);
$TotalCSStudent = $Q4[0];

$CSStudentEmployed = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE FieldofStudy = 'Computer Science' AND EmploymentStatus = 'Employed'");
$Q2 = mysql_fetch_array($CSStudentEmployed);
$TotalEmployed = $Q2[0];

$CSStudentUnemployed = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE FieldofStudy = 'Computer Science' AND EmploymentStatus = 'Unemployed'");
$Q3 = mysql_fetch_array($CSStudentUnemployed);
$TotalUnemployed = $Q3[0];

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Info</title>

     <!-- Bootstrap Core CSS -->
    <link href="../css/admin.bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/admin.agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<style type="text/css">

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
h1,  {
    color: #000000;
}
:-webkit-any(article,aside,nav,section) h1 {
    font-size: 1.5em;
    -webkit-margin-before: 0.83em;
    -webkit-margin-after: 0.83em;
}
.reports{
    padding:10px;
    border: 1px solid #E5E4E2;
}
.combodate{
    margin-left: 120px;
}
</style>

<body id="page-top" class="index resume">
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

    <div class="resume_bg">
        <ul class="nav nav-tabs">
            <li role="presentation" id="myinfo" class="item"><a href="Admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item active" ><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item"><a href="Account.php">Account</a></li>
            
        </ul>
        <div class="space"></div>
        <div class = "container">
         <div class = "col-md-12">
            <div class = "reports">
                <div class = "container">
                    <div class = "col-md-6">
                        <h3>REPORTS</h3>
                        <h5>Total Number of Students: <?php echo $Total; ?> </h5>
                    </div>
                    <div class = "col-md-6">
                        <br>
                                    <span class="combodate ">
                                        <select id="grad_month" name="grad_month" class="month" style="width:25%; height:34px;">
                                            <option value="00">Month</option>
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
                                        <select id="grad_year" name="grad_year" class="year" style="width:30%; height:34px;" >
                                            <option value="00">Year Graduated</option>
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
        <table class = "Applicants" width = "100%" cellpadding = "0">
           <thead>
           <tr>
	
           </tr>	
				<tr>
					<th width= "40%" class = "tabletitle">Field of Study</th>
					<th width = "20%" class = "tabletitle">Number of Students </th>
					<th width = "20%" class = "tabletitle"> Number of Employed </th>
					<th width = "20%" class = "tabletitle">Number of Unemployed</th>
				<tr>
			</thead>

            <tbody>
                <tr>
                    <td>
                    <a href = "Field.php">Computer Science</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalCSStudent; ?></td>
                    <td class = "tcenter"><?php echo $TotalEmployed; ?></td>
                    <td class = "tcenter"><?php echo $TotalUnemployed; ?></td>
                </tr>
            </tbody>
        </table>
            </div>
         </div>
    </div>
</body>
 
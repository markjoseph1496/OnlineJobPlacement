<?php
include('../connection.php');
session_start();

$Course = $_GET['CourseID'];
$MajorCourse = 'MajorCourse';
$StudentID = 'StudentID';
$FirstName = 'FirstName';
$LastName = 'LastName';
$Title = 'Not Selected';
$EmploymentStatus = 'EmploymentStatus';

$TotalStudents = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse='$Course'");
$Q1 = mysql_fetch_array($TotalStudents);
$Total = $Q1[0];

$qry = "SELECT * FROM studentinfotbl WHERE MajorCourse='$Course' ORDER BY LastName";
$result = mysql_query($qry);
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>a
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


/* ---------- SEARCH ---------- */
fieldset {
    border: 0;
    margin: 0;
    padding: 0;
}

input {
    border: none;
    font-family: inherit;
    font-size: inherit;
    line-height: 1.5em;
    margin: 0;
    outline: none;
    padding: 0;
    -webkit-appearance: none;
}

input[type="search"] {
    -webkit-appearance: textfield;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

.clearfix { *zoom: 1; }
.clearfix:before, .clearfix:after {
    content: "";
    display: table; 
}
.clearfix:after { clear: both; }

#search {
    background: #006681;
    border-radius: 3px;
    display: inline-block;
    padding: 7px;
    margin-left: 600px;
}

#search input {
    float: left;
}

#search input[type="search"],
#search input[type="submit"] {
    border-radius: 3px;
    font-size: 12px;
}

#search input[type="search"] {
    background: #fff;
    color: #42454e;
    min-width: 250px;
    padding: 6px 8px;
}

#search input[type="submit"] {
    background: #fed136;
    color: #fff;
    font-weight: bold;
    margin-left: 7px;
    padding: 6px 10px;
}

#search input[type="submit"]:hover {
    background: #FFDB58;
}

#search input[type="search"]::-webkit-input-placeholder { color: #42454e; }
#search input[type="search"]:-moz-placeholder { color: #42454e; }
#search input[type="search"]:-ms-input-placeholder { color: #42454e; }


.bulletin{
    padding:30px;
    border: 1px solid #E5E4E2;
}

.total{
    padding:10px;
    border: 1px solid #E5E4E2;
    width: 280px;
    margin-left: 450px;
}

.header_advertising{
    padding:10px;
    border: 1px solid #E5E4E2;
}
.header2_advertising{
    padding:10px;
    border: 1px solid #E5E4E2;

}
.industry {
    margin-left: 500px;
    margin-top: -100px;
}
.position  {
    margin-left: 500px;
}
.specialization {
    margin-left: 500px;
}
.status {
    margin-left: 500px;
}
.asd {
    margin-top:-20px;
    float: left;
}
#filter
            {
              width: 100px;
              height: 30px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              margin-left: 790px;
              margin-top: -50px;
              
            }
            #filter:hover
            {
              background-color: #006681;
            } 
 .export {
    margin-left: 850px;
    margin-top: -35px;
    float:left;
 }   
 #btl {
    margin-left: 120px;
    margin-top: -50px;
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
                        <a class="page-scroll" href="../login-company.php?id=1">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div class="white-holder-3">
        <ul class="nav nav-tabs">
            <li role="presentation" id="company" class="item"><a href="company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="positions.php">Positions</a></li>
            <li role="presentation" id="calendar" class="item " ><a href="calendar.php">Calendar</a></li>
            <li role="presentation" id="report" class="item "><a href="report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item " ><a href="settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item "><a href="resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item active"><a href="studentlist.php">Student List</a></li>
            <li role="presentation" id="applicantlist" class="item "><a href="applicantlist.php">Applicant List</a></li>
        </ul>
        <div class="space-1"></div>
    
        <div class="space"></div>
        <div class = "container">
            <div class = "col-md-12">
                <div class = "header_advertising">
                    <h3> COURSE<h3>
                </div>
                 <div class = "header2_advertising">
                   <div class = "container">
                    <div class = "col-md-4">
                        <b> Total Number of Students: </b>
                    </div> 

                    </div>
                </div> <!--header-->
                    <!--table-->
        <table class = "Applicants" width = "100%" cellpadding = "0">
           <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width= "20%" class = "tabletitle">Student ID </th>
                    <th width = "30%" class = "tabletitle"> Student Name </th>
                    <th width = "25%" class = "tabletitle">Course</th>
                    <th width = "25%" class = "tabletitle"> Employment Status</th>
                <tr>
            </thead>

            <tbody>
                <?php
                    while($rows = mysql_fetch_array($result)){
                ?>
                <tr>
                    <td class = "tcenter"><?php echo $rows[$StudentID]; ?></td>
                    <td>
                    <a href = "resumelink.php"><?php echo $rows[$LastName] .", ". $rows[$FirstName]; ?></a>
                    </td>
                    <td class = "tcenter"><?php echo $rows[$MajorCourse]; ?></td>
                    <td class = "tcenter"><?php echo $rows[$EmploymentStatus]; ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
           </div>
        </div>
    </div>
</body>
 
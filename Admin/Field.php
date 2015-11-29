<!DOCTYPE html>

<?php 
include('connection.php');
session_start();

$Course = $_GET['CourseID'];
$FirstName = 'FirstName';
$LastName = 'LastName';
$EmploymentStatus = 'EmploymentStatus';

    if($Course == "BSTM"){
        $Course = "Bachelor of Science in Tourism Management";
    }
    elseif($Course == "BSBM"){
        $Course = "Bachelor of Science in Business Management Major in Operations";
    }
    elseif($Course == "ABCOMM"){
        $Course = "Bachelor of Arts in Communication";
    }
    elseif($Course == "BSITDA"){
        $Course = "Bachelor of Science in Information Technology Major in Digital Arts";
    }
    elseif($Course == "BSHRM"){
        $Course = "Bachelor of Science in Hotel & Restaurant Management";
    }
    elseif($Course == "BSCS"){
        $Course = "Bachelor of Science in Computer Science";
    }
    elseif($Course == "BSIT"){
        $Course = "Bachelor of Science in Information Technology";
    }
    elseif($Course == "BSAT"){
        $Course = "Bachelor of Science in Accounting Technology";
    }
    elseif($Course == "BSCPE"){
        $Course = "Bachelor of Science in Computer Engineering";
    }
    elseif($Course == "ACT"){
        $Course = "2-Year Associate in Computer Technology";
    }
    else{
        $Course = "No Course Selected.";
    }


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
                        <a class="page-scroll" href="#">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div class="white-holder-3">
        <ul class="nav nav-tabs">
            <li role="presentation" id="myinfo" class="item "><a href="Admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item active"><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item"><a href="Account.php">Account</a></li>
            <li role="presentation" id="applications" class="item"><a href="Requested.php">Requested</a></li>
            <li role="presentation" id="applications" class="item "><a href="CompanyList.php">Company List</a></li>
            <li role="presentation" id="applications" class="item "><a href="AdviserList.php">Adviser List</a></li>
            <li role="presentation" id="applications" class="item"><a href="Maintenance.php">Maintenance </a></li>
            
        </ul>
        <div class="space-1"></div>
        <ul class="nav nav-pills" id="nav-submenu">
            <li class="yellow active"><a href="reports.php">Reports</a></li>
            <li class="yellow "><a href="OJT-reports.php">OJT Reports</a></li>
        </ul>
        <div class="space-1"></div>
    
        <div class="space"></div>
        <div class = "container">
            <div class = "col-md-12">
                <div class = "header_advertising">
                    <h5> <?php echo $Course ?> <h5>
                     <span class = export>
                        Export: <a  class = "btn btn-default" id = "xls" href= "#"><b> XLS </b></a>
                       <a class = "btn btn-default" id = "btl" href= "#"><b> Back to List </b></a>
                       </span> 
                </div>
                 <div class = "header2_advertising">
                   <div class = "container">
                    <div class = "col-md-4">
                        <b> Total Number of Students: <?php echo $Total;?> </b>
                    </div> 
                                <div class = "asd">
                                     <form>
                                        <select id="industry" name="industry" class="industry" style="width:30%; height:30px;">
                                           <option value = "ind"> Select an Industry </option>
                                           <option value = "acc"> Accounting / Audit </option>
                                            <option value = "amp">Advertising / Marketing Promotion </option>
                                            <option value = "aaa">Aerospace/Aviation/Airline </option>
                                            <option value = "appf">Agricultural/Plantation/Poultry/Fisheries </option>
                                            <option value = "af">Apparel/Fashion </option>
                                            <option value = "ad">Arts/Design </option>
                                            <option value = "aav"> Automobile/Automotive Ancillary/Vehicle </option>
                                        </select><br>
                                       <select id="position" name="position" class="position" style="width:25%; height:30px;">
                                         <option value = "pos"> Select Position </option>
                                         <option value = "tlp"> Top Level Management </option>
                                         <option value = "sm"> Senior Manager </option>
                                         <option value = "man"> Manager </option>
                                         <option value = "ses"> Senior Executive/ Supervisor </option>
                                         <option value = "je"> Junior Executive </option>
                                         <option value = "fel"> Fresh/Entry Level </option>
                                         <option value = "nex"> Non-Executive </option>
                                         <option value = "train"> Trainee </option>
                                        </select><br>
                                        <select id="specialization" name="specialization" class="specialization" style="width:30%; height:30px;">
                                        <option value = "spe"> Select Specialization </option>
                                         <option value = "ass"> Actuarial Science/ Statistics </option>
                                         <option value = "amp"> Advertising/ Media Planning </option>
                                         <option value = "aid"> Architecture/ Interior Design  </option>
                                         <option value = "aad">Arts and Design  </option>
                                         <option value = "acgd"> Arts/ Creative/ Graphics Design  </option>
                                         <option value = "aam"> Aviation/ Aircraft Maintenance </option>
                                         <option value = "bfs"> Banking/ Financial Services  </option>
                                         <option value = "bio"> Biotechnology  </option>
                                         <option value = "ccca"> Call Center Agent  </option>
                                        </select><br>
                                        <select id="status" name="status" class="status" style="width:25%; height:30px;" >
                                            <option value = "pos"> Select Employment Status </option>
                                            <option value="emp">Employed</option>
                                            <option value="unemp">Unemployed</option>
                                        </select>
                                         <button type = "submit" class = "btn btn-danger " id = "filter" href= "#"><b> FILTER </b></button>
                                     </form>
                            </div>
                    </div>
                </div> <!--header-->
                    <!--table-->
        <table class = "Applicants" width = "100%" cellpadding = "0">
           <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width= "25%" class = "tabletitle"> Student Name</th>
                    <th width = "15%" class = "tabletitle"> Position Level </th>
                    <th width = "20%" class = "tabletitle">  Specialization</th>
                    <th width = "15%" class = "tabletitle"> Industry</th>
                    <th width = "20%" class = "tabletitle"> Employment Status</th>
                    <th width = "5%" class = "tabletitle"> </th>
                <tr>
            </thead>

            <tbody>
                <?php
                    while($rows = mysql_fetch_array($result)){
                ?>
                <tr>
                    <td>
                    <a href = "Resumelink.php"><?php echo $rows[$LastName] .", ". $rows[$FirstName]; ?></a>
                    </td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"><?php echo $rows[$EmploymentStatus]?></td>
                    <td>
                        <a id='Edit' name="btnedit" href="EditStudent.php" class='btn btn-default'> 
                        <i class='fa fa-pencil'></i>
                        </a> 
                    </td>

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
 
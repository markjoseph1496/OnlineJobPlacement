<!DOCTYPE html>
<?php
session_start();
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
.bulletin{
    padding:30px;
    border: 1px solid #E5E4E2;
    margin-top: 50px;
}
.white-holder {
    background-color: #f7f7f7;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    padding: 80px 25px;
    margin: 10px;
    max-width:100%;
    max-height:100%;
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
                        <a class="page-scroll" href="../login-company.php?id=1">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div class="white-holder">
        <ul class="nav nav-tabs">
            <li role="presentation" id="company" class="item active"><a href="company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="positions.php">Positions</a></li>
            <li role="presentation" id="calendar" class="item " ><a href="calendar.php">Calendar</a></li>
            <li role="presentation" id="report" class="item"><a href="report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item" ><a href="settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item"><a href="studentlist.php">Student List</a></li>
            <li role="presentation" id="applicantlist" class="item "><a href="applicantlist.php">Applicant List</a></li>
        </ul>
        <div class="space"></div>
        <div class = "container">
         <div class = "col-md-8">
                <div class = "container">
                        <h3>My Positions</h3>
                </div>

        <?php
        include('../connection.php');

        $CompanyID = $_SESSION['CompanyID'];

            $plevel = 'PositionLevel';
            $pdatef = 'PostingDateFrom';
            $pdatet = 'PostingDateTo';
            $status = 'Status'; 
        

            $query = "SELECT * FROM comppositiontbl WHERE CompanyID = '$CompanyID'";
            $Result = mysql_query($query);

            //$query1 = "SELECT * FROM compcoursetbl WHERE Email = '$x'";
            //$Result1 = mysql_query($query1);  
        ?>
        <table class = "Applicants" width = "100%" cellpadding = "0">
           <thead>
           <tr>
	
           </tr>	
				<tr>
					<th width= "30%" class = "tabletitle">Positions</th>
					<th width = "25%" class = "tabletitle">From </th>
					<th width = "25%" class = "tabletitle">To </th>
                    <th width = "25%" class = "tabletitle">Status </th>
				<tr>
			</thead>

            <tbody>
            <?php
                while ($row = mysql_fetch_array($Result)) { 
                        
                    
            ?>
                <tr>
                   <td>
                    <a href = "#"><?php echo $row[$plevel]; ?></a>
                    </td>
                   <td><?php echo $row[$pdatef]; ?></td>
                   <td><?php echo $row[$pdatet]; ?></td>
                   <td><?php echo $row[$status]; ?></td>
                </tr>

            <?php

                }
            ?> 
            </tbody>
        </table>
            </div>

            <div class = "col-md-4">
                <div class = "bulletin">
                   
                    <h5>Bulletin..</h5>
                   <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   
                </div>   
            </div> 
         </div>
    </div>
</body>
 
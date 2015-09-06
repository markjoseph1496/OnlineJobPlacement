<!DOCTYPE html>
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
    
    text-align: left;
    padding: 3px 5px;
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
.nav-pills>li>a{
border-radius:2px;

}

.nav>li>a {
padding:5px 10px;


}

.nav>li>a {
position: relative;
display:block;

}

.yellow a {
background-color: #fed136;
border-color: #000;
color: #006681;
}

.yellow :hover {
border-color: #000;
background-color: #006681;
}

::selection {
    text-shadow: none;
    background: #fed136;
}

.space1 {
    margin: 1rem 0rem;
    border-bottom: 0em;
    line-height: 1;
    height: 0em;
}  
#submenu{
    margin-left: 50px;
}  
.txt {
    margin-left: 150px;
}
.date{
    margin-left: 200px;
}
.filter{
    margin-left: 150px;
}
#checkbox{
    margin-left: 300px;
}
#checkbox1{
    margin-left: 500px;
    margin-top: -88px;
}
.Export{
    margin-left: 700px;
}
#date_from{
    width:300px;
}
.date_to{
    width:300px;
    margin-left: 350px;
    margin-top: -60px;
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
            <li role="presentation" id="company" class="item"><a href="Company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Positions.php">Positions</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Database.php">Database</a></li>
            <li role="presentation" id="report" class="item active"><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item" ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Resumesearch.php">Resumelink Search</a></li>  
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow active"><a href="Report.php">Resumelink</a></li>
            <li class="yellow"><a href="Report_Position.php">Position</a></li>
        </ul>

        <div class="space"></div>
        <div class = "container">
        
<form method = "POST">
            <div class = "col-md-12">   
                <div class = "panel panel-warning">
                <div class = "panel-heading">
                <h3 class = "panel-title">Reports: Resumes</h3>
                </div>
            <div class = "panel-body">
              <p class = "txt" >Choose from the files below which information do you want to generate by clicking <b>"Generate Report"</b> button</p>
              <br>
              <form method = "POST">
                <div class = "date">
                <label = "usr" class = "control-label">Application date from: </label>
                 <input type = "date" name = "date_from" id = "date_from" class = "form-control">
                 <div class = "date_to">
                 <label = "usr" class = "control-label">to: </label>
                <input type = "date" name = "date_to" id = "date_to" class = "form-control">
                </div>
                </div>
                <div class = "space"></div>
                <h4 class = "filter">Filter Information of Positions by its:</h4>
                <div class="checkbox" id = "checkbox">
                    <label><input type="checkbox" id = "chkall" value="">All</label><br>
                    <label><input type="checkbox" value="">Position</label><br>
                    <label><input type="checkbox" value="">Specialization</label><br>
                    <label><input type="checkbox" value="">Location</label>
                </div>
                <div class="checkbox" id = "checkbox1">
                    <label><input type="checkbox" value="">Gender</label><br>
                    <label><input type="checkbox" value="">Preffered Industry</label><br>
                    <label><input type="checkbox" value="">Willing to work Overseas</label><br>
                    <label><input type="checkbox" value="">Looking for an OJT</label>
                </div>
                <div class = "Export">
                Export as: <a  class = "btn btn-default" id = "xls" href= "#"><b> Excel </b></a>
                       <a class = "btn btn-default" id = "btl" href= "#"><b> Generate Report </b></a>
                </div> 
            </div>
            </div>
            </div>
         </div>
    </div>
</body>
 
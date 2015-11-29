<!DOCTYPE html>

<?php 
include('connection.php');
session_start();

$qry = "select * from companyinfotbl";
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

#ButtonSignOut  {
    padding: 7px;
    background-color:#fed136;
    margin-left: 520px;
    margin-top: 10px;
    color:#006681; ;

}
#ButtonSignOut input[type="submit"]:hover {
    background: #fff;
}

.total{
    padding:10px;
    border: 1px solid #E5E4E2;
    width: 280px;
    margin-left: 450px;
}
.white-holder {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    padding: 80px 25px;
    margin: 10px;
    max-width:100%;
    max-height:100%;
}  
</style>


<body id="page-top" class="index resume">
    <form method = "POST">
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
            <li role="presentation" id="myinfo" class="item "><a href="Admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item"><a href="Account.php">Account</a></li>
            <li role="presentation" id="applications" class="item"><a href="Requested.php">Requested</a></li>
            <li role="presentation" id="applications" class="item active"><a href="CompanyList.php">Company List</a></li>
            <li role="presentation" id="applications" class="item "><a href="AdviserList.php">Adviser List</a></li>
            <li role="presentation" id="applications" class="item"><a href="Maintenance.php">Maintenance </a></li>
            
        </ul>
    
        <div class="space"></div>
        <div class = "container">
           <div class = "col-md-12">
                    <table class = "Applicants" width = "100%" cellpadding = "0">

                        
        <table class = 'Applicants' width = '100%' cellpadding = '0'>
          <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width= '20%' class = 'tabletitle'>Company Name</th>
                    <th width = '40%' class = 'tabletitle'>Description</th>
                    <th width = '25%' class = 'tabletitle'>Location</th>
                    <th width = '10%' class = 'tabletitle'></th>
                <tr>
            </thead>
            <tbody>
            <?php
                while($qry = mysql_fetch_Array($result)){
                $CompanyName = $qry['CompanyName'];
                $City = $qry['City'];
                echo "
                 <tr>
                    <td width= 20% class = tabletitle>
                      <a href = '#'>$CompanyName</a>
                    </td>
                    <td width = 40% class = tabletitle></td>
                    <td width = 25% class = tabletitle>$City</td>
                    <form method = 'POST'>
                    <input type='hidden' name='delete_id' value='' />
                    <td>
                        <button  name = 'btndelete' href='' class='btn btn-danger'> 
                        <i class='fa fa-minus-square'></i> 
                        </button> 
                        <button id='Edit' name='btnedit' href='' class='btn btn-default'> 
                        <i class='fa fa-pencil'></i>
                        </button> 
                    </td>
                    </form>
                    <tr>
                ";
                }
             ?>   
            </tbody>
        </table>
           </div>
        </div>
    </div>
</form>
</body>
</html>
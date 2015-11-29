<!DOCTYPE html>

<?php
include('connection.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Info</title>

    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootbox.min.js"></script>

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

<script>
        $(document).on("click", ".btnDecline", function(result) {
            bootbox.confirm({
              title: 'Decline Request',
              message: 'Are you sure you want to decline this request?',
              buttons: {
                  'cancel': {
                      label: 'Cancel',
                      
                  },
                  'confirm': {
                      label: 'Decline',
                      className: 'btn-danger pull-right'
                  }
              },
              callback: function(result) {
                  if (result) {
                       window.location = $("a[data-bb='confirmDeleteRequest']").attr('href');
                  }
              }
          });
        });

        $(document).on("click", ".btnAccept", function(result) {
            bootbox.confirm({
              title: 'Accept Request',
              message: 'Are you sure you want to accept this request?',
              buttons: {
                  'cancel': {
                      label: 'Cancel',
                      
                  },
                  'confirm': {
                      label: 'Accept',
                      className: 'btn-primary pull-right'
                  }
              },
              callback: function(result) {
                  if (result) {
                       window.location = $("a[data-bb='confirmAcceptRequest']").attr('href');
                  }
              }
          });
        });
</script>

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
            <li role="presentation" id="resumelink" class="item  "><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item "><a href="Account.php">Account</a></li>
            <li role="presentation" id="applications" class="item active"><a href="Requested.php">Requested</a></li>
            <li role="presentation" id="applications" class="item"><a href="CompanyList.php">Company List</a></li>
            <li role="presentation" id="applications" class="item"><a href="AdviserList.php">Adviser List</a></li>
            <li role="presentation" id="applications" class="item"><a href="Maintenance.php">Maintenance </a></li>
        </ul>
        <div class="space-1"></div>
                    <?php
                    if(isset($_GET['ID'])){
                        $ID=$_GET['ID'];
                            if($ID == "Accepted"){
                                echo '
                                    <div class="alert alert-success">
                                        <span class="glyphicon glyphicon-info-sign"></span> 
                                        Request Accepted.
                                    </div>
                                ';
                            }
                            elseif($ID == "Rejected"){
                                echo '
                                    <div class="alert alert-success">
                                        <span class="glyphicon glyphicon-info-sign"></span> 
                                        Request Rejected.
                                    </div>
                                ';
                            }
                    }
                    ?>
                <div class = "container">
           <div class = "col-md-12">
                    <table class = "Applicants" width = "100%" cellpadding = "0">
        <table class = 'Applicants' width = '100%' cellpadding = '0'>
          <thead>
           <tr>
           </tr>    
                <tr>
                    <th width= '25%' class = 'tabletitle'>Company Name</th>
                    <th width = '25%' class = 'tabletitle'>Student ID</th>
                    <th width = '25%' class = 'tabletitle'>Student Name</th>
                    <th width = '15%' class = 'tabletitle'>Status</th>
                    <th width = '10%' class = 'tabletitle'></th>
                <tr>
            </thead>

                <?php 
                $qry = "SELECT * FROM resumerequesttbl WHERE Status = 'Pending'";
                $result = mysql_query($qry);
                while($qry = mysql_fetch_array($result)){
                    $RequestID = $qry['RequestID'];
                    $CompanyID = $qry['CompanyID'];
                    $StudentIDa = $qry['StudentID'];
                    $Status = $qry['Status'];

                        $q2 = "SELECT * FROM companyinfotbl WHERE CompanyID = '$CompanyID'";
                        $r2 = mysql_query($q2);
                        while($q2 = mysql_fetch_array($r2)){
                            $CompanyName = $q2['CompanyName'];

                            $q1 = "SELECT * FROM studentinfotbl WHERE StudentID = '$StudentIDa'";
                            $r1 = mysql_query($q1);
                            while($q1 = mysql_fetch_array($r1)){
                                $StudentID = $q1['StudentID'];
                                $FirstName = $q1['FirstName'];
                                $LastName = $q1['LastName'];
                                $FullName = $LastName . ", " . $FirstName;

                                    echo"
                                    <tbody>
                                        <tr>
                                            <td width= 25% class = tabletitle> <a href = '#'></a>$CompanyName</td>
                                            <td width = 25% class = tabletitle>$StudentID</td>
                                            <td width = 25% class = tabletitle>$FullName</td>
                                            <td width = 15% class = tabletitle>$Status</td>
                                            <td>
                                                <a href=# class='btn btn-default btnAccept'> <i class='fa fa-check-circle'></i> </a>
                                                <a href=# class='btn btn-danger btnDecline'> <i class='fa fa-minus-square'></i> </a>    
                                                
                                                <a data-bb='confirmDeleteRequest' class='bb-alert alert alert-info' style='display: none;' href='Request.php?fn=Delete&ID=$RequestID'>
                                                <a data-bb='confirmAcceptRequest' class='bb-alert alert alert-info' style='display: none;' href='Request.php?fn=Accept&ID=$RequestID'>
                                            </td>
                                        <tr>            
                                    </tbody>                                        
                                    ";

                            }
                        }
                }
                ?>
        </table>
           </div>
        </div>
    </div>

    </div>
    </div>
</body>
</html>
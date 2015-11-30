<?php
include('../connection.php');
session_start();

$Email = $_SESSION['Email'];

$qry = "SELECT * FROM companyinfotbl WHERE Email = '$Email'";
$result = mysql_query($qry);

    while($qry = mysql_fetch_Array($result)) {

        $CompanyID = $qry['CompanyID'];
    }
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

.resume_bg{
    height:1000px;
}

 #save
            {
              width: 300px;
              height: 40px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 500px;
            }
            #save:hover
            {
              background-color: #006681;
            }   
#cancel
            {
              width: 300px;
              height: 40px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 500px;
            }
            #cancel:hover
            {
              background-color: #fed136;
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
#Adduser
            {
              width: 100px;
              height: 40px;
              border: 1px solid #E5E4E2;
              margin-left: 1000px;
              margin-top: -70px;
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

     <div class="white-holder">
       <ul class="nav nav-tabs">
            <li role="presentation" id="company" class="item"><a href="company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="positions.php">Positions</a></li>
            <li role="presentation" id="calendar" class="item " ><a href="calendar.php">Calendar</a></li>
            <li role="presentation" id="report" class="item "><a href="report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item " ><a href="settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item "><a href="resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item "><a href="studentlist.php">Student List</a></li>
            <li role="presentation" id="applicantlist" class="item active "><a href="applicantlist.php">Applicant List</a></li>
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow  active "><a href="applicantlist.php">Pending</a></li>
            <li class="yellow"><a href="applicant_accepted.php">Accepted</a></li>
        </ul>
        <br>
        <div class = "container">
            <div class = "col-md-12">
                <h3>List of Accepted Applicants</h3>
                
        <table class = "Applicants" width = "100%" cellpadding = "0">
        <table class = 'Applicants' width = '100%' cellpadding = '0'>
          <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width= '20%' class = 'tabletitle'>Position</th>
                    <th width = '20%' class = 'tabletitle'>Applicant Name</th>
                    <th width = '15%' class = 'tabletitle'>Course</th>
                    <th width = '20%' class = 'tabletitle'>Location</th>
                    <th width = '15%' class = 'tabletitle'>Email</th>
                <tr>
            </thead>
                <?php
                    $qry1 = "SELECT * FROM requesttocompanytbl WHERE CompanyID = '$CompanyID' AND Status = 'Accepted'";
                    $result1 = mysql_query($qry1);
                    while($qry1 = mysql_fetch_array($result1)){
                        $RID = $qry1['RID'];
                        $StudentID = $qry1['StudentID'];
                        $PositionID = $qry1['PositionID'];

                        $qry2 = "SELECT * FROM studentinfotbl WHERE StudentID = '$StudentID'";
                        $result2 = mysql_query($qry2);
                        while($qry2 = mysql_fetch_array($result2)){
                            $FirstName = $qry2['FirstName'];
                            $LastName = $qry2['LastName'];
                            $Course = $qry2['MajorCourse'];
                            $FullName = $LastName . ", " . $FirstName;

                            $qry3 = "SELECT * FROM studcontactstbl WHERE StudentID = '$StudentID'";
                            $result3 = mysql_query($qry3);
                            while($qry3 = mysql_fetch_array($result3)){
                                $Location = $qry3['City'];
                                $Email = $qry3['Email'];

                                $qry4 = "SELECT * FROM  comppositiontbl WHERE PositionID = '$PositionID'";
                                $result4 = mysql_query($qry4);
                                while($qry4 = mysql_fetch_array($result4)){
                                    $PositionLevel = $qry4['PositionLevel'];
                                    echo"
                                        <tbody>
                                            <tr>
                                                <td width= 20% class = tabletitle> $PositionLevel </td>
                                                <td width = 20% class = tabletitle> <a href = ''> $FullName </a></td>
                                                <td width = 15% class = tabletitle>$Course</td>
                                                <td width = 15% class = tabletitle>$Location</td>
                                                <td width = 15% class = tabletitle>$Email</td>
                                                <tr>
                                        </tbody>
                                        ";
                                } 
                            }
                        }
                    }
                ?>
        </table>
        </div>
    </div>
        <div class="field">
        <div class="invisible-line"></div>
    </div>
</body>
</html>
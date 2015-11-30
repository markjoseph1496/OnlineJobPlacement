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
#Event
            {
              width: 130px;
              height: 40px;
              border: 1px solid #E5E4E2;
              margin-left: 980px;
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
            <li role="presentation" id="company" class="item "><a href="company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="positions.php">Positions</a></li>
            <li role="presentation" id="report" class="item"><a href="report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item active" ><a href="settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item"><a href="studentlist.php">Student List</a></li>
            <li role="presentation" id="applicantlist" class="item "><a href="applicantlist.php">Applicant List</a></li>
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow "><a href="settings.php">Company</a></li>
            <li class="yellow active"><a href="settings_calendar.php">Calendar</a></li>
            <li class="yellow"><a href="settings_myaccount.php">My Account</a></li>
        </ul>

        <div class="space"></div>
        <div class = "container">
             <div class = "col-md-12">
             <?php
              if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    if($id=="EventEdit"){
                        echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully updated.
                        </div>';
                    }
                    elseif($id=="EventDelete"){
                        echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully deleted.
                        </div>';
                    }
                    elseif($id=="EventAdd"){
                        echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully added.
                        </div>';
                    }
                }   
             ?>
                <h3>Calendar: Event List</h3>
                <a id="Event" href="settings_createevent.php" class=" btn btn-default"> Create an Event </a>
    <?php
      include('../connection.php');

      $x = $_SESSION['Email'];
          $eventtitle = 'EventTitle';
          $datefrom = 'EventDatef';
          $dateto = 'EventDatet';
          $status = 'Status';

          $query = ("SELECT * FROM compeventtbl WHERE Email = '$x'");
          $Result = mysql_query($query);
    ?>
        <table class = "Applicants" width = "100%" cellpadding = "0">
           <thead>
           <tr>
        
           </tr>    
                <tr>
                    <th width= "40%" class = "tabletitle"></th>
                    <th width = "20%" class = "tabletitle">Event Date </th>
                    <th width = "25%" class = "tabletitle"> Status </th>
                    <th width = "15%" class = "tabletitle"> </th>
                <tr>
            </thead>
            <tbody>
              <?php
                while ($row = mysql_fetch_array($Result)) {
                  
              ?>
                <tr>
                   <td width = 40% class = tabletitle><?php echo $row[$eventtitle];?></td>
                   <td width = 20% class = tabletitle><?php echo $row[$datefrom]; echo " To "; echo $row[$dateto];?> </td>
                   <td width = 20% class = tabletitle><?php echo $row[$status];?> </td>
                   <form method="POST">
                      <input type="hidden" name="delete_id" value="<?php echo $row['EventID']; ?>" />
                   <td> 
                        <button id="Adduser" href="" name="btnedit" class=" btn btn-default"> 
                        <i class="fa fa-pencil"></i></button> 
                        <button id="Adduser" href="#" class=" btn btn-warning"> 
                        <i class="fa fa-exclamation"></i> </button>
                        <button id="Adduser" name="btndelete" href="#" class=" btn btn-danger"> 
                        <i class="fa fa-minus-square"></i> </button> 
                   </td>
                   </form>
                </tr> 
                <?php
                }
                ?>
            </tbody>
        </table>
            </div>
            
    </div>
</body>
<?php
include('../connection.php');

    if(isset($_POST['btndelete'])){

    $Z = $_POST['delete_id'];
    
    $query = "DELETE FROM compeventtbl WHERE EventID='$Z'";
    $Result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='settings_calendar.php?id=EventDelete';
            </script>
            ";
}
if(isset($_POST['btnedit'])){
    $Z = $_POST['delete_id'];
    $_SESSION['delete_id'] = $Z;
    echo "
            <script type='text/javascript'>
            location.href='edit_event.php';
            </script>
            ";
}
?>
</html>
 
<!DOCTYPE html>

<?php
include('CONNECTION.php');

session_start();

$x = $_SESSION['Email'];

  if (isset($_POST['btnsave'])) {
      
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $position = $_POST['position'];
    $dept = $_POST['dept'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $query = ("INSERT INTO comaddusertbl (Email,UserName,Password,FirstName,MiddleName,LastName,Position,Department,Address,ContactNum) values ('$x','$username','$password','$fname','$mname','$lname','$position','$dept','$address','$contact')");
    $Result = mysql_query($query);
    echo "
          <script type='text/javascript'>
         location.href='Settings_Users.php?id=UserAdd'
         </script>
    ";
  };

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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
.adduser{
    margin-left: 250px;
    width: 600px;
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
            <li role="presentation" id="company" class="item "><a href="Company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Positions.php">Positions</a></li>
            <li role="presentation" id="report" class="item "><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item active" ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item"><a href="StudentList.php">StudentList</a></li>
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow "><a href="Settings.php">Company</a></li>
            <li class="yellow"><a href="Settings_Calendar.php">Calendar</a></li>
            <li class="yellow active"><a href="Settings_Users.php">User</a></li>
            <li class="yellow"><a href="Settings_MyAccount.php">My Account</a></li>
        </ul>

        
        <div class = "container">
            <div class = "col-md-12"> 
                <div class = "space1"></div>
            <div class = "adduser">
                <div class = "panel panel-warning">
                <div class = "panel-heading">
                <h3 class = "panel-title">Personal Information</h3>
                </div>
                 <form method = "POST">
            <div class = "panel-body">
               <table class = "infotable">
                <tbody>
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Username: </label>
                 </td>
                <td> 
                    <input type = "text" name = "username" id = "usr" class = "form-control" >
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Password: </label>
                 </td>
                <td> 
                    <input type = "password" name = "password" id = "usr" class = "form-control" >
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> First Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "fname" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Middle Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "mname" id = "usr" class = "form-control" >
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Last Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "lname" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Position: </label>
                 </td>
                <td> 
                    <input type = "text" name = "position" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Department: </label>
                 </td>
                <td> 
                    <input type = "text" name = "dept" id = "usr" class = "form-control" >
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Address: </label>
                 </td>
                <td> 
                   <input type = "text" name = "address" id = "usr" class = "form-control" >
                </td>
                </tr>

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Contact Number: </label>
                 </td>
                <td> 
                    <input type = "text" name = "contact" id = "usr" class = "form-control">
                </td>
                </tr>

                </tbody>
                </table>
            </div>
            </div>
            </div>
            </div>  

         </div>
           <button type = "submit" class = "btn btn-danger " id = "save" name = "btnsave"><b> SAVE </b></button>
            <div class = "space"></div>
             <button type = "submit" class = "btn btn-danger " id = "cancel"><b> CANCEL</b> </button>
         </form>
    </div>
</body>



</html>
 
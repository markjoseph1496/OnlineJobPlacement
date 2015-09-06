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
 #userlist
            {
              width: 100px;
              height: 40px;
              border: 1px solid #E5E4E2;
              margin-left: 1000px;
            }
.adduser{
    margin-left: 250px;
    width: 600px;
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
            <li role="presentation" id="resumelink" class="item" ><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item active"><a href="Account.php">Account</a></li>
           
        </ul>
        <div class="space"></div>
        <div class = "container">
            <div class = "col-md-12"> 
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
                    <label = "usr" class = "control-label"> Email: </label>
                 </td>
                <td> 
                    <input type = "text" name = "txtEmail" id = "usr" class = "form-control" >
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Password: </label>
                 </td>
                <td> 
                    <input type = "password" name = "txtPassword" id = "usr" class = "form-control" >
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> First Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "txtFname" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Middle Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "txtMname" id = "usr" class = "form-control" >
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Last Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "txtLname" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Position: </label>
                 </td>
                <td> 
                    <input type = "text" name = "txtPosition" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Department: </label>
                 </td>
                <td> 
                    <input type = "text" name = "txtDepartment" id = "usr" class = "form-control" >
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Address: </label>
                 </td>
                <td> 
                   <textarea name = "txtAddress" id = "add" rows="3" cols= "47"></textarea>
                </td>
                </tr>

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Contact Number: </label>
                 </td>
                <td> 
                    <input type = "text" name = "txtContact" id = "usr" class = "form-control">
                </td>
                </tr>

                </tbody>
                </table>
            </div>
            </div>
            </div>
            </div>  

         </div>
           <button type = "submit" class = "btn btn-danger " id = "save" href= "#" name = "btnSave"><b> SAVE </b></button>
            <div class = "space"></div>
             <button href = "records.php" class = "btn btn-danger " id = "cancel" name ="btnCancel"><b> CANCEL</b> </button>
         </form>
      </div>
    </div>
</body>

<?php
include('connection.php');

if(isset($_POST['btnSave'])){

   $Email = $_POST['txtEmail'];
   $Password = $_POST['txtPassword'];
   $FirstName = $_POST['txtFname'];
   $MiddleName = $_POST['txtMname'];
   $LastName = $_POST['txtLname'];
   $Position = $_POST['txtPosition'];
   $Department = $_POST['txtDepartment'];
   $Address = htmlspecialchars($_POST['txtAddress']);
   $Contact = $_POST['txtContact'];

   $query = "INSERT INTO admintbl (Email,Password,FirstName,MiddleName,LastName,Position,Department,Address,ContactNumber) values  ('$Email','$Password','$FirstName','$MiddleName','$LastName','$Position','$Department','$Address','$Contact')";
   $Result = mysql_query($query);
   echo "
         <script type='text/javascript'>
         alert('Registered Successfully.');
         location.href='./adduser.php';
         </script>
         ";
}
?>

</html>
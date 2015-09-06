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

#active
            {
              width: 80px;
              height: 40px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 900px;
            }
            #active:hover
            {
              background-color: #fed136;
            }  
#all
            {
              width: 80px;
              height: 40px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 1000px;
              margin-top: -60px;
            }
            #all:hover
            {
              background-color: #fed136;
            }
.panel-heading{
    height:60px;
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
#Addfolder
            {
              width: 150px;
              height: 40px;
              border: 1px solid #E5E4E2;
              margin-left: 950px;
              margin-top: -70px;
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
            <li role="presentation" id="dbase" class="item active" ><a href="Database.php">Database</a></li>
            <li role="presentation" id="report" class="item"><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item" ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="#">Resumelink Search</a></li>
        </ul>
        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow "><a href="Database.php">My Job Aplication</a></li>
            <li class="yellow" ><a href="Database_CustomFolder.php">Custom Folder</a></li>
            <li class="yellow active"><a href="Database_Events.php">Events</a></li>
        </ul>
            
        <div class="space"></div>
 <div class = "container">
         <div class = "col-md-12">
            <select id="lahat" name="lahat" class="lahat" style="width:10%; height:30px;"><option value = "spe"> All </option></select>                          
                <h3>Depository</h3>
               
 
           <table class = "Applicants" width = "100%" cellpadding = "0">
                    
           <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width= "20%" class = "tabletitle">Name/ID</th>
                    <th width = "20%" class = "tabletitle">Location</th>
                    <th width = "10%" class = "tabletitle">Age</th>
                    <th width = "20%" class = "tabletitle">Skills </th>
                    <th width = "20%" class = "tabletitle"> Specialization </th>
                <tr>
            </thead>

            <tbody>
                <tr>
                   <td>No Records..</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                </tr> 
            </tbody>
        </table>
                
                   
        </div>
         </div>
    </div>
</body>
 
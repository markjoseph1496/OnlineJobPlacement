<!DOCTYPE html>
<?php
include('CONNECTION.php');
session_start();

$x = $_GET['PID'];

      $qry = "SELECT * FROM comppositiontbl WHERE PositionID ='$x'";
      $result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result)){
              
              $PositionID = $qry['PositionID'];
              $status = $qry['Status'];
              $postingdate = $qry['PostingDate'];
              $positionlevel = $qry['PositionLevel'];
              $jspecialization = $qry['JSpecialization'];
              $EType = $qry['EType'];
              $MonthlySalary = $qry['MonthlySalary'];
              $Smin = $qry['SMin'];
              $Smax = $qry['SMax'];
              $Ymin = $qry['YMin'];
              $Ymax = $qry['YMax'];
              $Skills = $qry['Skill'];
              $Certificate = $qry['Certificate'];
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

    <!-- jQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
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
    height:1400px;
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
 

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
  margin-top: 300px;
}

.popup h4 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 50%;

  }
  .popup{
    width: 30%;
  }
}
   
 #save
            {
              width: 200px;
              height: 40px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 50px;
            }
            #save:hover
            {
              background-color: #006681;
            }   
#cancel
            {
              width: 200px;
              height: 40px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 50px;
            }
            #cancel:hover
            {
              background-color: #fed136;
            }    
#postingdate {
  width:300px;
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
            <li role="presentation" id="dbase" class="item active" ><a href="Positions.php">Positions</a></li>
            <li role="presentation" id="report" class="item"><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item" ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item"><a href="StudentList.php">StudentList</a></li>
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow active  "><a href="Positions.php">All</a></li>
            <li class="yellow"><a href="Position_Active.php">Active</a></li>
            <li class="yellow"><a href="Position_Draft.php">Draft</a></li>
            <li class="yellow  "><a href="CreatePosition.php">Create</a></li>
        </ul>

        
        <div class = "container">
            <div class = "col-md-8">
                <div class = "space"></div>
                <form method = "POST">
                <h4>Post Position:</h4>
                <?php
                  while ($row = mysql_fetch_array($result)) {
                    # code...
                  }
                ?>
            <table class = "infotable">
                <tbody>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Posting Date: </label>
                 </td>
                <td> 
                    <?php echo $postingdate; ?>
                </td>
                </tr>
            </tbody>
        </table>
            
         <table class = "infotable">
                <tbody>
                <h4>Position Information:</h4>

                <tr>
                <td> 

                    <label = "usr" class = "control-label"> Position Level: </label>
                 </td>
                <td> 
                  <?php echo $positionlevel; ?>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Job Specialization: </label>
                 </td>
                <td> 
                   <?php echo $jspecialization; ?>
                </td>
                </tr>

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Employment Type </label>
                 </td>
                <td> 
                   <form action = "">
                    <?php echo $EType; ?>
                </form>
                </td>
                </tr>

            </tbody>
        </table>
        <table class = "infotable">
            <tbody>
                <h4>Salary Structure:</h4>

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Min: </label>
                 </td>
                <td> 
                   <?php echo $Smin; ?>
                </td>
                </tr>
                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Max: </label>
                 </td>
                <td> 
                    <?php echo $Smax; ?>
                </td>
                </tr>
                
            </tbody> 
        </table> 
        <table class = "infotable">
            <tbody>
                <h4>General Requirements:</h4>
                 

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Min Years of Exp: </label>
                 </td>
                <td> 
                    <?php echo $Ymin; ?>
                </td>
                </tr>
                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Max: </label>
                 </td>
                <td> 
                    <?php echo $Ymax; ?>
                </td>
                </tr>
                
            </tbody> 
        </table> 
         <table class = "infotable">
            <tbody>
                <h4>Optional Requirements:</h4>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Skills: </label>
                 </td>
                <td> 
                    Programming
                </td>
                </tr>
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Certifications: </label>
                 </td>
                <td> 
                    asdsndsjknf
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Add Language: </label>
                 </td>
                <td> 
                   Filipino, Nihonggo
                </td>
                </tr>
                 
                
            </tbody> 
        </table> 

        </form>
            </div>
    </div>

<div id="popup1" class="overlay">
  <div class="popup">
    <h4>Add Educational Levels</h4>
    <a class="close" href="#">&times;</a>
    <div class="content">
     <div class="checkbox" id = "checkbox">
                    <label><input type="checkbox" id = "chkall" value="">High School Diploma</label><br>
                    <label><input type="checkbox" value="">Technical Vocaltional/ Certificate</label><br>
                    <label><input type="checkbox" value="">Some College (But did not graduate)</label><br>
                    <label><input type="checkbox" value="">Bachelor's/College Degree</label>
                    <label><input type="checkbox" id = "chkall" value="">Post Graduate Diploma/Master's Degree</label><br>
                    <label><input type="checkbox" value="">Professional License (Passed Board/Bar/Professional License Exam)</label><br>
                    <label><input type="checkbox" value="">Doctorate Degree</label><br>
      </div>
      <a class="btn btn-danger" type="submit"> Add </a>
      <a class="btn btn-danger" type="submit"> Close</a>

    </div>
  </div>
</div>

<div id="popup3" class="overlay">
  <div class="popup">
    <h4>Add Fields</h4>
    <a class="close" href="#">&times;</a>
    <div class="content">
     <div class="checkbox" id = "checkbox">
                    <label><input type="checkbox" id = "chkall" value="">Communication Arts</label><br>
                    <label><input type="checkbox" value="">Computer Science</label><br>
                    <label><input type="checkbox" value="">DMA</label><br>
                    <label><input type="checkbox" value="">Engineering</label>
                    <label><input type="checkbox" id = "chkall" value="">Information Technolog</label><br>
                    <label><input type="checkbox" value="">HRM</label><br>
                    <label><input type="checkbox" value="">Bussiness Management</label><br>
      </div>
      <button type = "submit" class = "btn btn-danger "> Add </button>
            <button type = "submit" class = "btn btn-danger "> Close</button>
    </div>
  </div>
</div>




</body>


</html>
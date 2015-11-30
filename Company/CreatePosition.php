<html lang="en">
<?php
include('../connection.php');

session_start();
?>

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
              width: 150px;
              height: 40px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 300px;
            }
            #save:hover
            {
              background-color: #006681;
            }   
#cancel
            {
              width: 150px;
              height: 40px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 100px;
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
#popupskills{
  margin-left: 0px;
}  
#salary{
  margin-left: -155px;
}     
.white-holder {
    background-color: #f7f7f7;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    padding: 80px 25px;
    margin: 10px;
    max-width: 100%;
    max-height: 200%;
}   
.spaces {
    margin: 1rem 0rem;
    border-bottom: 0em;
    line-height: 1;
    height: 7em;
}  
#date_from{
    width:250px;

}
.date_to{
    width:250px;
    margin-left: 300px;
    margin-top: -60px;
} 
#date_to{
  margin-top: -29px;
}
#label{
  margin-left: -40px;
  margin-top: 30px;
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
            <li role="presentation" id="company" class="item"><a href="company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item active" ><a href="positions.php">Positions</a></li>
            <li role="presentation" id="calendar" class="item " ><a href="calendar.php">Calendar</a></li>
            <li role="presentation" id="report" class="item"><a href="report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item" ><a href="settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item"><a href="studentlist.php">Student List</a></li>
            <li role="presentation" id="applicantlist" class="item "><a href="applicantlist.php">Applicant List</a></li>
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow"><a href="positions.php">Position List</a></li>
            <li class="yellow active"><a href="createposition.php">Create Position</a></li>
        </ul>

         <div class="space"></div>

        <div class =  "container">
          <div class = "row">
          <form method = "POST">
          <div class = "col-md-3">
            <h4> Post Position: </h4>
              <tr>
               <td> <label = "usr" class = "control-label"> Posting Date: </label> </td>
              </tr> 
            <h4> Position Information: </h4>
              <tr>
               <td><label = "usr" class = "control-label"> Position Level: </label></td>
             </tr>
            <div class = "space"></div>
              <tr>
               <td><label = "usr" class = "control-label"> Job Specialization: </label></td>
             </tr>
            <div class = "space"></div>
              <tr>
               <td><label = "usr" class = "control-label"> Employment Type: </label></td>
             </tr>
              <div class = "space"></div>
              <tr>
               <td><label = "usr" class = "control-label"> Available Position: </label></td>
             </tr>
             <div class = "space"></div>
             <h4> Salary Range: </h4>
            <div class = "space"></div>
             <h4> General Requirements: </h4>
              <div class = "space"></div>
              <tr>
               <td> 
                    <label = "usr" class = "control-label"> Minimum Years of Experience: </label>
               </td>
             </tr>
              <div class = "space"></div>
              <tr>
               <td> 
                    <label = "usr" class = "control-label"> Maximum Years of Experience: </label>
               </td>
             </tr>
            <div class = "space"></div>
            <h4>Optional Requirements:</h4>
              <div class = "space"></div> 
          <tr>
            <td> 
                <label = "usr" class = "control-label"> Skills: </label>
             </td>
          </tr>
           <div class = "space"></div>
          <tr>
            <td> 
                <label = "usr" class = "control-label"> Language: </label>
             </td>
          </tr>
          </div>
 <!--input-->           
          <div class = "col-md-9">
              <div class = "space"></div>
              <div class = "date">
                 <input type = "date" name = "datefrom" id = "date_from" class = "form-control">
                 <div class = "date_to">
                <label = "usr" class = "control-label" id = "label">to: </label>
                <input type = "date" name = "dateto" id = "date_to" class = "form-control">
                </div>
                </div> 
               <div class = "space"></div>
              <tr>
                 <td> 
                   <select id="position" name="plevel" class="position" style="width: 300px; height:30px;">
                                         <option value = "" selected="selected"> Select Position </option>
                                         <option value = "top level management"> Top Level Management </option>
                                         <option value = "senior manager"> Senior Manager </option>
                                         <option value = "manager"> Manager </option>
                                         <option value = "supervisor"> Senior Executive/ Supervisor </option>
                                         <option value = "junior executive"> Junior Executive </option>
                                         <option value = "fresh"> Fresh/Entry Level </option>
                                         <option value = "non-executive"> Non-Executive </option>
                                         <option value = "trainee"> Trainee </option>
                    </select>
                </td>
              </tr>
              <div class = "space"></div>
              <tr>
                 <td> 
                   <select id="specialization" name="specialization" class="specialization" style= "width: 300px; height:30px;">
                                        <option value = "" selected="selected"> Select Specialization </option>
                                         <option value = "Actuarial Science"> Actuarial Science/ Statistics </option>
                                         <option value = "Advertising"> Advertising/ Media Planning </option>
                                         <option value = "Architecture"> Architecture/ Interior Design  </option>
                                         <option value = "Arts and Design">Arts and Design  </option>
                                         <option value = "Arts/ Creative"> Arts/ Creative/ Graphics Design  </option>
                                         <option value = "Aviation"> Aviation/ Aircraft Maintenance </option>
                                         <option value = "Banking"> Banking/ Financial Services  </option>
                                         <option value = "Biotechnology"> Biotechnology  </option>
                                         <option value = "Call Center Agent"> Call Center Agent  </option>
                    </select>
                </td>
              </tr>
              <div class = "space"></div>
              <tr>
                <td> 
                  <select id="state" name="etype" class="state" style="width: 300px; height:34px;">
                          <option value="select">Please select One</option>
                          <option value="full">Full Time</option>
                          <option value="parttime">Part Time</option> 
                          <option value="contract">Contract</option> 
                          <option value="temporary">Temporary</option>                
                    </select>
                </td>
              </tr>
              &nbsp;
              <div class = "space1"></div>
              <tr>
               <td> 
                    <input type = "number" name = "avposition" class = "form-control" style ="width: 300px;">
                </td>
              </tr> 
             <div class = "space"></div>
             <tr>
                 <td> 
                   <select id="salaryrange" name="salary" class="salaryrange" style="width: 300px; height:30px;">
                                         <option value = "" selected="selected"> Select Salary Range </option>
                                         <option value = ""> 10,000 - 15,000 </option>
                                         <option value = ""> 15,000 - 20,000 </option>
                                         <option value = ""> 20,000 - 25,000 </option>
                                         <option value = ""> 25,000 - 30,000 </option>
                                         <option value = ""> 30,000 - 40,000 </option>
                                         <option value = ""> 40,000 - 45,000 </option>
                                         <option value = ""> 45,000 - 50,000 </option>
                    </select>
                </td>
              </tr>
              <div class = "space"></div>
              &nbsp;
              <div class = "space1"></div>
              <tr>
               <td> 
                    <input type = "number" name = "ymin" class = "form-control" style ="width: 300px;">
                </td>
              </tr> 
              <div class = "space"></div>
              <tr>
               <td> 
                    <input type = "number" name = "ymax" class = "form-control" style ="width: 300px;" >
                </td>
              </tr> 
              <div class = "space"></div>
              &nbsp;
               <div class = "space1"></div>
              <tr>
              <td> 
                    <div class="col-xs-6">
                      <div class = "box">
                        <a class="btn btn-default" href="#popup2" id = "popupskills">Let me Pop up</a>
                      </div>
                    </div>
                    <div class="col-xs-6" id="languages_94321">
                    </div>
                </td>
                </tr>
                &nbsp;
                <div class = "space"></div>
              <tr>
              <td> 
                    <div class="col-xs-6">
                      <div class = "box">
                        <a class="btn btn-default" href="#popup2" id = "popuplang">Let me Pop up</a>
                      </div>
                    </div>
                    <div class="col-xs-6" id="languages_94321">
                    </div>
                </td>
                </tr> 
          </div>

          <div class = "spaces"></div>
                        <button type="submit" class = "btn btn-Info " id = "btnsave" name="btnsave" > <b> Save</b></button>
                        <button class = "btn btn-danger " id = "cancel" name = "btncancel" ><b> Cancel </b> </button>
           </form> 
          </div>
        </div>  

        



<div id="popup2" class="overlay">
  <div class="popup">
    <h4>Add Language</h4>
    <a class="close" href="#">&times;</a>
    <div class="content">
     <input type = "text" name="lang" class = "form-control" style ="width: 300px;" id="lang_39186"><br>
      <a class = "btn btn-danger" id="add-language" href="#"> Add </a>
      <a class = "btn btn-danger" href="#"> Close</a>
      <script type="text/javascript">
        $(document).ready(function(){
          var languages_94321 = [];
          $("#add-language").click(function(){
            languages_94321.push($("#lang_39186").val());
            var languages_943211_html = '';
            for(i = 0; i < languages_94321.length; i++){
              languages_943211_html += '<input type="hidden" name="language[' + i +']" value="' + languages_94321[i] + '"/><p>' + languages_94321[i] + '</p>';
            }
            $("#languages_94321").html(languages_943211_html);
          });
        });
      </script>


    </div>
  </div>
</div>


</div>
</body>
<?php
include('../connection.php');

$x = $_SESSION['Email'];

if(isset($_POST['btnsave'])){

  $datefrom = $_POST['datefrom'];
  $dateto = $_POST['dateto'];
  $plevel = $_POST['plevel'];
  $specialization = $_POST['specialization'];
  $etype = $_POST['etype'];
  $avposition = $_POST['avposition'];
  $salary = $_POST['salary'];
  $ymin = $_POST['ymin'];
  $ymax = $_POST['ymax'];

  $query = ("INSERT INTO comppositiontbl (Email,PostingDateFrom,PostingDateTo,PositionLevel,JSpecialization,EType,AvPosition,MonthlySalary,YMin,YMax) values ('$x','$datefrom','$dateto','$plevel','$specialization','$etype','$avposition','$salary','$ymin','$ymax')");
  $result = mysql_query($query);
  echo "
      <script type='text/javascript'>
      location.href='positions.php?id=1'
      </script>
  ";

}
?>

 
</html>
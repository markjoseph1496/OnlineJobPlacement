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
    height:1400px;
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
            <li role="presentation" id="company" class="item "><a href="Company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item active" ><a href="Positions.php">Positions</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Database.php">Database</a></li>
            <li role="presentation" id="report" class="item"><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item " ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Resumesearch.php">Resumelink Search</a></li>           
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow  "><a href="Positions.php">All</a></li>
            <li class="yellow"><a href="#">Active</a></li>
            <li class="yellow"><a href="#">Draft</a></li>
            <li class="yellow active "><a href="#">Create</a></li>
        </ul>

        
        <div class = "container">
            <div class = "col-md-8">
                <div class = "space"></div>
                <form method = "POST">
                <h4>Post Position:</h4>
                
            <table class = "infotable">
                <tbody>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Posting Date: </label>
                 </td>
                <td> 
                    <input type = "text" name = "person" id = "usr" class = "form-control" >
                </td>
                </tr>
                

                <tr>
                <td> 

                    <label = "usr" class = "control-label"> Position Title: </label>
                 </td>
                <td> 
                   <input type = "text" name = "address1" id = "usr" class = "form-control" ></input>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Address2: </label>
                 </td>
                <td> 
                   <input type = "text" name = "address2" id = "usr" class = "form-control"></input>
                </td>
                </tr>
            </tbody>
        </table>
            
         <table class = "infotable">
                <tbody>
                <h4>Position Information:</h4>
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Position Title: </label>
                 </td>
                <td> 
                    <input type = "text" name = "person" id = "usr" class = "form-control" >
                </td>
                </tr>
                

                <tr>
                <td> 

                    <label = "usr" class = "control-label"> Position Level: </label>
                 </td>
                <td> 
                   <select id="position" name="position" class="position" style="width:100%; height:30px;">
                                         <option value = "pos"> Select Position </option>
                                         <option value = "tlp"> Top Level Management </option>
                                         <option value = "sm"> Senior Manager </option>
                                         <option value = "man"> Manager </option>
                                         <option value = "ses"> Senior Executive/ Supervisor </option>
                                         <option value = "je"> Junior Executive </option>
                                         <option value = "fel"> Fresh/Entry Level </option>
                                         <option value = "nex"> Non-Executive </option>
                                         <option value = "train"> Trainee </option>
                    </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Job Specialization: </label>
                 </td>
                <td> 
                   <select id="specialization" name="specialization" class="specialization" style="width:100%; height:30px;">
                                        <option value = "spe"> Select Specialization </option>
                                         <option value = "ass"> Actuarial Science/ Statistics </option>
                                         <option value = "amp"> Advertising/ Media Planning </option>
                                         <option value = "aid"> Architecture/ Interior Design  </option>
                                         <option value = "aad">Arts and Design  </option>
                                         <option value = "acgd"> Arts/ Creative/ Graphics Design  </option>
                                         <option value = "aam"> Aviation/ Aircraft Maintenance </option>
                                         <option value = "bfs"> Banking/ Financial Services  </option>
                                         <option value = "bio"> Biotechnology  </option>
                                         <option value = "ccca"> Call Center Agent  </option>
                    </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> State/Region Located: </label>
                 </td>
                <td> 
                  <select id="state" name="state" class="state" style="width:100%; height:34px;">
                                            <option value="select">Please select One</option>
                                            <option value="ncr">NCR</option>
                                            <option value="car">CAR</option> 
                                            <option value="ilo">Ilocos Region</option> 
                                            <option value="cag">Cagayan Valley</option> 
                                            <option value="cen">Central Luzon</option> 
                                            <option value="cala">CALABARZON</option> 
                                            <option value="mima">MIMAROPA</option> 
                                            <option value="bicol">Bicol Region</option>
                                            <option value="west">Western Visayas</option>
                                            <option value="cent">Central Visayas</option>
                                            <option value="east">Eastern Visayas</option>
                                            <option value="zam">Zamboanga Peninsula</option>
                                            <option value="north">Northern Mindanao</option>
                                            <option value="dav">Davao Region</option>
                                            <option value="sock">SOCCKSCARGEN</option>
                                            <option value="cara">Caraga Region</option>
                                            <option value="armm">ARMM</option>
                    </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Specific Area Located: </label>
                 </td>
                <td> 
                  <select id="state" name="state" class="state" style="width:100%; height:34px;">
                                            <option value="select">Please select One</option>
                                            <option value="ncr">NCR</option>
                                            <option value="car">CAR</option> 
                                            <option value="ilo">Ilocos Region</option> 
                                            <option value="cag">Cagayan Valley</option> 
                                            <option value="cen">Central Luzon</option> 
                                            <option value="cala">CALABARZON</option> 
                                            <option value="mima">MIMAROPA</option> 
                                            <option value="bicol">Bicol Region</option>
                                            <option value="west">Western Visayas</option>
                                            <option value="cent">Central Visayas</option>
                                            <option value="east">Eastern Visayas</option>
                                            <option value="zam">Zamboanga Peninsula</option>
                                            <option value="north">Northern Mindanao</option>
                                            <option value="dav">Davao Region</option>
                                            <option value="sock">SOCCKSCARGEN</option>
                                            <option value="cara">Caraga Region</option>
                                            <option value="armm">ARMM</option>
                            </select>
                </td>
                </tr>

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Employment Type </label>
                 </td>
                <td> 
                   <div class="checkbox" id = "checkbox">
                    <label><input type="checkbox" id = "chkall" value="">Full</label><br>
                    <label><input type="checkbox" value="">PartTime</label><br>
                    <label><input type="checkbox" value="">Contract</label><br>
                    <label><input type="checkbox" value="">Temporary</label>
                </div>
                </td>
                </tr>

            </tbody>
        </table>
        <table class = "infotable">
            <tbody>
                <h4>Salary Structure:</h4>
                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Monthly Salary: </label>
                 </td>
                <td> 
                  <select id="state" name="state" class="state" style="width:40%; height:34px;">
                                            <option value="select">Please select One</option>
                                            <option value="select">PHP</option>
                                            
                    </select>
                </td>
                </tr>

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Min: </label>
                 </td>
                <td> 
                    <input type = "text" class = "form-control" style ="width: 150px;">
                </td>
                </tr>
                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Max: </label>
                 </td>
                <td> 
                    <input type = "text" class = "form-control" style ="width: 150px;">
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
                    <input type = "text" class = "form-control" style ="width: 150px;">
                </td>
                </tr>
                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Max: </label>
                 </td>
                <td> 
                    <input type = "text" class = "form-control" style ="width: 150px;">
                </td>
                </tr>
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Educational Levels: </label>
                 </td>
                <td> 
                   <div class = "box">
                      <a class="btn btn-default" href="#popup1">Let me Pop up</a>
                    </div> 
                </td>
                </tr>
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Field of Study: </label>
                 </td>
                <td> 
                    <div class = "box">
                      <a class="btn btn-default" href="#popup3">Let me Pop up</a>
                    </div>
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
                    <input type = "text" class = "form-control">
                </td>
                </tr>
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Certifications: </label>
                 </td>
                <td> 
                    <input type = "text" class = "form-control">
                </td>
                </tr>
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Add Language: </label>
                 </td>
                <td> 
                    <div class = "box">
                      <a class="btn btn-default" href="#popup2">Let me Pop up</a>
                    </div>
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
      <button type = "submit" class = "btn btn-danger "> Add </button>
            <button type = "submit" class = "btn btn-danger "> Close</button>
    </div>
  </div>
</div>

<div id="popup3" class="overlay">
  <div class="popup">
    <h4>Add Fields</h4>
    <a class="close" href="#">&times;</a>
    <div class="content">
     <div class="checkbox" id = "checkbox">
                    <label><input type="checkbox" id = "chkall" value="" checked="checked">Communication Arts</label><br>
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


<div id="popup2" class="overlay">
  <div class="popup">
    <h4>Add Language</h4>
    <a class="close" href="#">&times;</a>
    <div class="content">
     <input type = "text" class = "form-control" style ="width: 300px;"><br>
      <button type = "submit" class = "btn btn-danger "> Add </button>
            <button type = "submit" class = "btn btn-danger "> Close</button>
    </div>
  </div>
</div>


</body>
 
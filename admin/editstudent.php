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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
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


.bulletin{
    padding:30px;
    border: 1px solid #E5E4E2;
}

.total{
    padding:10px;
    border: 1px solid #E5E4E2;
    width: 280px;
    margin-left: 450px;
}

.header_advertising{
    padding:10px;
    border: 1px solid #E5E4E2;
}
.header2_advertising{
    padding:10px;
    border: 1px solid #E5E4E2;

}
.industry {
    margin-left: 500px;
    margin-top: -100px;
}
.position  {
    margin-left: 500px;
}
.specialization {
    margin-left: 500px;
}
.status {
    margin-left: 500px;
}
.asd {
    margin-top:-20px;
    float: left;
}
#filter
            {
              width: 100px;
              height: 30px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              margin-left: 790px;
              margin-top: -50px;
              
            }
            #filter:hover
            {
              background-color: #006681;
            } 
 .export {
    margin-left: 850px;
    margin-top: -35px;
    float:left;
 }   
 #btl {
    margin-left: 120px;
    margin-top: -50px;
 }   
  #delete
            {
              width: 200px;
              height: 40px;
              background-color: #ff3333;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 300px;
            }
            #delete:hover
            {
              background-color: #cc0000;
            }   
#save
            {
              width: 200px;
              height: 40px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 200px;
            }
            #save:hover
            {
              background-color: #fed136;
            }     
 #cancel
            {
              width: 200px;
              height: 40px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 50px;
            }
            #cancel:hover
            {
              background-color: #006681;
            }                
</style>


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
                    <li>
                        <a class="page-scroll" href="#">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div class="white-holder-3">
       <ul class="nav nav-tabs">
            <li role="presentation" id="myinfo" class="item"><a href="admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item active"><a href="reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item"><a href="account.php">Account</a></li>
            <li role="presentation" id="applications" class="item"><a href="requested.php">Requested</a></li>
            <li role="presentation" id="applications" class="item"><a href="companylist.php">Company List</a></li>
        </ul>
        <div class="space-1"></div>
        <ul class="nav nav-pills" id="nav-submenu">
            <li class="yellow"><a href="reports.php">Reports</a></li>
            <li class="yellow active"><a href="ojt-reports.php">OJT Reports</a></li>
        </ul>
        <div class="space-1"></div>
    
              <div class="space"></div>
                     <div class = "container">
                          <div class = "col-md-8">
               
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Student Name:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <input type="text" class="form-control" id="" name="StudentName" readonly = "true" value = "">
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Position Level:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                        <select id="position" name="plevel" style="width:100%; height:30px;">
                                         <option value = "" selected="selected"> Select Position </option>
                                         <option value = "top level management"> Top Level Management </option>
                                         <option value = "senoir manager"> Senior Manager </option>
                                         <option value = "manager"> Manager </option>
                                         <option value = "supervisor"> Senior Executive/ Supervisor </option>
                                         <option value = "junior executive"> Junior Executive </option>
                                         <option value = "fresh"> Fresh/Entry Level </option>
                                         <option value = "non-executive"> Non-Executive </option>
                                         <option value = "trainee"> Trainee </option>
                                         </select>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Specialization:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                        <select id="specialization" name="specialization" style="width:100%; height:30px;">
                                        <option value = "" selected="selected"> Select Specialization </option>
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
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                        <label>Industry:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                        <select id="industry" name="industry" style="width:100%; height:30px;">
                                        <option value = "" selected="selected"> Select Industry </option>
                                         <option value = "ass"> asdfghjkl </option>
                                         <option value = "amp"> asdfghjkl </option>
                                         <option value = "aid"> asdfghjkl  </option>
                                         <option value = "aad"> asdfghjkl  </option>
                                         <option value = "acgd">  asdfghjkl  </option>
                                         <option value = "aam"> asdfghjkl </option>
                                         <option value = "bfs">  asdfghjkl</option>
                                         <option value = "bio"> asdfghjkl  </option>
                                         <option value = "ccca"> asdfghjkl </option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Employment Status:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                        <select id="empstatus" name="empstatus" style="width:100%; height:30px;">
                                        <option value = "" selected="selected"> Select Employment Status </option>
                                         <option value = "ass"> Employed </option>
                                         <option value = "ass"> Unemployed </option>
                                         </select>
                                        </div>
                                    </div>

                                    <div class = "space"></div>
                                        <a class = "btn btn-danger " id = "delete" href= ""><b> Delete Account</b></a>
                                        <br><br><br>
                                        <a class = "btn btn-danger " id = "save"  href= ""><b> Save</b> </a>
                                        <a class = "btn btn-danger " id = "cancel" href= ""><b> Cancel</b> </a>
                            </div>
           </div>
        </div>
    </div>
</body>
 
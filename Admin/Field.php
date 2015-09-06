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
    margin-left: 600px;
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
            <li role="presentation" id="myinfo" class="item active"><a href="Admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item"><a href="Account.php">Account</a></li>
             <div id="search">
                    <form method = "POST">
                        <fieldset class="clearfix">
                        <input type="search" name="search" value="Search Student.." onBlur="if(this.value=='')this.value='Search Student..'" onFocus="if(this.value=='Search Student..')this.value=''" > <!-- JS because of IE support; better: placeholder="Search Student.." -->
                        <input type="submit" value="Search" class="button" href = "#" > 
                        </fieldset>
                   </form>
                </div> 
        </ul>
    
        <div class="space"></div>
        <div class = "container">
            <div class = "col-md-12">
                <div class = "header_advertising">
                    <h5> Advertising Media <h5>
                     <span class = export>
                        Export: <a  class = "btn btn-default" id = "xls" href= "#"><b> XLS </b></a>
                       <a class = "btn btn-default" id = "btl" href= "#"><b> Back to List </b></a>
                       </span> 
                </div>
                 <div class = "header2_advertising">
                   <div class = "container">
                    <div class = "col-md-4">
                        <b> Total Number of Students: 290 </b>
                    </div> 
                                <div class = "asd">
                                     <form>
                                        <select id="industry" name="industry" class="industry" style="width:30%; height:30px;">
                                           <option value = "ind"> Select an Industry </option>
                                           <option value = "acc"> Accounting / Audit </option>
                                            <option value = "amp">Advertising / Marketing Promotion </option>
                                            <option value = "aaa">Aerospace/Aviation/Airline </option>
                                            <option value = "appf">Agricultural/Plantation/Poultry/Fisheries </option>
                                            <option value = "af">Apparel/Fashion </option>
                                            <option value = "ad">Arts/Design </option>
                                            <option value = "aav"> Automobile/Automotive Ancillary/Vehicle </option>
                                        </select><br>
                                       <select id="position" name="position" class="position" style="width:25%; height:30px;">
                                         <option value = "pos"> Select Position </option>
                                         <option value = "tlp"> Top Level Management </option>
                                         <option value = "sm"> Senior Manager </option>
                                         <option value = "man"> Manager </option>
                                         <option value = "ses"> Senior Executive/ Supervisor </option>
                                         <option value = "je"> Junior Executive </option>
                                         <option value = "fel"> Fresh/Entry Level </option>
                                         <option value = "nex"> Non-Executive </option>
                                         <option value = "train"> Trainee </option>
                                        </select><br>
                                        <select id="specialization" name="specialization" class="specialization" style="width:30%; height:30px;">
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
                                        </select><br>
                                        <select id="status" name="status" class="status" style="width:25%; height:30px;" >
                                            <option value = "pos"> Select Employment Status </option>
                                            <option value="emp">Employed</option>
                                            <option value="unemp">Unemployed</option>
                                        </select>
                                         <button type = "submit" class = "btn btn-danger " id = "filter" href= "#"><b> FILTER </b></button>
                                     </form>
                            </div>
                    </div>
                </div> <!--header-->
                    <!--table-->
        <table class = "Applicants" width = "100%" cellpadding = "0">
           <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width= "25%" class = "tabletitle"> Student Name</th>
                    <th width = "15%" class = "tabletitle"> Position Level </th>
                    <th width = "30%" class = "tabletitle">  Specialization</th>
                    <th width = "30%" class = "tabletitle"> Industry</th>
                    <th width = "20%" class = "tabletitle"> Employment Status</th>
                <tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                    <a href = "Resumelink.php">Aira Jane Cruz </a>
                    </td>
                    <td class = "tcenter">Fresh/Entry Level</td>
                    <td class = "tcenter">Arts and Design </td>
                    <td class = "tcenter">Arts/Design</td>
                    <td class = "tcenter">Unemployed</td>
                </tr>
                <tr>
                    <td>
                    <a href = "Resumelink.php">Aira Jane Cruz </a>
                    </td>
                    <td class = "tcenter">Fresh/Entry Level</td>
                    <td class = "tcenter">Arts and Design </td>
                    <td class = "tcenter">Arts/Design</td>
                    <td class = "tcenter">Unemployed</td>
                </tr>
                <tr>
                    <td>
                    <a href = "Resumelink.php">Aira Jane Cruz </a>
                    </td>
                    <td class = "tcenter">Fresh/Entry Level</td>
                    <td class = "tcenter">Arts and Design </td>
                    <td class = "tcenter">Arts/Design</td>
                    <td class = "tcenter">Unemployed</td>
                </tr>
            </tbody>
        </table>
           </div>
        </div>
    </div>
</body>
 
<!DOCTYPE html>
<?php 

session_start(); 
    // Checks if request_resume and company_id 

$CompanyID = $_SESSION['CompanyID'];

    include('../connection.php');
    $a = isset($_POST['request_resume']);
    $a = $a && isset($_POST['company_id']);
    $a = $a && isset($_POST['student_id']);
    if($a){
        mysql_query("INSERT INTO `resumerequesttbl`(`CompanyID`, `StudentID`, `Status`) VALUES('$CompanyID','" . $_POST['student_id'] . "','Pending')");
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
border-radius:0px;
}

.nav>li>a {
padding:10px 15px;
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
    margin-left: 76px;
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
    min-width: 1010px;
    padding: 6px 8px;
}

#search input[type="submit"] {
    background: #fed136;
    color: #fff;
    font-weight: bold;
    margin-left: 10px;
    padding: 6px 25px;
}

#search input[type="submit"]:hover {
    background: #FFDB58;
}

#search input[type="search"]::-webkit-input-placeholder { color: #42454e; }
#search input[type="search"]:-moz-placeholder { color: #42454e; }
#search input[type="search"]:-ms-input-placeholder { color: #42454e; }

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
              width: 100px;
              height: 30px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 30px;
            }
            #save:hover
            {
              background-color: #006681;
            }   
#cancel
            {
              width: 100px;
              height: 30px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 30px;
            }
            #cancel:hover
            {
              background-color: #fed136;
            }   
 .white-holder {
    background-color: #f7f7f7;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    padding: 80px 25px;
    margin: 10px;
    max-width:100%;
    max-height:100%;
} 
.box {
    padding: 5px;
    border: 1px solid #E5E4E2;
    background-color: #fff;
    margin-top: -180px;
    margin-left: -10px;
    width: 1125px;
} 
.spaces {
    margin: 1rem 0rem;
    border-bottom: 0em;
    line-height: 1;
    height: 7em;
}  
.filter{
    margin-left: 600px;
}
.well{
    background-color: #FFF;
}
    </style>

<body id="page-top" class="index resume">
<form method = "POST" action="resumesearch.php">
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
            <li role="presentation" id="resumelink" class="item active"><a href="resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item"><a href="studentlist.php">Student List</a></li>
            <li role="presentation" id="applicantlist" class="item "><a href="applicantlist.php">Applicant List</a></li>
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow active"><a href="resumesearch.php">Search Database</a></li>
            <li class="yellow"><a href="resumesearch_purchase.php">Requested Resumes</a></li>
            <li class="yellow"><a href="resumesearch_bookmark.php">Bookmark Resumelink</a></li>
        </ul>

        <div class="space"></div>
                    <div class="container">
                        <div class="well" align = "right">
                         <b>Filter by:</b>
                            <select style = "height: 30px;">
                                <option value="name_id">Name/ID</option>
                                <option value="location">Location</option>
                                <option value="specialization">Specialization</option> 
                            </select>
                         </div>   
                     </div>
        
        <div id="search">
                        <fieldset class="clearfix">
                        <input type="search" name="search" value="Search Student.." onBlur="if(this.value=='')this.value='Search Student..'" onFocus="if(this.value=='Search Student..')this.value=''" > <!-- JS because of IE support; better: placeholder="Search Student.." -->
                        <input type="submit" value="Search" class="button" href = "#" name="btnSearch"> 
                        </fieldset>
        </div> 
        <div class = "space"></div>
        <div class = "container">
            
                
                

                
            
            <table class = "Applicants table" width = "100%" cellpadding = "0">
                <thead>
                    <tr></tr>  
                    <tr>
                        <th width = "25%" class = "tabletitle">Name/ID</th>
                        <th width = "30%" class = "tabletitle">Location </th>
                        <th width = "30%" class = "tabletitle"> Specialization</th>
                        <th width = "15%" class = "tabletitle"></th>
                    <tr>
                </thead>
                <tbody>
                <tr>
                    <td> </td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter">
                        <form method="POST">
                            <input type="hidden" name="company_id" value="<?php echo $company_id?>"/>
                            <input type="hidden" name="student_id" value="<?php echo $student_id?>"/>
                            <button id='Edit' name="request_resume" href="" class='btn btn-default'> 
                                <i class='fa fa-arrow-circle-right'></i>
                            </button>
                        </form>
                        <button  name = 'btndelete' href="" class='btn btn-danger'> 
                        <i class='fa fa-minus-square'></i> 
                        </button> 
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </form>
</body>
</html> 
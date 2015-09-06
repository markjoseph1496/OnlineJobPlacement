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
    padding: 4px;
    margin-left: -300px;
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
    min-width: 300px;
    padding: 6px 8px;
}

#search input[type="submit"] {
    background: #fed136;
    color: #fff;
    font-weight: bold;
    margin-left: 7px;
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
.reports{
    padding:10px;
    border: 1px solid #E5E4E2;
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
            <li role="presentation" id="dbase" class="item" ><a href="Database.php">Database</a></li>
            <li role="presentation" id="report" class="item"><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item" ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item active"><a href="Resumesearch.php">Resumelink Search</a></li>
            
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow "><a href="Resumesearch.php">Search Database</a></li>
            <li class="yellow active"><a href="Resumesearch_Purchase.php">Purchased Resumes</a></li>
            <li class="yellow"><a href="Resumesearch_Bookmark.php">Bookmark Resumelink</a></li>
        </ul>

        <div class="space1"></div>
        
                <div class = "container">
         <div class = "col-md-12">
            <div class = "reports">
                <div class = "container">
                    <div class = "col-md-6">
                        <h4>Purchased Resume</h4>
                     </div>
                     <div class = "col-md-6">
                        <div id="search">
                    <form method = "POST">
                        <fieldset class="clearfix">
                        <input type="search" name="search" value="Type keywords here.." onBlur="if(this.value=='')this.value='Type keywords here..'" onFocus="if(this.value=='Type keywords here..')this.value=''" > <!-- JS because of IE support; better: placeholder="Type keywords here.." -->
                        <input type="submit" value="Search" class="button" href = "#" > 
                        </fieldset>
                   </form>
                </div>
                     </div>
                </div>
            </div>
        <table class = "Applicants" width = "100%" cellpadding = "0">
           <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width= "9%" class = "tabletitle">Date Purchased</th>
                    <th width = "9%" class = "tabletitle">Date Applied </th>
                    <th width = "9%" class = "tabletitle"> Name</th>
                    <th width = "9%" class = "tabletitle">Location</th>
                    <th width= "9%" class = "tabletitle">Status</th>
                    <th width = "9%" class = "tabletitle">Age</th>
                    <th width = "9%" class = "tabletitle"> Specialization</th>
                    <th width = "9%" class = "tabletitle">Industry</th>
                    <th width= "9%" class = "tabletitle">Position Level</th>
                    <th width = "9%" class = "tabletitle">Years Experience</th>
                    <th width = "9%" class = "tabletitle"> Current Job Title</th>
                <tr>
            </thead>

            <tbody>
                <tr>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                    <td class = "tcenter"></td>
                </tr>
            </tbody>
        </table>
            </div>
         </div>
    </div>
   
</body>

</html> 
<!DOCTYPE html>

<?php
include('connection.php');

$Course = 'MajorCourse';

$qry = mysql_query("SELECT DISTINCT MajorCourse FROM studentinfotbl");
$TotalStudents = mysql_query("SELECT COUNT(*) FROM studentinfotbl");
$Q1 = mysql_fetch_array($TotalStudents);
$Total = $Q1[0];


$BSTM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Tourism Management'");
$qryBSTM = mysql_fetch_array($BSTM);
$TotalBSTM = $qryBSTM[0];

$BSBM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Business Management Major in Operations'");
$qryBSBM = mysql_fetch_array($BSBM);
$TotalBSBM = $qryBSBM[0];

$ABCOMM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Arts in Communication'");
$qryABCOMM = mysql_fetch_array($ABCOMM);
$TotalABCOMM = $qryABCOMM[0];

$BSITDA= mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Information Technology Major in Digital Arts'");
$qryBSITDA = mysql_fetch_array($BSITDA);
$TotalBSITDA = $qryBSITDA[0];

$BSHRM = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Hotel & Restaurant Management'");
$qryBSHRM = mysql_fetch_array($BSHRM);
$TotalBSHRM = $qryBSHRM[0];

$BSCS = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Computer Science'");
$qryBSCS = mysql_fetch_array($BSCS);
$TotalBSCS = $qryBSCS[0];

$BSIT= mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Information Technology'");
$qryBSIT = mysql_fetch_array($BSIT);
$TotalBSIT = $qryBSIT[0];

$BSCPE = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Computer Engineering'");
$qryBSCPE = mysql_fetch_array($BSCPE);
$TotalBSCPE = $qryBSCPE[0];

$BSAT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = 'Bachelor of Science in Accounting Technology'");
$qryBSAT = mysql_fetch_array($BSAT);
$TotalBSAT = $qryBSAT[0];

$ASCT = mysql_query("SELECT COUNT(*) FROM studentinfotbl WHERE MajorCourse = '2-Year Associate in Computer Technology'");
$qryASCT = mysql_fetch_array($ASCT);
$TotalASCT = $qryASCT[0];

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

#ButtonSignOut  {
    padding: 7px;
    background-color:#fed136;
    margin-left: 520px;
    margin-top: 10px;
    color:#006681; ;

}
#ButtonSignOut input[type="submit"]:hover {
    background: #fff;
}

.total{
    padding:10px;
    border: 1px solid #E5E4E2;
    width: 280px;
    margin-left: 450px;
}

</style>


<body id="page-top" class="index resume">
    <form method = "POST">
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
             <li role="presentation" id="myinfo" class="item active "><a href="Admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item "><a href="Account.php">Account</a></li>
            <li role="presentation" id="applications" class="item"><a href="Requested.php">Requested</a></li>
            <li role="presentation" id="applications" class="item"><a href="CompanyList.php">Company List</a></li>
            <li role="presentation" id="applications" class="item"><a href="AdviserList.php">Adviser List</a></li>
            <li role="presentation" id="applications" class="item"><a href="Maintenance.php">Maintenance </a></li>
        </ul>
    
        <div class="space"></div>
        <div class = "container">
            <div class = "col-md-8">
                <table class = "Applicants" width = "100%" cellpadding = "0">
                 <thead>
                    <tr>
                    <th width = "70%" class = "tabletitle">Course </th>
                    <th width = "30%" class = "tabletitle tcenter">Number of Students </th>
                    </tr> 
                </thead>
                <!--Fields-->
                <tbody>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSTM">Bachelor of Science in Tourism Management</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSTM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSBM">Bachelor of Science in Business Management Major in Operations</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSBM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=ABCOMM">Bachelor of Arts in Communication</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalABCOMM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSITDA">Bachelor of Science in Information Technology Major in Digital Arts</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSITDA; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSHRM">Bachelor of Science in Hotel &amp; Restaurant Management</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSHRM; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSCS">Bachelor of Science in Computer Science</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCS; ?></td>
                </tr>
                                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSIT">Bachelor of Science in Information Technology</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSIT; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSCPE">Bachelor of Science in Computer Engineering</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSCPE; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=BSAT">Bachelor of Science in Accounting Technology</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalBSAT; ?></td>
                </tr>
                <tr>
                    <td>
                    <a href = "Field.php?CourseID=ACT">2-Year Associate in Computer Technology</a>
                    </td>
                    <td class = "tcenter"><?php echo $TotalASCT; ?></td>
                </tr>

                </tbody>
                </table>
                <div class = "space"></div>
                <div class = "total">
                    <h5>Total Number of Students: <?php  echo $Total; ?></h5>
                </div>
            </div>
            <!--Fields-->

            <div class = "col-md-4">
               <div id="search">
                        <fieldset class="clearfix">
                        <input type="search" name="search" value="What are you looking for?" onBlur="if(this.value=='')this.value='What are you looking for?'" onFocus="if(this.value=='What are you looking for?')this.value=''" > <!-- JS because of IE support; better: placeholder="What are you looking for?" -->
                        <input type="submit" value="Search" class="button" href = "#" > 
                        </fieldset>
                </div> 
                <div class = "bulletin">
                    <h5>Bulletin..</h5>
                   <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>   
            </div> 
        </div>
    </div>
</form>
</body>

<?php
include('connection.php');

if(isset($_POST['CourseID'])){

}


?>
</html>
<?php session_start(); 
    // Checks if request_resume and company_id 

    include('CONNECTION.php');
    $a = isset($_POST['request_resume']);
    $a = $a && isset($_POST['company_id']);
    $a = $a && isset($_POST['student_id']);
    if($a){
        mysql_query("INSERT INTO `resumerequesttbl`(`CompanyID`, `StudentID`, `Status`) VALUES('" . $_POST['company_id'] . "','" . $_POST['student_id'] . "','PENDING')");
    }
?>
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
    padding: 7px;
    margin-left: 70px;
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
    min-width: 1000px;
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

#submenu{
    margin-left: 50px;
}  
 .multiselect {
        width: 200px;

    }
    .selectBox {
        position: relative;

    }
    .selectBox select {
        width: 100%;
        font-weight: bold;
    }
    .overSelect {
        position: absolute;
        left: 0; right: 0; top: 0; bottom: 0;
        
    
    }
    #checkboxes {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes label {
        display: block;
    }
    #checkboxes label:hover {
        background-color: #1e90ff;
    }
     #checkboxes1 {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes1 label {
        display: block;
    }
    #checkboxes1 label:hover {
        background-color: #1e90ff;
    }

     #checkboxes2 {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes2 label {
        display: block;
    }
    #checkboxes2 label:hover {
        background-color: #1e90ff;
    }

    #checkboxes3 {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes3 label {
        display: block;
    }
    #checkboxes3 label:hover {
        background-color: #1e90ff;
    }

    #checkboxes4 {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes4 label {
        display: block;
    }
    #checkboxes4 label:hover {
        background-color: #1e90ff;
    }
    #checkboxes5 {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes5 label {
        display: block;
    }
    #checkboxes5 label:hover {
        background-color: #1e90ff;
    }


    #chk{
    border:20px;
     -webkit-appearance: checkbox;
    box-sizing: border-box;
         margin: 3px 3px 3px 4px;
         border: solid 1px;
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
    </style>

<body id="page-top" class="index resume">
<form method = "POST" action="Resumesearch.php">
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
            <li role="presentation" id="company" class="item"><a href="Company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Positions.php">Positions</a></li>
            <li role="presentation" id="calendar" class="item " ><a href="Calendar.php">Calendar</a></li>
            <li role="presentation" id="report" class="item "><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item " ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item active"><a href="Resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item"><a href="StudentList.php">Student List</a></li>
            <li role="presentation" id="applicantlist" class="item "><a href="ApplicantList.php">Applicant List</a></li>
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow active"><a href="Resumesearch.php">Search Database</a></li>
            <li class="yellow"><a href="Resumesearch_Purchase.php">Requested Resumes</a></li>
            <li class="yellow"><a href="Resumesearch_Bookmark.php">Bookmark Resumelink</a></li>
        </ul>

        <div class="space1"></div>
        
        <div id="search">
                        <fieldset class="clearfix">
                        <input type="search" name="search" value="Search Student.." onBlur="if(this.value=='')this.value='Search Student..'" onFocus="if(this.value=='Search Student..')this.value=''" > <!-- JS because of IE support; better: placeholder="Search Student.." -->
                        <input type="submit" value="Search" class="button" href = "#" name="btnSearch"> 
                        </fieldset>
                </div> 
        <div class = "container">
        <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
            <h4>Resume Search Filter </h4>
<form>
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes()">
            <select>
                <option>Select Field of Study</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes">
            <label for="one"><input type="checkbox" id="chk"/>BSCS</label>
            <label for="two"><input type="checkbox" id="chk"/>BSIT </label>
            <label for="three"><input type="checkbox" id="chk"/>HRM</label>
        </div>
    </div><br><br>
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes1()">
            <select>
                <option>Select Position Level</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes1">
            <label for="one"><input type="checkbox" id="chk"/>Manager</label>
            <label for="two"><input type="checkbox" id="chk"/>Assistant</label>
            <label for="three"><input type="checkbox" id="chk"/>Faculty</label>
        </div>
    </div><br><br>
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes2()">
            <select>
                <option>Select Industry</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes2">
            <label for="one"><input type="checkbox" id="chk"/>ashdjs</label>
            <label for="two"><input type="checkbox" id="chk"/>jshdjsh </label>
            <label for="three"><input type="checkbox" id="chk"/>jsdhjs</label>
        </div>
    </div><br><br>
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes3()">
            <select>
                <option>Select Gender</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes3">
            <label for="one"><input type="checkbox" id="chk"/>Male</label>
            <label for="two"><input type="checkbox" id="chk"/>Female</label>
           
        </div>
    </div><br><br>
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes4()">
            <select>
                <option>Work Options</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes4">
            <label for="one"><input type="checkbox" id="chk"/>Day Shift</label>
            <label for="two"><input type="checkbox" id="chk"/>Night Shift </label>
            
        </div>
    </div>
    <br>
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes5()">
            <select>
                <option>Work Location</option>
            </select>
            <div class="overSelect"></div>
        </div>
        <div id="checkboxes5">
            <label for="one"><input type="checkbox" id="chk"/>Malabon City</label>
            <label for="two"><input type="checkbox" id="chk"/>Caloocan City</label>
            <label for="three"><input type="checkbox" id="chk"/>Valenzuela City</label>
        </div>
    </div>
    <br> 
        <button type = "submit" class = "btn btn-danger " id = "save" name = "btnSave"><b> CLEAR </b></button><br><br>
        <button type = "submit" class = "btn btn-danger " id = "cancel" name = "btnCancel"><b> FILTER</b> </button>
    
</form>  
 <script type="text/javascript">
 var expanded = false;
    function showCheckboxes() {
                var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>

  
 <script type="text/javascript">
 var expanded = false;
    function showCheckboxes1() {
                var checkboxes = document.getElementById("checkboxes1");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>

<script type="text/javascript">
 var expanded = false;
    function showCheckboxes2() {
                var checkboxes = document.getElementById("checkboxes2");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>

<script type="text/javascript">
 var expanded = false;
    function showCheckboxes3() {
                var checkboxes = document.getElementById("checkboxes3");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>
<script type="text/javascript">
 var expanded = false;
    function showCheckboxes4() {
                var checkboxes = document.getElementById("checkboxes4");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>
<script type="text/javascript">
 var expanded = false;
    function showCheckboxes5() {
                var checkboxes = document.getElementById("checkboxes5");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>
           
        </ul>
        <div class = "col-md-10">
            <table class = "Applicants" width = "100%" cellpadding = "0">
        <?php 
                
                
                if (isset($_POST['btnSearch'])) {
                    $search = $_POST['search'];
                    $qry = "SELECT studentinfotbl.StudentID, studcontactstbl.ContactsID, studcontactstbl.City, studentinfotbl.FirstName, studentinfotbl.LastName FROM studentinfotbl
                            LEFT JOIN studcontactstbl 
                            On studentinfotbl.StudentID = studcontactstbl.StudentID WHERE FirstName = '$search'";

                }
                else{
                    $qry = "SELECT studentinfotbl.StudentID, studcontactstbl.ContactsID, studcontactstbl.City, studentinfotbl.FirstName, studentinfotbl.LastName FROM studentinfotbl
                            LEFT JOIN studcontactstbl 
                            On studentinfotbl.StudentID = studcontactstbl.StudentID";
                    
                }

                $result = mysql_query($qry);

                $fname = '';
                $lname = '';
                $location = '';
                $student_id = '';

                while ($qry = mysql_fetch_array($result)) {
                    $fname = $qry['FirstName'];
                    $lname = $qry['LastName'];
                    $location = $qry['City'];
                    $student_id = $qry['StudentID'];
                }
        ?>
                    <h4>Resume Search Results.. </h4>
           <thead>
           <tr>
    
           </tr>    
                <tr>
                    <th width= "20%" class = "tabletitle">Name/ID</th>
                    <th width = "20%" class = "tabletitle">Location</th>
                    <th width = "10%" class = "tabletitle">Age</th>
                    <th width = "15%" class = "tabletitle">Skills </th>
                    <th width = "15%" class = "tabletitle"> Specialization </th>
                    <th width = "10%" class = "tabletitle"></th>
                <tr>
            </thead>
            <tbody>
                <tr>
                   <td><?php echo " $lname, $fname";  ?></td>
                   <td><?php echo "$location"; ?></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td> 
                    <?php
                        $result = mysql_query("SELECT `CompanyID` FROM `companyinfotbl` WHERE `Email` = '" . $_SESSION['Email'] . "'");
                        $row = mysql_fetch_array($result);
                        $company_id = $row['CompanyID'];
                        unset($result, $row);
                    ?>
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
    </form>
</body>
</html> 
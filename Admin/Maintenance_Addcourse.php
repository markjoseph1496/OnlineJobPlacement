<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Info</title>


    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/basic-template.css" rel="stylesheet" />


    <!-- BootstrapValidator CSS -->
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>
  
    <!-- jQuery and Bootstrap JS -->
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
      
    <!-- BootstrapValidator -->
    <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

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
#Adduser
            {
              width: 110px;
              height: 40px;
              border: 1px solid #E5E4E2;
              margin-left: 1000px;
              margin-top: -70px;
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
.spaces {
    margin: 1rem 0rem;
    border-bottom: 0em;
    line-height: 1;
    height: 7em;
}             
</style>


<body id="page-top" class="index resume">
  <form action="addcourse.php" id="addCourse">
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
            <li role="presentation" id="myinfo" class="item "><a href="Admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item"><a href="Account.php">Account</a></li>
            <li role="presentation" id="applications" class="item"><a href="Requested.php">Requested</a></li>
            <li role="presentation" id="applications" class="item"><a href="CompanyList.php">Company List</a></li>
            <li role="presentation" id="applications" class="item "><a href="AdviserList.php">Adviser List</a></li>
            <li role="presentation" id="applications" class="item active"><a href="Maintenance.php">Maintenance </a></li>
            
        </ul>
    
        <div class="space"></div>
        <?php
        if(isset($_GET['ID'])){
            echo'
            <div class="alert alert-success">
                <span class="glyphicon glyphicon-info-sign"></span> 
                Course Successfully Added!
            </div>
            ';
        }
        ?>
        <div class = "container">
            <div class = "col-md-6">
               
        <div class = "form-group">
                <label = "usr" class = "control-label"> Course Title </label>
                <input type="text" name="coursetitle" class="form-control" id="coursetitle" >
        </div>
        <div class = "space"></div>
          
            <div class = "form-group">
                <label = "usr" class = "control-label"> Course Code:</label>
                <input type="text" name="coursecode" class="form-control" id="coursecode">
             </div>
          
           <div class = "space"></div>

          
            <div class = "form-group"> 
                <label = "usr" class = "control-label"> Course Description: </label>
                <input type="text" name="coursedesc" class="form-control" id="coursedesc">
                <span class="glyphicon form-control-feedback" id="coursedesc"></span>
             </div>
          </div>           
        </div>
              <div class = "spaces"></div>
              <button type = "submit" class = "btn btn-danger " id = "save"><b> Save</b></button>
              <button class = "btn btn-danger " id = "cancel" name = "btnsave" href= ""><b> Cancel </b> </button>
    </div>
  </form>
  
<script type="text/javascript">
    $(document).ready(function (){
        var validator = $("#addCourse").bootstrapValidator({
              feedbackIcons: {
                    valid: "glyphicon glyphicon-ok",
                    invalid: "glyphicon glyphicon-remove",
                    validating: "glyphicon glyphicon-refresh"
              },
              fields: {
                    coursetitle: {
                        validators: {
                            notEmpty: {
                                message: "Course title is required"
                            },
                            stringLength: {
                                min: 10,
                                max: 50,
                                message: "Course title must be 10 - 50 characters long"
                            }
                        }
                    },
                    coursecode: {
                        validators: {
                            notEmpty: {
                                message: "Course code is required"
                            },
                            stringLength: {
                                min: 2,
                                max: 8,
                                message: "Course code must be 2 - 8 characters long"
                            }
                        }
                    },
                    coursedesc: {
                        validators: {
                            notEmpty: {
                                message: "Course description is required"
                            },
                            stringLength: {
                                min: 10,
                                max: 150,
                                message: "Course description must be 10 - 150 characters long"
                            }
                        }
                    }
              }
        });
    });
</script>
</body>
</html>
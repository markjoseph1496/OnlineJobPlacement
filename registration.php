<?php
include('connection.php');
?>
<!DOCTYPE html>
<!-- Yung resume link kulang pa. Naka abang pa lang dito -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online JPMS</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/basic-template.css" rel="stylesheet" />

    <!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>
  
    <!-- jQuery and Bootstrap JS -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
      
    <!-- BootstrapValidator -->
    <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- CSS -->
    <link href="StudentInfo/css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="StudentInfo/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="StudentInfo/font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="StudentInfo/font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="StudentInfo/font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="StudentInfo/font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>


<body id="page-top" class="index bg">
    <form name="registration" id="registration" autocomplete="off" action="registeradd.php">
        <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.php">Online Job Placement Management</a>
                </div>
            </div>
        </nav>

        <div id="yellow-text-fields">
            <div class="container">
                <div class="row">
                    <div class="white-holder">
                        <div class="col-md-12 text-center">
                            <h1>REGISTRATION</h1><br><br>
                        </div>
                        <div class="ribbon"><h4>Student Details:</h4></div><br>
                        <div class="row field">
                            <div class="col-md-3" style="float:center;">
                                &nbsp;
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="form-group">
                                    <label><span>(*) </span>Resumé Link: </label>
                                    <input type="text" class="form-control" id="resumelink" placeholder="http://YourName.sticaloocan.edu" name="resumelink">
                                    <p class="note">ex.http://YourName.sticaloocan.edu</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                &nbsp;
                            </div>
                        </div>
                        <p class="note">You may only use alphanumeric characters, including period (.), dash (-), or underscore (_). This will be the name that will identify your personalized ResumeLink. This name will be permanent and no longer be changeable.</p>
                        <br>
                        <div class="row field">
                            <div class="col-md-2 fieldcol">
                                <div class="form-group">
                                    <label>Student ID: <span>(*)</span></label>
                                    <input type="text" class="form-control" id="StudentID" name="StudentID" maxlength="11">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>First Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="FirstName" name="FirstName">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Last Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="LastName" name="LastName">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Birthdate <span>(*)</span></label><br>
                                    <input type="date" class="form-control" name="Birthday" id="Birthday">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Mobile Number<span>(*)</span></label>
                                    <input type="text" class="form-control" id="MobileNumber" name="MobileNumber">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Email <span>(*)</span></label>
                                    <input type="email" class="form-control" id="Email" name="Email">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Confirm Email <span>(*)</span></label>
                                    <input type="text" class="form-control" id="ConfirmEmail" name="ConfirmEmail">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Password <span>(*)</span></label>
                                    <input type="password" class="form-control" id="_Password" name="_Password">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Confirm Password <span>(*)</span></label>
                                    <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>City <span>(*)</span></label><br>
                                    <select id="City" name="City" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Please select one -</option>
                                        <option value="Caloocan City">Caloocan City</option>
                                        <option value="Las Pińas City">Las Pińas City</option>
                                        <option value="Makati City">Makati City</option>
                                        <option value="Malabon City">Malabon City</option>
                                        <option value="Mandaluyong City">Mandaluyong City</option>
                                        <option value="Manila">Manila</option>
                                        <option value="Marikina City">Marikina City</option>
                                        <option value="Muntinlupa City">Muntinlupa City</option>
                                        <option value="Navotas City">Navotas City</option>
                                        <option value="Parańaque City">Parańaque City</option>
                                        <option value="Pasay City">Pasay City</option>
                                        <option value="Pasig City">Pasig City</option>
                                        <option value="Pateros City">Pateros City</option>
                                        <option value="Quezon City">Quezon City</option>
                                        <option value="San Juan City">San Juan City</option>
                                        <option value="Taguig City">Taguig City</option>
                                        <option value="Valenzuela City">Valenzuela City</option>
                                    </select>
                                </div>
                            </div>
                        </div><br><br>

                        <div class="ribbon"><h4>Educational Background:</h4></div><br><br>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Educational Attainment <span>(*)</span></label><br>
                                    <select id="EducAttain" name="EducAttain" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Please select one -</option>
                                        <option value="Bachelor's/College Degree">Bachelor's/College Degree</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Course <span>(*)</span></label>
                                    <select id="Course" name="Course" class="form-control" style="width:100%; height:34px;">
                                        <option value="">-Please select one</option>
                                        <?php
                                            $qry = "SELECT * FROM coursetbl";
                                            $result = mysql_query($qry);
                                            while($qry = mysql_fetch_array($result)){
                                                $CourseTitle = $qry['CourseTitle'];
                                                $CourseCode = $qry['CourseCode'];
                                                echo"
                                                    <option value='$CourseCode'>$CourseTitle</option>
                                                ";
                                            }

                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-2 fieldcol">
                                <div class="form-group">
                                    <label>Graduation Date <span>(*)</span></label>
                                    <select id="GraduatedMonth" name="GraduatedMonth" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Month -</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option> 
                                        <option value="03">March</option> 
                                        <option value="04">April</option> 
                                        <option value="05">May</option> 
                                        <option value="06">June</option> 
                                        <option value="07">July</option> 
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 fieldcol">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select id="GraduatedYear" name="GraduatedYear" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Year -</option>
                                        <?php 
                                            $date = Date("Y") + 4;
                                                if($b==1){
                                                    $choose = "";
                                                }
                                                else{
                                                    $choose = $server_graduatedyear;
                                                }
                                                while($date != 1935){
                                                    $date--;
                                                    if($date == $choose){
                                                        echo "<option selected value='$date'> $date</option>";
                                                        }
                                                        else{
                                                        echo "<option value='$date'> $date</option>";
                                                        }
                                                    }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class"row field">
                            <div class="col-md-6">
                                <label><b>By clicking the "Sign Up" button below, I certify that I have read and agree to the <a href="" target="_blank">Terms of Use</a>.</b></label>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-log" style="float:right;">Sign Up</button>
                            </div>
                        </div>
                        <div class="field">
                            <div class="invisible-line"></div>
                        </div>
                    </div>
                </div> <!-- End of reg_form-->
            </div>
        </div>
    </form>
    <script type="text/javascript">
        $(document).ready(function (){
            var validator = $("#registration").bootstrapValidator({
                feedbackIcons: {
                    valid: "glyphicon glyphicon-ok",
                    invalid: "glyphicon glyphicon-remove",
                    validating: "glyphicon glyphicon-refresh"
                },
                fields:{
                    StudentID: {
                        validators: {
                            notEmpty: {
                                message: "Student ID is required."
                            },
                            stringLength: {
                                min: 11,
                                max: 11,
                                message: "Student ID is invalid."
                            },
                            remote: {
                                message: 'The student ID already exists',
                                url: 'registeradd.php',
                                data: {
                                    type: 'StudentID'
                                },
                                type: 'POST'
                                }
                            }
                    },
                    FirstName: {
                        validators: {
                            notEmpty: {
                                message: "First name is required."
                            },
                            stringLength: {
                                min: 3,
                                max: 15,
                                message: "First name must be 3-15 characters long."
                            }
                        }
                    },
                    LastName: {
                        validators: {
                            notEmpty: {
                                message: "Last name is required."
                            },
                            stringLength: {
                                min: 3,
                                max: 15,
                                message: "Last name must be 3-15 characters long."
                            }
                        }
                    },
                    MobileNumber: {
                        validators: {
                            notEmpty: {
                                message: "Mobile number is required."
                            },
                            stringLength: {
                                min: 7,
                                max: 11,
                                message: "Mobile number must be 7-11 characters long."
                            }
                        }
                    },
                    Email: {
                        validators: {
                            notEmpty: {
                                message: "Email address is required."
                            },
                            stringLength: {
                                min: 6,
                                max: 35,
                                message: "Email address must be 6-35 characters long."
                            }
                        }
                    },
                    ConfirmEmail: {
                        validators: {
                            notEmpty: {
                                message: "Confirm Email is required."
                            },
                            identical: {
                                field: "Email",
                                message: "Email and Confirm email mismatched."
                            }
                        }
                    },
                    _Password: {
                        validators: {
                            notEmpty: {
                                message: "Password is required."
                            },
                            stringLength: {
                                min: 8,
                                max: 16,
                                message: "Email address must be 8-16 characters long."
                            }
                        }
                    },
                    ConfirmPassword: {
                        validators: {
                            notEmpty: {
                                message: "Confirm password is required."
                            },
                            identical: {
                                field: "_Password",
                                message: "Password and confirm password mismatched."
                            }
                        }
                    },
                    City: {
                        validators: {
                            notEmpty: {
                                message: "City is required."
                            }
                        }
                    },
                    EducAttain: {
                        validators:{
                            notEmpty: {
                                message: "Educational Attainment is required."
                            }
                        }
                    },
                    EducAttain: {
                        validators:{
                            notEmpty: {
                                message: "Educational Attainment is required."
                            }
                        }
                    },
                    Course: {
                        validators:{
                            notEmpty: {
                                message: "Course is required."
                            }
                        }
                    },
                    GraduatedMonth: {
                        validators:{
                            notEmpty: {
                                message: "Month graduated is required."
                            }
                        }
                    },
                    GraduatedYear: {
                        validators:{
                            notEmpty: {
                                message: "Year graduated is required."
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
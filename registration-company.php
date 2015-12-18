<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online JPMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/basic-template.css" rel="stylesheet" />

    <!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>
  
    <!-- jQuery and Bootstrap JS -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
      
    <!-- BootstrapValidator -->
    <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- CSS -->
    <link href="css/agency_style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>


<body id="page-top" class="index">
    <form name="companyregistration" id="companyregistration" action="addcompany.php"  autocomplete="off" >
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

        <div id="yellow-text-fields" class="bg">
            <div class="container">
                <div class="row">
                    <div class="register_form">
                        <div class="col-md-12 text-center">
                            <h1>REGISTRATION</h1><br><br>
                        </div>
                            <div class = "row"> 
                                <div class = "col-md-6">
                                    <div class="ribbon"><h4>Company Information:</h4></div><br><br>
                                        <div class="row field">
                                            <div class="form-group">
                                                <label>Company Name <span>(*)</span></label>
                                                <input type="text" class="form-control" id="CompanyName" name="CompanyName">
                                            </div>
                                        </div>
                                         <div class="row field">
                                            
                                                <label>Career Site Url <span>(*)</span></label>
                                                <input type="text" class="form-control" id="lname" name="lname">
                                            
                                        </div>
                                        <div class = "row field">
                                            <div class="form-group">
                                                <label>Industry <span>(*)</span></label><br>
                                                <select id="Industry" name="Industry" class="industry" style="width:100%; height:34px;">
                                                    <option value>Select Industry</option>
                                                    <option value="NCR">NCR</option>
                                                    <option value="CAR">CAR</option>
                                                    <option value="Ilocos Region">Ilocos Region</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row field">
                                            <div class="form-group">
                                            <label>City<span>(*)</span></label><br>
                                            <select id="City" name="City" class="city_id" style="width:100%; height:34px;">
                                                <option value>- Please select one</option>
                                                <option value="NCR">NCR</option>
                                                <option value="CAR">CAR</option>
                                                <option value="Ilocos Region">Ilocos Region</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row field">
                                            <div class="form-group">
                                                <label>Email </label>
                                                <input type="email" class="form-control" id="Email" name="Email">
                                            </div>
                                        </div> 
                                        <div class="row field">
                                            <div class="form-group">
                                                <label>Password </label>
                                                <input type="text" class="form-control" id="sPassword" name="sPassword">
                                            </div>
                                        </div> 
                                        <div class="row field">
                                            <div class="form-group">
                                                <label>Confirm Password </label>
                                                <input type="text" class="form-control" id="ConfirmPassword" name="ConfirmPassword">
                                            </div>
                                        </div> 
                                </div>  <!--Company Info-->   

                                <div class = "col-md-6">
                                        <div class="ribbon"><h4>Primary User Information:</h4></div><br><br>
                                        <div class="row field">
                                            <div class="form-group">
                                                <label>First Name <span>(*)</span></label>
                                                <input type="text" class="form-control" id="FirstName" name="FirstName">
                                            </div>
                                        </div>
                                        <div class="row field">
                                            <div class="form-group">
                                                <label>Middle Name <span>(*)</span></label>
                                                <input type="text" class="form-control" id="MiddleName" name="MiddleName">
                                            </div>
                                        </div>
                                        <div class="row field">
                                            <div class="form-group">
                                                <label>Last Name <span>(*)</span></label>
                                                <input type="text" class="form-control" id="LastName" name="LastName">
                                            </div>
                                        </div>
                                        <div class="row field">
                                            <div class="form-group">
                                                <label>Position <span>(*)</span></label>
                                                <input type="text" class="form-control" id="Position" name="Position">
                                            </div>
                                        </div>
                                        <div class="row field">
                                            <div class="form-group">
                                                <label>Department <span>(*)</span></label>
                                                <input type="text" class="form-control" id="Department" name="Department">
                                            </div>
                                        </div>  
                                </div> 
                            </div>      
                                    <div class="divider"></div>
                                    <div class"row field">
                                        <div class="col-md-6">
                                            <label><b>By clicking the "Sign Up" button below, I certify that I have read and agree to the <a href="" target="_blank">Terms of Use</a>.</b></label>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" name="btnsave" id="btnsave" class="btn btn-log" style="float:right;">Sign Up</button>
                                        </div>
                                    </div>
                    </div>
                </div> <!-- End of reg_form-->
            </div>
        </div>
    </div>
    </form>
    <script type="text/javascript">
        $(document).ready(function (){
            var validator = $("#companyregistration").bootstrapValidator({
                feedbackIcons: {
                    valid: "glyphicon glyphicon-ok",
                    invalid: "glyphicon glyphicon-remove",
                    validating: "glyphicon glyphicon-refresh"
                },
                fields:{
                    CompanyName: {
                        validators: {
                            notEmpty: {
                                message: "Compamy Name is required."
                            },
                            stringLength: {
                                min: 5,
                                max: 15,
                                message: "Company Name is invalid."
                            },
                            regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "Company Name can consist of alphabetical characters and spaces only"
                            },
                            remote: {
                                message: 'The Company Name already exists',
                                url: 'addcompany.php',
                                data: {
                                    type: 'CompanyName'
                                },
                                type: 'POST'
                                }
                            }
                    },
                    Industry: {
                        validators: {
                            notEmpty: {
                                message: "Industry is required."
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
                    FirstName: {
                        validators: {
                            notEmpty: {
                                message: "First name is required."
                            },
                            stringLength: {
                                min: 3,
                                max: 15,
                                message: "First name must be 3-15 characters long."
                            },
                            regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "First Name can consist of alphabetical characters and spaces only"
                            }
                        }
                    },
                    MiddleName: {
                        validators: {
                            notEmpty: {
                                message: "Middle name is required."
                            },
                            stringLength: {
                                min: 3,
                                max: 15,
                                message: "Middle name must be 3-15 characters long."
                            },
                            regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "Middle Name can consist of alphabetical characters and spaces only"
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
                            },
                            regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "Last Name can consist of alphabetical characters and spaces only"
                            }
                        }
                    },
                    Position: {
                       validators: {
                            notEmpty: {
                                message: "Position is required."
                            },
                            stringLength: {
                                min: 3,
                                max: 15,
                                message: "Position must be 3-15 characters long."
                            },
                            regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "Position can consist of alphabetical characters and spaces only"
                            }
                        }
                    },
                    Department: {
                        validators: {
                            notEmpty: {
                                message: "Department is required."
                            },
                            stringLength: {
                                min: 3,
                                max: 15,
                                message: "Department must be 3-15 characters long."
                            },
                            regexp: {
                                regexp: /^[a-z\s]+$/i,
                                message: "Department can consist of alphabetical characters and spaces only"
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
                    sPassword: {
                        validators: {
                            notEmpty: {
                                message: "Password is required."
                            },
                            stringLength: {
                                min: 8,
                                max: 16,
                                message: "Password must be 8-16 characters long."
                            }
                        }
                    },
                    ConfirmPassword: {
                        validators: {
                            notEmpty: {
                                message: "Confirm password is required."
                            },
                            identical: {
                                field: "sPassword",
                                message: "Password and confirm password mismatched."
                            }
                        }
                    },
                }
            });
        });
    </script>
</body>

</html>
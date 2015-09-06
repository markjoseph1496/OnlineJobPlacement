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
    <form name="registration" onsubmit="return validateForm()" method="POST" >
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
                            
                                <label>Company Name <span>(*)</span></label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            
                        </div>
                         <div class="row field">
                            
                                <label>Career Site Url <span>(*)</span></label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            
                        </div>
                        <div class="row field">
                            
                                <label>Company Name <span>(*)</span></label>
                                <input type="text" class="form-control" id="fname" name="fname">
                           
                        </div>
                       
                        <div class="row field">
                           
                                <label>State/Region<span>(*)</span></label><br>
                                <select id="state_id" name="state_id" class="state_id" style="width:100%; height:34px;">
                                    <option value>- Please select one</option>
                                    <option value="NCR">NCR</option>
                                    <option value="CAR">CAR</option>
                                    <option value="Ilocos Region">Ilocos Region</option>
                                </select>
                            
                        </div> 
                        <div class = "row field">
                        
                                <label>Industry <span>(*)</span></label><br>
                                <select id="industry" name="industry" class="industry" style="width:100%; height:34px;">
                                    <option value>Select Industry</option>
                                    <option value="NCR">NCR</option>
                                    <option value="CAR">CAR</option>
                                    <option value="Ilocos Region">Ilocos Region</option>
                                </select>
                           
                         </div>
                         <div class="row field">
                            
                                <label>City<span>(*)</span></label><br>
                                <select id="state_id" name="state_id" class="state_id" style="width:100%; height:34px;">
                                    <option value>- Please select one</option>
                                    <option value="NCR">NCR</option>
                                    <option value="CAR">CAR</option>
                                    <option value="Ilocos Region">Ilocos Region</option>
                                </select>
                            
                            </div> 
                         <div class="row field">
                           
                                <label>Phone <span>(*)</span></label>
                                <input type="text" class="form-control" id="lname" name="lname">
                           
                        </div>  
                         <div class="row field">
                            
                                <label>Mobile </label>
                                <input type="text" class="form-control" id="lname" name="lname">
                           
                        </div> 
                        <div class="row field">
                            
                                <label>Fax </label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            
                        </div> 
                    </div>  <!--Company Info-->   

                    <div class = "col-md-6">
                            <div class="ribbon"><h4>Primary User Information:</h4></div><br><br>
                        <div class="row field">
                            
                                <label>First Name <span>(*)</span></label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            
                        </div>
                         <div class="row field">
                            
                                <label>Middle Name <span>(*)</span></label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            
                        </div>
                        <div class="row field">
                            
                                <label>Last Name <span>(*)</span></label>
                                <input type="text" class="form-control" id="fname" name="fname">
                           
                        </div>
                       
                        <div class="row field">
                            
                                <label>Position <span>(*)</span></label>
                                <input type="text" class="form-control" id="fname" name="fname">
                           
                        </div>
                         
                         <div class="row field">
                           
                                <label>Department <span>(*)</span></label>
                                <input type="text" class="form-control" id="lname" name="lname">
                           
                        </div>  
                         <div class="row field">
                            
                                <label>Email </label>
                                <input type="text" class="form-control" id="lname" name="lname">
                           
                        </div> 
                        <div class="row field">
                            
                                <label>Password </label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            
                        </div> 
                        <div class="row field">
                            
                                <label>Confirmation </label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            
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
</body>

</html>
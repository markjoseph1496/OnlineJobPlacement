<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>


<body id="page-top" class="index">
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


    <section id="registration">
        <div class="container">
            <div class="row">
                <div class="register_form">
                    <div class="col-md-12 text-center">
                        <h1>REGISTRATION</h1><br><br>
                    </div>
                    <div class="ribbon"><h4>Student Details:</h4></div><br><br>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <label><span>(*) </span>Resumé Link: </label>
                            http://________________.jobs180.com
                                    <input type="text" class="form-control" id="resumelink">
                                    <p class="note">ex.http://YourName.jobs180.com</p>
                        </div>
                    </div>

                                    <p class="note">You may only use alphanumeric characters, including period (.), dash (-), or underscore (_). This will be the name that will identify your personalized ResumeLink. This name will be permanent and no longer be changeable.</p>
                                    <br><br>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>First Name <span>(*)</span></label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>Last Name <span>(*)</span></label>
                            <input type="text" class="form-control" id="lname">
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Birthdate <span>(*)</span></label><br>
                            <input type="text" class="form-control" id="bday" data-format="YYYY-MM-DD" data-template="MMMM D YYYY" style="display: none;">
                                <span class="combodate ">
                                    <select id="bday_month" class="month" style="width:25%; height:34px;">
                                        <option value></option>
                                        <option value="0">January</option>
                                        <option value="1">February</option> 
                                        <option value="2">March</option> 
                                        <option value="3">April</option> 
                                        <option value="4">May</option> 
                                        <option value="5">June</option> 
                                        <option value="6">July</option> 
                                        <option value="7">August</option>
                                        <option value="8">September</option>
                                        <option value="9">October</option>
                                        <option value="10">November</option>
                                        <option value="11">December</option>
                                    </select>

                                    <select id="bday_day" class="day" style="width: 13%; height:34px;">
                                        <option value></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option> 
                                        <option value="3">3</option> 
                                        <option value="4">4</option> 
                                        <option value="5">5</option> 
                                        <option value="6">6</option> 
                                        <option value="7">7</option> 
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">21</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>

                                    <select id="bday_year" class="year" style="width:15%; height:34px;">
                                        <option value></option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                    </select>
                                </span>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>Mobile Number <span>(*)</span></label>
                            <input type="text" class="form-control" id="mobile">
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Email <span>(*)</span></label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>Confirm Email <span>(*)</span></label>
                            <input type="text" class="form-control" id="confirm_email">
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Password <span>(*)</span></label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>Confirm Password <span>(*)</span></label>
                            <input type="password" class="form-control" id="confirm_pwd">
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>State/Region <span>(*)</span></label><br>
                            <select id="state_id" class="state_id" style="width:100%; height:34px;">
                                <option value>- Please select one</option>
                                <option value="1">NCR</option>
                                <option value="2">CAR</option>
                                <option value="3">Ilocos Region</option>
                            </select>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>City <span>(*)</span></label><br>
                            <select id="city_id" class="city_id" style="width:100%; height:34px;">
                                <option value>- Please select one</option>
                            </select>
                        </div>
                    </div> <br><br>

                    <div class="ribbon"><h4>Educational Background:</h4></div><br><br>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Educational Attainment <span>(*)</span></label><br>
                            <select id="qualification_id" class="qualification_id" style="width:100%; height:34px;">
                                <option value>- Please select one</option>
                                <option value="1">Bachelor's/College Degree</option>
                            </select>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>School <span>(*)</span></label><br>
                            <select id="school_id" class="school_id" style="width:100%; height:34px;">
                                <option value>- Please select one</option>
                                <option value="">STI Caloocan College</option>
                            </select>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-4 fieldcol">
                            <label>Field of Study <span>(*)</span></label><br>
                            <select id="course_id" class="course_id" style="width:100%; height:34px;">
                                <option value>- Please select one</option>
                                <option value="1">Computer Science</option>
                            </select>
                        </div>
                        <div class="col-md-4 fieldcol">
                            <label>Major/Course <span>(*)</span></label><br>
                            <select id="major" class="major" style="width:100%; height:34px;">
                                <option value>- Please select one</option>
                                <option value="1">Computer Science</option>
                            </select>
                        </div>
                        <div class="col-md-4 fieldcol">
                            <label>Graduation Date <span>(*)</span></label><br>
                            <input type="text" class="form-control" id="graduated" data-format="YYYYMM" data-template="MMMM YYYY" style="display: none;" required data-validation-required-message="">
                            <span class"combodate">
                                <select id="graduated_month" class="graduated_month" style="width:35%; height:34px;">
                                    <option value></option>
                                    <option value="0">January</option>
                                    <option value="1">February</option> 
                                    <option value="2">March</option> 
                                    <option value="3">April</option> 
                                    <option value="4">May</option> 
                                    <option value="5">June</option> 
                                    <option value="6">July</option> 
                                    <option value="7">August</option>
                                    <option value="8">September</option>
                                    <option value="9">October</option>
                                    <option value="10">November</option>
                                    <option value="11">December</option>
                                </select>

                                <select id="graduated_year" class="graduated_year" style="width:25%; height:34px;">
                                    <option value></option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                </select>
                            </span>
                        </div>
                        <div class="divider"></div>
                        <div class"row field">
                            <div class="col-md-6">
                                <label><b>By clicking the "Sign Up" button below, I certify that I have read and agree to the <a href="" target="_blank">Terms of Use</a>.</b></label>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" id="btnsave" class="btn btn-log" style="float:right;">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of reg_form-->
            </div>
        </div>
    </section>
</body>
</html>
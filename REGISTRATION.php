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
    <link href="StudentInfo/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="StudentInfo/css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="StudentInfo/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="StudentInfo/font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="StudentInfo/font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="StudentInfo/font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="StudentInfo/font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>


<body id="page-top" class="index">
    <form method="POST" >
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

                        <div class="row field ">
                        <div class="col-md-12 fieldcol text-center">
                            <label>Student ID: <span>(*)</span></label>
                            <input type="text" class="form-control" id="txtStudentID" name="txtStudentID" style: float:"center;">
                        </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <label>First Name <span>(*)</span></label>
                                <input type="text" class="form-control" id="txtFname" name="txtFname">
                            </div>
                            <div class="col-md-6 fieldcol">
                                <label>Last Name <span>(*)</span></label>
                                <input type="text" class="form-control" id="txtLname" name="txtLname">
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <label>Birthdate <span>(*)</span></label><br>
                                    <span class="combodate ">
                                        <select id="txtbday_month" name="txtbday_month" class="month" style="width:25%; height:34px;">
                                            <option value></option>
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

                                        <select id="txtbday_day" name="txtbday_day" class="day" style="width: 13%; height:34px;">
                                            <option value></option>
                                            <option value="01">1</option>
                                            <option value="02">2</option> 
                                            <option value="03">3</option> 
                                            <option value="04">4</option> 
                                            <option value="05">5</option> 
                                            <option value="06">6</option> 
                                            <option value="07">7</option> 
                                            <option value="08">8</option>
                                            <option value="09">9</option>
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

                                        <select id="txtbday_year" name="txtbday_year" class="year" style="width:15%; height:34px;">
                                            <?php 
                                                $date = 1934;
                                                while($date != Date("Y")){
                                                $date++;
                                                echo "<option value='$date'> $date</option>";
                                                }
                                            ?>
                                        </select>
                                    </span>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <label>Mobile Number <span>(*)</span></label>
                                <input type="text" class="form-control" id="txtmobilenum" name="txtmobilenum">
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <label>Email <span>(*)</span></label>
                                <input type="text" class="form-control" id="txtEmail" name="txtEmail">
                            </div>
                            <div class="col-md-6 fieldcol">
                                <label>Confirm Email <span>(*)</span></label>
                                <input type="text" class="form-control" id="txtconfirm_email" name="txtconfirm_email">
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <label>Password <span>(*)</span></label>
                                <input type="password" class="form-control" id="txtpassword" name="txtpassword">
                            </div>
                            <div class="col-md-6 fieldcol">
                                <label>Confirm Password <span>(*)</span></label>
                                <input type="password" class="form-control" id="txtconfirm_password" name="txtconfirm_password">
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <label>State/Region <span>(*)</span></label><br>
                                <select id="txtstate_id" name="txtstate_id" class="state_id" style="width:100%; height:34px;">
                                    <option value>- Please select one</option>
                                    <option value="NCR">NCR</option>
                                    <option value="CAR">CAR</option>
                                    <option value="Ilocos Region">Ilocos Region</option>
                                </select>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <label>City <span>(*)</span></label><br>
                                <select id="txtcity_id" name="txtcity_id" class="city_id" style="width:100%; height:34px;">
                                    <option value>- Please select one</option>
                                    <option value="Valenzuela">Valenzuela</option>
                                    <option value="Caloocan">Caloocan</option>
                                </select>
                            </div>
                        </div> <br><br>

                        <div class="ribbon"><h4>Educational Background:</h4></div><br><br>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <label>Educational Attainment <span>(*)</span></label><br>
                                <select id="txtqualification_id" name="txtqualification_id" class="qualification_id" style="width:100%; height:34px;">
                                    <option value>- Please select one</option>
                                    <option value="Bachelor's/College Degree">Bachelor's/College Degree</option>
                                </select>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <label>School <span>(*)</span></label><br>
                                <select id="txtschool_id" name="txtschool_id" class="school_id" style="width:100%; height:34px;">
                                    <option value>- Please select one</option>
                                    <option value="STI College Caloocan">STI College Caloocan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-4 fieldcol">
                                <label>Field of Study <span>(*)</span></label><br>
                                <select id="txtcourse_id" name="txtcourse_id" class="course_id" style="width:100%; height:34px;">
                                    <option value>- Please select one</option>
                                    <option value="Computer Science">Computer Science</option>
                                </select>
                            </div>
                            <div class="col-md-4 fieldcol">
                                <label>Major/Course <span>(*)</span></label><br>
                                <select id="txtmajor" name="txtmajor" class="major" style="width:100%; height:34px;">
                                    <option value>- Please select one</option>
                                    <option value="Computer Science">Computer Science</option>
                                </select>
                            </div>
                            <div class="col-md-4 fieldcol">
                                <label>Graduation Date <span>(*)</span></label><br>
                                <span class"combodate">
                                    <select id="txtgraduated_month" name="txtgraduated_month" class="graduated_month" style="width:35%; height:34px;">
                                        <option value></option>
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

                                    <select id="txtgraduated_year" name="txtgraduated_year" class="graduated_year" style="width:25%; height:34px;">
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
                                    <button type="submit" name="btnSave" id="btnSave" class="btn btn-log" style="float:right;">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End of reg_form-->
                </div>
            </div>
        </div>
    </form>
</body>

<!--
<script>
function validateForm(){
    var fname = document.forms['registration']["fname"].value;
    var lname = document.forms['registration']["lname"].value;
    var bday_month = document.forms['registration']["bday_month"].value;
    var bday_year = document.forms['registration']["bday_year"].value;
    var bday_day = document.forms['registration']["bday_day"].value;
    var mobilenum = document.forms['registration']["mobilenum"].value;
    var email = document.forms['registration']["email"].value;
    var confirm_email = document.forms['registration']["confirm_email"].value;
    var password = document.forms['registration']["password"].value;
    var confirm_password = document.forms['registration']["confirm_password"].value;
    var state_id = document.forms['registration']["state_id"].value;
    var city_id = document.forms['registration']["city_id"].value;
    var qualification_id = document.forms['registration']["qualification_id"].value;
    var school_id = document.forms['registration']["school_id"].value;
    var course_id = document.forms['registration']["course_id"].value;
    var major = document.forms['registration']["major"].value;
    var graduated_month = document.forms['registration']["graduated_month"].value;
    var graduated_year = document.forms['registration']["graduated_year"].value;
    if(fname==null || fname == ""){
        alert("First Name must be filled out");
        return false;
    }
    if(lname==null || lname == ""){
        alert("Last Name must be filled out");
        return false;
    }
     if(bday_month==null || bday_month == ""){
        alert("Enter your birthdate");
        return false;
    }
     if(bday_year==null || bday_year == ""){
        alert("Enter your birthdate");
        return false;
    }
     if(bday_day==null || bday_day== ""){
        alert("Enter your birthdate");
        return false;
    }
     if(mobilenum==null || mobilenum == ""){
        alert("Mobile Number must be filled out");
        return false;
    }
     if(email==null || email == ""){
        alert("Email must be filled out");
        return false;
    }
     if(password==null || password == ""){
        alert("Password must be filled out");
        return false;
    }
     if(state_id==null || state_id == ""){
        alert("State/Region must be filled out");
        return false;
    }
     if(city_id==null || city_id == ""){
        alert("City must be filled out");
        return false;
    }
     if(qualification_id==null || qualification_id == ""){
        alert("Educational Attainment must be filled out");
        return false;
    }
     if(course_id==null || course_id == ""){
        alert("Field of Study must be filled out");
        return false;
    }
     if(major==null || major == ""){
        alert("Major Course must be filled out");
        return false;
    }
     if(graduated_month==null || graduated_month == ""){
        alert("Graduation Date must be filled out");
        return false;
    }
     if(school_id==null || school_id == ""){
        alert("School must be filled out");
        return false;
    }
     if(graduated_year==null || graduated_year == ""){
        alert("Graduation Date must be filled out");
        return false;
    }
    if(password != confirm_password){
        alert("Password did not match.")
        return false;
    }
    if(email != confirm_email){
        alert("Email did not match.")
        return false;
    }
    
}
</script>
-->
<?php
include('connection.php');

if(isset($_POST['btnSave'])){

    $StudentID = $_POST['txtStudentID'];
   $fname = $_POST['txtFname'];
   $lname = $_POST['txtLname'];
   $bday_month = $_POST['txtbday_month'];
   $bday_day = $_POST['txtbday_day'];
   $bday_year = $_POST['txtbday_year'];
   $mobilenum = $_POST['txtmobilenum'];
   $email = $_POST['txtEmail'];
   $password = $_POST['txtpassword'];
   $state_id = $_POST['txtstate_id'];
   $city_id = $_POST['txtcity_id'];
   $qualification_id = $_POST['txtqualification_id'];
   $school_id = $_POST['txtschool_id'];
   $course_id = $_POST['txtcourse_id'];
   $major = $_POST['txtmajor'];
   $graduated_month = $_POST['txtgraduated_month'];
   $graduated_year = $_POST['txtgraduated_year'];

   $birthdate .= $bday_month .'/'. $bday_day .'/'. $bday_year;
   $yeargraduated .= $graduated_month .'-'. $graduated_year;
   $qualification_id = mysql_real_escape_string($qualification_id);


   $query = "INSERT INTO studentinfotbl (StudentID,FirstName,LastName,Birthdate,MobileNumber,Email,Password,StateRegion,City,EducAttain,School,FieldofStudy,MajorCourse,GraduationDate) values  ('$StudentID','$fname','$lname','$birthdate','$mobilenum','$email','$password','$state_id','$city_id','$qualification_id','$school_id','$course_id','$major','$yeargraduated')";
   $Result = mysql_query($query);
   echo "
         <script type='text/javascript'>
         location.href='login-student.php';
         </script>
         ";
}
?>

</html>
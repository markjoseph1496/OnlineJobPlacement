<!DOCTYPE html>
<?php 
include('connection.php');
session_start();

$x = $_SESSION['StudentID'];

$qry = "SELECT * FROM studentinfotbl WHERE StudentID ='$x'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $FirstName = $qry['FirstName'];
                $MiddleName = $qry['MiddleName'];
                $LastName = $qry['LastName'];
                $Gender = $qry['Gender'];
                $Nationality = $qry['Nationality'];
                $CivilStatus = $qry['CivilStatus'];
                $FBLink = $qry['FBLink'];
                $TwitterLink = $qry['TwitterLink'];
                $ProfileImage = $qry['ProfileImage'];
                $Birthdate = $qry['Birthdate'];
        }
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="../../js/uploadimage.js"></script>

    <title>Online JPMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>

<!-- for image upload -->
<script type="text/javascript">
$(function() {
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>
<!-- for image upload -->


<!-- for birhdate validation --> 
<script type="text/javascript">
    function call() {
        var kcyear = document.getElementsByName("bday_year")[0],
            kcmonth = document.getElementsByName("bday_month")[0],
            kcday = document.getElementsByName("bday_day")[0];
        var d = new Date();
        var n = d.getFullYear();
        for (var i = n; i >= 1950; i--) {
            var opt = new Option();
            opt.value = opt.text = i;
            kcyear.add(opt);
        }
        kcyear.addEventListener("change", validate_date);
        kcmonth.addEventListener("change", validate_date);

        function validate_date() {
            var y = +kcyear.value,
                m = kcmonth.value,
                d = kcday.value;
            if (m === "2") var mlength = 28 + (!(y & 3) && ((y % 100) !== 0 || !(y & 15)));
            else var mlength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][m - 1];
            kcday.length = 0;
            for (var i = 1; i <= mlength; i++) {
                var opt = new Option();
                opt.value = opt.text = i;
                if (i == d) opt.selected = true;
                kcday.add(opt);
            }
        }
        validate_date();
    }
</script>
<!-- for birhdate validation --> 


<style>
#imagePreview {
    width: 250px;
    height: 250px;
    background-position:center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>

<body id="page-top" class="index bg">
    <form method ="POST">
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

    <div id="yellow-text-fields">
        <div class="container">
            <div class="white-holder">
            <ul class="nav nav-tabs">
                <li role="presentation" id="myinfo" class="item active"><a href="personal_info.php"><B>My Info</B></a></li>
                <li role="presentation" id="resumelink" class="item"><a href="../Resumelink/resumelink.php">Resumé Link</a></li>
                <li role="presentation" id="applications" class="item"><a href="../Applications/applications.php">Applications</a></li>
                <li role="presentation" id="settings" class="item"><a href="../Settings/settings.php">Settings</a></li>
            </ul>
            <div class="space"></div>
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow active"><a href="personal_info.php">Personal Info</a></li>
                <li class="yellow"><a href="contacts_info.php">Contacts Info</a></li>
                <li class="yellow"><a href="work.php">Work</a></li>
                <li class="yellow"><a href="education.php">Education</a></li>
                <li class="yellow"><a href="certifications.php">Certifications</a></li>
                <li class="yellow"><a href="achievements.php">Achievements</a></li>
                <li class="yellow"><a href="skills_languages.php">Skills & Languages</a></li>
                <li class="yellow"><a href="references.php">References</a></li>
                <li class="yellow"><a href="portfolio.php">Portfolio</a></li>
            </ul>
        
            <div class="col-md-6 col-md-5">
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label>First Name <span>(*)</span></label>
                        <input type="text" class="form-control" id="fname" name="fname" value = "<?php echo $FirstName; ?>">
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" id="mname" name="mname" value = "<?php echo $MiddleName; ?>">
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label>Last Name <span>(*)</span></label>
                        <input type="text" class="form-control" id="lname" name="lname" value = "<?php echo $LastName; ?>">
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">    
                        <label>Gender <span>(*)</span></label>
                        <select id="gender" name="gender" class="gender" style="width:100%; height:34px;">
                            <option value="Female" <?php if($Gender=="Female") echo 'selected="selected"'; ?> >Female</option>
                            <option value="Male" <?php if($Gender=="Male") echo 'selected="selected"'; ?> >Male</option>
                        </select>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label>Birthdate <span>(*)</span></label><br>
                        <span class="combodate ">
                            <select id="bday_month" name="bday_month" class="month" style="width:27%; height:34px;" onchange="call()">
                                <option value=""> -Month-</option>
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

                            <select id="bday_day" name="bday_day" class="day" style="width: 20%; height:34px;">
                                <option value="">-Day-</option>
                            </select>

                            <select id="bday_year" name="bday_year" class="year" style="width:20%; height:34px;">
                                <option value= "">-Year-</option>
                                <script>
                                    var myDate = new Date();
                                    var year = 1999;
                                    for(var i = 1935; i < year+1; i++){
                                    document.write('<option value="'+i+'">'+i+'</option>');
                                    }
                                </script>
                            </select>
                        </span>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label>Nationality <span>(*)</span></label>
                        <select id="nationality" name="nationality" class="nationality" style="width:100%; height:34px;">
                            <option value="American" <?php if($Nationality=="American") echo 'selected="selected"'; ?> >American</option>
                            <option value="Filipino" <?php if($Nationality=="Filipino") echo 'selected="selected"'; ?> >Filipino</option>
                        </select>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label>Civil Status <span>(*)</span></label>
                        <select id="civil_status" name="civil_status" class="civil_status" style="width:100%; height:34px;">
                            <option value>- Please select one</option>
                            <option value="Single" <?php if($CivilStatus=="Single") echo 'selected="selected"'; ?> >Single</option>
                            <option value="Married" <?php if($CivilStatus=="Married") echo 'selected="selected"'; ?> >Married</option>
                            <option value="Separated" <?php if($CivilStatus=="Separated") echo 'selected="selected"'; ?> >Separated</option>
                            <option value="Widowed" <?php if($CivilStatus=="Widowed") echo 'selected="selected"'; ?> >Widowed</option>
                        </select>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label>Facebook</label>
                        http://www.facebook.com/<input name = "FBLink" type="text" class="form-control" value = "<?php echo $FBLink; ?>">
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label>Twitter</label>
                        http://www.twitter.com/<input  name = "TwitterLink" type="text" class="form-control" value = "<?php echo $TwitterLink; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-sm-6 fieldcol">
                <label>Photo</label>
                <input id="uploadFile" type="file" name="image" class="img"><br>
                <div id="imagePreview">
                    <div class="space"></div>
                    <div class="space"></div>
                        <br><br><br><br><br><br><br><br><br><br><br><br>              
                        <button name="" type="" id="" class="btn btn-hg btn-primary" name="btnDelete">Delete Image</button>
                </div>
            </div>
            <div class="field">
                <div class="profile_divider"></div>
                <div class"row field">
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-hg btn-primary" style="float:right;" name ="btnSave">Save</button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    </form>
</body>

<?php
include('connection.php');

if(isset($_POST['btnSave'])){

   $fname = $_POST['fname'];
   $mname = $_POST['mname'];
   $lname = $_POST['lname'];
   $bday_month = $_POST['bday_month'];
   $bday_day = $_POST['bday_day'];
   $bday_year = $_POST['bday_year'];
   $gender = $_POST['gender'];
   $nationality = $_POST['nationality'];
   $civil_status = $_POST['civil_status'];
   $FB_Link = $_POST['FBLink'];
   $Twitter_Link = $_POST['TwitterLink'];
   $birthdate .= $bday_month .'/'. $bday_day .'/'. $bday_year;

   $query = "UPDATE studentinfotbl SET FirstName = '$fname', MiddleName = '$mname', LastName = '$lname', Birthdate = '$birthdate', Gender = '$gender', Nationality = '$nationality', CivilStatus = '$civil_status', FBLink = '$FB_Link', TwitterLink = '$Twitter_Link' WHERE StudentID = '$x'";
   $Result = mysql_query($query);
   echo "
         <script type='text/javascript'>
         </script>
         ";
}
?>

</html>
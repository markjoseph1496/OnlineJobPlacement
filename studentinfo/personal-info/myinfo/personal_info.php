<!DOCTYPE html>
<?php 
include('../../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}
else{
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php?id=2';
        </script>
        ";
}


$qry = "SELECT * FROM studentinfotbl WHERE StudentID ='$StudentID'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $MajorCourse = $qry['MajorCourse'];
                $FirstName = $qry['FirstName'];
                $MiddleName = $qry['MiddleName'];
                $LastName = $qry['LastName'];
                $Birthdate = $qry['Birthdate'];
                $Gender = $qry['Gender'];
                $Nationality = $qry['Nationality'];
                $CivilStatus = $qry['CivilStatus'];
                $FBLink = $qry['FBLink'];
                $TwitterLink = $qry['TwitterLink'];
                $ProfileImage = $qry['ProfileImage'];
        }

$FBLink = substr($FBLink, 24);
/* Validation Starts Here */

$b = 1;
$fname_validator = '';
$mname_validator = '';
$lname_validator = '';
$birthdate_validator = '';
$FBLink_validator = '';

$server_fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$server_mname = isset($_POST['mname']) ? $_POST['mname'] : '';
$server_lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$server_Birthdate = isset($_POST['txtBirthdate']) ? $_POST['txtBirthdate'] : '';
$server_gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$server_nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
$server_civilstatus = isset($_POST['civil_status']) ? $_POST['civil_status'] : '';
$server_FBLink = isset($_POST['FBLink']) ? $_POST['FBLink'] : '';
$server_TwitterLink = isset($_POST['TwitterLink']) ? $_POST['TwitterLink'] : '';

$server_fname = ucwords(strtolower($server_fname));
$server_mname = ucwords(strtolower($server_mname));
$server_lname = ucwords(strtolower($server_lname));

$a = isset($_POST['fname']);
$a = $a && isset($_POST['mname']);
$a = $a && isset($_POST['lname']);
$a = $a && isset($_POST['txtBirthdate']);
$a = $a && isset($_POST['FBLink']);


if($a){
    // I don't need $a already.
    unset($a);
    // START OF VALIDATION
    // preg_match is regular expression..
    // basically, I use regular expression to filter valid format input sent to $_POST.
    $fname_valid = (bool) preg_match('/^[A-Za-z ]+$/i', $server_fname);
    $mname_valid = (bool) preg_match('/^[A-Za-z ]+$/i', $server_mname);
    $lname_valid = (bool) preg_match('/^[A-Za-z ]+$/i', $server_lname);
    $Birthdate_valid = 1;
    $FBLink_valid = (bool) preg_match('/^[_A-z0-9.{1,}]+$/i', $server_FBLink);


    if(is_null($server_fname) || $server_fname == ''){
        $fname_validator = 'First name cannot be empty.';
        $fname_valid = 0;
    }
    elseif(!$fname_valid){
        $fname_validator = 'First name is not valid.';
    }

    if(is_null($server_mname) || $server_mname == ''){
        $mname_validator = '';
        $mname_valid = 1;
    }
    elseif(!$mname_valid){
        $mname_validator = 'Middle name is not valid.';
    }    

    if(is_null($server_lname) || $server_lname == ''){
        $lname_validator = 'Last name cannot be empty.';
        $lname_valid = 0;
    }
    elseif(!$lname_valid){
        $lname_validator = 'Last name is not valid.';
    }      

    if(is_null($server_Birthdate) || $server_Birthdate == ''){
        $birthdate_validator = 'This field is required.';
        $Birthdate_valid = 0;
    }

    if(is_null($server_FBLink) || $server_FBLink == ''){
        $FBLink = 'This field is required.';
        $FBLink_valid = 0;
    }
    elseif(!$FBLink_valid){
        $FBLink_validator = 'Link is not valid.';
    }  

    $b=0;

    $a = $fname_valid;
    $a = $a && $mname_valid;
    $a = $a && $lname_valid;
    $a = $a && $Birthdate_valid;
    $a = $a && $FBLink_valid;

    if($a){
        unset($a);
        $FacebookLink = "http://www.facebook.com/".$server_FBLink;

        $query = "UPDATE studentinfotbl SET FirstName = '$server_fname', MiddleName = '$server_mname', LastName = '$server_lname', Birthdate = '$server_Birthdate', Gender = '$server_gender', Nationality = '$server_nationality', CivilStatus = '$server_civilstatus', FBLink = '$FacebookLink', TwitterLink = '$server_TwitterLink' WHERE StudentID = '$StudentID'";
        $Result = mysql_query($query);
        echo "
         <script type='text/javascript'>
         </script>
         ";
         $b=2;
    }


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

<body id="page-top" class="index bg">
    <form method ="POST" autocomplete="off" enctype="multipart/form-data">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="#page-top">Online Job Placement Management</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="../../../login-student.php?id=1">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div id="yellow-text-fields">
        <div class="white-holder">
            <div class="row field">
                <div class="col-md-10">
                    <ul class="nav nav-tabs">
                        <li role="presentation" id="myinfo" class="item active"><a href="personal_info.php"><B>My Info</B></a></li>
                        <li role="presentation" id="resumelink" class="item"><a href="../resumelink/resumelink.php">Resumé Link</a></li>
                        <li role="presentation" id="applications" class="item"><a href="../applications/applications.php">Applications</a></li>
                        <li role="presentation" id="search-job" class="item"><a href="../search-job/search-job.php">Jobs</a></li>
                        <li role="presentation" id="settings" class="item"><a href="../settings/settings.php">Settings</a></li>
                    </ul>
                 </div>
                <div class="col-md-2 text-center">
                    <label>Your Student ID<h4>008-2012-0805</h4></label>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow active"><a href="personal_info.php">Personal Info</a></li>
                <li class="yellow"><a href="contacts_info.php">Contacts Info</a></li>
                <li class="yellow"><a href="work.php">Work</a></li>
                <li class="yellow"><a href="education.php">Education</a></li>
                <li class="yellow"><a href="certifications.php">Certifications</a></li>
                <li class="yellow"><a href="achievements.php">Achievements</a></li>
                <li class="yellow"><a href="specialization_languages.php">Specialization & Languages</a></li>
                <li class="yellow"><a href="references.php">References</a></li>
                <li class="yellow"><a href="portfolio.php">Portfolio</a></li>
            </ul>
            <div class="space-1"></div>
            
            <div class="col-md-6 col-md-5">
                <?php
                if($b==2){
                echo '<div class="alert alert-success">
                    <span class="glyphicon glyphicon-info-sign"></span> 
                    Personal Information successfully updated.
                </div>';
                }
                ?>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <div class="form-group">
                            <label>First Name <span>(*)</span></label>
                            <input type="text" class="form-control" id="fname" name="fname"  value="<?php if($b==1){ echo $FirstName; } else{ echo $server_fname; } ?>">
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" id="mname" name="mname" value="<?php if($b==1){ echo $MiddleName; } else{ echo $server_mname; } ?>">
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <div class="form-group">
                            <label>Last Name <span>(*)</span></label>
                            <input type="text" class="form-control" id="lname" name="lname" value="<?php if($b==1){ echo $LastName; } else{ echo $server_lname; } ?>">
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <div class="form-group">
                            <label>Gender</label>
                            <select id="gender" name="gender" class="form-control" style="width:100%; height:34px;">
                            <option value="" selected="selected">- Please Select Gender -</option>
                            
                            <option value="Female" 

                            <?php 
                            if($b==1){
                                if($Gender=="Female") echo 'selected="selected"'; 
                            }
                            else{
                                if($server_gender=="Female") echo 'selected="selected"'; 
                            }
                            ?>>
                            Female
                            </option>


                            <option value="Male" 
                            <?php 
                            if($b==1){
                                if($Gender=="Male") echo 'selected="selected"';
                            }
                            else{
                                if($server_gender=="Male") echo 'selected="selected"'; 
                            }

                
                            ?>>
                            Male
                            
                            </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <div class="form-group">
                            <label>Birthdate <span>(*)</span></label><br>
                            <input type="date" class="form-control" name="txtBirthdate" id="" value="<?php if($b==1){ echo $Birthdate; } else{ echo $server_Birthdate; } ?>">
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <div class="form-group">
                            <label>Nationality</label>
                            <select id="nationality" name="nationality" class="form-control" style="width:100%; height:34px;">
                            <option value="" selected="selected">- Please select one -</option>

                            <option value="American"
                            <?php
                            if($b==1){
                                if($Nationality=="American") echo 'selected="selected"';
                            }
                            else{
                                if($server_nationality=="American") echo 'selected="selected"';
                            }
                            ?>>
                            American
                            </option>

                            <option value="Filipino"
                            <?php 
                            if($b==1){
                                if($Nationality=="Filipino") echo 'selected="selected"';
                            }
                            else{
                                if($server_nationality=="Filipino") echo 'selected="selected"';
                            }
                            ?>>
                            Filipino
                            </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <div class="form-group">
                            <label>Civil Status</label>
                            <select id="civil_status" name="civil_status" class="form-control" style="width:100%; height:34px;">
                            <option value ="" >- Please select one -</option>

                            <option value="Single" 
                            <?php 
                            if($b==1){
                                if($CivilStatus=="Single") echo 'selected="selected"';
                            }
                            else{
                                if($server_civilstatus=="Single") echo 'selected="selected"';
                            }
                            ?>>
                            Single
                            </option>

                            <option value="Married" 
                            <?php 
                            if($b==1){
                                if($CivilStatus=="Married") echo 'selected="selected"';
                            }
                            else{
                                if($server_civilstatus=="Married") echo 'selected="selected"';
                            }
                            ?>>
                            Married
                            </option>

                            <option value="Separated" 
                            <?php 

                            if($b==1){
                                if($CivilStatus=="Separated") echo 'selected="selected"';
                            }
                            else{
                                if($server_civilstatus=="Separated") echo 'selected="selected"';
                            }
                            ?>>
                            Separated
                            </option>

                            <option value="Widowed" 

                            <?php 
                            if($b==1){
                                if($CivilStatus=="Widowed") echo 'selected="selected"'; 
                            }
                            else{
                                if($server_civilstatus=="Widowed") echo 'selected="selected"'; 
                            }
                            ?>>
                            Widowed
                            </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label class="control-label">Facebook <span>(*)</span></label>
                        <div class="input-group">
                            <span class="input-group-addon">http://www.facebook.com/</span>
                            <input name="FBLink" type="text" pattern="^[_A-z0-9.]{1,}$" maxlength="15" class="form-control" id="inputTwitter" required value="<?php if($b==1){ echo $FBLink; } else{ echo $server_FBLink; } ?>" >
                            <div style="color: red"><?php echo $FBLink_validator?></div>
                        </div>
                    </div>
                </div>  
                <div class="row field">
                    <div class="col-md-12 fieldcol">
                        <label class="control-label">Twitter</label>
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input name="TwitterLink" type="text" pattern="^[_A-z0-9.]{1,}$" maxlength="15" class="form-control" id="inputTwitter" value="<?php if($b==1){ echo $TwitterLink; } else{ echo $server_TwitterLink; } ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-sm-6 fieldcol">
                <label>Photo</label>
                <input id="uploadFile" type="file" name="fileToUpload" class="img"><br>
                <div id="imagePreview">
                    <img src="" id="Image1" alt="" style="width:250px;height:250px;">
                    <div class="space"></div>
                    <div class="space"></div>
                        <button name="" type="" id="" class="btn btn-hg btn-primary" name="btnDelete">Delete Image</button>
                </div>
            </div>
            <div class="space"></div>
            <div class="col-md-12 col-sm-6 fieldcol">
                <label><span>(*) </span>Note: Required fields.</label>
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
if(isset($_POST['btnSave'])){

    $fileToUpload = basename($_FILES["fileToUpload"]["name"]);
    $target_dir = "ProfileImages/";   //eto yung folder or directory kung saan mo ma-sasave yung picture mo
    $target_file = $target_dir . $StudentID.".jpg";
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    //eto chcheck nya yung format ng file kung GIF ba sya or JPEG or PNG in short Check ng FILE TYPE
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    } 
    else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){

        $query = "UPDATE studentinfotbl SET ProfileImage = '$target_file' WHERE StudentID = '$StudentID'";
        $Result = mysql_query($query);
        echo "
         <script type='text/javascript'>
         </script>
         ";
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
</html>
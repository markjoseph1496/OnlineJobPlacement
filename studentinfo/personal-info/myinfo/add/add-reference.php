<!DOCTYPE html>
<?php 
include('../../../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}
else{
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../../../login-student.php?id=2';
        </script>
        ";
}

$b=1;
$txtNameValidator = '';
$txtRelationshipValidator = '';
$txtCompanyValidator = '';
$txtPositionValidator = '';
$txtPhoneValidator = '';
$txtEmailValidator = '';

$server_txtName = isset($_POST['txtName']) ? $_POST['txtName'] : '';
$server_txtRelationship = isset($_POST['txtRelationship']) ? $_POST['txtRelationship'] : '';
$server_txtCompany = isset($_POST['txtCompany']) ? $_POST['txtCompany'] : '';
$server_txtPosition = isset($_POST['txtPosition']) ? $_POST['txtPosition'] : '';
$server_txtPhone = isset($_POST['txtPhone']) ? $_POST['txtPhone'] : '';
$server_txtEmail = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';

$server_txtName = ucwords(strtolower($server_txtName));
$server_txtRelationship = ucwords(strtolower($server_txtRelationship));
$server_txtCompany = ucwords(strtolower($server_txtCompany));
$server_txtPosition = ucwords(strtolower($server_txtPosition));

$a = isset($_POST['txtName']);
$a = $a && isset($_POST['txtRelationship']);
$a = $a && isset($_POST['txtCompany']);
$a = $a && isset($_POST['txtPosition']);
$a = $a && isset($_POST['txtPhone']);
$a = $a && isset($_POST['txtEmail']);


if($a){

    unset($a);

    $txtNameValid = (bool) preg_match('/^[A-Za-z. ]+$/i', $server_txtName);
    $txtRelationshipValid = (bool) preg_match('/^[A-Za-z. ]+$/i', $server_txtRelationship);
    $txtCompanyValid = (bool) preg_match('/^[A-Za-z. ]+$/i', $server_txtCompany);
    $txtPositionValid = (bool) preg_match('/^[A-Za-z. ]+$/i', $server_txtPosition);
    $txtPhoneValid = (bool) preg_match('/^[0-9]+$/i', $server_txtPhone);
    $txtEmailValid = (bool) preg_match('/^[A-Za-z0-9@!#$%&*+-=?^_`{|}~]+$/i', $server_txtEmail);


    if(is_null($server_txtName) || $server_txtName == ''){
        $txtNameValidator = 'Name cannot be empty.';
    }
    elseif(!$txtNameValid){
        $txtNameValidator = 'Name is not valid';
    }

    if(is_null($server_txtRelationship) || $server_txtRelationship == ''){
        $txtRelationshipValidator = 'This field cannot be empty.';
    }
    elseif(!$txtRelationshipValid){
        $txtRelationshipValidator = 'This field is not valid';
    }

    if(is_null($server_txtCompany) || $server_txtCompany == ''){
        $txtCompanyValidator = 'This field cannot be empty.';
    }
    elseif(!$txtCompanyValid){
        $txtCompanyValidator = 'Invalid input';
    }

    if(is_null($server_txtPosition) || $server_txtPosition == ''){
        $txtPositionValidator = 'This field cannot be empty.';
    }
    elseif(!$txtPositionValid){
        $txtPositionValidator = 'Invalid input';
    }

    if(is_null($server_txtPhone) || $server_txtPhone == ''){
        $txtPhoneValidator = 'This field cannot be empty.';
    }
    elseif(!$txtPhoneValid){
        $txtPhoneValidator = 'Invalid input';
    }

    if(is_null($server_txtEmail) || $server_txtEmail == ''){
        $txtEmailValidator = 'This field cannot be empty.';
    }
    elseif(!$txtEmailValid){
        $txtEmailValidator = 'Invalid input';
    }

    $b=0;
    $a = $txtNameValid;
    $a = $a && $txtRelationshipValid;
    $a = $a && $txtCompanyValid;
    $a = $a && $txtPositionValid;
    $a = $a && $txtPhoneValid;
    $a = $a && $txtEmailValid;

    if($a){
        unset($a);

        $query = "INSERT INTO referencetbl (StudentID,Name,Relationship,Company,Position,Phone,Email) values  ('$StudentID','$server_txtName','$server_txtRelationship','$server_txtCompany','$server_txtPosition','$server_txtPhone','$server_txtEmail')";
        $Result = mysql_query($query);
        echo "
             <script type='text/javascript'>
             location.href = '../references.php?id=ReferenceAdd';
             </script>
             ";

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

    <title>Online JPMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../../../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>


<body id="page-top" class="index bg">
<form method = "POST">
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
                        <a class="page-scroll" href="../../../../login-student.php?id=1">Sign Out</a>
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
                <li class="yellow"><a href="../personal_info.php">Personal Info</a></li>
                <li class="yellow"><a href="../contacts_info.php">Contacts Info</a></li>
                <li class="yellow"><a href="../work.php">Work</a></li>
                <li class="yellow"><a href="../education.php">Education</a></li>
                <li class="yellow"><a href="../certifications.php">Certifications</a></li>
                <li class="yellow"><a href="../achievements.php">Achievements</a></li>
                <li class="yellow"><a href="../skills_languages.php">Skills & Languages</a></li>
                <li class="yellow active"><a href="../references.php">References</a></li>
                <li class="yellow"><a href="../portfolio.php">Portfolio</a></li>
            </ul>
            <div class="space-1"></div>

            <div>
                <div class"row">
                    <div class="col-md-10">
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Name <span>(*)</span></label>
                                    <input type="text" class="form-control" id="txtName" name="txtName" value="<?php echo htmlspecialchars($server_txtName)?>">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Relationship <span>(*)</span></label>
                                    <input type="text" class="form-control" id="txtRelationship" name="txtRelationship" value="<?php echo htmlspecialchars($server_txtRelationship)?>">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Company <span>(*)</span></label>
                                    <input type="text" class="form-control" id="txtCompany" name="txtCompany" value="<?php echo htmlspecialchars($server_txtCompany)?>">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Position <span>(*)</span></label>
                                    <input type="text" class="form-control" id="txtPosition" name="txtPosition" value="<?php echo htmlspecialchars($server_txtPosition)?>">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Phone <span>(*)</span></label>
                                    <input type="text" class="form-control" id="txtPhone" name="txtPhone" value="<?php echo htmlspecialchars($server_txtPhone)?>">
                                </div>
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo htmlspecialchars($server_txtEmail)?>">
                                </div>
                            </div>
                        </div>
                        <div class="row field">
                            <div class="col-md-3 fieldcol">
                                &nbsp;
                            </div>
                            <div class="col-md-6 fieldcol">
                                <div class="form-group">
                                    <label>Number of Years You've Known this Person</label>
                                    <input type="text" class="form-control" id="" name="">
                                </div>
                            </div>
                            <div class="col-md-3 fieldcol">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="profile_divider"></div>
                    <div class"row field">
                        <div class="col-md-12">
                            <button class="btn btn-lg btn-hg btn-primary" style="float:right;" name ="btnSave">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>

<?php
include('../../../../connection.php');
/*
if(isset($_POST['btnSave'])){

    $Name = $_POST['txtName']; 
    $Relationship = $_POST['txtRelationship']; 
    $Company = $_POST['txtCompany']; 
    $Position = $_POST['txtPosition']; 
    $Phone = $_POST['txtPhone']; 
    $Email = $_POST['txtEmail']; 

   $query = "INSERT INTO referencetbl (StudentID,Name,Relationship,Company,Position,Phone,Email) values  ('$StudentID','$Name','$Relationship','$Company','$Position','$Phone','$Email')";
   $Result = mysql_query($query);
   echo "
         <script type='text/javascript'>
         </script>
         ";
} */
?>
</html>
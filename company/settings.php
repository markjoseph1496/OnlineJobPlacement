<!DOCTYPE html>
<?php
include('../connection.php');
session_start();

$CompanyID = $_SESSION['CompanyID'];

$qry = "SELECT * FROM companyinfotbl WHERE CompanyID ='$CompanyID'";
$Result = mysql_query($qry);
    while ($qry = mysql_fetch_Array($Result)) {

        $CName = $qry['CompanyName'];
        $Industry = $qry['Industry'];
        $classification = $qry['Classification'];
        $address = $qry['Address'];
        $State = $qry['StateRegion'];
        $City = $qry['City'];
        $Postal = $qry['PostalCode'];
        $Phone = $qry['PhoneNum'];
        $Mobile = $qry['MobileNum'];
        $Fax = $qry['Fax'];
    }
?>
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

.resume_bg{
    height:1000px;
}

 #btnsave
            {
              width: 300px;
              height: 40px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 500px;
            }
            #btnsave:hover
            {
              background-color: #006681;
            }   
#cancel
            {
              width: 300px;
              height: 40px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 500px;
            }
            #cancel:hover
            {
              background-color: #fed136;
            }   
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
.info {
  margin-left: 150px;
}
.white-holder {
    background-color: #f7f7f7;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    padding: 80px 25px;
    margin: 10px;
    max-width:100%;
    max-height:100%;
}  
#panel{
    margin-left: -200px;
}
#yellow-text-fields label span {
    color: #d95c5c;
}
</style>

<body id="page-top" class="index resume">
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
            <li role="presentation" id="company" class="item"><a href="company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="positions.php">Positions</a></li>
            <li role="presentation" id="calendar" class="item " ><a href="calendar.php">Calendar</a></li>
            <li role="presentation" id="report" class="item "><a href="report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item active" ><a href="settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="resumesearch.php">Resumelink Search</a></li>
            <li role="presentation" id="studentlist" class="item"><a href="studentlist.php">Student List</a></li>
            <li role="presentation" id="applicantlist" class="item "><a href="applicantlist.php">Applicant List</a></li>
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow active"><a href="settings.php">Company</a></li>
            <li class="yellow"><a href="settings_myaccount.php">My Account</a></li>
        </ul>
    <div id="yellow-text-fields">
        <div class="space"></div>
        <div class = "container">
         <?php
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    if($id=="SettingEdit"){
                        echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Achievement successfully updated.
                        </div>';
                    } 
                }  
            ?>
            <div class = "info"> 
            <form method = "POST">
            <div class = "col-md-8">   
                <div class = "panel panel-warning" id = "panel">
                <div class = "panel-heading">
                <h3 class = "panel-title">Company Details</h3>
                </div>
            <div class = "panel-body">
               <table class = "infotable">
                <tbody>
                <tr>
                <td> 
                    <label>Company Name<span>(*)</span></label><br>
                 </td>
                <td> 
                    <input type = "text" name = "cname" id = "usr" class = "form-control" value = "<?php echo $CName; ?>" >
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Companysite URL: </label>
                 </td>
                <td> 
                    http://www.sample.com/RojasCorpInc
                </td>
                </tr>

               <tr>
                <td> 
                    <label = "usr" class = "control-label"> Website Url: </label>
                 </td>
                <td> 
                    <input type = "text" name = "web" id = "usr" class = "form-control" >
                </td>
                </tr>

                <tr>
                <td> 
                    <label>Industry<span>(*)</span></label><br>
                 </td>
                <td> 
                    <select id="industry" name="industry" class="industry" style="width:100%; height:30px;"  ?>">
                                           <option value = "ind" <?php if($Industry=="ind") echo 'selected="selected"'; ?> >  </option>
                                           <option value = "acc" <?php if($Industry=="acc") echo 'selected="selected"'; ?> > Accounting / Audit </option>
                                            <option value = "amp" <?php if($Industry=="amp") echo 'selected="selected"'; ?> >Advertising / Marketing Promotion </option>
                                            <option value = "aaa" <?php if($Industry=="aaa") echo 'selected="selected"'; ?> >Aerospace/Aviation/Airline </option>
                                            <option value = "appf" <?php if($Industry=="appf") echo 'selected="selected"'; ?> >Agricultural/Plantation/Poultry/Fisheries </option>
                                            <option value = "af" <?php if($Industry=="af") echo 'selected="selected"'; ?> >Apparel/Fashion </option>
                                            <option value = "ad" <?php if($Industry=="ad") echo 'selected="selected"'; ?> >Arts/Design </option>
                                            <option value = "aav" <?php if($Industry=="aav") echo 'selected="selected"'; ?> > Automobile/Automotive Ancillary/Vehicle </option>
                    </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label>Classification<span>(*)</span></label><br>
                 </td>
                <td> 
                    <select id="classification" name="classification" class="classification" style="width:100%; height:30px;">
                                           <option value = "">  </option>
                                           <option value = "csme" <?php if($classification=="csme") echo 'selected="selected"'; ?> > Corporate/SME </option>
                                            <option value = "iag" <?php if($classification=="iag") echo 'selected="selected"'; ?> >Institutions/ (Associations,Government) </option>
                                            <option value = "obpo" <?php if($classification=="obpo") echo 'selected="selected"'; ?> >Outsourcing/BPO</option>
                                            <option value = "appf" <?php if($classification=="appf") echo 'selected="selected"'; ?> >Recruitment Firm/Consultancy</option>
                    </select>
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label>Address<span>(*)</span></label><br>
                 </td>
                <td> 
                   <input type = "text" name = "address" id = "address" class = "form-control" value = "<?php echo $address; ?>" >
                </td>
                </tr>

                

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> City: </label>
                 </td>
                <td> 
                   <select id="City" name="City" class="form-control" style="width:100%; height:34px;">
                                        <option value="">- Please select one -</option>
                                        <option value="Caloocan City" <?php if($City=="Caloocan City") echo 'selected="selected"'; ?>>Caloocan City</option>
                                        <option value="Las Pińas City" <?php if($City=="Las Pińas City") echo 'selected="selected"'; ?>>Las Pińas City</option>
                                        <option value="Makati City" <?php if($City=="Makati City") echo 'selected="selected"'; ?>>Makati City</option>
                                        <option value="Malabon City" <?php if($City=="Malabon City") echo 'selected="selected"'; ?>>Malabon City</option>
                                        <option value="Mandaluyong City" <?php if($City=="Mandaluyong City") echo 'selected="selected"'; ?>>Mandaluyong City</option>
                                        <option value="Manila" <?php if($City=="Manila") echo 'selected="selected"'; ?>>Manila</option>
                                        <option value="Marikina City" <?php if($City=="Marikina City") echo 'selected="selected"'; ?>>Marikina City</option>
                                        <option value="Muntinlupa City" <?php if($City=="Muntinlupa City") echo 'selected="selected"'; ?>>Muntinlupa City</option>
                                        <option value="Navotas City" <?php if($City=="Navotas City") echo 'selected="selected"'; ?>>Navotas City</option>
                                        <option value="Parańaque City" <?php if($City=="Parańaque City") echo 'selected="selected"'; ?>>Parańaque City</option>
                                        <option value="Pasay City" <?php if($City=="Pasay City") echo 'selected="selected"'; ?>>Pasay City</option>
                                        <option value="Pasig City" <?php if($City=="Pasig City") echo 'selected="selected"'; ?>>Pasig City</option>
                                        <option value="Pateros City" <?php if($City=="Pateros City") echo 'selected="selected"'; ?>>Pateros City</option>
                                        <option value="Quezon City" <?php if($City=="Quezon City") echo 'selected="selected"'; ?>>Quezon City</option>
                                        <option value="San Juan City" <?php if($City=="San Juan City") echo 'selected="selected"'; ?>>San Juan City</option>
                                        <option value="Taguig City" <?php if($City=="Taguig City") echo 'selected="selected"'; ?>>Taguig City</option>
                                        <option value="Valenzuela City" <?php if($City=="Valenzuela City") echo 'selected="selected"'; ?>>Valenzuela City</option>
                                    </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Postal Code: </label>
                 </td>
                <td> 
                    <input type = "text" name = "postal" id = "usr" class = "form-control" value = "<?php echo $Postal; ?>">
                </td>
                </tr>

                 <tr>
                <td> 
                    <label>Phone Number<span>(*)</span></label><br>
                 </td>
                <td> 
                    <input type = "text" name = "phonenum" id = "usr" class = "form-control" value = "<?php echo $Phone; ?>">
                </td>
                </tr>
                <td> 
                    <label>Mobile Number<span>(*)</span></label><br>
                 </td>
                <td> 
                    <input type = "text" name = "mobilenum" id = "usr" class = "form-control" value = "<?php echo $Mobile; ?>">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Fax: </label>
                 </td>
                <td> 
                    <input type = "text" name = "fax" id = "usr" class = "form-control" value = "<?php echo $Fax; ?>">
                </td>
                </tr>

                </tbody>
                </table>
            </div>
            </div>
            </div>
            </div>

                        <div class="col-md-1 col-sm-6 fieldcol">
                <label>Photo</label>
                <input id="uploadFile" type="file" name="fileToUpload" class="img"><br>
                <div id="imagePreview">
                    <img src="<?php echo $ProfileImage; ?>" id="Image1" alt="" style="width:250px;height:250px;">
                    <div class="space"></div>
                    <div class="space"></div>
                        <button name="" type="" id="" class="btn btn-hg btn-primary" name="btnDelete">Delete Image</button>
                </div>
            </div>
            
           
         </div>
           <button type = "submit" class = "btn btn-danger " id = "btnsave" name = "btnsave"><b> SAVE </b></button>
            <div class = "space"></div>
             <button type = "submit" class = "btn btn-danger " id = "cancel"><b> CANCEL</b> </button>
         </form>
    </div>
    </div>
</body>
 
<?php
include('../connection.php');


if(isset($_POST['btnsave'])){

   $cname = $_POST['cname'];
   $industry = $_POST['industry'];
   $classification = $_POST['classification'];
   $address = $_POST['address'];
   $state = $_POST['state'];
   $city = $_POST['City'];
   $postal = $_POST['postal'];
   $phonenum = $_POST['phonenum'];
   $mobilenum = $_POST['mobilenum'];
   $fax = $_POST['fax'];



    $query = "UPDATE companyinfotbl SET CompanyName = '$cname', Industry = '$industry', Classification = '$classification', Address = '$address', StateRegion = '$state', City = '$city', PostalCode = '$postal', PhoneNum = '$phonenum', MobileNum = '$mobilenum', Fax = '$fax' WHERE Email = '$x'";
   $Result = mysql_query($query);
   echo "
        <script type='text/javascript'>
        location.href = 'settings.php?id=SettingEdit';
        </script>
         ";
}
?>
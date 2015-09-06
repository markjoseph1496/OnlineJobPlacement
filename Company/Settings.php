<!DOCTYPE html>
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

 #save
            {
              width: 300px;
              height: 40px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 500px;
            }
            #save:hover
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

     <div class="resume_bg">
        <ul class="nav nav-tabs">
            <li role="presentation" id="company" class="item "><a href="Company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Positions.php">Positions</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Database.php">Database</a></li>
            <li role="presentation" id="report" class="item"><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item active" ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Resumesearch.php">Resumelink Search</a></li>           
        </ul>

        <div class="space1"></div>
       
        <ul class="nav nav-pills" id = "submenu">
            <li class="yellow active"><a href="Settings.php">Company</a></li>
            <li class="yellow"><a href="Settings_Calendar.php">Calendar</a></li>
            <li class="yellow"><a href="Settings_Users.php">User</a></li>
            <li class="yellow"><a href="Settings_MyAccount.php">My Account</a></li>
        </ul>

        <div class="space"></div>
        <div class = "container">
            <form method = "POST">
            <div class = "col-md-6">   
                <div class = "panel panel-warning" id = "panel">
                <div class = "panel-heading">
                <h3 class = "panel-title">Company Details</h3>
                </div>
            <div class = "panel-body">
               <table class = "infotable">
                <tbody>
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Company Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "cname" id = "usr" class = "form-control" >
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Companysite URL: </label>
                 </td>
                <td> 
                    http://www.jobs180.com/RojasCorpInc
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
                    <label = "usr" class = "control-label"> Industry: </label>
                 </td>
                <td> 
                    <select id="industry" name="industry" class="industry" style="width:100%; height:30px;">
                                           <option value = "ind">  </option>
                                           <option value = "acc"> Accounting / Audit </option>
                                            <option value = "amp">Advertising / Marketing Promotion </option>
                                            <option value = "aaa">Aerospace/Aviation/Airline </option>
                                            <option value = "appf">Agricultural/Plantation/Poultry/Fisheries </option>
                                            <option value = "af">Apparel/Fashion </option>
                                            <option value = "ad">Arts/Design </option>
                                            <option value = "aav"> Automobile/Automotive Ancillary/Vehicle </option>
                    </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Classification: </label>
                 </td>
                <td> 
                    <select id="classification" name="classification" class="classification" style="width:100%; height:30px;">
                                           <option value = "">  </option>
                                           <option value = "csme"> Corporate/SME </option>
                                            <option value = "iag">Institutions/ (Associations,Government) </option>
                                            <option value = "obpo">Outsourcing/BPO</option>
                                            <option value = "appf">Recruitment Firm/Consultancy</option>
                    </select>
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Address: </label>
                 </td>
                <td> 
                   <textarea name = "address" id = "add" rows="3" cols= "47"></textarea>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> State Region: </label>
                 </td>
                <td> 
                    <select id="state" name="state" class="state" style="width:100%; height:34px;">
                                            <option value="select">Please select One</option>
                                            <option value="ncr">NCR</option>
                                            <option value="car">CAR</option> 
                                            <option value="ilo">Ilocos Region</option> 
                                            <option value="cag">Cagayan Valley</option> 
                                            <option value="cen">Central Luzon</option> 
                                            <option value="cala">CALABARZON</option> 
                                            <option value="mima">MIMAROPA</option> 
                                            <option value="bicol">Bicol Region</option>
                                            <option value="west">Western Visayas</option>
                                            <option value="cent">Central Visayas</option>
                                            <option value="east">Eastern Visayas</option>
                                            <option value="zam">Zamboanga Peninsula</option>
                                            <option value="north">Northern Mindanao</option>
                                            <option value="dav">Davao Region</option>
                                            <option value="sock">SOCCKSCARGEN</option>
                                            <option value="cara">Caraga Region</option>
                                            <option value="armm">ARMM</option>
                                        </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> City: </label>
                 </td>
                <td> 
                    <select id="city" name="city" class="city" style="width:100%; height:34px;">
                                            <option value="select">Please select One</option>
                                            <option value="ncr">NCR</option>
                                            <option value="car">CAR</option> 
                                            <option value="ilo">Ilocos Region</option> 
                                            <option value="cag">Cagayan Valley</option> 
                                            <option value="cen">Central Luzon</option> 
                                            <option value="cala">CALABARZON</option> 
                                            <option value="mima">MIMAROPA</option> 
                                            <option value="bicol">Bicol Region</option>
                                            <option value="west">Western Visayas</option>
                                            <option value="cent">Central Visayas</option>
                                            <option value="east">Eastern Visayas</option>
                                            <option value="zam">Zamboanga Peninsula</option>
                                            <option value="north">Northern Mindanao</option>
                                            <option value="dav">Davao Region</option>
                                            <option value="sock">SOCCKSCARGEN</option>
                                            <option value="cara">Caraga Region</option>
                                            <option value="armm">ARMM</option>
                                        </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Postal Code: </label>
                 </td>
                <td> 
                    <input type = "text" name = "postal" id = "usr" class = "form-control" >
                </td>
                </tr>

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Contact Number: </label>
                 </td>
                <td> 
                    <input type = "text" name = "contact" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Fax: </label>
                 </td>
                <td> 
                    <input type = "text" name = "fax" id = "usr" class = "form-control">
                </td>
                </tr>

                </tbody>
                </table>
            </div>
            </div>
            </div>
            <!--Billing-->
            <div class = "col-md-6">   
                <div class = "panel panel-warning">
                <div class = "panel-heading">
                <h3 class = "panel-title">Billing Details</h3>
                </div>
            <div class = "panel-body">
               <table class = "infotable">
                <tbody>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Contact Person: </label>
                 </td>
                <td> 
                    <input type = "text" name = "person" id = "usr" class = "form-control" >
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Address1: </label>
                 </td>
                <td> 
                   <input type = "text" name = "address1" id = "usr" class = "form-control" ></input>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Address2: </label>
                 </td>
                <td> 
                   <input type = "text" name = "address2" id = "usr" class = "form-control"></input>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> State Region: </label>
                 </td>
                <td> 
                    <select id="state" name="state" class="state" style="width:100%; height:34px;">
                                            <option value="select">Please select One</option>
                                            <option value="ncr">NCR</option>
                                            <option value="car">CAR</option> 
                                            <option value="ilo">Ilocos Region</option> 
                                            <option value="cag">Cagayan Valley</option> 
                                            <option value="cen">Central Luzon</option> 
                                            <option value="cala">CALABARZON</option> 
                                            <option value="mima">MIMAROPA</option> 
                                            <option value="bicol">Bicol Region</option>
                                            <option value="west">Western Visayas</option>
                                            <option value="cent">Central Visayas</option>
                                            <option value="east">Eastern Visayas</option>
                                            <option value="zam">Zamboanga Peninsula</option>
                                            <option value="north">Northern Mindanao</option>
                                            <option value="dav">Davao Region</option>
                                            <option value="sock">SOCCKSCARGEN</option>
                                            <option value="cara">Caraga Region</option>
                                            <option value="armm">ARMM</option>
                                        </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> City: </label>
                 </td>
                <td> 
                    <select id="city" name="city" class="city" style="width:100%; height:34px;">
                                            <option value="select">Please select One</option>
                                            <option value="ncr">NCR</option>
                                            <option value="car">CAR</option> 
                                            <option value="ilo">Ilocos Region</option> 
                                            <option value="cag">Cagayan Valley</option> 
                                            <option value="cen">Central Luzon</option> 
                                            <option value="cala">CALABARZON</option> 
                                            <option value="mima">MIMAROPA</option> 
                                            <option value="bicol">Bicol Region</option>
                                            <option value="west">Western Visayas</option>
                                            <option value="cent">Central Visayas</option>
                                            <option value="east">Eastern Visayas</option>
                                            <option value="zam">Zamboanga Peninsula</option>
                                            <option value="north">Northern Mindanao</option>
                                            <option value="dav">Davao Region</option>
                                            <option value="sock">SOCCKSCARGEN</option>
                                            <option value="cara">Caraga Region</option>
                                            <option value="armm">ARMM</option>
                                        </select>
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Postal Code: </label>
                 </td>
                <td> 
                    <input type = "text" name = "postal" id = "usr" class = "form-control" >
                </td>
                </tr>
                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Email: </label>
                 </td>
                <td> 
                    <input type = "text" name = "email" id = "usr" class = "form-control">
                </td>
                </tr>

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Contact Number: </label>
                 </td>
                <td> 
                    <input type = "text" name = "cn" id = "usr" class = "form-control">
                </td>
                </tr>
                </tbody>
                </table>
                <br><br><br><br><br><br><br><br>
                <br>
            </div>
            </div>
            </div>
         </div>
           <button type = "submit" class = "btn btn-danger " id = "save" href= "#"><b> SAVE </b></button>
            <div class = "space"></div>
             <button type = "submit" class = "btn btn-danger " id = "cancel"><b> CANCEL</b> </button>
         </form>
    </div>
</body>
 
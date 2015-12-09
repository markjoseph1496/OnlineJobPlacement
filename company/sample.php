<?php
include('../connection.php');
//$CompanyID = $_SESSION['CompanyID'];

$qry = "SELECT * FROM studentinfotbl";
$result = mysql_query($qry);

?>
<!DOCTYPE html>
<html>
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
<body>
<form method="POST">
<div class="row field">
	<div class = "col-md-6 ">
        <div class="form-group" style = "width:550px;">
            <select id="industry" name="Specialization" class="industry" style="width:100%; height:30px;">
                <option value = "">  </option>
                <option value = "aaaa"> Accounting / Audit</option>
                <option value = "AdvertisingMarketing Promotion"  >Advertising / Marketing Promotion </option>
                <option value = "AerospaceAviationAirline"  >Aerospace/Aviation/Airline </option>
                <option value = "AgriculturalPlantationPoultryFisheries"  >Agricultural/Plantation/Poultry/Fisheries </option>
                <option value = "ApparelFashion" >Apparel/Fashion </option>
                <option value = "ArtsDesign" >Arts/Design </option>
                <option value = "AutomobileAutomotive"> Automobile/Automotive Ancillary/Vehicle </option>
        </select>

        </div>


</div>



	<div class = "col-md-6">
        <div class="form-group" style = "width:550px;">
            <select id="industry" name="MajorCourse" class="industry" style="width:100%; height:30px;">
                <option value = "">  </option>
                <option value = "aaaa"> Accounting / Audit</option>
                <option value = "AdvertisingMarketing Promotion"  >Bachelor of Science in Computer Science</option>
                <option value = "AerospaceAviationAirline"  >Aerospace/Aviation/Airline </option>
                <option value = "AgriculturalPlantationPoultryFisheries"  >Agricultural/Plantation/Poultry/Fisheries </option>
                <option value = "ApparelFashion" >Apparel/Fashion </option>
                <option value = "ArtsDesign" >Arts/Design </option>
                <option value = "AutomobileAutomotive"> Automobile/Automotive Ancillary/Vehicle </option>
        </select>
        </div>
</div>
</div> 	

    <br>
    <div class = "space"></div>
     <button type = "submit" class = "btn btn-danger " id = "btnsave" name = "btnsave"><b> SAVE </b></button>

	<div class = "container">
        <div class = "col-md-12">        
		        <table class = 'Applicants' width = '100%' cellpadding = '0'>
			          <thead>   
		                <tr>
		                    <th width= '20%' class = 'tabletitle'>Student Name</th>
		                    <th width = '40%' class = 'tabletitle'>Specialization</th>
		                    <th width = '25%' class = 'tabletitle'>Location</th>
		                    <th width = '10%' class = 'tabletitle'></th>
		                <tr>
		            </thead>
		            <tbody>
		            <?php
		            	if (isset($_POST['btnsave'])) {
							$a = $_POST['Specialization'];
							if($a == ""){
								while($qry = mysql_fetch_array($result)){
			                    $fname = $qry['FirstName'];
			                    $studentid = $qry['StudentID'];

			                    	$q = "SELECT * FROM specializationtbl WHERE StudentID = '$studentid'";
			                    	$r = mysql_query($q);
			                    	while ($q = mysql_fetch_array($r)) {
			                    		$Specialization = $q['Specialization'];

			                    		echo "
					                    <tr>
					                    	<td width = '20%''> $fname </td>
					                    	<td width = '20%''> $Specialization </td>
					                    </tr>
					                    ";	
			                    	}
			                	}
							}
							else{
								while($qry = mysql_fetch_array($result)){
			                    $fname = $qry['FirstName'];
			                    $studentid = $qry['StudentID'];

			                    	$q = "SELECT * FROM specializationtbl WHERE StudentID = '$studentid' AND Specialization = '$a'";
			                    	$r = mysql_query($q);
			                    	while ($q = mysql_fetch_array($r)) {
			                    		$Specialization = $q['Specialization'];

			                    		echo "
					                    <tr>
					                    	<td width = '20%''> $fname </td>
					                    	<td width = '20%''> $Specialization </td>
					                    </tr>
					                    ";	
			                    	}
								}
							}
							$b = $_POST['MajorCourse'];
									if($b == ""){
										while($qry = mysql_fetch_array($result)){
					                    $fname = $qry['FirstName'];
					                    $studentid = $qry['StudentID'];

					                    	$y = "SELECT * FROM studentinfotbl WHERE StudentID = '$studentid'";
					                    	$k = mysql_query($y);
					                    	while ($y = mysql_fetch_array($k)) {
					                    		$MajorCourse = $y['MajorCourse'];

					                    		echo "
							                    <tr>
							                    	<td width = '20%''> $fname </td>
							                    	<td width = '20%''> $MajorCourse </td>
							                    </tr>
							                    ";	
					                    	}
					                	}
									}
									else{
										while($qry = mysql_fetch_array($result)){
					                    $fname = $qry['FirstName'];
					                    $studentid = $qry['StudentID'];

					                    	$y = "SELECT * FROM studentinfotbl WHERE StudentID = '$studentid' AND MajorCourse = '$b'";
					                    	$k = mysql_query($y);
					                    	while ($y = mysql_fetch_array($k)) {
					                    		$MajorCourse = $y['MajorCourse'];

					                    		echo "
							                    <tr>
							                    	<td width = '20%''> $fname </td>
							                    	<td width = '20%''> $MajorCourse </td>
							                    </tr>
							                    ";	
					                    	}
										}
									}
						}
						else{
		                    while($qry = mysql_fetch_array($result)){
			                    $fname = $qry['FirstName'];
			                    $studentid = $qry['StudentID'];

			                    	$q = "SELECT * FROM specializationtbl WHERE StudentID = '$studentid'";
			                    	$r = mysql_query($q);
			                    	while ($q = mysql_fetch_array($r)) {
			                    		$Specialization = $q['Specialization'];

			                    		echo "
					                    <tr>
					                    	<td width = '20%''> $fname </td>
					                    	<td width = '20%''> $Specialization </td>
					                    </tr>
					                    ";	
			                    	}
			                }
		
		               	}
	                ?>
		            </tbody>
		        </table>
        </div>
    </div>
</form>
</body>
</html>

<?php

?>
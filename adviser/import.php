<?php
include ("../connection.php");
	
	if(isset($_POST["Import"]))
	{
		$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
			$StudentID = $filesop[0];
	         	$LastName = $filesop[1];
	         	$FirstName = $filesop[2];
	         	$MiddleName = $filesop[3];
	         	$Course = $filesop[4];
	         	$CompanyName = $filesop[5];
	         	$CompanyAddress = $filesop[6];
	         	$Supervisor = $filesop[7];
	         	$Position = $filesop[8];
	         	$ContactNumber = $filesop[9];
			
			$sql = mysql_query("INSERT INTO ojttbl (
				StudentID, 
				LastName, 
				FirstName, 
				MiddleName,
				Course, 
				CompanyName, 
				CompanyAddress, 
				Position, 
				ContactNumber) 
				VALUES (
					'$StudentID',
					'$LastName',
					'$FirstName',
					'$MiddleName',
					'$Course',
					'$CompanyName',
					'$CompanyAddress',
					'$Supervisor',
					'$Position',
					'$ContactNumber')");
			$c = $c + 1;
		}
		
			if($sql){
				echo "You database has imported successfully. You have inserted ". $c ." recoreds";
			}else{
				echo "Sorry! There is some problem.";
			}

	}
?>		 
<?php
include '../connection.php';
if(isset($_POST["Import"])){
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	         		    
	          //It wiil insert a row to our subject table from our csv file`
	           $sql = "INSERT into ojttbl (`StudentID`,`LastName`,FirstName`,`MiddleName`,`Course`,`CompanyName`,`CompanyAddress`,`Supervisor`,`Position`,`ContactNumber`,`Email`) 
	            	values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysql_query( $sql, $bd );
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"ojt-adviser.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"ojt-adviser.php\"
					</script>";
	        
			 

			 //close of bdection
			mysql_close($bd); 
				
		 	
			
		 }
	}	 
?>		 
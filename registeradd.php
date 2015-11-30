<?php
include('connection.php');

if(isset($_POST['type'])){
	$isAvailable = true;
    $StudentID = $_POST['StudentID'];
    $query = "SELECT StudentID FROM studentinfotbl WHERE StudentID = '$StudentID'";
    $Result = mysql_query($query);
    if($Result){
        if(mysql_num_rows($Result) == 0){
        	$isAvailable = true;
        }
        else{
        	$isAvailable = false;
        }
    }
	echo json_encode(array(
	    'valid' => $isAvailable,
	));
}

if(isset($_GET['StudentID'])){
	$StudentID = $_GET['StudentID'];
	$FirstName = $_GET['FirstName'];
	$LastName = $_GET['LastName'];
	$Birthday = $_GET['Birthday'];
	$MobileNumber = $_GET['MobileNumber'];
	$Email = $_GET['Email'];
	$Password = $_GET['_Password'];
	$City = $_GET['City'];
	$EducAttain = $_GET['EducAttain'];
	$School = $_GET['School'];
	$Course = $_GET['Course'];
	$GraduatedMonth = $_GET['GraduatedMonth'];
	$GraduatedYear = $_GET['GraduatedYear'];

    $yeargraduated = $GraduatedMonth ." ". $GraduatedYear;
    $EducAttain = mysql_real_escape_string($EducAttain);

    $query = "INSERT INTO studentinfotbl (StudentID,FirstName,LastName,Birthdate,Password,EmploymentStatus,MajorCourse) values  ('$StudentID','$FirstName','$LastName','$Birthday','$Password','Unemployed','$Course')";
    $query1 = "INSERT INTO schooltbl (StudentID,School,Attainment,Course,Graduated) values  ('$StudentID','STI College Caloocan','$EducAttain','$Course','$yeargraduated')";
    $query2 = "INSERT INTO studcontactstbl (StudentID,Email,MobileNumber,City) values  ('$StudentID','$Email','$MobileNumber','$City')";

	$Result = mysql_query($query);
	$Result1 = mysql_query($query1);
	$Result2 = mysql_query($query2);
        echo "
            <script type='text/javascript'>
            alert('You have successfully Registered.');
            location.href='./login-student.php';
            </script>
            ";
}
?>




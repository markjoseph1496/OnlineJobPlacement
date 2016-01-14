<?php
include('connection.php');

if (isset($_POST['type'])) {
    $isAvailable = true;
    $StudentID = $_POST['StudentID'];
    $query = "SELECT StudentID FROM studentinfotbl WHERE StudentID = '$StudentID'";
    $Result = mysql_query($query);
    if ($Result) {
        if (mysql_num_rows($Result) == 0) {
            $isAvailable = true;
        } else {
            $isAvailable = false;
        }
    }
    echo json_encode(array(
        'valid' => $isAvailable,
    ));
}

if (isset($_POST['resumelink'])) {
    /*$StudentID = $_POST['StudentID'];*/
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Birthday = $_POST['Birthday'];
    $MobileNumber = $_POST['MobileNumber'];
    $Email = $_POST['Email'];
    $Password = $_POST['_Password'];
    $City = $_POST['City'];
    $EducAttain = $_POST['EducAttain'];
    $Course = $_POST['Course'];
    $GraduatedMonth = $_POST['GraduatedMonth'];
    $GraduatedYear = $_POST['GraduatedYear'];

    $Password = "1";

    $FirstName = ucwords(strtolower($FirstName));
    $LastName = ucwords(strtolower($LastName));

    $salt = hash('sha512', mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX));
    $Password = hash('sha512', $Password . $salt);

    $yeargraduated = $GraduatedMonth . " " . $GraduatedYear;
    $EducAttain = mysql_real_escape_string($EducAttain);

    $query = "INSERT INTO studentinfotbl (FirstName,LastName,Birthdate,Password,SaltedPassword,EmploymentStatus,MajorCourse) values  ('$FirstName','$LastName','$Birthday','$Password','$salt','Unemployed','$Course')";
    $getstudid =
        GSecureSQL::query(
            "SELECT StudentID FROM studentinfotbl ORDER BY StudentID DESC LIMIT 1",
            TRUE
        );
    $StudentID = $getstudid[0][0] + 1;

    $query1 = "INSERT INTO schooltbl (StudentID,School,Attainment,Course,Graduated) values  ('$StudentID','STI College Caloocan','$EducAttain','$Course','$yeargraduated')";
    $query2 = "INSERT INTO studcontactstbl (StudentID,Email,MobileNumber,City) values  ('$StudentID','$Email','$MobileNumber','$City')";

    $Result = mysql_query($query);
    $Result1 = mysql_query($query1);
    $Result2 = mysql_query($query2);
    echo "
            <script type='text/javascript'>
            alert('You have successfully Registered.');
            location.href='./registration.php';
            </script>
            ";
}
?>
<?php
include('../../connection.php');


if(isset($_GET['delete_URLID'])) {
    $Z = $_GET['delete_URLID'];

    $query = "DELETE FROM urltbl WHERE URLID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='portfolio.php?id=URLDeleted';
            </script>";
}

if(isset($_GET['delete_SchoolID'])) {
    $Z = $_GET['delete_SchoolID'];

	$query = "DELETE FROM schooltbl WHERE SchoolID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='education.php?id=3';
            </script>
            ";
}

if(isset($_GET['delete_SeminarID'])) {
    $Z = $_GET['delete_SeminarID'];

 	$query = "DELETE FROM seminartbl WHERE SeminarID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='education.php?id=6';
            </script>
       
            ";
}
if(isset($_GET['delete_CertificationID'])) {
    $Z = $_GET['delete_CertificationID'];

 	$query = "DELETE FROM certificationtbl WHERE CertificationID='$Z'";
    $result = mysql_query($query);

        echo "
                <script type='text/javascript'>
                location.href='certifications.php?id=3';
                </script>
                ";
 	
}

if(isset($_GET['delete_AchievementID'])) {
    $Z = $_GET['delete_AchievementID'];

 	$query = "DELETE FROM achievementstbl WHERE AchievementID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='achievements.php?id=3';
            </script>
            ";
}

if(isset($_GET['delete_ReferenceID'])) {
    $Z = $_GET['delete_ReferenceID'];

	$query = "DELETE FROM referencetbl WHERE ReferenceID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='references.php?id=3';
            </script>
            ";
}

if(isset($_GET['delete_SID'])){
    $id = $_GET['delete_SID'];

    $query = "DELETE FROM specializationtbl WHERE SID = '$id'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='specialization-and-languages.php?id=3';
            </script>
            ";
}

if(isset($_GET['delete_LangID'])){
    $id = $_GET['delete_LangID'];

    $query = "DELETE FROM languagetbl WHERE LangID = '$id'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='specialization-and-languages.php?id=6';
            </script>
            ";
}
?>
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
            location.href='education.php?id=SeminarDeleted';
            </script>
       
            ";
}
if(isset($_GET['delete_CertificationID'])) {
    $Z = $_GET['delete_CertificationID'];

 	$query = "DELETE FROM certificationtbl WHERE CertificationID='$Z'";
    $result = mysql_query($query);

        echo "
                <script type='text/javascript'>
                location.href='certifications.php?id=CertificationDelete';
                </script>
                ";
 	
}

if(isset($_GET['delete_AchievementID'])) {
    $Z = $_GET['delete_AchievementID'];

 	$query = "DELETE FROM achievementstbl WHERE AchievementID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='achievements.php?id=AchievementDelete';
            </script>
            ";
}

if(isset($_GET['delete_ReferenceID'])) {
    $Z = $_GET['delete_ReferenceID'];

	$query = "DELETE FROM referencetbl WHERE ReferenceID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='references.php?id=ReferenceDelete';
            </script>
            ";
}

if(isset($_GET['delete_LanguageID'])) {
    $Z = $_GET['delete_LanguageID'];

    $query = "DELETE FROM languagetbl WHERE LangID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='specialization_languages.php';
            </script>
            ";
}

?>
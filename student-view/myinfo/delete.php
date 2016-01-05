<?php
include('../../connection.php');


if (isset($_GET['delete_URLID'])) {
    $Z = $_GET['delete_URLID'];

    GSecureSQL::query(
        "DELETE FROM urltbl WHERE URLID=?",
        FALSE,
        "s",
        $Z
    );

    echo "
            <script type='text/javascript'>
            location.href='portfolio.php?id=URLDeleted';
            </script>";
}

if (isset($_GET['delete_SchoolID'])) {
    $Z = $_GET['delete_SchoolID'];

    GSecureSQL::query(
        "DELETE FROM schooltbl WHERE SchoolID=?",
        FALSE,
        "s",
        $Z
    );

    echo "
            <script type='text/javascript'>
            location.href='education.php?id=3';
            </script>
            ";
}

if (isset($_GET['delete_SeminarID'])) {
    $Z = $_GET['delete_SeminarID'];


    GSecureSQL::query(
        "DELETE FROM seminartbl WHERE SeminarID=?",
        FALSE,
        "s",
        $Z
    );

    echo "
            <script type='text/javascript'>
            location.href='education.php?id=6';
            </script>
       
            ";
}
if (isset($_GET['delete_CertificationID'])) {
    $Z = $_GET['delete_CertificationID'];

    GSecureSQL::query(
        "DELETE FROM certificationtbl WHERE CertificationID=?",
        FALSE,
        "s",
        $Z
    );

    echo "
                <script type='text/javascript'>
                location.href='certifications.php?id=3';
                </script>
                ";

}

if (isset($_GET['delete_AchievementID'])) {
    $Z = $_GET['delete_AchievementID'];

    GSecureSQL::query(
        "DELETE FROM achievementstbl WHERE AchievementID=?",
        FALSE,
        "s",
        $Z
    );

    echo "
            <script type='text/javascript'>
            location.href='achievements.php?id=3';
            </script>
            ";
}

if (isset($_GET['delete_ReferenceID'])) {
    $Z = $_GET['delete_ReferenceID'];

    GSecureSQL::query(
        "DELETE FROM referencetbl WHERE ReferenceID=?",
        FALSE,
        "s",
        $Z
    );

    echo "
            <script type='text/javascript'>
            location.href='references.php?id=3';
            </script>
            ";
}

if (isset($_GET['delete_SID'])) {
    $id = $_GET['delete_SID'];

    GSecureSQL::query(
        "DELETE FROM specializationtbl WHERE SID = ?",
        FALSE,
        "s",
        $id
    );

    echo "
            <script type='text/javascript'>
            location.href='specialization-and-languages.php?id=3';
            </script>
            ";
}

if (isset($_GET['delete_LangID'])) {
    $id = $_GET['delete_LangID'];

    GSecureSQL::query(
        "DELETE FROM languagetbl WHERE LangID = ?",
        FALSE,
        "s",
        $id
    );

    echo "
            <script type='text/javascript'>
            location.href='specialization-and-languages.php?id=6';
            </script>
            ";
}
?>
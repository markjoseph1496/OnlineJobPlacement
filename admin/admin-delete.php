<?php
include('../connection.php');

//Delete compantlist
if (isset($_GET['delete_CompanyID'])) {
    $Z = $_GET['delete_CompanyID'];

    GSecureSQL::query(
        "DELETE FROM companyinfotbl WHERE CompanyID=?",
        FALSE,
        "s",
        $Z
    );
    header("location: admin-companylist.php?id=deletecompany");

}
//END
?>
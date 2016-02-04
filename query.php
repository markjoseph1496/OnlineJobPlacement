<?php
include('connection.php');

/*
$studentinfo =
    GSecureSQL::query(
        "SELECT StudentID FROM studentinfotbl",
        TRUE
    );
foreach($studentinfo as $value){
    $StudentID = $value[0];
    GSecureSQL::query(
        "INSERT INTO progresstbl (StudentID) values (?)",
        FALSE,
        "s",
        $StudentID
    );
}
*/


$list = array
(
    "Peter,Griffin,Oslo,Norway",
    "Glenn,Quagmire,Oslo,Norway",
);

$file = fopen("contacts.csv","w");

foreach ($list as $line)
{
    fputcsv($file,explode(',',$line));
}

fclose($file);
?>
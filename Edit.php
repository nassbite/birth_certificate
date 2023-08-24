<?php
session_start();
include_once 'conf/db.php';
?>

<?php


if (isset($_POST['sv'])) {
    $id = $_POST["id"];
    $nam = $_POST["name"];
    $plac = $_POST["place"];
    $dat = $_POST["date"];
    $surnam = $_POST["surname"];
    $mother_nationalit = $_POST["mother_nationality"];
    $father_nationalit = $_POST["father_nationality"];
    $gande = $_POST["sex"];

    $sql = "UPDATE certificate 
        SET name='$nam', place='$plac', date='$dat',  surname='$surnam', 
        mother_nationality='$mother_nationalit', father_nationality='$father_nationalit', sex='$gande' 
        WHERE id='$id'";


    if ($conn->query($sql) === TRUE) {

        echo "Record updated successfully!";
    } else {

        echo "Error updating record: " . $conn->error;
    }
}



?>
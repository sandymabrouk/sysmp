<?php
//Seif Elsallamy
require("../../db.php");

$code = $_POST["code"];
$name = $_POST["name"];
$campus = $_POST["campus"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];
$birthdate = $_POST["birthdate"];
$cohort = $_POST["cohort"];

$sql = "UPDATE students SET name='$name',  campus='$campus', email='$email', mobile='$mobile', address='$address', birthdate='$birthdate', cohort='$cohort' WHERE code=$code";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
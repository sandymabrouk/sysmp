<?php
//Seif Elsallamy
require("../../db.php");

$code = $_POST["code"];
$name = $_POST["name"];
$semester = $_POST["semester"];
$campus = $_POST["campus"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$pass = $_POST["password"];
$address = $_POST["address"];
$birthdate = $_POST["birthdate"];
$cohort = $_POST["cohort"];
$degree_id = $_POST["degree_id"];

$sql = "UPDATE students SET name='$name', semester='$semester', campus='$campus', email='$email', mobile='$mobile', password='$pass', address='$address', birthdate='$birthdate', cohort='$cohort', degree_id='$degree_id' WHERE code=$code";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
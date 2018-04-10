<?php
// Abdelrahman Helmi & Seif Elsallamy
if (isset($_POST["course_submit"])){
require ('randpw.php');
    require('../../auth.php')
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sysmp";

$name = $_POST["course_name"];
$email = $_POST["course_professor"];
$semester = $_POST["course_semester"];

$pass = randomPassword(8,1,"lower_case,upper_case,numbers,special_symbols")[0];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO courses (name, professor_email, course_semester)
VALUES ('$name', '$email', '$semester')";



if (mysqli_query($conn, $sql)) {
    echo "course " . $name . " added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$conn->close();

}

?>

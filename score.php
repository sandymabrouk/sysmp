<?php
//hassan hossam
$_POST['code'] ;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sysmp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT degree_id FROM students WHERE code = $code ";
?>
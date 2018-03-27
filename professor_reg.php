<?php
// Seif Elsallamy
if (isset($_POST["reg_submit"])){
require ('randpw.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sysmp";

$name = $_POST["reg_name"];
$email = $_POST["reg_email"];
$pass = randomPassword(8,1,"lower_case,upper_case,numbers,special_symbols")[0];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO professors (professor_email, name , password)
VALUES ('$email', '$name', '$pass')";


if (mysqli_query($conn, $sql)) {
    echo "professor email: " . $email . "<br>";
	echo "professor Password: " . $pass;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();


}

?>
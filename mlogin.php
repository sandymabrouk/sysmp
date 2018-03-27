<?php 
//Hassan hossam

$inuser = $_POST['username'] ;
$inpass = $_POST['password'] ;

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

$sql = "SELECT code, password FROM students WHERE code = '$inuser' AND password = '$inpass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 { echo "logged in"; }
else 
	{ echo "try again";}

$conn->close();








?>

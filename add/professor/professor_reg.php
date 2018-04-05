<?php
// Seif Elsallamy
if (isset($_POST["reg_submit"])){
require('../../randpw.php');
require('../../db.php');

$name = $_POST["reg_name"];
$email = $_POST["reg_email"];
$pass = randomPassword(8,1,"lower_case,upper_case,numbers,special_symbols")[0];


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
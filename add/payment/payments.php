<?php
// Abdelrahman Helmi
if (!isset($submit)){
require("../../db.php");
$student_code = $_POST['code'];
$order_ID = $_POST['order_id']; 
$amount = $_POST['amount'];

$sql = "INSERT INTO payments (order_id, code, amount)
VALUES ('$order_ID', '$student_code', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}


?>
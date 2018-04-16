<?php
// Nour Kilany 
require('../../../db.php');


$code = $_POST['code'];
$course_id = $_POST['course_id'];
$score = $_POST['score'];

$sql = "UPDATE students_score SET code='$code', course_id='$course_id', score='$score'  WHERE code='$code' and course_id='$course_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>
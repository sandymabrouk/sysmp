<?php
//abdelrahman helmi
//rwan eldagher
if (!isset($_GET["submit"])){
require("../../db.php");
$course_id = $_POST['course_id']; 
$professor_id = $_POST['professor_id'];
$sql = "INSERT INTO courses_professors (course_id, professor_email)
VALUES ('$course_id', '$professor_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>
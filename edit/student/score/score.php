<?php
// Nour Kilany 
require('db.php');
$code = $_POST['code'];
$course_id = $_POST['course_id'];
$score = $_POST['score'];
$sql = "INSERT INTO student_scores ('Student Code', 'Course ID', 'Score') VALUES ('$Student_Code', '$Course_ID', '$Score')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
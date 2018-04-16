<?php
//Seif Elsallamy
require("db.php");

$sql="SELECT courses.name as 'course title', students_score.score, students.name as 'student name'
FROM students_score
INNER JOIN courses 
ON students_score.course_id = courses.course_id
INNER JOIN students
ON students_score.code = students.code
";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        var_dump($row);
    }
} else {
    echo "0 results";
}


$conn->close();

?>
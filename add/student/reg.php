<?php
// Seif Elsallamy
if (isset($_POST["reg_submit"])){
//require ('../../randpw.php');
require ('../../db.php');

$name = $_POST["reg_name"];
$date = $_POST["reg_date"];
$address = $_POST["reg_address"];
$degree = $_POST["reg_degree"];
$mobile = $_POST["reg_mobile"];
$email = $_POST["reg_email"];
//$semester = $_POST["reg_semester"];
$campus = $_POST["reg_campus"];
$cohort = $_POST["reg_cohort"];
$year = $_POST["year"];
$code = $_POST["identity_number"];

//$pass = randomPassword(8,1,"lower_case,upper_case,numbers,special_symbols")[0];

$sql = "INSERT INTO students (code, name, email, birthdate, campus, cohort, mobile, address)
VALUES ('$code', '$name', '$email', '$date', '$campus', '$cohort', '$mobile', '$address')";



if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "INSERT INTO students_degrees (code, degree_id, year)
VALUES ('$code', '$degree', '$year')";



if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql = "SELECT course_id from courses_degrees WHERE degree_id='$degree'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // adding student scores
    while($row = $result->fetch_assoc()) {
        $course = $row["course_id"];
		$sql = "INSERT INTO students_score (code, course_id, score)
VALUES ('$code', '$course', '')";

if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    }
} else {
    echo "0 results";
}


$conn->close();

}

?>




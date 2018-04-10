<?php
//Nour Kilany & Abdelrahman Helmi & Seif Elsallamy
if (isset($_POST["add_degree"])){

require("../../db.php");


$course = $_POST["course"];
$professor = $_POST["professor"];
$name = $_POST["degree_name"];
$type = $_POST["degree_type"];
$price = $_POST["degree_price"];
$semester=0;



	$sql = "INSERT INTO degrees (name, price, type)
VALUES ('$name', '$price', '$type')";
	if (mysqli_query($conn, $sql)) {
		$degree_id = mysqli_insert_id($conn);
		echo "degree " . $name . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

for ($i=0;$i<count($course);$i++){
	
	if ($i % 4 == 0 ){
	$semester++;
	}
	$sql = "INSERT INTO courses (name, professor_email, course_semester)
VALUES ('$course[$i]', '$professor[$i]', '$semester')";
	if (mysqli_query($conn, $sql)) {
		$course_id = mysqli_insert_id($conn);
		echo "course " . $course[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
		$sql = "INSERT INTO courses_degrees (course_id, degree_id)
VALUES ('$course_id', '$degree_id')";
	if (mysqli_query($conn, $sql)) {
		echo "course " . $course[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
}









$conn->close();


}
 ?>

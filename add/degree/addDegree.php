<?php
//Nour Kilany & Abdelrahman Helmi & Seif Elsallamy
if (isset($_POST["add_degree"])){

require("../../db.php");


$course1 = $_POST["course1"];
$professor1 = $_POST["professor1"];
$course2 = $_POST["course2"];
$professor2 = $_POST["professor2"];
$start_date = $_POST["start_date"];
$end_date = $_POST["end_date"];
$name = $_POST["degree_name"];
$type = $_POST["degree_type"];
$price = $_POST["degree_price"];

$round=0;



	$sql = "INSERT INTO degrees (name, price, type)
VALUES ('$name', '$price', '$type')";
	if (mysqli_query($conn, $sql)) {
		$degree_id = mysqli_insert_id($conn);
		echo "degree " . $name . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

for ($i=0;$i<count($course1);$i++){
	

	$sql = "INSERT INTO courses (name)
VALUES ('$course1[$i]')";
	if (mysqli_query($conn, $sql)) {
		$course_id1 = mysqli_insert_id($conn);
		echo "course " . $course1[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql = "INSERT INTO courses (name)
VALUES ('$course2[$i]')";
	if (mysqli_query($conn, $sql)) {
		$course_id2 = mysqli_insert_id($conn);
		echo "course " . $course2[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	
	
	$sql = "INSERT INTO courses_professors (course_id, professor_email)
VALUES ('$course_id1', '$professor1[$i]')";
	if (mysqli_query($conn, $sql)) {
		$course_id = mysqli_insert_id($conn);
		echo "course " . $course1[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
		$sql = "INSERT INTO courses_professors (course_id, professor_email)
VALUES ('$course_id2', '$professor2[$i]')";
	if (mysqli_query($conn, $sql)) {
		$course_id = mysqli_insert_id($conn);
		echo "course " . $course2[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	
		$sql = "INSERT INTO courses_degrees (course_id, degree_id)
VALUES ('$course_id1', '$degree_id')";
	if (mysqli_query($conn, $sql)) {
		echo "course " . $course1[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		
		$sql = "INSERT INTO courses_degrees (course_id, degree_id)
VALUES ('$course_id2', '$degree_id')";
	if (mysqli_query($conn, $sql)) {
		echo "course " . $course2[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	$sql = "INSERT INTO rounds (beg_date, end_date)
VALUES ('$start_date[$i]', '$end_date[$i]')";
	if (mysqli_query($conn, $sql)) {
		$round_id = mysqli_insert_id($conn);
		echo "round " . $round_id . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}



		$sql = "INSERT INTO courses_rounds (course_id, round_id)
VALUES ('$course_id1', '$round_id')";
	if (mysqli_query($conn, $sql)) {
		echo "course " . $course1[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

		$sql = "INSERT INTO courses_rounds (course_id, round_id)
VALUES ('$course_id2', '$round_id')";
	if (mysqli_query($conn, $sql)) {
		echo "course " . $course2[$i] . " added successfully <br>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}
$conn->close();


}
 ?>

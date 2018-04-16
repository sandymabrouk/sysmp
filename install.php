<?php
//Sandy & Alia
$server = "localhost";
$username = "root";
$password = "";
$database = "sysmp";
	
$conn = new mysqli($server, $username, $password);
	if ($conn -> connect_error)
	{
	die($error);
	}

$sql = "DROP DATABASE sysmp";

if ($conn -> query($sql) == FALSE)
	{
	echo "error " . $conn -> error . "<br>";
	}


$sql = "CREATE DATABASE sysmp";

if ($conn -> query($sql) == FALSE)
	{
	echo "error " . $conn -> error . "<br>";
	}


$conn = new mysqli($server, $username, $password , $database);



//students_score
$sql_student_score = "CREATE TABLE students_score(
score_id int NOT NULL AUTO_INCREMENT,
code int,	
course_id int,
score CHAR(30),
PRIMARY KEY (score_id)
)"; 

if ($conn -> query($sql_student_score) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}
//-------------

//professors
$sql_professors = "CREATE TABLE professors(	
professor_email CHAR(50) NOT NULL,
name CHAR(30) NOT NULL,
password CHAR(50) NOT NULL,
PRIMARY KEY (professor_email)
)"; 

if ($conn -> query($sql_professors) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}
//------------------

//courses
$sql_course = "CREATE TABLE courses(
course_id int NOT NULL AUTO_INCREMENT,
name CHAR(50) NOT NULL,
PRIMARY KEY (course_id)
)"; 

if ($conn -> query($sql_course) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}
//-------------



//admin
$sql_admin = "CREATE TABLE admin(
username CHAR(30),
password CHAR(50) NOT NULL,
PRIMARY KEY (username)
)"; 

if ($conn -> query($sql_admin) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}


//--------

//courses_degrees
$sql_courses_degrees = "CREATE TABLE courses_degrees(
courses_degrees_id int NOT NULL AUTO_INCREMENT,
course_id int,	
degree_id int,
PRIMARY KEY (courses_degrees_id)
)"; 

if ($conn -> query($sql_courses_degrees) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}


//----------


//degrees
$sql_degrees = "CREATE TABLE degrees(
degree_id int NOT NULL AUTO_INCREMENT,
name CHAR(30) NOT NULL,
type CHAR(30) NOT NULL,
price decimal(10,2) NOT NULL,
PRIMARY KEY (degree_id)
)"; 

if ($conn -> query($sql_degrees) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}

//--------

//students
$sql_students = "CREATE TABLE students(
code int NOT NULL,
name CHAR(50) NOT NULL,
campus CHAR(30) NOT NULL ,
email CHAR(50) NOT NULL,
mobile CHAR(50) NOT NULL,
address CHAR(100) NOT NULL,
birthdate DATETIME NOT NULL,
cohort CHAR (30) NOT NULL,
PRIMARY KEY (code)
)"; //Edited By Nour kilany

if ($conn -> query($sql_students) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}

//----------

$sql_alter = "ALTER TABLE students AUTO_INCREMENT = 2000"; 

if ($conn -> query($sql_alter) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}


//payments
$sql_payments = "CREATE TABLE payments(
order_id int,
code int,
amount int NOT NULL,
PRIMARY KEY (order_id),
FOREIGN KEY (code) REFERENCES students(code)
)"; 

if ($conn -> query($sql_payments) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}

//----------------

//rounds
$sql_rounds = "CREATE TABLE rounds(
round_id int NOT NULL AUTO_INCREMENT,
beg_date DATETIME NOT NULL,
end_date DATETIME NOT NULL,
degree_id int,
PRIMARY KEY (round_id),
FOREIGN KEY (degree_id) REFERENCES degrees(degree_id)
)"; 

if ($conn -> query($sql_rounds) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}
//-------------

//courses_rounds
$sql_courses_rounds = "CREATE TABLE courses_rounds(
courses_rounds_id int NOT NULL AUTO_INCREMENT,
round_id int,
course_id int,
PRIMARY KEY (courses_rounds_id),
FOREIGN KEY (course_id) REFERENCES courses(course_id),
FOREIGN KEY (round_id) REFERENCES rounds(round_id)
)"; 

if ($conn -> query($sql_courses_rounds) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}
//-------------

//courses_professors
$sql_courses_rounds = "CREATE TABLE courses_professors(
courses_professors_id int NOT NULL AUTO_INCREMENT,
course_id int,
professor_email char(40),
PRIMARY KEY (courses_professors_id),
FOREIGN KEY (course_id) REFERENCES courses(course_id),
FOREIGN KEY (professor_email) REFERENCES professors(professor_email)
)"; 

if ($conn -> query($sql_courses_rounds) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}
//-------------

//students_degrees
$sql_students_degrees = "CREATE TABLE students_degrees(
students_degrees_id int NOT NULL AUTO_INCREMENT,
degree_id int,
code int,
year char(40),
PRIMARY KEY (students_degrees_id),
FOREIGN KEY (degree_id) REFERENCES degrees(degree_id),
FOREIGN KEY (code) REFERENCES students(code)
)"; 

if ($conn -> query($sql_students_degrees) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}
//-------------


//Add Admin
// Create connection
$conn = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO admin (username, password)
VALUES ('admin', 'admin')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


//----------------------------------------------

$conn -> close();


?>


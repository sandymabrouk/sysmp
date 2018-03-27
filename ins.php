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

$sql = "CREATE DATABASE sysmp";

if ($conn -> query($sql) == FALSE)
	{
	echo "error " . $conn -> error . "<br>";
	}


$conn = new mysqli($server, $username, $password , $database);



//students_score
$sql_student_score = "CREATE TABLE students_score(
code int,	
course_id int,
score CHAR(30) NOT NULL,
PRIMARY KEY (code,course_id)
)"; 

if ($conn -> query($sql_student_score) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}


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
course_semester CHAR(50) NOT NULL,
professor_email CHAR(50) NOT NULL,
PRIMARY KEY (course_id),
FOREIGN KEY (professor_email) REFERENCES professors(professor_email)
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
course_id int,	
degree_id int,
PRIMARY KEY (course_id,degree_id)
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
code int NOT NULL AUTO_INCREMENT,
name CHAR(50) NOT NULL,
semester CHAR(50) NOT NULL,
campus CHAR(30) NOT NULL ,
email CHAR(50) NOT NULL,
mobile CHAR(50) NOT NULL,
password CHAR(30) NOT NULL,
address CHAR(100) NOT NULL,
birthdate DATETIME NOT NULL,
cohort CHAR (30) NOT NULL,
degree_id int,
PRIMARY KEY (code),
FOREIGN KEY (degree_id) REFERENCES degrees(degree_id)
)"; 

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

$conn -> close();


?>


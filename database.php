<?php
// Sandy Mabrouk
$server = "localhost";
$username = "root";
$password = "";
$database = "mastersDB";
	
$conn = new mysqli($server, $username, $password);
	if ($conn -> connect_error)
	{
	die($error);
	}

$sql = "CREATE DATABASE mastersDB";

if ($conn -> query($sql) == FALSE)
	{
	echo "error " . $conn -> error . "<br>";
	}


$conn = new mysqli($server, $username, $password , $database);


$sql_course = "CREATE TABLE course(
cid int,
name CHAR(50) NOT NULL,
PRIMARY KEY (cid)
)"; 

if ($conn -> query($sql_course) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}

$sql_semester = "CREATE TABLE semester(
sid int,
cid int,
begdate DATETIME NOT NULL,
enddate DATETIME NOT NULL,
PRIMARY KEY (sid),
FOREIGN KEY (cid) REFERENCES course(cid)
)"; 

if ($conn -> query($sql_semester) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}



$sql = "CREATE TABLE student(
code int NOT NULL AUTO_INCREMENT,
sid int,
degree int,
password CHAR(30) NOT NULL,
email CHAR(50) NOT NULL,
name CHAR(50) NOT NULL,
mobile CHAR(50) NOT NULL,
birthdate DATETIME NOT NULL,
address CHAR(100) NOT NULL,
degree_id int,
degree_name CHAR(50) NOT NULL,
degree_cost int NOT NULL,
PRIMARY KEY (code, degree),
FOREIGN KEY (sid) REFERENCES semester(sid)

)"; 

if ($conn -> query($sql) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}



$sql_payments = "CREATE TABLE payments(
pid int NOT NULL,
code int,
amount int NOT NULL,
order_number int NOT NULL,
PRIMARY KEY (pid),
FOREIGN KEY (code) REFERENCES student(code)
)"; 

if ($conn -> query($sql_payments) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}

$sql_admin = "CREATE TABLE admin(
username CHAR(30) NOT NULL,
password CHAR(50) NOT NULL
)"; 

if ($conn -> query($sql_admin) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}

$sql_alter = "ALTER TABLE student AUTO_INCREMENT = 2000"; 

if ($conn -> query($sql_alter) == TRUE)
	{
	echo "success";
	}
else {echo "error " . $conn -> error . "<br>";}


$conn -> close();


?>


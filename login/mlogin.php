<?php
 
//Hassan hossam & Sandy mabrouk

// Inialize session
session_start();

if (isset($_POST['login'])) {
	require('../db.php');
	$inuser = $_POST['username'] ;
	$inpass = $_POST['password'] ;
	$sql = "SELECT code, password FROM students WHERE code = '$inuser' AND password = '$inpass' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) { 
	$_SESSION['username']=$inuser; // Set username session variable 
    echo "logged in"; 
   
   } else { echo "try again";}
	

$conn->close();
}

?>






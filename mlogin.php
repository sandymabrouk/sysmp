<?php
 
//Hassan hossam & Sandy mabrouk

// Inialize session
session_start();

if (isset($_POST['login'])) {
	require('db.php');
	$inuser = $_POST['username'] ;
	$inpass = $_POST['password'] ;
	$sql = "SELECT username, password FROM admin WHERE username = '$inuser' AND password = '$inpass' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) { 
	$_SESSION['username']=$inuser; // Set username session variable 
    $_SESSION['type']="admin";
	$_SESSION['access']="*";
	echo "logged in"; 
   header("location: admin.php");
   } else { echo "try again";}
	

$conn->close();
}

?>







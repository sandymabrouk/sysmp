<?php
//Sandy Mabrouk
function displayTable($tableName) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sysmp";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT $name, $email, $semester, $course FROM $tableName";
$result = $conn->query($sql);
$data;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

echo json_encode($data);

}

$conn->close();

}
?>


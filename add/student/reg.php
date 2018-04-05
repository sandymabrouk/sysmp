<?php
// Seif Elsallamy
if (isset($_POST["reg_submit"])){
require ('../../randpw.php');
require ('../../db.php');

$name = $_POST["reg_name"];
$date = $_POST["reg_date"];
$address = $_POST["reg_address"];
$degree = $_POST["reg_degree"];
$mobile = $_POST["reg_mobile"];
$email = $_POST["reg_email"];
$semester = $_POST["reg_semester"];
$campus = $_POST["reg_campus"];
$cohort = $_POST["reg_cohort"];

$pass = randomPassword(8,1,"lower_case,upper_case,numbers,special_symbols")[0];

$sql = "INSERT INTO students (name, email, birthdate, semester, campus, cohort, mobile, address, password, degree_id)
VALUES ('$name', '$email', '$date', '$semester', '$campus', '$cohort', '$mobile', '$address', '$pass', '$degree')";



if (mysqli_query($conn, $sql)) {
    $code = mysqli_insert_id($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$conn->close();

echo "Student code: " . $code . "<br>";
echo "Student Password: " . $pass;
}

?>

<!-- Rwan Al dagher -->
<!DOCTYPE html>
<html>
<head>
	
	<script src="javascript/present.js"></script>
    
	
	<style>
        table, th, td 
        {
            margin:10px 0;
            border:solid 1px #333;
            padding:2px 4px;
            font:15px Verdana;
        }
        th {
            font-weight:bold;
        }
    </style>
</head>
<body onload="<?php echo "getJson('json/courses.php?semester=" . $semester . "');" ; ?>">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
    <div id="showData"></div>
	</div>
	</div>
	</div>
</body>

</html>


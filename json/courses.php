<?php
require("json.php");
$semester = $_GET['semester'];
displayTable("courses where course_semester = $semester");
?>
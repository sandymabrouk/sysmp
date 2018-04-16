<?php
//require("json.php");
//displayTable("payments");
require("../db.php");
$sql = "SELECT students.name
FROM s students
JOIN ss payments ON (students.name = payments.amount)";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["code"] ;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>
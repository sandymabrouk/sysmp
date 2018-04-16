<?php
//require("json.php");
require("json.php");
//displayTable("payments");
displayTable("payments","order_id , code, amount");
require("../db.php");
$sql = "SELECT students.name , payments.code , payments.amount
FROM students
JOIN payments ON (students.code = payments.code)";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["code"] . "name: " . $row["name"] ."payment amount: " . $row["amount"];
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

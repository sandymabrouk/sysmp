<?php
//Sandy Mabrouk
//Edited Seif Elsallamy
function search($table_name, $search_string, $search_in_columns, $return_columns){ 
require("../../db.php");
// example $return_columns = "id, name, birthdate..." (NOT ARRAY)
// example $search_in_columns = ["name", "code"] (IS ARRAY)
	$sql="SELECT ". $return_columns . " FROM " . $table_name . " WHERE ";
	$sql2 = "";
	foreach($search_in_columns as $s){
		
		$sql2 = $sql2 .  $s . " LIKE '%$search_string%' OR " ; 
		
	}
	$sql = substr($sql . $sql2, 0, -3);
	
	
	$result = $conn->query($sql);
	$data;
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

	echo json_encode($data);

	}
	
}


//search("students", "2001", ["code", "name"], "code, name, cohort, email, semester, email, mobile, address, birthdate, campus")


?>

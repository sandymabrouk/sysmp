<?php
if (isset($_GET["query"])){
require("search.php");
$table_name = "students";
$search_in_columns = ["name", "code"];
$return_columns = "*";
$search_string = $_GET["query"];
search($table_name, $search_string, $search_in_columns, $return_columns);
}

?>
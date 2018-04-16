<?php
session_start();
if ($_SESSION["type"] !== "admin"){
header("location: index.html");
return 0;
}
?>
<?php
$conn = new mysqli('localhost', 'root', '', 'emp_db');
if(!$conn) die("ERROR");
$empId = $_POST['empid'];
$sql = "DELETE FROM empinfo WHERE empid = '$empId'";
echo $conn->query($sql) ? "<h1><center>DELETED</center></>" : "";
$conn->close();
?>
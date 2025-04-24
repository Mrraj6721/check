<?php
$conn = new mysqli('localhost', 'root', '', 'emp_db');
if(!$conn) die("Connection Failed");

$empId = $_POST['empid'];
$empName = $_POST['empname'];
$empDesig = $_POST['empdes'];
$empSal = $_POST['empsal'];

$sql = "UPDATE empinfo SET empname = '$empName', empdes = '$empDesig', empsal = '$empSal' WHERE empid = '$empId'";

echo $conn->query($sql) ? "<center><h1>Updated</h1></center>" : "";
$conn->close();
?>
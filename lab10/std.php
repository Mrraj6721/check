<?php
$conn = new mysqli('localhost','root','', 'std_db');
if(!$conn) die("Conncetion Error");

$sId = $_POST['sId'];
$sName = $_POST['sName'];
$phNo = $_POST['phNo'];
$prg = $_POST['prg'];
$uni = $_POST['uni'];

$sql = "INSERT INTO studinfo (sId, sName, phNo, prg, uni) VALUES ('$sId','$sName','$phNo','$prg','$uni')";

echo $conn->query($sql) ? "<h1><center>CREATED</center></h1>" : "<></>";
$conn->close();

?>
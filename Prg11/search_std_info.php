<?php
$conn = new mysqli("localhost", "root", "", "stud_db");
if ($conn->connect_error) die("Connection failed");

$sId = $_POST['sId'];
if ($sId != "") {
    $res = $conn->query("SELECT * FROM studinfo WHERE sId = '$sId'");
    echo "<center><table border=1><tr><th>ID</th><th>Name</th><th>Mobile</th><th>Course</th><th>University</th></tr>";
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        echo "<tr><td>$row[sId]</td><td>$row[sName]</td><td>$row[phNo]</td><td>$row[prg]</td><td>$row[uni]</td></tr>";
    } else {
        echo "<tr><td colspan=5>No record found</td></tr>";
    }
    echo "</table></center>";
}
$conn->close();
?>
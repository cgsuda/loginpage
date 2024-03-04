<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6687216";
$password = "yTWWhenKNe";
$dbname = "sql6687216";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

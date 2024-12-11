<?php
$servername = "localhost";
$username = "root";
$password = "";//error karena ada spasi
$dbname = "database_jj";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
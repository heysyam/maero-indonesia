<?php
$koneksi = mysqli_connect('localhost','root','','db_maero');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_maero";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
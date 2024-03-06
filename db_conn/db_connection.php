<?php
$hostname = "localhost";
$username = "ptudw_16";
$password = "12345678";
$dbname = "data";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    echo 'Kết Nối Thất Bại!' . $conn->connect_error;
}
<?php

$host = "mysql.railway.internal";
$user = "root";
$password = "BZeRStGCqkiBcoRaNjnBgNDwEmsbPuqR";
$database = "railway";
$port = "3306";

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>

<?php
$host     = "gondola.proxy.rlwy.net";
$port     = 17474;
$dbname   = "railway";
$username = "root";
$password = "BZeRStGCqkiBcoRaNjnBgNDwEmsbPuqR";

$conn = mysqli_connect($host, $username, $password, $dbname, $port);

if (!$conn) {
    die(json_encode(['error' => 'Connection failed: ' . mysqli_connect_error()]));
}
?>

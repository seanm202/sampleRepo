<?php
// Database configuration
$hostname = 'localhost';
$username = "root";
$password = '';
$database = 'recipes';
// Establish database pdoection
$pdo = mysqli_connect($hostname, $username, $password, $database);
// Check pdoection
if (!$pdo) {
    die('connection failed: ' . mysqli_connect_error());
}
?>

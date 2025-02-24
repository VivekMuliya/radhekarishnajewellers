<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'jewelry_db';
// $host = 'sql309.infinityfree.com';
// $user = 'if0_38058628';
// $password = '4eOR4ZYv3G';
// $dbname = 'if0_38058628_jewellry_db';
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

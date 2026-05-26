<?php
// Railway MySQL connection

$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQLDATABASE');
$port = getenv('MYSQLPORT');

echo "<pre>";
echo "HOST: ".$host."<br>";
echo "USER: ".$user."<br>";
echo "DB: ".$db."<br>";
echo "PORT: ".$port."<br>";
echo "</pre>";

$conn = new mysqli(
    $host,
    $user,
    $pass,
    $db,
    (int)$port
);

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
?>

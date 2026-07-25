<?php
// TiDB Cloud connection for Render

$host = getenv('DB_HOST');
$user = getenv('DB_USERNAME');
$pass = getenv('DB_PASSWORD');
$db   = getenv('DB_DATABASE');
$port = getenv('DB_PORT');

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

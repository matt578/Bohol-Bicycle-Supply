<?php
// TiDB Cloud connection for Render

$host = getenv('DB_HOST');
$user = getenv('DB_USERNAME');
$pass = getenv('DB_PASSWORD');
$db   = getenv('DB_DATABASE');
$port = (int)getenv('DB_PORT');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_init();

// Enable SSL for TiDB Cloud
$conn->ssl_set(NULL, NULL, NULL, NULL, NULL);

$conn->real_connect(
    $host,
    $user,
    $pass,
    $db,
    $port,
    NULL,
    MYSQLI_CLIENT_SSL
);

$conn->set_charset('utf8mb4');
?>

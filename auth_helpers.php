<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}



require_once 'db.php';

// keep your existing functions below

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

function completeLogin(array $row, mysqli $conn, string $method = 'email') {
    session_regenerate_id(true);

    $_SESSION['user_id'] = $row['id'];
    $_SESSION['name'] = $row['name'] ?? '';
    $_SESSION['email'] = $row['email'] ?? '';
    $_SESSION['login_method'] = $method;

    header('Location: dashboard.php');
    exit();
}

function requireLogin() {
    if (empty($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }
}
?>

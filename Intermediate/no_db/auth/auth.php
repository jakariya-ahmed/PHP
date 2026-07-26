<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


if (!isset($_SESSION['logged_in'])) {
    header("Location: /PHP/Intermediate/no_db/auth/login.php");
    exit();
}
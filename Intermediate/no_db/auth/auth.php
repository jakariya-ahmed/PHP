<?php
require_once __DIR__ . '/../config/session.php';

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


if (!isset($_SESSION['logged_in'])) {
    header("Location: /PHP/Intermediate/no_db/auth/login.php");
    exit();
}
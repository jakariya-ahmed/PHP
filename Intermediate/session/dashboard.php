<?php
/**
 * Session Start
 */
session_start();

/**
 * Browser cace protect
 */
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
/**
 * URL Protection 
 */

if (!isset($_SESSION['logged_in'])) {
    header("Location: auth/login.php");
    exit();
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1> Welcome to <?=  $_SESSION['username'] ?></h1>
    <h2> Dashboard Page </h2>

    <form action="auth/logout.php" method="post">
        <button type="submit">
            Logout
        </button>
    </form>


</body>
</html>




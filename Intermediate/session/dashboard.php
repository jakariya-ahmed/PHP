<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: auth/login.php');
    exit;
}


?>

<h2>Welcome to Dashboard <strong style="color:green"><?= $_SESSION['username'] ?></strong></h2>

<a href="auth/logout.php"> Logout </a>
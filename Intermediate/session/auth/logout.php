<?php 
session_start();
// Logout System
session_unset();
session_destroy();
header('Location: login.php');
exit;
?>
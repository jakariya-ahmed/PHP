<?php 
/**
 * Session Start
 */

session_start();

// Unset the session
session_unset();

// Destroy the session
session_destroy();

// Redirect to login.php
header("Location: login.php");
exit();

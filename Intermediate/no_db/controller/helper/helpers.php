<?php
/**
 * check session status and active the session
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Flash Message 
function flashMessage($key) {
    if (!isset($_SESSION[$key])) {
        return "";
    }

    $message = $_SESSION[$key];

    unset($_SESSION[$key]);
    
    return $message;

}

// Old input 
function old($key) {
    return htmlspecialchars($_SESSION["old"][$key] ?? "");
}






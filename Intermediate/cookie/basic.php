<?php 
/**
 * 1. setcookie()  2. $_COOKIE[]  3. unset() 
 */
// setcookie(name, value, expire, path, domain, secure, httponly);

setcookie('username', 'Jakariya Aman', time() + 100, "/"); // 600 seconds = 10 minutes

if (isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'] . "!<br>";
} else {
    echo "Hello, new user!<br>";
}


?>
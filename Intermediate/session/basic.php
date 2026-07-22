<?php 
/**
 * session_start() -> start the sesssion on the header of file
 */

// session_start();

/**
 * $_SESSION[""] => is the super global veriable
 */

$_SESSION['username'] = "Jakariya Aman";
$_SESSION['role'] = 'Admin';
$_SESSION['loggedIn'] = true;




//  echo "<h3>User Name is : { $_SESSION['username']}</h3>";

echo "<h3>User Name is : {$_SESSION['username']}</h3>";

echo "<h3> User Role is : {$_SESSION['role']} </h3>";


unset($_SESSION['username']);





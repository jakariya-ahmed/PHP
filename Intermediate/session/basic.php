<?php 
/** Basic Session
 *  1. session_start()  2. $_SESSION[]  3. session_destroy();
 *  4. session_unset()  5. unset($_SESSION['key'])  6. session_regenerate_id();
 */


// Store data in session
session_start();

$_SESSION['username'] = "Jakariya Aman";
$_SESSION['email'] = "jakariay@gmail.com";



session_unset(); // Remove all session variables

if (isset($_SESSION['username'])) {
    echo $_SESSION['username']. "<br>";
}

// check session is exists 
if (isset($_SESSION['email'])) {
    echo "Your email is : " . $_SESSION['email'] . "<br>";
    session_destroy();
} else {
    echo "Session email not found.";
}

// Update session variable
$_SESSION['username'] = "Updated Jakariya";
unset($_SESSION['username']); // delete specific session variable
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
}




?>
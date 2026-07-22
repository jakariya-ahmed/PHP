<?php 
/**
 * Session Start
 */
session_start();

/**
 * If user already logged in and redirect to dashboard
 */

if (isset($_SESSION['logged_in'])) {
    header("Location: ../dashboard.php");
    exit();
}


/**
 * Store Error Value
 */

$errors = [
    "username" => "",
    "password" => "",
    "login" => "",
];
// Store null input value for input data preserving
$username = "";
$password = "";

/**
 * Static Credentials 
 */

$correctUsername = "admin";
$correctPassword = "@123456";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //trim the inputs 
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // username validation
    if (empty($username)) {
        $errors['username'] = "Username is required"; 
    }

    // Password validation
    if (empty($password)) {
        $errors['password'] = "Password is required"; 
    }

    // Check login
    if (empty($errors['username'] && empty($errors['password']))) {
        if ($username === $correctUsername && $password === $correctPassword) {
            // Regenerate session id
            session_regenerate_id(true);
            $_SESSION['logged_in'] = true;
            // Store username in session
            $_SESSION['username'] = $username;
            // Redirect to dashboard
            header("Location: ../dashboard.php");
            exit();

        }
    } else {
        $errors['login'] = "Invalid username or password";
    }


}


?>


<?php 



// Filter Single Input
/*
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING); 
$email = filter_input(INPUT_POST, FILTER_SANITIZE_EMAIL);
*/

// Filter Group Input
/*
$senitized = filter_input_array(INPUT_POST, [
    'name' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_EMAIL,
]);
*/


// Input Safety
$username = $_POST['username'] ?? '';
$pwd = $_POST['password'] ?? '';
$email = $_POST['email'] ?? '';

// Simple Validation
$errors = [];
if ($username === '') $errors[] = "Username is required";
if ($email === '') $errors[] = "Email is required";
if ($pwd === '') $errors[] = "Password is required";    

// Show errors 
if (!empty($errors)) {
    echo "<h3> Fix These Errors: </h3>";
    foreach($errors as $err) {
        echo "<p style='color:red'> $err </p>";
    }
    echo "<a href='http://localhost/php/intermediate/url-handling'> Got Back </a>";
}

// Disply submtted data
echo "username: $username <br/>";
echo "username: $pwd <br/>";
echo "username: $email <br/>";
?>
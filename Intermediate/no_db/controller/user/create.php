<?php
session_start();
/** Link to Database  */
require "../database.php";

/**
 * Store null value and errors
 */

$errors = [];
$username = "";
$email = "";
$phone = "";
$address = "";
$phone = "";
$note = "";

/**
 * Recevied data by $_SERVER["REQUEST_METHOD"] which come from user form
 */

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Catch All input value
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $note = trim($_POST['note']);

    /**
     * Input fields Validation
     */

    if (empty($username)) {
        $errors['username'] = 'Username is required';
    }
    if (empty($username)) {
        $errors['email'] = 'email is required';
    }
    if (empty($username)) {
        $errors['phone'] = 'phone is required';
    }

    if (count($errors) === 0) {
        $sql = "INSERT INTO tbl_users(username,email,phone,address,note) 
        VALUE(?,?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $username, $email, $phone, $address, $note);

        if ($stmt->execute()) {
            $_SESSION["message"] = "User Registered Successfully";
            $_SESSION["messageType"] = "success";
            header("Location: ../../basic.php");
             exit();
        } else {
            $_SESSION["message"] = "Registration Failed";
            $_SESSION["messageType"] = "error";
            header("Location: ../../basic.php");

        }

        $stmt->close();

    }


}
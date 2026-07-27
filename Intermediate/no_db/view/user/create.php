<?php 
require_once __DIR__ . '/../../config/session.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $address = trim($_POST["address"]);
    $note = trim($_POST["note"]);

    $_SESSION['users'][] = [
        'id' => uniqid(),
        'username' => $username,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'note' => $note,
    ];


    header("Location: index.php");
    
}


// user update

if (isset($_POST['id'])) {
    $id = $_GET['id'];

    foreach ($_SESSION['users'] as &$user) {
        if ($user['id'] === $id) {
            $user['username'] = trim($_POST['username']);
            $user['email'] = trim($_POST['email']);
            $user['phone'] = trim($_POST['phone']);
            $user['address'] = trim($_POST['address']);
            $user['note'] = trim($_POST['note']);
            break;
        }
    }

    unset($user);

    header("Location: index.php");
    exit();


}
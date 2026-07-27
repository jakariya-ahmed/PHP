<?php
require_once __DIR__ . '/../../config/session.php';

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];

    foreach ($_SESSION['users'] as $index => $user) {
        if ($user['id'] === $id) {
            unset($_SESSION['users'][$index]);
            $_SESSION['users'] = array_values($_SESSION['users']);
            break;
        }
    }
}



header("Location: index.php");
exit();
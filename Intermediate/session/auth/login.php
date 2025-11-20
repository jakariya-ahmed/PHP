<?php 

// Login System with Session
session_start();
if (isset($_SESSION['username'])) {
    header('Location: ../dashboard.php');
    exit;
}

$errors = [];
$errorMsg = "";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = trim($_POST['username']);
    $pwd = trim($_POST['password']);

    // check username validation
    if (empty($userName)) {
        $errors['username'] = "username is required";
    } else {
        if (!preg_match("/^[a-zA-Z]+$/", $userName)) {
            $errors['username'] = "Only letters are allowed in username";
        }
    }

    // check password validation
    if (empty($pwd)) {
        $errors['password'] = "Password is required";
    } else {
        if (strlen($pwd) < 5) {
            $errors['password'] = "Password must be at least 6 characters";
        }
    }

    // If no errors , set sesstion and redirect ot dashboard
    if (empty($errors)) {
        // check username & password
        if ($userName === "admin" && $pwd === "admin123") {
            // set session variables
            $_SESSION['username'] = $userName;
            $_SESSION['user_id'] = uniqid('', true);
            
            // Regenerate session ID to prevent session fixation attacks
            session_regenerate_id(true);

            // Reidrect ot dashboard
            header("Location: ../dashboard.php");
            exit;

        } else {
            $errorMsg = "Invalid username or password";
        }
    }


}




?>

<div style="position:absolute;width: 250px; background:#ddd; 
    padding: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%)
    ">
    <h2> Login </h2>
    <?php if (!empty($errorMsg)) : ?>
        <div style="margin-bottom: 10px;background: #fc6247ff;color: #fff; font-size: 16px; padding: 8px;">
            <span><?= $errorMsg ?></span>
        </div>
    <?php endif ?>

    <form action="" method="POST">
        <input style="width: 100%; margin-top: 10px; height:30px" type="text" name="username" placeholder="Enter username">
        <span style="color:red; display:block;"><?= $errors['username'] ?? '' ?></span>
        <input style="width: 100%; margin-top: 10px; height:30px" type="password" name="password" placeholder="*******">
        <span style="color:red; display:block;"><?= $errors['password'] ?? '' ?></span>
        <button type="submit"  style="margin-top: 10px; border: 1px solid #363636ff; background: #e4b166ff; padding: 8px 16px;">Login</button>
    </form>
</div>


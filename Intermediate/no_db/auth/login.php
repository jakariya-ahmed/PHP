<?php 
/**
 * Session Start()
 */
require_once __DIR__ . '/../includes/session.php';

/**
 * If user already logged in redirect to dashboard
 */
if (isset($_SESSION['logged_in'])) {
    header("Location: ../view/dashboard.php");
    exit();
}

$errors = [
    'username' => "",
    'password' => "",
    'login' => "",

];
// Store null input value for input data preserving
$username = "";
$password = "";

/**
 * Dynamically retrive form database when used Database
 * Staic Credentials 
 */

$correctUsername = "admin";
$correctPassword = "@123456";

/**
 * handle login form submit data
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // trim inputs 
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Input fields valdiation
    if (empty($_POST['username'])) {
        $errors['username'] = "Username is required";
    }

    if (empty($_POST['password'])) {
        $errors['password'] = "Password is required";
    }

    // Login check 
    if (empty($errors['username']) && empty($errors['password'])) {
        // check correct credentials 
        if ($username === $correctUsername && $password === $correctPassword) {
            
            // Regenrate session id
            session_regenerate_id();
            
            // Store data in session
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            
            // Redirect to Dashboard.php
            header("Location: ../view/dashboard.php");
            exit();
        }
    } else {
        // $errors['login'] = "Invalid username or password";
    }

}

?>



<div style="position:absolute;width: 250px; background:#ddd; 
    padding: 20px; top: 50%; left: 50%; transform: translate(-50%, -50%)
    ">
    <h2> Login </h2>
       <!-- <?php if($errors['login']) :  ?>
        <div style="margin-bottom: 10px;background: #fc6247ff;color: #fff; font-size: 16px; padding: 8px;">
            <span><?= $errors['login'] ?></span>
        </div>
        <?php endif ?>
       --> 
    <form action="" method="POST">
        <input style="width: 100%; margin-top: 10px; height:30px" 
        type="text" name="username"
        value="<?= htmlspecialchars($username) ?>" 
        placeholder="Enter username">
        <span style="color:red; display:block;"><?= $errors['username'] ?></span>
        <input style="width: 100%; margin-top: 10px; height:30px" 
        type="password" name="password" 
        value="<?= htmlspecialchars($password) ?>"
        placeholder="*******">
        <span style="color:red; display:block;"> <?= $errors['password'] ?> </span>
        <button type="submit"  style="margin-top: 10px; border: 1px solid #363636ff; background: #e4b166ff; padding: 8px 16px;">Login</button>
    </form>
</div>



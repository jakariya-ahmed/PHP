<?php 
// Input Sanitization 
function sanitize($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// success message 
function success($msg) {
    return $msg;
}


    $erros = [];
    $username = $email = $mobile = $password = "";
    $successMsg = "";
// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    // username Validation
    if (empty($_POST['username'])) {
        $erros['username'] = "username is required";
    }else {
        $username = sanitize($_POST['username']);
        if (!preg_match("/^[a-zA-z]*$/", $username)) {
            $erros['username'] = "Only letters and spaces allowed";
        }
    }

    // Email Validation
    if (!empty($_POST['email'])) {
        $email = sanitize($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros['email'] = "Invalid email format";
        }
    } else {
        $erros['email'] = "Email is required";
    }

    // Mobile Validation
    if (!empty($_POST['mobile'])) {
        $mobile = sanitize($_POST['mobile']);
        if (!preg_match("/^[0-9]{10,15}$/", $mobile)) {
            $erros['mobile'] = "Enter valid mobile number"; 
        }
    } else {
        $erros['mobile'] = "Mobile is required";
    }

    // Password Validation 
    if (!empty($_POST['password'])) {
        $password = sanitize($_POST['password']);
        if (strlen($password) < 5) {
            $erros['password'] = "Password must be at least 6 charactes";
        }
    } else {
        $erros['password'] = "Password is required";
    }


    // If no erros show success 
    if (empty($erros)) {
        $successMsg = success("Registration is success !");

        // Clear Input old Data
        $username = $email = $mobile = $password = "";

        // Redirect to success.php

        //header("Refresh: 3; URL:success.php?success=1&msg=$successMsg"); 
        header("Location: success.php?success=1&msg=$successMsg"); // Standard way for redirect
        exit;
        
        /** Best Redirect by JS for time delaying 
        echo "
        <script>
            setTimeout(function() {
                window.location.href = 'success.php?success=1&msg=$successMsg';
            }, 3000);
        </script>
        ";
        */
    }

}




?>

<a href="<?= "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] ?>">Current Page </a>



<!-- Registration Form  -->
<div style="width: 250px; background:#ddd; padding: 20px; margin-top: 50px;">
    <?php if(!empty($successMsg)) : ?>
    <div style="background: #47fc5fff; align:center; font-size: 20px; padding: 8px;">
        <?= $successMsg ."Redirecting..." ?>
    </div>
    <?php endif ?>
    <form method="POST" action="">
        <input style="width: 100%; margin-top: 10px; height:30px" type="text" name="username" value="<?= $username ?>" placeholder="Enter username">
        <span style="color:red"><?= $erros['username'] ?? '' ?></span>
        <input style="width: 100%; margin-top: 10px; height:30px" type="email" name="email" value="<?= $email ?>" placeholder="Enter Email">
        <span style="color:red"><?= $erros['email'] ?? '' ?></span>
        
        <input style="width: 100%; margin-top: 10px; height:30px" type="phone" name="mobile" value="<?= $mobile ?>" placeholder="Enter Mobile">
        <span style="color:red"><?= $erros['mobile'] ?? '' ?></span><br>
        
        <input style="width: 100%; margin-top: 10px; height:30px" type="password" name="password" value="" placeholder="Enter password">
        <span style="color:red"><?= $erros['password'] ?? '' ?></span><br>
        <button type="submit"  style="margin-top: 10px; border: 1px solid #363636ff; background: #e4b166ff; padding: 8px 16px;">Login</button>
    </form>
</div>









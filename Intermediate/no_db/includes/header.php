<?php 

require_once __DIR__ . '/../auth/auth.php';
require_once __DIR__ . '/../config/app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Admin Dashboard' ?></title>
   <!-- Global CSS -->
    <link rel="stylesheet" href="/PHP/Intermediate/no_db/assets/css/style.css">
    <?php if (isset($pageStyle)) : ?>
        <link rel="stylesheet" href="style.css">
    <?php endif ?>

<style> 
.menu {
    background-color: #faf7f7;
    width: 50%;
    margin: auto;
    text-align: center;
    border-radius: 100px;
    margin-top: 10px;
}
.menu ul {
    margin: 0px;
    padding: 5px 0px;
    
}
.menu ul li {
    display: inline;
    margin-left: 10px;
    margin-right: 10px;
}

.menu ul li a {
    text-decoration: none;
}
</style>

</head>
<body>
<header>
    <div class="menu">
        <ul>
            <li><a href="<?= APP_URL ?>/view/dashboard.php">Home</a></li>
            <li><a href="<?= APP_URL ?>/view/user/index.php">User</a></li>
            <li><a href="">Advanced</a></li>
            <li><a href="">Database</a></li>
            <li><a href="">OOP</a></li>
            <li><a href="">Projects</a></li>
        </ul>
    </div>
</header>

<!-- Include header  -->
<?php require __DIR__ . '/../includes/header.php'; ?>
     <!-- Include header  -->
<div class="dashboard">
    <h1> Welcome to <?=  $_SESSION['username'] ?></h1>
    <h2> Dashboard Page </h2>

    <form action="auth/logout.php" method="post">
        <button type="submit">
            Logout
        </button>
    </form>
</div>


</body>
</html>




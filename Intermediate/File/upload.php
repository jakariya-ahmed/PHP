
<?php 

// Variables
$errors = [];
$username = $email = $password = $profile = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Inputs


    // ---- File Upload System ----

    $upload_dir = "uploads/";
    // Create uploads folder if not exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 00755, true);
    }

    // File info
    $file_path = $_FILES['profile']['name']; // get name + extension
    $file_tmp_name = $_FILES['profile']['tmp_name']; // 
    $file_size = $_FILES['profile']['size'];
    $file_error = $_FILES['profile']['error'];
    $file_type = $_FILES['profile']['type'];

    // Allowed file types
    $allowed_types = ['jpg', 'jpeg', 'png', 'pdf', 'text'];

    // Get file extension
    $file_name = pathinfo($file_path, PATHINFO_FILENAME); // get only name
    $file_ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));// get only extension
    $file_base = pathinfo($file_path, PATHINFO_BASENAME); // get name + extension
    $file_dir = pathinfo($file_path, PATHINFO_DIRNAME); // get file directory
    print_r($file_type);



}


?>



<div style="width: 250px; background:#ddd; padding: 20px; margin-top: 50px;">
    <form method="POST" action="" enctype="multipart/form-data">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="text" name="username" placeholder="Enter username">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="email" name="email" placeholder="Enter Email">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="password" name="password" placeholder="Enter password">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="file" name="profile" require>
        <button type="submit"  style="border: 1px solid #363636ff; background: #e4b166ff; padding: 8px 16px;">Registration</button>
    </form>
</div>





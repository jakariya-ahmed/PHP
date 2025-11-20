
<?php 

// Variables
$errors = [];
$img_errror = "";
$successMsg = "";
$view_img = "";
$username = $email = $password = $profile = "";

// create success message function 
function success($msg) {
    return $msg;
} 



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
    
    $chck_type = in_array($file_ext, $allowed_types);

    // Check for errors
    if ($file_error === 0 ) {
        if (in_array($file_ext, $allowed_types)) {
            if ($file_size <= 2 * 1024 * 1024) {
                // Create unique file name
                $new_file_name = uniqid('', true).".".$file_ext;
                $destination =  $upload_dir . $new_file_name;

                // Move file to the uploads directory
                if (move_uploaded_file($file_tmp_name, $destination)) {
                    $successMsg = success("Profile created successfully.");
                    if (in_array($file_ext, ['jpg', 'jpeg', 'png'])) {
                        $view_img = "<img src='$destination' width='200' alt='profile'/> " ;
                    }
                } else {
                    $img_errror = "Failed to upload file.";
                }
            } else {
               $img_errror = "File size large than 2MB";
            }
        } else {
            $img_errror = "File type not allowed";
        }
    }else {
       $img_errror = "Upload Error";
    }
    
    // print_r($file_type);



}


?>



<div style="width: 250px; background:#ddd; padding: 20px; margin-top: 50px;">
    <!-- show success message  -->
    <?php if (!empty($successMsg)): ?>
        <div style="margin-bottom: 10px;background: #47fc5fff; align:center; font-size: 20px; padding: 8px;">
            <?= $successMsg ?>
        </div>
    <?php endif ?>
    <!-- show file upload error message  -->
     <?php if(!empty($img_errror)): ?>
        <div style="margin-bottom: 10px;background: #fc6247ff; align:center; font-size: 20px; padding: 8px;">
            <?= $img_errror ?>
        </div>
     <?php endif ?>
    <form method="POST" action="" enctype="multipart/form-data">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="text" name="username" placeholder="Enter username">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="email" name="email" placeholder="Enter Email">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="password" name="password" placeholder="Enter password">
        <input style="width: 100%; margin-bottom: 10px; height:30px" type="file" name="profile" require>
        <button type="submit"  style="border: 1px solid #363636ff; background: #e4b166ff; padding: 8px 16px;">Registration</button>
    </form>

    <?php if(!empty($view_img)): ?>
        <?= $view_img ?>
    <?php endif?>
</div>





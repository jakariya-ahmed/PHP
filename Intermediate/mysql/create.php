<?php
require 'db.php';

/**
 * username, email, password, phone, status, created_at, updated_at
 *  
 * */ 

$username = "john_doe";
$email = "john@gmail.com";
$phone = "1234567890";
$password = password_hash("password123", PASSWORD_BCRYPT); // Hash the password
$status = 1; // Active status

// Get data 
$get_data = "SELECT * FROM tbl_users";
$result = $conn->query($get_data);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID:" . $row['id'] . "- Name:" . $row['username'] . "- Email:" . $row['email'] . "<br>" 
        ;
    }
}

// Insert data 
/* 
$sql = "INSERT INTO tbl_users (username, email, phone, password, status) 
        VALUES('$username', '$email', '$phone', '$password', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "User creates successfully";
} else {
    echo "Error:" . $conn->error;
}
*/


// update user
$update_sql = "UPDATE tbl_users 
            SET username='Jakariya ahmed', email='jakariya@gmail.com'
            WHERE id=5";
        if ($conn->query($update_sql)) {
            echo "User updated successfully <br>";
        }

// Delete user

$delete_sql = "DELETE FROM tbl_users WHERE id=3";
if ($conn->query($delete_sql)) {
    echo "User deleted successfully";
}


?>
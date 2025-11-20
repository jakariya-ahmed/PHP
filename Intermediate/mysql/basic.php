<?php 
 // DB Connection using OOP way
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'basic_php';
/**
$conn = new mysqli($host, $user, $pass, $db);

// check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
} else {
    echo "Connected successfully";
} 

**/


// DB Connection using Procedural way

$conn = mysqli_connect($host, $user, $pass, $db);

// check connection 
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

?>
<?php 
// DB variables
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'basic_php';


$conn = new mysqli($host, $user, $pass, $db);

// check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}



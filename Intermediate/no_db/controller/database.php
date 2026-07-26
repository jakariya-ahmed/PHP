<?php 
$host = "localhost";
$user = "root";
$password = '';
$db = "basic_php";

// stublish connectio to database 
$conn = new mysqli($host, $user, $password, $db);

// Check Connection
if ($conn->connect_error) {
    
    die("Database Connection Failed. Please Try Again". $conn->connect_error);
}


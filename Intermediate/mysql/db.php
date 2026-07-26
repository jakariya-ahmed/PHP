<?php 
$host = "localhost";
$user = "root";
$password = '';
$db = "basic_php";

// stublish connectio to database 
$conn = new mysqli($host, $user, $password, $db);

// Check Connection
if ($conn) {
    error_log($conn->connect_error);
    die("Database Connection Failed. Please Try Again");
}


// Create Database 
// CREATE DATABASE company_db
USE company_db;
/**
 * Create table 
 */
// CREATE TABLE users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,
//     email VARCHAR(255) NOT NULL UNIQUE,
//     password VARCHAR(255) NOT NULL
// );

/** 
 * Create table wit unique email
 */

// CREATE TABLE users (
//     id INT AUTO INCREMENT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,
//     email VARCHAR(100) NOT NULL UNIQUE,
//     password VARCHAR(255) NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// );


/**
 * Insert Data into users table 
 */
// INSERT INTO users(name,email,password) VALUES ($name, $email, $password);



// select form users
// select name, email from users
// delete from users where id = user_id
// select * from users where id = user_id
// update users set name=$name, email = $email where id = $user_id
// insert into users(name,email,password) value($name,$email,$password)


/**
 * Read all Data form users table
 */

// SELECT FROM users; 


/**
 * Read Specific columns from users table
 */

// SELECT name, email FROM users;

/**
 * Select User by user id
 */

// SELECT * FROM users WHERE id = user_id;


/**
 * Update user form user table
 */

// UPDATE users SET name=$name, email=$email WHERE id = user_id;





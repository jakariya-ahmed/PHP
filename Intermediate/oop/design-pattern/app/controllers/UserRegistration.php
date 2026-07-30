<?php 
namespace App\Controllers;

class UserRegistration {
    public function register(array $data): bool {
        // Validation Logic
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Invalid Email Provided");
        }
        if (empty($data['password']) || strlen($data['password']) < 8) {
            throw new \InvalidArgumentException("Password must be at least 8 characters.");
        }

        // Database Logic
        $dsn = "mysql:host=localhost;dbname=app_db";
        $pdo = new \PDO($dsn, "root", "secret");

        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES(:email, :password)");
        $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);
        $succeess = $stmt->execute([
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        if (!$succeess) {
            return false;
        }

        // Email Notification Logic
        $to = $data['email'];
        $subject = "Welcome to Our Platfom";
        $message = "Thank you for registering";
        $headers = "From: no-reply@gmail.com";
        mail($to, $subject, $message, $headers);

        // Loggin Logic
        $loadMessage = sprintf("[%] User registered: %'\n", date('Y-m-d H:i:s'), $data['email']);
        file_put_contents(__DIR__ . '/../../logs/app.log', $loadMessage, FILE_APPEND);
        
        return true;
        
    }
}










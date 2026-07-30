<?php 
namespace App\Repositories;

use PDO;

class UserRepository {
    public function __construct(private readonly PDO $pdo) {}

    public function save(string $email, string $password): int {
        $stmt = $this->pdo->prepare("INSERT INTO users (email, password) VALUES(:email, :password) ");
        $stmt->execute([
            'email' => $email,
            'password' => $password,
        ]);

        return (int) $this->pdo->lastInsertId();
        
    }
}














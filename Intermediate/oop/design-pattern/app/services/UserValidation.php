<?php 
namespace App\Services;
class UserValidation {
    public function validate(array $data): void {
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Invalid Email Provided");
        }

        if (empty($data['password']) || strlen($data['password']) < 8) {
            throw new \InvalidArgumentException("Password Must be at least 8 characters");
        }

    }
}





























<?php 
namespace App\Services;
class MailserService {
    public function sendWelcomeMail(string $receipientEamil): void {
        
        $subject = "Welcome to Our Platform";
        $message = "Thank you for registration";
        $headers = "From:no-reply@gmail.com";

        mail($subject, $message, $headers);

    }
}
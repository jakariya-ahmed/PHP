<?php 
namespace App\Services;

use App\Repositories\UserRepository;

class UserService {
    /** Without Dependency Injection */
    /*private UserRepository $userRepository;
    public function __construct() {
        $this->userRepository = new UserRepository();
    }
    */

    /** With Dependency Injection */

    public function __construct(private UserRepository $userRepository) {}
    
}
















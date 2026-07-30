<?php 
namespace App\Services;

use App\Repositories\UserRepository;

class UserRegistrationService {
    public function __construct(
        private readonly UserValidation $validate,
        private readonly UserRepository $userRepository,
        private readonly MailserService $mailser,
        private readonly LoggerService $logger,

    ) {}


}


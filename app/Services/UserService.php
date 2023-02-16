<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService
{
    public function __construct(
        private readonly UserRepository $userRepository
    ) {
    }

    /**
     * Find user by email address
     *
     * @param string $email
     * @return User
     */
    public function getUser(string $email): User
    {
        return $this->userRepository->findOneByEmail($email);
    }
}

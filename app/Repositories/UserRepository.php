<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Eloquent\Repository;
use App\Models\User;

class UserRepository extends Repository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return User::class;
    }

    /**
     * @param string $email
     * @return User
     */
    public function findOneByEmail(string $email): User
    {
        return $this->where('email', $email)->first();
    }
}

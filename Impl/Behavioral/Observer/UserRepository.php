<?php declare(strict_types = 1);

namespace Impl\Behavioral\Observer;

class UserRepository
{
    public function find(string $username): ?array
    {
        return null;
    }

    public function insert(array $user): void
    {
        echo printbr("User [{$user['username']}] registered!");
    }
}
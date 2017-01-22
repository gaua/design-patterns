<?php declare(strict_types = 1);

namespace Impl\Structural\Facade;

class UsersIPReader
{
    public function fetchUsers(array $usersIP) : array
    {
        return array_get('users', $usersIP);
    }
}

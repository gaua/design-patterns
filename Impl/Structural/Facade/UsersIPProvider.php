<?php declare(strict_types = 1);

namespace Impl\Structural\Facade;

class UsersIPProvider
{
    public function getUsersIp() : array
    {
        return ['users' => ['A', 'B', 'C']];
    }
}

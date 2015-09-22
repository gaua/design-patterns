<?php

namespace Impl\Structural\Facade;

class UsersIPReader
{
    /**
     * @param array $usersIP
     * @return array
     */
    public function fetchUsers(array $usersIP)
    {
        return array_get('users', $usersIP);
    }
}

<?php

namespace Impl\Structural\Facade;

class UsersIPProvider
{
    /**
     * @return array
     */
    public function getUsersIp()
    {
        return ['users' => ['A', 'B', 'C']];
    }
}

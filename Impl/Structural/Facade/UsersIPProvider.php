<?php

namespace Impl\Structural\Facade;

class UsersIPProvider
{
    /**
     * @return array
     */
    public function getUsersIp()
    {
        return [
            'users' => ['A', 'B', 'C'],
            'ips' => [
                '11.11.11.11',
                '11.11.11.22',
                '11.11.11.33'
            ]
        ];
    }
}

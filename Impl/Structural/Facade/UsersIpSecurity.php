<?php

namespace Impl\Structural\Facade;

class UsersIpSecurity
{
    /**
     * @var array
     */
    protected $bannedUsers;

    /**
     * @var array
     */
    protected $bannedIPs;

    /**
     * @param $username
     */
    public function banUser($username)
    {
        $this->bannedUsers[] = $username;
    }

    /**
     * @param $ip
     */
    public function banIP($ip)
    {
        $this->bannedIPs[] = $ip;
    }

    /**
     * @return array
     */
    public function getBannedUsers()
    {
        return $this->bannedUsers;
    }

    /**
     * @return array
     */
    public function getBannedIPs()
    {
        return $this->bannedIPs;
    }
}

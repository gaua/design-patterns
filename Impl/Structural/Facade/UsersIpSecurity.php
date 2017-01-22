<?php declare(strict_types = 1);

namespace Impl\Structural\Facade;

class UsersIpSecurity
{
    /**
     * @var array
     */
    protected $bannedUsers = [];

    /**
     * @var array
     */
    protected $bannedIPs = [];

    public function banUser(string $username) : void
    {
        $this->bannedUsers[] = $username;
    }

    public function banIP(string $ip) : void
    {
        $this->bannedIPs[] = $ip;
    }

    public function getBannedUsers() : array
    {
        return $this->bannedUsers;
    }

    public function getBannedIPs() : array
    {
        return $this->bannedIPs;
    }
}

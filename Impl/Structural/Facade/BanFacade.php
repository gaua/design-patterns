<?php

namespace Impl\Structural\Facade;

class BanFacade
{
    /**
     * @var UsersIPProvider
     */
    protected $provider;

    /**
     * @var UsersIPReader
     */
    protected $reader;

    /**
     * @var UsersIpSecurity
     */
    protected $security;

    public function __construct()
    {
        $this->provider = new UsersIPProvider();
        $this->reader = new UsersIPReader();
        $this->security = new UsersIpSecurity();
    }

    /**
     * @param $username
     * @param $ip
     * @throws \Exception
     */
    public function ban($username, $ip = null)
    {
        $data = $this->provider->getUsersIp();
        $users = $this->reader->fetchUsers($data);

        if (!in_array($username, $users)) {
            throw new \Exception('User does not exist!');
        }

        $this->security->banUser($username);

        if ($ip !== null && filter_var($ip, FILTER_VALIDATE_IP)) {
            $ips = $this->security->getBannedIPs();

            if (!in_array($ip, $ips)) {
                $this->security->banIP($ip);
            }
        }
    }

    /**
     * @return array
     */
    public function listBannedUsers()
    {
        return $this->security->getBannedUsers();
    }

    /**
     * @return array
     */
    public function listBannedIPs()
    {
        return $this->security->getBannedIPs();
    }
}

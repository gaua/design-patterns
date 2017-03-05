<?php declare(strict_types = 1);

namespace Impl\Behavioral\Observer;

class UserRegistration extends AbstractSubject
{
    private $userRepository;

    private $user;

    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();
        $this->userRepository = $userRepository;
    }

    public function register(array $user) : void
    {
        $this->user = $user;

        if ($this->userRepository->find($user['username'])) {
            throw new \Exception("User with username: [{$user['username']}] already exists!");
        }

        $this->userRepository->insert($user);

        $this->notify();
    }

    public function getUser()
    {
        return $this->user;
    }
}
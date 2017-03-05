<?php declare(strict_types = 1);

namespace Impl\Behavioral\Observer;

use SplSubject;

class UserRegistrationLogger implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        $user = $subject->getUser();

        echo printbr("User [{$user['username']}] has been successfully registered!");
    }
}
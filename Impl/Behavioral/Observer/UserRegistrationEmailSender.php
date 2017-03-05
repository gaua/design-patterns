<?php declare(strict_types = 1);

namespace Impl\Behavioral\Observer;

use SplSubject;

class UserRegistrationEmailSender implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        $user = $subject->getUser();

        echo "Welcome email for [{$user['username']}] has been successfully send!" . PHP_EOL;
    }
}
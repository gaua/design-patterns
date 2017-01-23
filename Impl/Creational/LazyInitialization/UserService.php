<?php declare(strict_types = 1);

namespace Impl\Creational\LazyInitialization;

class UserService implements Service
{
    public static function getName() : string
    {
        return 'user';
    }
}

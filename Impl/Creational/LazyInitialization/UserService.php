<?php

namespace Impl\Creational\LazyInitialization;

class UserService implements Service
{
    /**
     * @return string
     */
    public static function getName()
    {
        return 'user';
    }
}

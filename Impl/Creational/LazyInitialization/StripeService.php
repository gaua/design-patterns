<?php

namespace Impl\Creational\LazyInitialization;

class StripeService implements Service
{
    /**
     * @return string
     */
    public static function getName()
    {
        return 'stripe';
    }
}
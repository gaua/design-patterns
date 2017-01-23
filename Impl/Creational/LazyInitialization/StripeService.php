<?php declare(strict_types = 1);

namespace Impl\Creational\LazyInitialization;

class StripeService implements Service
{
    public static function getName() : string
    {
        return 'stripe';
    }
}
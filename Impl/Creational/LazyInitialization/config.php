<?php declare(strict_types = 1);

use Impl\Creational\LazyInitialization\UserService;
use Impl\Creational\LazyInitialization\StripeService;

return [
    UserService::getName() => UserService::class,
    StripeService::getName() => StripeService::class
];
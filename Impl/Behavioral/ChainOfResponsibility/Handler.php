<?php declare(strict_types = 1);

namespace Impl\Behavioral\ChainOfResponsibility;

use Detection\MobileDetect;

abstract class Handler
{
    /** @var Handler */
    protected $nextHandler;

    public function setNext(Handler $handler) : void
    {
        $this->nextHandler = $handler;
    }

    abstract public function handle(array $request, MobileDetect $deviceDetector) : void;
}
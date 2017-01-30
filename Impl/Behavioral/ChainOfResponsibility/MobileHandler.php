<?php declare(strict_types = 1);

namespace Impl\Behavioral\ChainOfResponsibility;

use Detection\MobileDetect;

class MobileHandler extends Handler
{
    public function handle(array $request, MobileDetect $deviceDetector): void
    {
        if ($deviceDetector->isMobile()) {
            printbr('You are using mobile device!');
            printbr('Your user agent: ' . $deviceDetector->getUserAgent());
        } else {
            throw new \Exception('Something went wrong!');
        }
    }
}
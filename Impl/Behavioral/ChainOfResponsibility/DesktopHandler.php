<?php declare(strict_types = 1);

namespace Impl\Behavioral\ChainOfResponsibility;

use Detection\MobileDetect;

class DesktopHandler extends Handler
{
    public function handle(array $request, MobileDetect $deviceDetector): void
    {
        if (!$deviceDetector->isMobile() && !$deviceDetector->isTablet()) {
            printbr('You are using desktop device!');
            printbr('Your user agent: ' . $deviceDetector->getUserAgent());
        } else {
            $this->nextHandler->handle($request, $deviceDetector);
        }
    }
}
<?php declare(strict_types = 1);

include_once '../../../autoload.php';

use Impl\Behavioral\ChainOfResponsibility\DesktopHandler;
use Impl\Behavioral\ChainOfResponsibility\MobileHandler;
use Impl\Behavioral\ChainOfResponsibility\TabletHandler;
use Detection\MobileDetect;

$desktopHandler = new DesktopHandler();
$tabletHandler = new TabletHandler();
$mobileHandler = new MobileHandler();

$desktopHandler->setNext($tabletHandler);
$tabletHandler->setNext($mobileHandler);

$desktopHandler->handle($_REQUEST, new MobileDetect());

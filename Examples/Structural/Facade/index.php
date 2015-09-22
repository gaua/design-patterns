<?php

include_once '../../../autoload.php';

use Impl\Structural\Facade\BanFacade;

$banFacade = new BanFacade();

$banFacade->ban('A');

print_r($banFacade->listBannedUsers());
print_r($banFacade->listBannedIPs());
printbr('');

$banFacade->ban('B', '11.11.11.11');

print_r($banFacade->listBannedUsers());
print_r($banFacade->listBannedIPs());
printbr('');

$banFacade->ban('C', '11.11.11.11');

print_r($banFacade->listBannedUsers());
print_r($banFacade->listBannedIPs());
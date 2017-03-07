<?php declare(strict_types = 1);

include_once "../../../autoload.php";

use Impl\Structural\Adapter\FunctionsFileAdapter;
use Impl\Structural\Adapter\SplFileAdapter;
use Impl\Structural\Adapter\FileHandler;

$fileHandler = new FileHandler(new FunctionsFileAdapter('test.txt'));
printbr("Functions adapter");
printbr($fileHandler->showContent());
printbr('');

$fileHandler = new FileHandler(new SplFileAdapter('test.txt'));
printbr("Object adapter");
printbr($fileHandler->showContent());
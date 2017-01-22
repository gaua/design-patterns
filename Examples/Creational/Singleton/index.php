<?php declare(strict_types = 1);

include_once '../../../autoload.php';

use Impl\Creational\Singleton\Config;


$config = Config::getInstance();

printbr('First:');
printbr($config->get('foo'));
printbr($config->get('bar'));

$config->set('foo', 'bbb');
$config->set('bar', 'bbb');

$anotherConfig = Config::getInstance();

printbr('Second:');
printbr($anotherConfig->get('foo'));
printbr($anotherConfig->get('bar'));

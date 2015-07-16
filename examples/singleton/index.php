<?php

require '../../autoload.php';

use Impl\Singleton\Config;

$config = Config::getInstance();

println('First:');
println($config->get('foo'));
println($config->get('bar'));

$config->set('foo', 'bbb');
$config->set('bar', 'bbb');

$anotherConfig = Config::getInstance();

println('Second:');
println($anotherConfig->get('foo'));
println($anotherConfig->get('bar'));

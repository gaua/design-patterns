<?php

require_once '../../autoload.php';

use Impl\Singleton\Config;


$config = Config::getInstance();

printnl('First:');
printnl($config->get('foo'));
printnl($config->get('bar'));

$config->set('foo', 'bbb');
$config->set('bar', 'bbb');

$anotherConfig = Config::getInstance();

printnl('Second:');
printnl($anotherConfig->get('foo'));
printnl($anotherConfig->get('bar'));

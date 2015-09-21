<?php

include_once '../../../autoload.php';

use Impl\Creational\LazyInitialization\ServiceProvider;


$provider = new ServiceProvider();

$user = $provider->get('user');
$stripe = $provider->get('stripe');

var_dump($user);
var_dump($stripe);
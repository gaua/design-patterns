<?php declare(strict_types = 1);

include_once "../../../autoload.php";

use Impl\Behavioral\Observer\UserRegistration;
use Impl\Behavioral\Observer\UserRepository;
use Impl\Behavioral\Observer\UserRegistrationEmailSender;
use Impl\Behavioral\Observer\UserRegistrationLogger;


$userRegistration = new UserRegistration(new UserRepository());

$userRegistration->attach(new UserRegistrationLogger());
$userRegistration->attach(new UserRegistrationEmailSender());

$user = ['username' => 'Hans'];

$userRegistration->register($user);
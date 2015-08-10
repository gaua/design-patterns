<?php

include_once '../../autoload.php';

use Impl\AbstractFactory\ArrayFormatFactory;
use Impl\AbstractFactory\JSONFormatFactory;

$arraySource = ['red', 'green', 'blue'];
$jsonSource = '{"1":"red","2":"green","3":"blue"}';

$arrayFormatReader = (new ArrayFormatFactory())->createFormatReader($arraySource);
$jsonFormatReader = (new JSONFormatFactory())->createFormatReader($jsonSource);

$arrayFormatReader->read();
$jsonFormatReader->read();

printnl($arrayFormatReader->getResults());
printnl($jsonFormatReader->getResults());
<?php

include_once '../../../autoload.php';

use Impl\Creational\AbstractFactory\ArrayFormatFactory;
use Impl\Creational\AbstractFactory\JSONFormatFactory;

$arrayFormatFactory = new ArrayFormatFactory();
$jsonFormatFactory = new JSONFormatFactory();

$arraySource = ['red', 'green', 'blue'];
$jsonSource = '{"1":"red","2":"green","3":"blue"}';


$arrayFormatReader = $arrayFormatFactory->createFormatReader($arraySource);
$jsonFormatReader = $jsonFormatFactory->createFormatReader($jsonSource);

$arrayFormatReader->read();
$jsonFormatReader->read();

printbr($arrayFormatReader->getResults());
printbr($jsonFormatReader->getResults());


$arrayFormatWriter = $arrayFormatFactory->createFormatWriter();
$jsonFormatWriter = $jsonFormatFactory->createFormatWriter();

$arrayFormatWriter->write('red green blue');
$jsonFormatWriter->write('red green blue');

print_r($arrayFormatWriter->getResults());
printbr('');
print_r($jsonFormatWriter->getResults());

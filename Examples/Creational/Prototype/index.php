<?php

include_once '../../../autoload.php';

use Impl\Creational\Prototype\FormatFactory;
use Impl\Creational\Prototype\ArrayFormatReader;
use Impl\Creational\Prototype\ArrayFormatWriter;


$arraySource = ['red', 'green', 'blue'];

$formatFactory = new FormatFactory(
    new ArrayFormatReader($arraySource),
    new ArrayFormatWriter()
);


$arrayFormatReader = $formatFactory->getFormatReader();

$arrayFormatReader->read();

printbr($arrayFormatReader->getResults());

$arrayFormatWriter = $formatFactory->getFormatWriter();

$arrayFormatWriter->write('red green blue');

print_r($arrayFormatWriter->getResults());

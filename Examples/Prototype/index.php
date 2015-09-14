<?php

use Impl\Prototype\FormatFactory;
use Impl\Prototype\ArrayFormatReader;
use Impl\Prototype\ArrayFormatWriter;

include_once '../../autoload.php';

$arraySource = ['red', 'green', 'blue'];

$formatFactory = new FormatFactory(
    new ArrayFormatReader($arraySource),
    new ArrayFormatWriter()
);


$arrayFormatReader = $formatFactory->getFormatReader();

$arrayFormatReader->read();

printnl($arrayFormatReader->getResults());

$arrayFormatWriter = $formatFactory->getFormatWriter();

$arrayFormatWriter->write('red green blue');

print_r($arrayFormatWriter->getResults());

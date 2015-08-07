<?php

include_once '../../autoload.php';

use Impl\FactoryMethod\ArrayConverter;


$source = [
    [
        'id' => 1,
        'name' => 'John Snow'
    ],
    [
        'id' => 2,
        'name' => 'Ned Stark'
    ]
];

$arrayConverter = new ArrayConverter($source);

printnl($arrayConverter->convert());
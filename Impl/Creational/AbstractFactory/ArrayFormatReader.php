<?php

namespace Impl\Creational\AbstractFactory;

/**
 * Class ArrayFormatReader
 * @package Impl\AbstractFactory
 */
class ArrayFormatReader extends FormatReader
{
    public function read()
    {
        foreach ($this->source as $color) {
            $this->results .= $color . PHP_EOL;
        }
    }
}

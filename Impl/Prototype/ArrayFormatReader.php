<?php

namespace Impl\Prototype;

/**
 * Class ArrayFormatReader
 * @package Impl\Prototype
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

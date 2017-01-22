<?php declare(strict_types = 1);

namespace Impl\Creational\AbstractFactory;

class ArrayFormatReader extends FormatReader
{
    public function read() : void
    {
        foreach ($this->source as $color) {
            $this->results .= $color . PHP_EOL;
        }
    }
}

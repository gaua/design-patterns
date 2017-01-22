<?php declare(strict_types = 1);

namespace Impl\Creational\AbstractFactory;

class JSONFormatReader extends FormatReader
{
    public function read() : void
    {
        $colors = json_decode($this->source);

        foreach ($colors as $color) {
            $this->results .= $color . PHP_EOL;
        }
    }
}

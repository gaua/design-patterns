<?php

namespace Impl\Prototype;

/**
 * Class JSONFormatReader
 * @package Impl\Prototype
 */
class JSONFormatReader extends FormatReader
{

    public function read()
    {
        $colors = json_decode($this->source);

        foreach ($colors as $color) {
            $this->results .= $color . PHP_EOL;
        }
    }
}

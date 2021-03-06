<?php declare(strict_types = 1);

namespace Impl\Creational\Prototype;

class ArrayFormatWriter extends FormatWriter
{
    public function write(string $data) : void
    {
        $colors = explode(' ', $data);

        $this->results = $colors;
    }
}

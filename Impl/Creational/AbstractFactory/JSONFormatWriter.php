<?php declare(strict_types = 1);

namespace Impl\Creational\AbstractFactory;

class JSONFormatWriter extends FormatWriter
{
    public function write(string $data) : void
    {
        $colors = explode(' ', $data);

        $this->results = json_encode($colors);
    }
}

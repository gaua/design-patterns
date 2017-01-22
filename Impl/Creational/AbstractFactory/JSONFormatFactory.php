<?php declare(strict_types = 1);

namespace Impl\Creational\AbstractFactory;

class JSONFormatFactory implements FormatFactory
{
    public function createFormatReader($source) : FormatReader
    {
        return new JSONFormatReader($source);
    }

    public function createFormatWriter() : FormatWriter
    {
        return new JSONFormatWriter();
    }
}

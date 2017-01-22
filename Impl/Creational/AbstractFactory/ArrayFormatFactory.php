<?php declare(strict_types = 1);

namespace Impl\Creational\AbstractFactory;

class ArrayFormatFactory implements FormatFactory
{
    /**
     * @throws \Exception
     */
    public function createFormatReader($source) : FormatReader
    {
        if (!is_array($source)) {
            throw new \Exception('$source must be an array!');
        }

        return new ArrayFormatReader($source);
    }

    public function createFormatWriter() : FormatWriter
    {
        return new ArrayFormatWriter();
    }
}

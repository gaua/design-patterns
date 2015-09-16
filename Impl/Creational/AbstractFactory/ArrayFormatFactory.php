<?php

namespace Impl\Creational\AbstractFactory;

/**
 * Class ArrayFormatFactory
 * @package Impl\AbstractFactory
 */
class ArrayFormatFactory implements FormatFactory
{
    /**
     * @param $source
     * @return ArrayFormatReader
     * @throws \Exception
     */
    public function createFormatReader($source)
    {
        if (!is_array($source)) {
            throw new \Exception('$source must be an array!');
        }

        return new ArrayFormatReader($source);
    }

    /**
     * @return JSONFormatWriter
     */
    public function createFormatWriter()
    {
        return new ArrayFormatWriter();
    }
}

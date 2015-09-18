<?php

namespace Impl\Creational\AbstractFactory;

/**
 * Class JSONFormatFactory
 * @package Impl\AbstractFactory
 */
class JSONFormatFactory implements FormatFactory
{
    /**
     * @param $source
     * @return JSONFormatReader
     */
    public function createFormatReader($source)
    {
        return new JSONFormatReader($source);
    }

    /**
     * @return JSONFormatWriter
     */
    public function createFormatWriter()
    {
        return new JSONFormatWriter();
    }
}
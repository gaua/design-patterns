<?php

namespace Impl\AbstractFactory;

/**
 * Class ArrayFormatFactory
 * @package Impl\AbstractFactory
 */
class ArrayFormatFactory extends FormatFactory
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
     * @return FormatWriter
     */
    public function createFormatWriter()
    {
        // TODO: Implement createFormatWriter() method.
    }
}

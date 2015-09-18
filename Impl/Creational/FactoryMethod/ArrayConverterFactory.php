<?php

namespace Impl\Creational\FactoryMethod;

/**
 * Class ArrayConverterFactory
 * @package Impl\FactoryMethod
 */
class ArrayConverterFactory implements  ConverterFactory
{
    /**
     * @param $source
     * @return ArrayConverter
     * @throws \Exception
     */
    public function createConverter($source)
    {
        if (!is_array($source)) {
            throw new \Exception('source is not an array!');
        }
        return new ArrayConverter($source);
    }
}
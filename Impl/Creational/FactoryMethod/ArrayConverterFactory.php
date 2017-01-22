<?php declare(strict_types = 1);

namespace Impl\Creational\FactoryMethod;

class ArrayConverterFactory implements  ConverterFactory
{
    public function createConverter(array $source) : ArrayConverter
    {
        return new ArrayConverter($source);
    }
}

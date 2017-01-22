<?php declare(strict_types = 1);

namespace Impl\Creational\FactoryMethod;

interface ConverterFactory
{
    public function createConverter(array $source) : ArrayConverter;
}

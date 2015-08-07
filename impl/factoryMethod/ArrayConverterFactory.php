<?php

namespace Impl\FactoryMethod;

class ArrayConverterFactory extends ConverterFactory
{
    /**
     * @param $source
     * @return \Impl\FactoryMethod\ArrayConverter
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

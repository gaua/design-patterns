<?php

namespace Impl\FactoryMethod;

/**
 * Class ConverterFactory
 * @package Impl\FactoryMethod
 */
abstract class ConverterFactory
{
    /**
     * @param $source
     * @return mixed
     */
    abstract public function createConverter($source);
}

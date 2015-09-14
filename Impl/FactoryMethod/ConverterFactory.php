<?php

namespace Impl\FactoryMethod;

/**
 * Class ConverterFactory
 * @package Impl\FactoryMethod
 */
interface ConverterFactory
{
    /**
     * @param $source
     * @return mixed
     */
    public function createConverter($source);
}

<?php

namespace Impl\FactoryMethod;

/**
 * Class Manager
 * @package Impl\FactoryMethod
 */
abstract class Manager
{
    /**
     * @return Product
     */
    abstract public function createProduct();

    /**
     * @return string
     */
    abstract public function describeProduct();
}

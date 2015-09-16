<?php

namespace Impl\Creational\FactoryMethod;

/**
 * Class Converter
 * @package Impl\FactoryMethod
 */
abstract class Converter
{
    /**
     * @var mixed
     */
    protected $source;

    /**
     * @param mixed $source
     */
    public function __construct($source)
    {
        $this->source = $source;
    }

    /**
     * @return string
     */
    abstract public function convert();
}

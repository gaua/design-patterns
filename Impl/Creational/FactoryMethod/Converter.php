<?php declare(strict_types = 1);

namespace Impl\Creational\FactoryMethod;

abstract class Converter
{
    protected $source;

    public function __construct($source)
    {
        $this->source = $source;
    }

    abstract public function convert() : string;
}

<?php

namespace Impl\AbstractFactory;

/**
 * Class FormatReader
 * @package Impl\AbstractFactory
 */
abstract class FormatReader
{
    /**
     * @var mixed
     */
    protected $source;

    /**
     * @var string
     */
    protected $results;
    /**
     * @param mixed $source
     */
    public function __construct($source)
    {
        $this->source = $source;
    }

    abstract public function read();

    /**
     * @return string
     */
    public function getResults()
    {
        return $this->results;
    }
}

<?php

namespace Impl\Creational\AbstractFactory;

/**
 * Class FormatWriter
 * @package Impl\AbstractFactory
 */
abstract class FormatWriter
{
    /**
     * @var mixed
     */
    protected $results;

    /**
     * @param string $data
     */
    abstract public function write($data);

    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }
}

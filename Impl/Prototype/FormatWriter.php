<?php

namespace Impl\Prototype;

/**
 * Class FormatWriter
 * @package Impl\Prototype
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

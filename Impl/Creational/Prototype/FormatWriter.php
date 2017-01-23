<?php declare(strict_types = 1);

namespace Impl\Creational\Prototype;

abstract class FormatWriter
{
    /**
     * @var mixed
     */
    protected $results;

    abstract public function write(string $data) : void;

    public function getResults()
    {
        return $this->results;
    }
}

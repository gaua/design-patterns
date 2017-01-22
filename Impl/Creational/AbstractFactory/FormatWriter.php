<?php declare(strict_types = 1);

namespace Impl\Creational\AbstractFactory;

abstract class FormatWriter
{
    protected $results;

    abstract public function write(string $data) : void;

    public function getResults()
    {
        return $this->results;
    }
}

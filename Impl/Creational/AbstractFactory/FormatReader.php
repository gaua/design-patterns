<?php declare(strict_types = 1);

namespace Impl\Creational\AbstractFactory;

abstract class FormatReader
{
    protected $source;

    /**
     * @var string
     */
    protected $results;

    public function __construct($source)
    {
        $this->source = $source;
    }

    abstract public function read() : void;

    public function getResults() : string
    {
        return $this->results;
    }
}

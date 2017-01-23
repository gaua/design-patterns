<?php declare(strict_types = 1);

namespace Impl\Creational\Prototype;

class FormatFactory
{
    /**
     * @var FormatReader
     */
    protected $formatReader;

    /**
     * @var FormatWriter
     */
    protected $formatWriter;

    public function __construct(FormatReader $formatReader, FormatWriter $formatWriter)
    {
        $this->formatReader = $formatReader;
        $this->formatWriter = $formatWriter;
    }

    public function getFormatReader() : FormatReader
    {
        return clone $this->formatReader;
    }

    public function getFormatWriter() : FormatWriter
    {
        return clone $this->formatWriter;
    }
}

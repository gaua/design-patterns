<?php

namespace Impl\Creational\Prototype;

/**
 * Class FormatFactory
 * @package Impl\Prototype
 */
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

    /**
     * FormatFactory constructor.
     * @param FormatReader $formatReader
     * @param FormatWriter $formatWriter
     */
    public function __construct(FormatReader $formatReader, FormatWriter $formatWriter)
    {
        $this->formatReader = $formatReader;
        $this->formatWriter = $formatWriter;
    }

    /**
     * @return FormatReader
     */
    public function getFormatReader()
    {
        return clone $this->formatReader;
    }

    /**
     * @return FormatWriter
     */
    public function getFormatWriter()
    {
        return clone $this->formatWriter;
    }
}

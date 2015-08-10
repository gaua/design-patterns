<?php

namespace Impl\AbstractFactory;

abstract class FormatFactory
{
    /**
     * @param $source
     * @return FormatReader
     */
    abstract public function createFormatReader($source);

    /**
     * @return FormatWriter
     */
    abstract public function createFormatWriter();
}
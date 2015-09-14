<?php

namespace Impl\AbstractFactory;

/**
 * Interface FormatFactory
 * @package Impl\AbstractFactory
 */
interface FormatFactory
{
    /**
     * @param $source
     * @return FormatReader
     */
    public function createFormatReader($source);

    /**
     * @return FormatWriter
     */
    public function createFormatWriter();
}
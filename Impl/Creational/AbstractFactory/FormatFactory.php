<?php declare(strict_types = 1);

namespace Impl\Creational\AbstractFactory;

interface FormatFactory
{
    public function createFormatReader($source) : FormatReader;

    public function createFormatWriter() : FormatWriter;
}
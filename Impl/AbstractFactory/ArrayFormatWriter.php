<?php

namespace Impl\AbstractFactory;

/**
 * Class ArrayFormatWriter
 * @package Impl\AbstractFactory
 */
class ArrayFormatWriter extends FormatWriter
{
    /**
     * @param string $data
     */
    public function write($data)
    {
        $colors = explode(' ', $data);

        $this->results = $colors;
    }
}

<?php declare(strict_types = 1);

namespace Impl\Structural\Adapter;

class FunctionsFileAdapter implements FileAdapter
{
    protected $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function print(): string
    {
        return file_get_contents($this->fileName);
    }
}
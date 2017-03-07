<?php declare(strict_types = 1);

namespace Impl\Structural\Adapter;

class FileHandler
{
    protected $fileAdapter;

    public function __construct(FileAdapter $fileAdapter)
    {
        $this->fileAdapter = $fileAdapter;
    }

    public function showContent(): string
    {
        return $this->fileAdapter->print();
    }
}
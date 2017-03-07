<?php declare(strict_types = 1);

namespace Impl\Structural\Adapter;

class SplFileAdapter implements FileAdapter
{
    protected $fileName;

    protected $file;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->file = new \SplFileObject($this->fileName);
    }

    public function print(): string
    {
        $content = '';
        while (!$this->file->eof()) {
            $content .= $this->file->fgets();
        }

        return $content;
    }
}
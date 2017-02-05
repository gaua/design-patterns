<?php declare(strict_types = 1);

namespace Impl\Structural\Decorator;

class Item
{
    /** @var int */
    public $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
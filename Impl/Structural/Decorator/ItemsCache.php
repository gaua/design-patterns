<?php declare(strict_types = 1);

namespace Impl\Structural\Decorator;

class ItemsCache
{
    /** @var Item[] */
    private $items = [];

    public function has(int $id) : bool
    {
        return array_key_exists($id, $this->items);
    }

    public function get(int $id) : Item
    {
        return $this->items[$id];
    }

    public function set(int $id, Item $item) : void
    {
        $this->items[$id] = $item;
    }
}
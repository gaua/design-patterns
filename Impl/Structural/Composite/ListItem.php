<?php declare(strict_types = 1);

namespace Impl\Structural\Composite;

class ListItem extends Item
{
    protected $items = [];

    public function add(Item $item): void
    {
        if($this->getDueDate() || (!$this->getDueDate() && !$item->getDueDate())) {
            $item->setDueDate($this->getDueDate());
        }

        $this->items[] = $item;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getComposite(): ?ToDo
    {
        return $this;
    }
}
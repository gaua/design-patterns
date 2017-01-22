<?php declare(strict_types = 1);

namespace Impl\Behavioral\Iterator;

class Collection implements \IteratorAggregate
{
    /**
     * @var []
     */
    private $items = [];

    public function getIterator() : \Iterator
    {
        return new CollectionIterator($this);
    }

    public function get(int $position)
    {
        return $this->items[$position] ?? null;
    }

    public function add($element) : void
    {
        $this->items[] = $element;
    }

    public function addSequence(iterable $sequence) : void
    {
        foreach ($sequence as $item) {
            $this->add($item);
        }
    }

    public function clear() : void
    {
        $this->items = [];
    }
}
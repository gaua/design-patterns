<?php declare(strict_types = 1);

namespace Impl\Behavioral\Iterator;

class CollectionIterator implements \Iterator
{
    /**
     * @var int
     */
    private $position;

    /**
     * @var Collection
     */
    private $collection;

    public function __construct(Collection $collection)
    {
        $this->position = 0;
        $this->collection = $collection;
    }

    public function current()
    {
        return $this->collection->get($this->position);
    }

    public function next() : void
    {
        $this->position++;
    }

    public function key() : int
    {
        return $this->position;
    }

    public function valid() : bool
    {
        return !is_null($this->collection->get($this->position));
    }

    public function rewind() : void
    {
        $this->position = 0;
    }
}
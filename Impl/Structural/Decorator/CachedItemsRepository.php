<?php declare(strict_types = 1);

namespace Impl\Structural\Decorator;

class CachedItemsRepository implements ItemsRepository
{
    /** @var SlowItemsRepository */
    private $slowItemsRepository;

    /** @var ItemsCache */
    private $cache;

    public function __construct(SlowItemsRepository $slowItemsRepository, ItemsCache $cache)
    {
        $this->slowItemsRepository = $slowItemsRepository;
        $this->cache = $cache;
    }

    public function find(int $id): Item
    {
        if ($this->cache->has($id)) {
            printbr('Item #' . $id . 'fetched from fast cache');

            return $this->cache->get($id);
        }

        $item = $this->slowItemsRepository->find($id);
        $this->cache->set($id, $item);

        printbr('Item #' . $id . 'fetched from slow database');

        return $item;
    }
}


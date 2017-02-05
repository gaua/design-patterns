<?php declare(strict_types = 1);

namespace Impl\Structural\Decorator;

class SlowItemsRepository implements ItemsRepository
{
    const EXECUTION_TIME = 1;

    public function find(int $id): Item
    {
        $this->expensiveOperation();

        return new Item($id);
    }

    private function expensiveOperation() : void
    {
        sleep(self::EXECUTION_TIME);
    }
}
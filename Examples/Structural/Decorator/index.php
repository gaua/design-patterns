<?php declare(strict_types = 1);

include_once '../../../autoload.php';

use Impl\Structural\Decorator\CachedItemsRepository;
use Impl\Structural\Decorator\SlowItemsRepository;
use Impl\Structural\Decorator\ItemsCache;

$itemsRepository = new CachedItemsRepository(new SlowItemsRepository(), new ItemsCache());

$item = $itemsRepository->find(1);
$item = $itemsRepository->find(1);

$item = $itemsRepository->find(2);
$item = $itemsRepository->find(2);
$item = $itemsRepository->find(2);

$item = $itemsRepository->find(3);

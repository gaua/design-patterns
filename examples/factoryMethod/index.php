<?php

include_once '../../autoload.php';

use Impl\FactoryMethod\BooksManager;


$booksManager = new BooksManager();

$book = $booksManager->createProduct();
$book->setIsbn('1234-AS-4321');

printnl($booksManager->describeProduct());

$cdsManager = new \Impl\FactoryMethod\CDsManager();

$cd = $cdsManager->createProduct();
$cd->setTitle('Symbolic');

printnl($cdsManager->describeProduct());

<?php

require_once 'bootstrap.php';

$id = $argv[1];

$product = $entityManager->find(App\Product::class, $id);

if (null === $product) {
    echo "Product was not found";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());
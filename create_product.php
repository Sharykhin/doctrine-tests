<?php
// create_product.php
require_once "bootstrap.php";

$newProductName = $argv[1];

$product = new App\Product();
$product->setName($newProductName);

$product2 = new App\Product();
$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
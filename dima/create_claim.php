<?php

require_once __DIR__ . "/../bootstrap_dima.php";

$claim = new \Dima\Claim();
$claim->setTitle('title 1');

$field = $entityManager->find("Dima\\Field", 2);
$claim->addField($field);
$entityManager->persist($claim);
$entityManager->flush();

echo "Your new claim Id: ". $field->getId() ."\n";
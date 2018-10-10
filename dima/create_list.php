<?php

require_once __DIR__ . "/../bootstrap_dima.php";

$field = new \Dima\Field();
$field->setTitle('title 1');
$field->setName('text');
$field->setHideField(false);
$field->setDeleteField(false);

$list = new \Dima\SelectList();
$list->setEngineer($field);
$list->setValue('1');

$list2 = new \Dima\SelectList();
$list2->setEngineer($field);
$list2->setValue('2');


$entityManager->persist($field);
$entityManager->persist($list);
$entityManager->persist($list2);
$entityManager->flush();

echo "Your new field Id: ". $field->getId() ."\n";
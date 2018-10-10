<?php

require_once "bootstrap.php";

$name = 'text';
$title = 'user name';

$field = new App\Field();

$type = $entityManager->find(App\FieldType::class, 1);

$field->setName($name);
$field->setTeg(123);
$field->setTitle($title);
$field->setHideField(false);
$field->setDeleteField(false);
$field->setType($type);

$entityManager->persist($field);
$entityManager->flush();
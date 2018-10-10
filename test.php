<?php

require_once 'bootstrap.php';

$dql = "SELECT COUNT(u.id) as numBugs, u FROM App\User u JOIN u.reportedBugs b GROUP BY u.id";

$query = $entityManager->createQuery($dql);
$users = $query->getScalarResult();

var_dump($users);
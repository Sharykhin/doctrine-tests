<?php

require_once "bootstrap.php";

$theBugId = $argv[1];

$bug = $entityManager->find("App\\Bug", (int)$theBugId);
$bug->close();

$entityManager->flush();


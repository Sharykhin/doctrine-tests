<?php

require_once __DIR__ . "/../bootstrap_dima.php";

/** @var \Dima\Claim $claim */
$claim = $entityManager->find("Dima\\Claim", 1);
\Doctrine\Common\Util\Debug::dump($claim->getFields());
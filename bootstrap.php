<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'foo',
    'host' => '127.0.0.1'
);

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
$config->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());

$entityManager = EntityManager::create($dbParams, $config);
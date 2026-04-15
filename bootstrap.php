<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__ . "/src"),
    isDevMode: true,
);
$connectionParams = array(
    "dbname" => "student",
    "user" => "root",
    "password" => "root",
    "host" => "localhost",
    "driver" => "pdo_mysql",
    "charset" => "utf8",
    "port" => 8889
);
$connection = DriverManager::getConnection($connectionParams, $config);
$entityManager = new EntityManager($connection, $config);

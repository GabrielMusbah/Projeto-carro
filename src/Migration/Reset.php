<?php

// use PDO;

require __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable( __DIR__ . '/../../' ); 
$dotenv->load();

$connection = new PDO("{$_ENV['DB_PATH']}:host={$_ENV['HOST']};port={$_ENV['PORT']};dbname={$_ENV['DBNAME']}", "{$_ENV['USER_NAME']}", "{$_ENV['PASSWORD']}");

$sqlReset = "TRUNCATE usuario, marca, compra, carro
RESTART IDENTITY;";

$reset = $connection->exec($sqlReset);

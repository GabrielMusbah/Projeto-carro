<?php

// use PDO;

require __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable( __DIR__ . '/../../' ); 
$dotenv->load();

$connection = new PDO("{$_ENV['DB_PATH']}:host={$_ENV['HOST']};port={$_ENV['PORT']};dbname={$_ENV['DBNAME']}", "{$_ENV['USER_NAME']}", "{$_ENV['PASSWORD']}");

$password = password_hash($argv[3], PASSWORD_ARGON2I);

$sqlReset = "INSERT INTO usuario (usuario_name, email, password, adm) VALUES (:usuario_name, :email, :password, :adm)";

$stmt = $connection->prepare($sqlReset);

$stmt->execute([
    ':usuario_name' => $argv[1],
    ':email' => $argv[2],
    ':password' => $password,
    ':adm' => true
]);



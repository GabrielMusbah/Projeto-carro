<?php

namespace Plantae\Projeto\Config;

use PDO;

require __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable( __DIR__ . '/../../' ); 
$dotenv->load();

class DataBase
{
    public static function createConnection(): PDO
    {
        $connection = new PDO("{$_ENV['PATH']}:host={$_ENV['HOST']};port={$_ENV['PORT']};dbname={$_ENV['DBNAME']}", "{$_ENV['USER']}", "{$_ENV['PASSWORD']}");

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}

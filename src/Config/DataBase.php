<?php

namespace Plantae\Projeto\Config;

use PDO;

class DataBase
{
    public static function createConnection(): PDO
    {
        $connection = new PDO("{$_ENV['DB_PATH']}:host={$_ENV['HOST']};port={$_ENV['PORT']};dbname={$_ENV['DBNAME']}", "{$_ENV['USER_NAME']}", "{$_ENV['PASSWORD']}");

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}
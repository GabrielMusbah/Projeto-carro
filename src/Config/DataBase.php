<?php

namespace Plantae\Projeto\Config;

use PDO;

class DataBase
{
    public static function createConnection(): PDO
    {
        $connection = new PDO("pgsql:host=localhost;port=5432;dbname=TesteCarro", "postgres", "123");

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}
